<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\ProfessionalsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function() {
    return view('sp_index');
});

Route::get('/sp_onboarding', function() {
    return view('sp_onboarding');
});

Route::get('/sp_about', function() {
    return view('sp_about');
});

Route::get('/ad_index', function() {
    return view('ad_index');
});

Route::get('/ad_users', function() {
    return view('ad_users');
});

Route::get('/ad_profiles', function() {
    return view('ad_profiles');
});

Route::get('/ad_professionals', function() {
    return view('ad_professionals');
});

Route::get('/ad_reviews', function() {
    return view('ad_reviews');
});

Route::get('/ad_bookings', function() {
    return view('ad_bookings');
});

Route::get('/ad_messaging', function() {
    return view('ad_messaging');
});

Route::get('/p_dashboard', function() {
    return view('p_dashboard');
});

Route::get('/p_profile', function() {
    return view('p_profile');
});

Route::get('/p_reviews', function() {
    return view('p_reviews');
});

Route::get('/p_earnings', function() {
    return view('p_earnings');
});

Route::get('/p_messaging', function() {
    return view('p_messaging');
});





/*
Route::get('/', function() {
    return view('index');
});

Route::get('/register', [UsersController::class, 'showRegister']);
Route::post('/register', [UsersController::class, 'Register']);

Route::get('/login', [UsersController::class, 'showLogin']);
Route::post('/login', [UsersController::class, 'login']);
Route::get('/logout', [UsersController::class, 'logout']);

Route::get('/profile', [DashboardController::class, 'showProfile']);
Route::get('/professionals', [DashboardController::class, 'searchFunction']);
Route::post('/professionals', [DashboardController::class, 'searchFunction']);
Route::get('/bookings', [DashboardController::class, 'bookingHistory']);
Route::post('/bookings', [DashboardController::class, 'addBooking']);
Route::get('/reviews', [DashboardController::class, 'showReviews']);
Route::get('/messages', [DashboardController::class, 'messages']);
Route::get('/payments', [DashboardController::class, 'paymentHistory']);









Route::get('/home', function() {
    return view('home');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('shop/{id?}', [ShopController::class, 'show']);
Route::get('/users', [UsersController::class, 'index']);

Route::resource('/admin/users', UsersController::class);
Route::resource('/admin/profiles', ProfilesController::class);
Route::resource('/admin/professionals', ProfessionalsController::class);



Route::get('/profilepage', [UsersController::class, 'showProfile']);
Route::get('/reviewpage', [UsersController::class, 'showReview']);
*/





?>