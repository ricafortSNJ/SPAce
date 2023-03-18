<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| MAIN Routes
|--------------------------------------------------------------------------
*/


Route::get('/', [DashboardController::class, 'homeMap']);

Route::get('/01_onboarding', function() {
    return view('01_onboarding');
});

Route::get('/01_about', function() {
    return view('01_about');
});

Route::get('/test_register', [DashboardController::class, 'showRegister']);
Route::post('/test_register', [DashboardController::class, 'Register']);

Route::get('/test_login', [DashboardController::class, 'showLogin']);
Route::post('/test_login', [DashboardController::class, 'login']);
Route::get('/logout', [DashboardController::class, 'logout']);


Route::post('/newsletter', [DashboardController::class, 'newsletter']);
Route::post('/query', [DashboardController::class, 'query']);
Route::post('/appointment', [DashboardController::class, 'appointment']);

/*
|--------------------------------------------------------------------------
| CUSTOMER-DASHBOARD Routes
|--------------------------------------------------------------------------
*/


Route::get('/test1_dashboard', [DashboardController::class, 'searchFunction']);
Route::post('/test1_dashboard', [DashboardController::class, 'searchFunction']);

Route::get('/test1_profile', [DashboardController::class, 'showProfile']);
Route::get('/test1_profile/edit', [DashboardController::class, 'editProfile']);
Route::post('/test1_profile/edit', [DashboardController::class, 'updateProfile']);

Route::get('/test1_messages', [DashboardController::class, 'showMessages']);
Route::get('/test1_reviews', [DashboardController::class, 'showReviews']);
Route::get('/test1_bookings', [DashboardController::class, 'bookingHistory']);
Route::post('/test1_bookings', [DashboardController::class, 'addBooking']);
Route::get('/test1_payments', [DashboardController::class, 'paymentHistory']);

//Route::get('/test1_payments/edit/{payment_id}', [DashboardController::class, 'editBooking']);
//Route::post('/test1_payments/edit/{payment_id}', [DashboardController::class, 'updateBooking']);


//Route::get('/test2_dashboard', [DashboardController::class, 'searchFunction_p']);
//Route::post('/test2_dashboard', [DashboardController::class, 'addBooking_p']);

Route::get('/test2_bookings/edit/{booking_id}', [DashboardController::class, 'editBooking']);
Route::post('/test2_bookings/edit/{booking_id}', [DashboardController::class, 'updateBooking']);

Route::get('/test2_profile', [DashboardController::class, 'showProfile_p']);
Route::get('/test2_profile/edit', [DashboardController::class, 'editProfile_p']);
Route::post('/test2_profile/edit', [DashboardController::class, 'updateProfile_p']);

Route::get('/test2_messages', [DashboardController::class, 'showMessages_p']);
Route::get('/test2_reviews', [DashboardController::class, 'showReviews_p']);
Route::get('/test2_bookings', [DashboardController::class, 'bookingHistory_p']);
Route::post('/test2_bookings', [DashboardController::class, 'addBooking_p']);
Route::get('/test2_payments', [DashboardController::class, 'paymentHistory_p']);




/*
|--------------------------------------------------------------------------
| PROFESSIONAL-DASHBOARD Routes
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| ADMIN-DASHBOARD Routes
|--------------------------------------------------------------------------
*/

/*


*/




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