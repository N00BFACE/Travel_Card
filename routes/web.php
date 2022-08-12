<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Auth::routes();

// <!-- Public Page -->
Route::get('/', function () {
    return view('public.public_page');
});
// <!-- /Public Page -->

// <!-- User Home Page -->
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/profile', function() {
    return view( 'dashboard.layout.profile');
})->name('profile.index');

Route::get('/user/card', function() {
    return view('dashboard.layout.card');
});

Route::get('/user/payment/add', function() {
    return view('dashboard.layout.payment_add');
});

Route::get('/user/payment/{id}/add', [PaymentController::class, 'savePayment']);

Route::patch('/user/profile/{id}', [UserController::class, 'update'])->name('user.update');

Route::patch('/user/profile_pic/{id}',[UserController::class, 'upload'])->name('user.upload');

Route::get('/history', function (){
    return view('dashboard.layout.transaction');
});

// <!-- Admin Home Page -->
Route::get('/admin/dashboard', function (){
    return view('dashboard.admin.dashboard');
});

Route::get('/admin/home',[HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// <!-- Admin Action Routes -->
Route::get('/admin/user/{id}/approve', [UserController::class, 'approve'])->name('user.approve');
Route::get('/admin/user/{id}/reject', [UserController::class, 'reject'])->name('user.reject');
Route::get('/admin/user/{id}/suspend', [UserController::class, 'suspend'])->name('user.suspend');
Route::get('/admin/user/{id}/reactivate', [UserController::class, 'approve'])->name('user.reactivate');
Route::get('/admin/user/{id}/delete', [UserController::class, 'delete'])->name('user.delete');

Route::get('/admin/user/pending', function (){
    return view('dashboard.admin.pending_user');
})->name('user.pending');

Route::get('/admin/user/active', function (){
    return view('dashboard.admin.active_user');
})->name('user.active');

Route::get('/admin/user/suspend', function (){
    return view('dashboard.admin.suspended_user');
})->name('user.suspend');

Route::get('/admin/user/reject', function (){
    return view('dashboard.admin.rejected_user');
})->name('user.reject');
// <!-- /Admin Action Routes -->

// <!-- /Admin Home Page -->