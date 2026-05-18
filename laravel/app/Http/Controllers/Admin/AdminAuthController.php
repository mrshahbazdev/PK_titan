<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SystemUser;
use App\Models\SystemSetting;

class AdminAuthController extends Controller
{
    public function login()
    {
        if (session('roleName')) {
            return redirect('/admin/dashboard');
        }
        $data['query'] = SystemSetting::first();
        return view('admin.adminLogin', $data);
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->input('username');
        $password = md5($request->input('password'));

        $user = SystemUser::where('userName', $username)
            ->where('password', $password)
            ->first();

        if ($user) {
            if ($user->status == 0) {
                return back()->with('error', 'Your account has been suspended');
            }

            session([
                'adminId' => $user->id,
                'adminUserName' => $user->userName,
                'roleName' => $user->roleName,
                'memberManagement' => $user->memberManagement,
                'systemManagement' => $user->systemManagement,
                'transactionManagement' => $user->transactionManagement,
                'shoppingMallManagement' => $user->shoppingMallManagement,
            ]);

            return redirect('/admin/dashboard');
        }

        return back()->with('error', 'Invalid Username or Password');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/admin/login');
    }
}
