<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\UpdateUserController;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\Users\PlanController;
use App\Http\Controllers\Users\UserController;
use App\Http\Middleware\AdminRole;
use App\Http\Middleware\UserRole;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;


// Route::get('/', [UserController::class,'welcome'])->name('welcome');
// Route::get('/login', [UserController::class,'welcome'])->name('login');

// //UNAUTHORIZED ROUTE
// Route::get('/unauthorized',[UserController::class,"unauthorized"])->name('unauthorized');
// Route::get('/subscribe/plan',[UserController::class,"planCard"])->name('users.planCard');



// // AUTHENTICATED
// Route::prefix('users')->group(function(){

//      Route::prefix('auth')->group(function(){

//       // NEW USER GET LINK BY EMAIL
//         Route::post('/email/verification', [EmailVerificationController::class, 'sendEmailVerification'])->name('email.verification');
//         Route::get('/', [EmailVerificationController::class, 'verifyEmail'])->name('email.verify');


//         //LOGIN ROUTE
//         Route::post('/users-login',[LoginController::class,"login"])->name('users.login');
//         Route::get('/login-form',[LoginController::class,"show"])->name('users.login-form');

//         Route::post('/register',[RegisterController::class,"store"])->name('register');
//         Route::get('/registeration',[RegisterController::class,"show"])->name('users.register');


// //USER LOGOUT ROUTE
// Route::post('/logout',[UserController::class, 'logout'])->name('users.logout');


//WELCOME GUSET ROUTE
  //       Route::get('/contact', [UserController::class,'contactUs'])->name('users.contactUs');

  // });


//USERS MIDDLWARE ROUTE
    // Route::middleware(['auth', UserRole::class])->group(function(){
    //     //DASHBOARD ROUTE

        // Route::get('/all-plans',[PlanController::class,"index"])->name('plans.index');
        // Route::get('/plans/list',[PlanController::class,"planList"])->name('plans.list');
        // Route::post('/plans/update/{id}',[PlanController::class,"update"])->name('plans.update');
        // // Route::post('/plan-selected',[PlanController::class,'selectedPlanTopay'])->name('planselected.toPay');
        // Route::post('/pay',[PlanController::class,'pay'])->name('payment.pay');
        // // Route::post(uri: '/verify-payment',[PlanController::class,'verify'])->name('payment.verify');
        // Route::post('/cancel',[PlanController::class,'cancel'])->name('payment.cancel');
        // Route::get('/callback',[PlanController::class,'callback'])->name('payment.callback');




// PAGES
// Route::get('/dashboard', [UserController::class,'dashboard'])->name('user.dashboard');
// Route::get('/notification', [UserController::class,'notification'])->name('user.notification');
// Route::get('/referral', [UserController::class,'referral'])->name('user.referral');
// Route::get('/contact', [UserController::class,'contact'])->name('user.contact');
// Route::get('/profile', [UserController::class,'profile'])->name('user.profile');
// Route::get('/video', [UserController::class,'videos'])->name('video');
// Route::get('/music', [UserController::class,'music'])->name('music');
// Route::get('/bank', [UserController::class,'add_bank'])->name('add-bank');
// Route::get('/withdraw', [UserController::class,'withdraw'])->name('user.withdraw');
// Route::get('/transactions', [UserController::class,'transactions'])->name('transactions');
// Route::get('/rate', [UserController::class,'rate'])->name('rate');
// Route::get('/articles', [UserController::class,'articles'])->name('articles');
// Route::get('/about', [UserController::class,'about'])->name('about');



// Route::get('/plans', [UserController::class,'plans'])->name('guest.plans');





//USER ACTION ROUTE
// Route::get('/all-users',[UserController::class,"index"])->name('user.all');
// Route::get('/edit/profile',[UserController::class,"editUser"])->name('user.edit');
// Route::post('/update/{id}',[UpdateUserController::class,"update"])->name('users.update');
// Route::post('/delete-my-account',[UserController::class, 'destroy'])->name('users.delete-Account');

//     });

// });


// Route::group(['prefix'=> 'admin'], function () {

//       Route::middleware(['auth',AdminRole::class])->Group( function () {
//       Route::get('/dashboard', [UserController::class, 'admin_dashboard'])->name('admin.dashboard');
//       Route::get('/users/list', [UserController::class, 'allUser'])->name('admin.all-user');
//       Route::delete('/delete/{id}',[UserController::class, 'delete'])->name('users.delete');
//       Route::get('/edit/profile',[UserController::class,"editUser"])->name('user.edit');

//     });
// });


