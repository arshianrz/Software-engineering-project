<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReferralController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('register', [AuthController::class, 'showRegister'])->name('register.show');
Route::post('register', [AuthController::class, 'register'])->name('register.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('login', [AuthController::class, 'showlogin'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');

Route::middleware('auth')->group(function () {

    Route::get('customers', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('customers/{customer}/remove', [CustomerController::class, 'destroy'])->name('customers.destroy');
    Route::get('customers/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::get('customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::post('customers/store', [CustomerController::class, 'store'])->name('customers.store');
    Route::put('customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');

    Route::get('referrals/check', [ReferralController::class, 'showCheck'])->name('referrals.showCheck');
    Route::post('referrals/check', [ReferralController::class, 'check'])->name('referrals.check');
    Route::post('referrals/check/submit', [ReferralController::class, 'submit'])->name('referrals.submit');

    Route::get('discounts', [DiscountController::class, 'index'])->name('discounts.index');
    Route::get('discounts/check', [DiscountController::class, 'showCheck'])->name('discounts.showCheck');
    Route::post('discounts/check', [DiscountController::class, 'check'])->name('discounts.check');
    Route::post('discounts/submit', [DiscountController::class, 'submit'])->name('discounts.submit');


    Route::get('my-demo-mail',[HomeController::class,'myDemoMail']);

});
