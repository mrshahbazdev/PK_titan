<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SystemSetting;
use App\Models\Member;
use App\Models\MemberLevel;
use App\Models\UserBankInfo;
use App\Models\ContinuousOrder;
use App\Models\Referral;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class MemberController extends Controller
{
    public function list(Request $request)
    {
        $data['query'] = SystemSetting::first();
        $limit = 20;
        $page = $request->query('page', 1);
        $offset = ($page - 1) * $limit;

        $search = $request->query('search', '');
        $searchType = $request->query('searchType', '');

        if ($search && $searchType == 'username') {
            $data['members'] = Member::where('username', $search)
                ->where('memberAgent', '0')
                ->orderBy('id', 'DESC')->get()->toArray();
            $data['total'] = count($data['members']);
        } elseif ($search && $searchType == 'phone') {
            $data['members'] = Member::where('phN', 'like', '%' . $search . '%')
                ->where('memberAgent', '0')
                ->orderBy('id', 'DESC')->get()->toArray();
            $data['total'] = count($data['members']);
        } else {
            $data['total'] = Member::where('memberAgent', '0')->count();
            $data['members'] = Member::where('memberAgent', '0')
                ->orderBy('id', 'DESC')
                ->skip($offset)->take($limit)->get()->toArray();
        }

        $data['limit'] = $limit;
        $data['page'] = $page;
        $data['levels'] = MemberLevel::all()->toArray();
        return view('admin.memberList', $data);
    }

    public function getMemberData($userId)
    {
        $data = MemberLevel::where('level', $userId)->get()->toArray();
        return response()->json($data);
    }

    public function updateMemberStatus(Request $request)
    {
        $data = $request->all();
        $id = $data['id'];
        unset($data['id'], $data['_token']);
        Member::where('id', $id)->update($data);
        return response()->json(['status' => 'success']);
    }

    public function updateMember(Request $request)
    {
        $data = $request->all();
        $id = $data['id'];
        unset($data['id'], $data['_token']);
        Member::where('id', $id)->update($data);
        return response()->json(['status' => 'success']);
    }

    public function grade()
    {
        $data['query'] = SystemSetting::first();
        $data['grades'] = MemberLevel::orderBy('id', 'ASC')->get()->toArray();
        return view('admin.grade', $data);
    }

    public function updateGrade(Request $request)
    {
        $data = $request->all();
        $id = $data['id'];
        unset($data['id'], $data['_token']);
        MemberLevel::where('id', $id)->update($data);
        return response()->json(['status' => 'success']);
    }

    public function deleteGrade(Request $request)
    {
        $gradeId = $request->input('gradeId');
        MemberLevel::where('id', $gradeId)->delete();
        return response('Grade deleted');
    }

    public function bank($userId)
    {
        $data['query'] = SystemSetting::first();
        $data['bank'] = UserBankInfo::where('userId', $userId)->first();
        $data['user'] = Member::find($userId);
        return view('admin.agent', $data);
    }

    public function bankUpdate(Request $request)
    {
        $userId = $request->input('userId');
        $bankData = [
            'name' => $request->input('name'),
            'cardNumber' => $request->input('cardNumber'),
            'bankName' => $request->input('bankName'),
            'phoneNumber' => $request->input('phoneNumber'),
        ];

        $existing = UserBankInfo::where('userId', $userId)->first();
        if ($existing) {
            UserBankInfo::where('userId', $userId)->update($bankData);
        } else {
            $bankData['userId'] = $userId;
            UserBankInfo::create($bankData);
        }

        return redirect('/admin/member/bank/' . $userId)->with('success', 'Bank info updated');
    }

    public function balanceUp(Request $request)
    {
        $id = $request->input('id');
        $balance = $request->input('balance');
        $member = Member::find($id);
        $newBalance = $member->balance + $balance;

        \App\Models\RechargeList::create([
            'userId' => $member->id,
            'username' => $member->username,
            'orderAmout' => $balance,
            'created_at' => time(),
        ]);

        Member::where('id', $id)->update(['balance' => $newBalance]);
        return response()->json(['status' => 'success']);
    }

    public function balanceDown(Request $request)
    {
        $id = $request->input('id');
        $balance = $request->input('balance');
        $member = Member::find($id);
        $newBalance = $member->balance - $balance;

        \App\Models\RechargeList::create([
            'userId' => $member->id,
            'username' => $member->username,
            'orderAmout' => -(float)$balance,
            'created_at' => time(),
        ]);

        Member::where('id', $id)->update(['balance' => $newBalance]);
        return response()->json(['status' => 'success']);
    }

    public function agent(Request $request)
    {
        $data['query'] = SystemSetting::first();
        $search = $request->query('search', '');
        $searchType = $request->query('searchType', '');

        if ($search && $searchType == 'username') {
            $data['agents'] = Member::where('username', $search)
                ->where('memberAgent', '1')
                ->orderBy('id', 'DESC')->get()->toArray();
        } elseif ($search && $searchType == 'phone') {
            $data['agents'] = Member::where('phN', $search)
                ->where('memberAgent', '1')
                ->orderBy('id', 'DESC')->get()->toArray();
        } else {
            $data['agents'] = Member::where('memberAgent', '1')
                ->orderBy('id', 'DESC')->get()->toArray();
        }

        $data['levels'] = MemberLevel::all()->toArray();
        return view('admin.agent', $data);
    }

    public function addMember(Request $request)
    {
        $request->validate([
            'newbalance' => 'required',
            'newnumber' => 'required',
            'newpassword' => 'required',
            'newpaymentpass' => 'required',
        ]);

        $username = $request->input('newusername');
        $password = md5($request->input('newpassword'));
        $phoneNumber = $request->input('newnumber');
        $balance = $request->input('newbalance');
        $levels = $request->input('newlevel', 1);
        $invitationCode = $request->input('newinvitecode', '');
        $paymentPassword = md5($request->input('newpaymentpass'));
        $neworder = $request->input('neworder', 1);
        $newwithdraw = $request->input('newwithdraw', 1);

        $existingUser = Member::where('username', $username)->first();
        if ($existingUser) {
            return back()->with('error', 'Username already exists');
        }

        $uniqueCode = self::generateUniqueCode();
        $qrPath = 'assets/qrcode/';
        if (!file_exists(public_path($qrPath))) {
            mkdir(public_path($qrPath), 0777, true);
        }
        $qrImage = $qrPath . $uniqueCode . '.png';
        $text = url('/') . '?code=' . $uniqueCode;

        try {
            $qrCodeObj = new QrCode($text);
            $writer = new PngWriter();
            $result = $writer->write($qrCodeObj);
            $result->saveToFile(public_path($qrImage));
        } catch (\Exception $e) {
            // QR code generation failed silently
        }

        $level = MemberLevel::first();
        $member = Member::create([
            'qrImage' => $qrImage,
            'username' => $username,
            'email' => 'null',
            'password' => $password,
            'phN' => $phoneNumber,
            'balance' => $balance,
            'avalibleDailyOrders' => $level->orderReciveLimit ?? 0,
            'takeTodayOrders' => 0,
            'todaycommission' => 0,
            'credibility' => 100,
            'inviteCode' => $invitationCode,
            'myCode' => $uniqueCode,
            'status' => 1,
            'memberLevel' => $levels,
            'frozenAmout' => 0,
            'grabOrder' => $level->ordersGrabbed ?? 0,
            'registrationTime' => time(),
            'lastLongInTime' => time(),
            'orderStatus' => $neworder,
            'withdrawalStatus' => $newwithdraw,
            'paymentPassword' => $paymentPassword,
            'memberAgent' => 1,
            'taskStatus' => 0,
        ]);

        if ($invitationCode) {
            $referrer = Member::where('myCode', $invitationCode)->first();
            if ($referrer) {
                Referral::create([
                    'referrer_id' => $referrer->id,
                    'referred_id' => $member->id,
                ]);
            }
        }

        return back()->with('success', 'Member Added Successfully');
    }

    public function continuousOrder()
    {
        $data['query'] = SystemSetting::first();
        $data['orders'] = ContinuousOrder::orderBy('id', 'DESC')->get()->toArray();
        return view('admin.continuousOrder', $data);
    }

    private static function generateUniqueCode()
    {
        do {
            $code = strtoupper(substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 6));
        } while (Member::where('myCode', $code)->exists());

        return $code;
    }
}
