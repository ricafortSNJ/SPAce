<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\Professional;
use App\Models\Booking;
use Illuminate\Support\Facades\Hash;
use Session;

class DashboardController extends Controller
{
    //
    public function test() 
    {

    }

    public function showProfile()
    {
        $id = Session::get("id");
        $user = DB::select("SELECT us.user_id, email_address, username, first_name, last_name, mobile_number, social_media FROM users AS us
        INNER JOIN profiles AS p ON us.user_id = p.user_id WHERE us.user_id = " . $id);
        return view('1_profile', compact('user'));
    }

    public function showReviews()
    {
        $id = Session::get("id");
        $user_reviews = DB::select("SELECT username, booking_id, rating, review, last_update FROM users AS us
        INNER JOIN profiles AS p ON us.user_id = p.user_id 
        INNER JOIN reviews AS r ON us.user_id = reviewer_id
        WHERE reviewer_id = " . $id);
        $professional_reviews = DB::select("SELECT username, booking_id, rating, review, last_update FROM users AS us
        INNER JOIN profiles AS p ON us.user_id = p.user_id 
        INNER JOIN reviews AS r ON us.user_id = reviewer_id
        WHERE reviewee_id = " . $id);
        return view('1_reviews', compact('user_reviews', 'professional_reviews'));
    }

    public function bookingHistory()
    {
        $id = Session::get("id");
        $user_bookings = DB::select("SELECT booking_id, b.user_id, username, professional_id, date, time, status FROM users AS us
        INNER JOIN profiles AS p ON us.user_id = p.user_id 
        INNER JOIN bookings AS b ON us.user_id = b.user_id
        WHERE b.user_id = " . $id);
        return view('1_bookings', compact('user_bookings'));
    }
    public function addBooking(Request $request)
    {
        $booking = new Booking;
        $booking->user_id = Session::get("id");
        $booking->professional_id = $request->input('professional_id');
        $booking->date = "2023-03-20";
        $booking->time = "09:30:00.000000";
        $booking->status = "Pending";
        $booking->save();

        $id = Session::get("id");
        $user_bookings = DB::select("SELECT booking_id, b.user_id, username, professional_id, date, time, status FROM users AS us
        INNER JOIN profiles AS p ON us.user_id = p.user_id 
        INNER JOIN bookings AS b ON us.user_id = b.user_id
        WHERE b.user_id = " . $id);

        return view('1_bookings', compact('user_bookings'));
    }
    public function searchFunction(Request $request)
    {
        $expertise = $request->input("expertise");
        $rate = $request->input("rate");
        $location = $request->input("location");
        if ($expertise) {
            $results = DB::select("SELECT pr1.professional_id, pr1.profile_id, username, expertise, availability, rates, pr1.location, region, lat, lng FROM professionals AS pr1
            INNER JOIN profiles as pr2 ON pr1.profile_id = pr2.profile_id
            INNER JOIN locations as l ON l.location = pr1.location WHERE region = " . $location);
            return view('1_search', compact('expertise', 'rate', 'location', 'results'));
        } else {
            $results = DB::select("SELECT pr1.professional_id, pr1.profile_id, username, expertise, availability, rates, location FROM professionals AS pr1
            INNER JOIN profiles as pr2 ON pr1.profile_id = pr2.profile_id LIMIT 5");
            return view('1_search', compact('expertise', 'rate', 'location', 'results'));
        }
    }

    
}
