<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SystemSetting;
use App\Models\WithdrawList;
use App\Models\RechargeList;
use App\Models\RechargeRequest;
use App\Models\Member;

class TradeController extends Controller
{
    public function withdraw()
    {
        $data['query'] = SystemSetting::first();
        $data['withdrawals'] = WithdrawList::orderBy('id', 'DESC')->get()->toArray();
        return view('admin.withdraw', $data);
    }

    public function withdrawUpdate(Request $request)
    {
        $id = $request->input('id');
        $oprate = $request->input('oprate');
        WithdrawList::where('id', $id)->update(['oprate' => $oprate]);
        return response()->json(['status' => 'success']);
    }

    public function recharge()
    {
        $data['query'] = SystemSetting::first();
        $data['recharges'] = RechargeRequest::orderBy('id', 'DESC')->get()->toArray();
        return view('admin.rechargedList', $data);
    }

    public function rechargeUpdate(Request $request)
    {
        $id = $request->input('id');
        $status = $request->input('status');
        $rechargeRequest = RechargeRequest::find($id);

        if ($rechargeRequest && $status == '2') {
            $member = Member::find($rechargeRequest->user_id);
            if ($member) {
                $newBalance = $member->balance + $rechargeRequest->amount;
                Member::where('id', $member->id)->update(['balance' => $newBalance]);

                RechargeList::create([
                    'userId' => $member->id,
                    'username' => $member->username,
                    'orderAmout' => $rechargeRequest->amount,
                    'created_at' => time(),
                ]);
            }
        }

        RechargeRequest::where('id', $id)->update(['status' => $status]);
        return response()->json(['status' => 'success']);
    }
}
