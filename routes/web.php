<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Firstcontroller;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\WatchlistController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\PaymentController;


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
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register_action', [RegisterController::class, 'register_action']);
Route::get('/activate/{token}', [RegisterController::class, 'activateAccount']);
Route::get('/search',[MovieController::class,'search'])->name('search');
Route::get('/my_space', [ProfileController::class, 'show'])->name('my_space');
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');
Route::get('/login', function () {
    return view('login'); 
})->name('login');
Route::get('/movies',[Firstcontroller::class,'movies'])->name('movies');
Route::get('/sports',[Firstcontroller::class,'sports'])->name('sports');
Route::get('/categories',[Firstcontroller::class,'categories'])->name('categories');
Route::get('/subcription',[Firstcontroller::class,'subcription'])->name('subcription');
Route::get('/admin',[MovieController::class,'admin'])->name('admin');
Route::get('/content', [MovieController::class, 'content'])->name('content');
Route::get('/user',[Firstcontroller::class,'user'])->name('user');
Route::get('/database',[Firstcontroller::class,'database'])->name('database');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('Edit_profile');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('update_profile');
Route::get('/forget_pass', [Firstcontroller::class, 'showForgetPasswordForm'])->name('forget_pass');
Route::post('/forget_pass', [Firstcontroller::class, 'sendOtp'])->name('forget_pass_otp');
Route::get('/forget_pass/otp', [Firstcontroller::class, 'showOtpForm'])->name('otp_form');
Route::post('/verify_otp', [Firstcontroller::class, 'verifyOtp'])->name('verify_otp');
Route::get('/reset_password', [Firstcontroller::class, 'showNewPasswordForm'])->name('new_password');
Route::post('/reset_password', [Firstcontroller::class, 'resetPassword'])->name('update_password');
Route::get('/create', [MovieController::class, 'create'])->name('movie.create');
Route::post('/movie', [MovieController::class, 'store'])->name('movie.store');
Route::get('/', [MovieController::class, 'index'])->name('index');
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::post('/user/delete', [UserController::class, 'delete'])->name('delete');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('edit');
Route::post('/user/update/{id}', [UserController::class, 'update'])->name('update');    
Route::delete('/movies/{id}', [MovieController::class, 'destroy'])->name('movies.destroy');
Route::get('/movies/{id}/edit', [MovieController::class, 'edit'])->name('movies.edit');
Route::put('/movies/{id}', [MovieController::class, 'update'])->name('movies.update');
Route::get('/subcribe', [SubscriptionController::class, 'subcribe'])->name('subcribe');
Route::get('/subcribe/{id}/edit', [SubscriptionController::class, 'edit'])->name('subcribe.edit');
Route::put('/subcribe/{id}', [SubscriptionController::class, 'update'])->name('subcribe.update');
Route::delete('/subcribe/{id}', [SubscriptionController::class, 'destroy'])->name('subcribe.destroy');
Route::post('/watchlist/add', [WatchlistController::class, 'addToWatchlist'])->middleware('auth')->name('watchlist.add');
Route::get('/watchlist', [WatchlistController::class, 'watchlist'])->middleware('auth')->name('watchlist');
Route::post('/watchlist/delete', [WatchlistController::class, 'deleteFromWatchlist'])->middleware('auth')->name('watchlist.delete');
Route::get('/notifications', [NotificationController::class, 'notifications'])->name('notifications');
Route::delete('/notifications/{id}', [NotificationController::class, 'destroy'])->name('notification.delete');
Route::get('/review/add/{movie_id}', [ReviewController::class, 'create'])->name('review.add');
Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');
Route::get('/subcription', [MembershipController::class, 'showSubscriptions'])->name('subcription');
Route::post('/payment', [PaymentController::class, 'payment'])->name('payment');
Route::post('/verify-payment', [PaymentController::class, 'verifyPayment'])->name('verify.payment');
Route::get('/kid',[MovieController::class,'kid'])->name('kid');
Route::get('/switch-to-kid-mode', function () {
    session(['mode' => 'kid']);
    return redirect()->route('my_space');
})->name('switchToKidMode');

Route::get('/switch-to-normal-mode', function () {
    session(['mode' => 'normal']);
    return redirect()->route('my_space');
})->name('switchToNormalMode');

