<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\AuthController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\JourneyController;
use App\Http\Controllers\Front\JsubmissionController;
use App\Http\Controllers\Front\JhistoryController;
use App\Http\Controllers\Front\WalletController;
use App\Http\Controllers\Front\WithdrawalController;
use App\Http\Controllers\Front\DepositController;
use App\Http\Controllers\Front\InvitationController;
use App\Http\Controllers\Front\ReferralController;
use App\Http\Controllers\Front\SecurityController;
use App\Http\Controllers\Front\BankController;
use App\Http\Controllers\Front\VerificationController;
use App\Http\Controllers\Front\TextPageController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SystemsController;
use App\Http\Controllers\Admin\MallController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\TradeController;

/*
|--------------------------------------------------------------------------
| Public Routes (No Auth Required)
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index']);

// Auth routes
Route::get('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/login', [AuthController::class, 'loginPost']);
Route::get('/auth/signup', [AuthController::class, 'signup']);
Route::post('/auth/signup', [AuthController::class, 'signupPost']);
Route::get('/auth/reg', [AuthController::class, 'signup']);
Route::post('/auth/authenticate', [AuthController::class, 'credentialcheck']);
Route::get('/auth/signoff', [AuthController::class, 'signoff']);

/*
|--------------------------------------------------------------------------
| Frontend Routes (Auth Required)
|--------------------------------------------------------------------------
*/

