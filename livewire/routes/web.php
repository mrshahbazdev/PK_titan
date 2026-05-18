<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Backend\Login;
use App\Livewire\Backend\Memberlist;
use App\Livewire\Backend\Rechargerecord;
use App\Livewire\Backend\Withdrawrecorde;
use App\Livewire\Backend\Mall;
use App\Livewire\Backend\Text;
use App\Livewire\Backend\Agent;
use App\Livewire\Backend\Levels;
use App\Livewire\Backend\Role;
use App\Livewire\Backend\Adminuser;
use App\Livewire\Backend\Singleorder;
use App\Livewire\UserDetails;
use App\Livewire\Backend\Bank;
use App\Livewire\Backend\Trailperiod;
use App\Livewire\Backend\Rechargerequested;
use App\Livewire\Backend\Addannouncements;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/d', Counter::class);
Route::get('/', Login::class)->middleware('guest')->name('login');
Route::get('/logout', [Login::class,'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/livewire/user', UserDetails::class);
    Route::get('/member', Memberlist::class);
    Route::get('/member/agent', Agent::class);
    Route::get('/member/grade', Levels::class);
    Route::get('/member/continuousOrder/', Singleorder::class);
    Route::get('/trade/rechargelist', Rechargerecord::class);
    Route::get('/trade/withdrawlist', Withdrawrecorde::class);
    Route::get('/mall/product', Mall::class);
    Route::get('/mall/text', Text::class);
    Route::get('/systems/role', Role::class);
    Route::get('/systems/users', Adminuser::class);
    Route::get('/systems/bank', Bank::class);
    Route::get('/systems/trialperiod', Trailperiod::class);
    Route::get('/trade/rechargerequest', Rechargerequested::class);
    Route::get('/systems/announcements', Addannouncements::class);

});


