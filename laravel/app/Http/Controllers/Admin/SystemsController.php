<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SystemSetting;
use App\Models\SystemUser;
use App\Models\AddRole;
use App\Models\CustomerService;

class SystemsController extends Controller
{
    public function setting()
    {
        $data['query'] = SystemSetting::first();
        $data['settings'] = SystemSetting::all()->toArray();
        return view('admin.setting', $data);
    }

    public function settingUpdate(Request $request)
    {
        $request->validate([
            'siteTitle' => 'required',
        ]);

        $data = $request->only([
            'siteTitle', 'siteLogo', 'siteUrl', 'minWithdrawal', 'maxWithdrawal',
            'withdrawalTimes', 'minRecharge', 'maxRecharge', 'rechargeTimes'
        ]);

        $settings = SystemSetting::first();
        if ($settings) {
            SystemSetting::where('id', $settings->id)->update($data);
        }

        return redirect('/admin/systems/setting')->with('success', 'Settings Updated');
    }

    public function roles()
    {
        $data['query'] = SystemSetting::first();
        $data['roles'] = AddRole::orderBy('id', 'DESC')->get()->toArray();
        return view('admin.addRole', $data);
    }

    public function addRole(Request $request)
    {
        $request->validate([
            'roleName' => 'required',
        ]);

        AddRole::create([
            'roleName' => $request->input('roleName'),
            'memberManagement' => $request->input('memberManagement', 0),
            'systemManagement' => $request->input('systemManagement', 0),
            'transactionManagement' => $request->input('transactionManagement', 0),
            'shoppingMallManagement' => $request->input('shoppingMallManagement', 0),
        ]);

        return redirect('/admin/systems/roles')->with('success', 'Role Added');
    }

    public function getRoleData($id)
    {
        $data = AddRole::find($id);
        return response()->json($data);
    }

    public function updateRole(Request $request)
    {
        $data = $request->all();
        $id = $data['id'];
        unset($data['id'], $data['_token']);
        AddRole::where('id', $id)->update($data);
        return response()->json(['status' => 'success', 'message' => 'Role updated successfully']);
    }

    public function deleteRole(Request $request)
    {
        $userId = $request->input('userId');
        AddRole::where('id', $userId)->delete();
        return response('Role deleted successfully');
    }

    public function users()
    {
        $data['query'] = SystemSetting::first();
        $data['roles'] = AddRole::orderBy('id', 'DESC')->get()->toArray();
        $data['users'] = SystemUser::orderBy('id', 'DESC')->get()->toArray();
        return view('admin.users', $data);
    }

    public function addUser(Request $request)
    {
        $request->validate([
            'userName' => 'required',
            'password' => 'required|min:6',
            'roleName' => 'required',
        ]);

        $role = AddRole::where('roleName', $request->input('roleName'))->first();

        SystemUser::create([
            'userName' => $request->input('userName'),
            'password' => md5($request->input('password')),
            'roleName' => $request->input('roleName'),
            'memberManagement' => $role->memberManagement ?? 0,
            'systemManagement' => $role->systemManagement ?? 0,
            'transactionManagement' => $role->transactionManagement ?? 0,
            'shoppingMallManagement' => $role->shoppingMallManagement ?? 0,
            'status' => 1,
        ]);

        return redirect('/admin/systems/users')->with('success', 'User Added');
    }

    public function support()
    {
        $data['query'] = SystemSetting::first();
        $data['users'] = CustomerService::orderBy('id', 'DESC')->get()->toArray();
        return view('admin.customerServiceList', $data);
    }

    public function getUserData($userId)
    {
        $data = CustomerService::find($userId);
        return response()->json($data);
    }

    public function updateUser(Request $request)
    {
        $data = $request->all();
        $id = $data['id'];
        unset($data['id'], $data['_token']);
        CustomerService::where('id', $id)->update($data);
        return response()->json(['status' => 'success', 'message' => 'User data updated successfully']);
    }

    public function changeStatus($userId)
    {
        $user = CustomerService::find($userId);
        if (!$user) {
            return response('User not found');
        }
        $newStatus = $user->status == '1' ? '0' : '1';
        CustomerService::where('id', $userId)->update(['status' => $newStatus]);
        return response('Status changed successfully');
    }

    public function deleteUser(Request $request)
    {
        $userId = $request->input('userId');
        CustomerService::where('id', $userId)->delete();
        return response('User deleted successfully');
    }

    public function addSupportData(Request $request)
    {
        $request->validate([
            'addusername' => 'required|alpha_num|min:3|max:20',
            'addpassword' => 'required|min:6',
            'addmobileNumber' => 'required',
            'addqq' => 'required|numeric',
            'addweChat' => 'required',
            'addlink' => 'required|url',
            'addworkTime' => 'required',
        ]);

        $username = $request->input('addusername');
        $existing = CustomerService::where('username', $username)->first();
        if ($existing) {
            return response('Username Already Exit');
        }

        CustomerService::create([
            'username' => $username,
            'mobileNumber' => $request->input('addmobileNumber'),
            'password' => md5($request->input('addpassword')),
            'qq' => $request->input('addqq'),
            'weChat' => $request->input('addweChat'),
            'link' => $request->input('addlink'),
            'status' => 1,
            'workTime' => $request->input('addworkTime'),
            'addTime' => date('Y-m-d H:i:s'),
        ]);

        return response('Data added successfully');
    }

    public function textManagement()
    {
        $data['query'] = SystemSetting::first();
        $data['texts'] = \App\Models\TextManagement::all()->toArray();
        return view('admin.textManage', $data);
    }

    public function textManagementUpdate(Request $request)
    {
        $id = $request->input('id');
        $data = $request->only(['title', 'content']);
        \App\Models\TextManagement::where('id', $id)->update($data);
        return redirect('/admin/systems/textManagement')->with('success', 'Text Updated');
    }
}