Route::middleware(['front.auth'])->group(function () {

    // Verification routes
    Route::match(['get', 'post'], '/verification/send_otp', [VerificationController::class, 'sendOtp']);
    Route::post('/verification/verify_otp', [VerificationController::class, 'verifyOtp']);

    // Routes that also require verified user
    Route::middleware(['verified.user'])->group(function () {

        // Home / Dashboard
        Route::get('/home', [HomeController::class, 'home']);

        // Journey / Tasks
        Route::get('/journey', [JourneyController::class, 'index']);
        Route::get('/jsubmission', [JsubmissionController::class, 'index']);
        Route::get('/jsubmission/submit', [JsubmissionController::class, 'submit']);
        Route::get('/jhistory', [JhistoryController::class, 'index']);
        Route::get('/jhistory/productSubmit', [JhistoryController::class, 'productSubmit']);

        // Wallet
        Route::get('/wallet', [WalletController::class, 'index']);
        Route::post('/wallet/walletUpdate', [WalletController::class, 'walletUpdate']);

        // Withdrawal
        Route::get('/withdrawal', [WithdrawalController::class, 'index']);
        Route::get('/withdrawal/withdrawalhistory', [WithdrawalController::class, 'withdrawalhistory']);
        Route::post('/withdrawal/request', [WithdrawalController::class, 'request']);

        // Deposit
        Route::match(['get', 'post'], '/deposit', [DepositController::class, 'index']);
        Route::get('/deposit/deposithistory', [DepositController::class, 'deposithistory']);

        // Invitation
        Route::get('/invitation', [InvitationController::class, 'index']);

        // Referral
        Route::get('/referral', [ReferralController::class, 'index']);

        // Security
        Route::get('/security', [SecurityController::class, 'index']);
        Route::post('/security/passchange', [SecurityController::class, 'passchange']);

        // Bank
        Route::get('/banks', [BankController::class, 'index']);

        // Text Pages
        Route::get('/about', [TextPageController::class, 'about']);
        Route::get('/faqs', [TextPageController::class, 'faqs']);
        Route::get('/term', [TextPageController::class, 'term']);
        Route::get('/gettouch', [TextPageController::class, 'gettouch']);
    });
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

// Admin auth (no middleware)
Route::get('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/login', [AdminAuthController::class, 'loginPost']);
Route::get('/admin/logout', [AdminAuthController::class, 'logout']);

// Admin protected routes
Route::middleware(['admin.auth'])->prefix('admin')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Systems
    Route::get('/systems/setting', [SystemsController::class, 'setting']);
    Route::post('/systems/setting', [SystemsController::class, 'settingUpdate']);
    Route::get('/systems/roles', [SystemsController::class, 'roles']);
    Route::post('/systems/addRole', [SystemsController::class, 'addRole']);
    Route::get('/systems/getRoleData/{id}', [SystemsController::class, 'getRoleData']);
    Route::post('/systems/updateRole', [SystemsController::class, 'updateRole']);
    Route::post('/systems/deleteRole', [SystemsController::class, 'deleteRole']);
    Route::get('/systems/users', [SystemsController::class, 'users']);
    Route::post('/systems/addUser', [SystemsController::class, 'addUser']);
    Route::get('/systems/support', [SystemsController::class, 'support']);
    Route::get('/systems/getUserData/{userId}', [SystemsController::class, 'getUserData']);
    Route::post('/systems/updateUser', [SystemsController::class, 'updateUser']);
    Route::get('/systems/changeStatus/{userId}', [SystemsController::class, 'changeStatus']);
    Route::post('/systems/deleteUser', [SystemsController::class, 'deleteUser']);
    Route::post('/systems/addSupportData', [SystemsController::class, 'addSupportData']);
    Route::get('/systems/textManagement', [SystemsController::class, 'textManagement']);
    Route::post('/systems/textManagement', [SystemsController::class, 'textManagementUpdate']);

    // Mall
    Route::get('/mall/product', [MallController::class, 'product']);
    Route::post('/mall/addProduct', [MallController::class, 'addProduct']);
    Route::get('/mall/getProductData/{id}', [MallController::class, 'getProductData']);
    Route::post('/mall/updateProduct', [MallController::class, 'updateProduct']);
    Route::post('/mall/deleteProduct', [MallController::class, 'deleteProduct']);
    Route::get('/mall/category', [MallController::class, 'category']);
    Route::post('/mall/addCategory', [MallController::class, 'addCategory']);
    Route::get('/mall/getCategoryData/{id}', [MallController::class, 'getCategoryData']);
    Route::post('/mall/updateCategory', [MallController::class, 'updateCategory']);
    Route::post('/mall/deleteCategory', [MallController::class, 'deleteCategory']);
    Route::get('/mall/bulletin', [MallController::class, 'bulletin']);
    Route::post('/mall/addBulletin', [MallController::class, 'addBulletin']);
    Route::get('/mall/getBulletinData/{id}', [MallController::class, 'getBulletinData']);
    Route::post('/mall/updateBulletin', [MallController::class, 'updateBulletin']);
    Route::post('/mall/deleteBulletin', [MallController::class, 'deleteBulletin']);
    Route::get('/mall/carousel', [MallController::class, 'carousel']);
    Route::post('/mall/addCarousel', [MallController::class, 'addCarousel']);
    Route::post('/mall/updateCarousel', [MallController::class, 'updateCarousel']);
    Route::post('/mall/deleteCarousel', [MallController::class, 'deleteCarousel']);

    // Member
    Route::get('/member/list', [MemberController::class, 'list']);
    Route::get('/member/getMemberData/{userId}', [MemberController::class, 'getMemberData']);
    Route::post('/member/updateMemberStatus', [MemberController::class, 'updateMemberStatus']);
    Route::post('/member/updateMember', [MemberController::class, 'updateMember']);
    Route::get('/member/grade', [MemberController::class, 'grade']);
    Route::post('/member/updateGrade', [MemberController::class, 'updateGrade']);
    Route::post('/member/deleteGrade', [MemberController::class, 'deleteGrade']);
    Route::get('/member/bank/{userId}', [MemberController::class, 'bank']);
    Route::post('/member/bankUpdate', [MemberController::class, 'bankUpdate']);
    Route::post('/member/balanceUp', [MemberController::class, 'balanceUp']);
    Route::post('/member/balanceDown', [MemberController::class, 'balanceDown']);
    Route::get('/member/agent', [MemberController::class, 'agent']);
    Route::post('/member/addMember', [MemberController::class, 'addMember']);
    Route::get('/member/continuousOrder', [MemberController::class, 'continuousOrder']);

    // Trade
    Route::get('/trade/withdraw', [TradeController::class, 'withdraw']);
    Route::post('/trade/withdrawUpdate', [TradeController::class, 'withdrawUpdate']);
    Route::get('/trade/recharge', [TradeController::class, 'recharge']);
    Route::post('/trade/rechargeUpdate', [TradeController::class, 'rechargeUpdate']);
});
