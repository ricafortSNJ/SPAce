<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\ProfessionalsController;
use App\Http\Controllers\BookingsController;
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

Route::get('/02_dashboard', [DashboardController::class, 'searchFunction']);
Route::post('/02_dashboard', [DashboardController::class, 'searchFunction']);

Route::get('/02_profile', [DashboardController::class, 'showProfile']);
Route::get('/02_profile/edit', [DashboardController::class, 'editProfile']);
Route::post('/02_profile/edit', [DashboardController::class, 'updateProfile']);
Route::post('/02_profile/upload', [DashboardController::class, 'upload']);

Route::get('/02_messages', [DashboardController::class, 'showMessages']);
Route::get('/02_reviews', [DashboardController::class, 'showReviews']);
Route::get('/02_bookings', [DashboardController::class, 'bookingHistory']);
Route::post('/02_bookings', [DashboardController::class, 'addBooking']);
Route::get('/02_payments', [DashboardController::class, 'paymentHistory']);

Route::get('/02_pay/{booking_id}', [DashboardController::class, 'editPayment']);
Route::post('/02_pay/{booking_id}', [DashboardController::class, 'updatePayment']);

Route::get('/02_booking-set/{professional_id}', [DashboardController::class, 'showBooking']);


Route::post('/setBooking', [DashboardController::class, 'setBooking']);


// Test-Routes

Route::get('/test1_dashboard', [DashboardController::class, 'searchFunction']);
Route::post('/test1_dashboard', [DashboardController::class, 'searchFunction']);

Route::get('/test1_profile', [DashboardController::class, 'showProfile']);
Route::get('/test1_profile/edit', [DashboardController::class, 'editProfile']);
Route::post('/test1_profile/edit', [DashboardController::class, 'updateProfile']);
Route::post('/test1_profile/upload', [DashboardController::class, 'upload']);

Route::get('/test1_messages', [DashboardController::class, 'showMessages']);
Route::get('/test1_reviews', [DashboardController::class, 'showReviews']);
Route::get('/test1_bookings', [DashboardController::class, 'bookingHistory']);
Route::post('/test1_bookings', [DashboardController::class, 'addBooking']);
Route::get('/test1_payments', [DashboardController::class, 'paymentHistory']);

//Route::get('/test1_payments/edit/{payment_id}', [DashboardController::class, 'editBooking']);
//Route::post('/test1_payments/edit/{payment_id}', [DashboardController::class, 'updateBooking']);


/*
|--------------------------------------------------------------------------
| PROFESSIONAL-DASHBOARD Routes
|--------------------------------------------------------------------------
*/
Route::get('/03_dashboard', function() {
    return view('03_dashboard');
});

Route::get('/03_earnings', function() {
    return view('03_earnings');
});
Route::get('/03_bookings/edit/{booking_id}/1', [DashboardController::class, 'acceptBooking']);
Route::get('/03_bookings/edit/{booking_id}/2', [DashboardController::class, 'declineBooking']);

Route::get('/03_profile', [DashboardController::class, 'showProfile_p']);
Route::get('/03_profile/edit', [DashboardController::class, 'editProfile_p']);
Route::post('/03_profile/edit', [DashboardController::class, 'updateProfile_p']);
Route::post('/03_profile/upload', [DashboardController::class, 'upload_p']);

Route::get('/03_messages', [DashboardController::class, 'showMessages_p']);
Route::get('/03_reviews', [DashboardController::class, 'showReviews_p']);
Route::get('/03_bookings', [DashboardController::class, 'bookingHistory_p']);
Route::post('/03_bookings', [DashboardController::class, 'addBooking_p']);
Route::get('/03_payments', [DashboardController::class, 'paymentHistory_p']);

//Route::get('/test2_dashboard', [DashboardController::class, 'searchFunction_p']);
//Route::post('/test2_dashboard', [DashboardController::class, 'addBooking_p']);

Route::get('/test2_bookings/edit/{booking_id}', [DashboardController::class, 'editBooking']);
Route::post('/test2_bookings/edit/{booking_id}', [DashboardController::class, 'updateBooking']);

Route::get('/test2_profile', [DashboardController::class, 'showProfile_p']);
Route::get('/test2_profile/edit', [DashboardController::class, 'editProfile_p']);
Route::post('/test2_profile/edit', [DashboardController::class, 'updateProfile_p']);
Route::post('/test2_profile/upload', [DashboardController::class, 'upload_p']);

Route::get('/test2_messages', [DashboardController::class, 'showMessages_p']);
Route::get('/test2_reviews', [DashboardController::class, 'showReviews_p']);
Route::get('/test2_bookings', [DashboardController::class, 'bookingHistory_p']);
Route::post('/test2_bookings', [DashboardController::class, 'addBooking_p']);
Route::get('/test2_payments', [DashboardController::class, 'paymentHistory_p']);

/*
|--------------------------------------------------------------------------
| ADMIN-DASHBOARD Routes
|--------------------------------------------------------------------------
*/

Route::resource('/admin/profiles', ProfilesController::class);
Route::post('/admin/profiles/{profile_id}', [ProfilesController::class, 'update']);

Route::resource('/admin/professionals', ProfessionalsController::class);
Route::post('/admin/professionals/{professional_id}', [ProfessionalsController::class, 'update']);

Route::resource('/admin/bookings', BookingsController::class);
Route::post('/admin/bookings/{booking_id}', [BookingsController::class, 'update']);






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