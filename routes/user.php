<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\UpdateUserController;
use App\Http\Controllers\Users\PlanController;
use App\Http\Controllers\Users\UserController;
use App\Http\Middleware\UserRole;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'welcome'])->name('welcome');
// Route::get('/login', [UserController::class,'welcome'])->name('login');



// LOGIN AND REGISTER FORM
Route::get('/login', [UserController::class, 'show_login'])->name('login');
Route::get('/register', [UserController::class, 'create'])->name('register');

Route::prefix('users')->group(function () {

  Route::post('/auth/register', [UserController::class, 'store'])->name('user.store');
  Route::post('/auth/login', [LoginController::class, 'login'])->name('user.login');

  // LOGOUT
  Route::post('/logout', [UserController::class, 'logout'])->name('users.logout');
});





Route::prefix('users')->group(function () {
Route::middleware(['auth', UserRole::class])->group(function () {

  // PAGES
  Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
  Route::get('/notification', [UserController::class, 'notification'])->name('user.notification');
  Route::get('/referral', [UserController::class, 'referral'])->name('user.referral');
  Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
  Route::get('/video', [UserController::class, 'videos'])->name('video');
  Route::get('/music', [UserController::class, 'music'])->name('music');
  Route::get('/bank', [UserController::class, 'add_bank'])->name('add-bank');
  Route::get('/withdraw', [UserController::class, 'withdraw'])->name('user.withdraw');
  Route::get('/transactions', [UserController::class, 'transactions'])->name('transactions');
  Route::get('/rate', [UserController::class, 'rate'])->name('rate');
  Route::get('/articles', [UserController::class, 'articles'])->name('articles');

  Route::get('/plans', [UserController::class, 'plans'])->name('guest.plans');

});

Route::get('/contact', [UserController::class, 'contact'])->name('user.contact');
Route::get('/about', [UserController::class, 'about'])->name('about');



// Route::prefix('users')->group( function() {


  Route::prefix('auth')->group(function () {});

  // Route:: middleware(['auth', UserRole::class])->group( function() {



  //USER ACTION ROUTE
  Route::get('/all-users', [UserController::class, "index"])->name('user.all');
  Route::get('/edit/profile', [UserController::class, "editUser"])->name('user.edit');
  Route::post('/update/{id}', [UpdateUserController::class, "update"])->name('users.update');
  Route::post('/delete-my-account', [UserController::class, 'destroy'])->name('users.delete-Account');


  Route::get('/all-plans', [PlanController::class, "index"])->name(name: 'plans.index');
  Route::get('/plans/list', [PlanController::class, "planList"])->name(name: 'plans.list');
  Route::post('/plans/update/{id}', [PlanController::class, "update"])->name(name: 'plans.update');
  // Route::post('/plan-selected',[PlanController::class,'selectedPlanTopay'])->name('planselected.toPay');
  Route::post('/pay', [PlanController::class, 'pay'])->name('payment.pay');
  // Route::post(uri: '/verify-payment',[PlanController::class,'verify'])->name('payment.verify');
  Route::post('/cancel', [PlanController::class, 'cancel'])->name('payment.cancel');
  Route::get('/callback', [PlanController::class, 'callback'])->name('payment.callback');
});

// });
