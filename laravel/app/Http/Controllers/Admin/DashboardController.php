<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        if (session('systemManagement') == 1) {
            return redirect('/admin/systems/setting');
        } elseif (session('memberManagement') == 1) {
            return redirect('/admin/member/list');
        } elseif (session('transactionManagement') == 1) {
            return redirect('/admin/trade/withdraw');
        } elseif (session('shoppingMallManagement') == 1) {
            return redirect('/admin/mall/product');
        } else {
            return redirect('/admin/login');
        }
    }
}
