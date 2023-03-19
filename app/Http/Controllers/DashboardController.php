<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\Professional;
use App\Models\Booking;
use App\Models\Message;
use App\Models\Review;
use App\Models\Newsletter;
use App\Models\Inquiry;
use App\Models\Appointment;
use App\Models\UserImage;
use Illuminate\Support\Facades\Hash;
use Session;

class DashboardController extends Controller
{
    //------------------------
    //===HOME-SIGN-UP-LOGIN===
    //------------------------

    // Show Register Page
    public function showRegister()
    {
        return view('test_register');
    }

    // Show Login Page
    public function showLogin()
    {
        return view('test_login');
    }

    // Register user - redirect to Login
    public function Register(Request $request) 
    {
        DB::statement('ALTER TABLE users AUTO_INCREMENT = 1');
        $user = new User;
        $user->email_address = $request->input("email_address");
        $user->password = Hash::make($request->input("password"));
        $user->user_type = "customer";
        $user->save();

        return redirect('/');
    }
    
    // Login - redirect to Profile page
    public function login(Request $request)
    {
        $user = User::where("email_address", "=", $request->email_address)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('user_id', $user->user_id);
                $request->session()->put('email_address', $user->email_address);
                $request->session()->put('user_type', $user->user_type);
                // Redirect to ADMIN Dashboard if Admin account
                if (Session::get('user_type') == 'admin') {
                    return redirect('/admin/profiles');
                } else if (Session::get('user_type') == 'customer') {
                    return redirect('/02_profile');
                } else if (Session::get('user_type') == 'professional') {
                    return redirect('/03_profile');
                }
            } else {
                return "Incorrect password!";
            }
        } else {
            return "No account is registered to that email!";
        }
    }

    // Logout - redirect to Home
    public function logout()
    {
        if (Session::has('user_id')) {
            Session::pull('user_id');
            Session::pull('email_address');
            Session::pull('user_type');
            Session::pull('username');
            Session::pull('image');
        }
        if (Session::has('professional_id')) {
            Session::pull('professional_id');
        }
        return redirect('/');
    }

    // Newsletter - Subscribe
    public function newsletter(Request $request)
    {
        DB::statement('ALTER TABLE newsletters AUTO_INCREMENT = 1');
        $newsletter = new Newsletter;
        $newsletter->email_address = $request->input("email_address");
        $newsletter->save();

        return redirect('/');
    }

    // Queries
    // public function query(Request $request)
    // {
    //     DB::statement('ALTER TABLE inquiries AUTO_INCREMENT = 1');
    //     $inquiry = new Inquiry;
    //     $inquiry->name = $request->input("name");
    //     $inquiry->email_address = $request->input("email_address");
    //     $inquiry->subject = $request->input("subject");
    //     $inquiry->message = $request->input("message");
    //     $inquiry->date = now()->timezone('Asia/Manila')->toDateString();
    //     $inquiry->time = now()->timezone('Asia/Manila')->toTimeString();
    //     $inquiry->save();

    //     return redirect('/');
    // }

    // Appointments Setter
    public function appointment(Request $request)
    {
        DB::statement('ALTER TABLE appointments AUTO_INCREMENT = 1');
        $appointment = new Appointment;
        $appointment->name = $request->input("name");
        $appointment->email_address = $request->input("email_address");
        $appointment->request_date = $request->input("date");
        $appointment->request_time = $request->input("time");
        $appointment->service = $request->input("service");
        $appointment->date = now()->timezone('Asia/Manila')->toDateString();
        $appointment->time = now()->timezone('Asia/Manila')->toTimeString();
        $appointment->save();

        return redirect('/');
    }

    // Display Map
    public function homeMap()
    {
        $locations = DB::select("SELECT * FROM locations");

        return view('01_index', compact('locations'));
    }

    //------------------------
    //=====USER-DASHBOARD=====
    //------------------------

    // Show Profile page
    public function showProfile()
    {
        $user_id = Session::get("user_id");
        $user = DB::select("SELECT us.user_id, email_address, username, first_name, last_name, mobile_number, social_media, location, image FROM users AS us
        INNER JOIN profiles AS p ON us.user_id = p.user_id
        INNER JOIN user_images AS ui ON ui.user_id = p.user_id
        WHERE us.user_id = " . $user_id . "
        ORDER BY image DESC
        LIMIT 1;");
        if (!empty($user)) {
            $firstUser = $user[0];
            session()->put('username', $firstUser->username);
            session()->put('image', $firstUser->image);
        }
        return view('/02_profile', compact('user'));
    }

    // Show Profile Edit Page
    public function editProfile()
    {
        $user_id = Session::get("user_id");
        $user = DB::select("SELECT us.user_id, email_address, username, first_name, last_name, mobile_number, social_media, location FROM users AS us
        INNER JOIN profiles AS p ON us.user_id = p.user_id WHERE us.user_id = " . $user_id);
        return view('02_profile-edit', compact('user'));
    }

    // Update DB - redirect to Profile page
    public function updateProfile(Request $request)
    {
        $user_id = Session::get("user_id");
        $user = User::where('user_id', $user_id)
        ->update([
            'email_address' => $request->input('email_address'),
        ]);
        $profile = Profile::where('user_id', $user_id)
        ->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'mobile_number' => $request->input('mobile_number'),
            'username' => $request->input('username'),
            'social_media' => $request->input('social_media'),
            'location' => $request->input('location'),
        ]);

        return redirect('02_profile');
    }


    // User Dashboard
    public function searchFunction(Request $request)
    {
        $expertise = $request->input("expertise");
        $rate = $request->input("rate");
        $location = $request->input("location");
        if ($expertise) {
            $results = DB::select("SELECT pr1.professional_id, pr1.profile_id, username, expertise, availability, rates, pr2.location, region, lat, lng FROM professionals AS pr1
            INNER JOIN profiles as pr2 ON pr1.profile_id = pr2.profile_id
            INNER JOIN locations as l ON l.location = pr2.location WHERE region = " . $location . "LIMIT 5");
            return view('02_dashboard', compact('expertise', 'rate', 'location', 'results'));
        } else {
            $results = DB::select("SELECT pr1.professional_id, pr1.profile_id, username, expertise, availability, rates, pr2.location FROM professionals AS pr1
            INNER JOIN profiles as pr2 ON pr1.profile_id = pr2.profile_id LIMIT 5");
            return view('02_dashboard', compact('expertise', 'rate', 'location', 'results'));
        }
    }
    
    // Show Reviews
    public function showReviews()
    {
        $user_id = Session::get("user_id");
        $user_reviews = DB::select("SELECT username, booking_id, rating, review, last_update, profile_id FROM users AS us
        INNER JOIN profiles AS p ON us.user_id = p.user_id 
        INNER JOIN reviews AS r ON us.user_id = reviewer_id
        WHERE reviewer_id = " . $user_id);
        $professional_reviews = DB::select("SELECT username, booking_id, rating, review, last_update, profile_id FROM users AS us
        INNER JOIN profiles AS p ON us.user_id = p.user_id 
        INNER JOIN reviews AS r ON us.user_id = reviewer_id
        WHERE reviewee_id = " . $user_id);
        return view('02_reviews', compact('user_reviews', 'professional_reviews'));
    }

    // Show Messages
    public function showMessages()
    {
        $user_id = Session::get("user_id");
        $messages_sent = DB::select("SELECT message_id, sender_id, receiver_id, p.username AS receiver_username, content, date, time FROM messages AS m
        INNER JOIN profiles AS p ON p.user_id = m.receiver_id
        WHERE sender_id = " . $user_id . " ORDER BY date DESC");
        $messages_received = DB::select("SELECT message_id, sender_id, receiver_id, p.username AS sender_username, content, date, time FROM messages AS m
        INNER JOIN profiles AS p ON p.user_id = m.sender_id
        WHERE receiver_id = " . $user_id . " ORDER BY date DESC");
        
        return view('02_messages', compact('messages_received', 'messages_sent'));
    }

    // Show Bookings
    public function bookingHistory()
    {
        $user_id = Session::get("user_id");
        $user_bookings = DB::select("SELECT booking_id, b.user_id, b.professional_id, username, date, time, status FROM bookings as b
        INNER JOIN professionals as p ON b.professional_id = p.professional_id
        INNER JOIN profiles as p1 ON p1.profile_id = p.profile_id
        WHERE b.user_id = " . $user_id);
        return view('02_bookings', compact('user_bookings'));
    }

    // Book Appointment
    public function addBooking(Request $request)
    {
        $booking = new Booking;
        $booking->user_id = Session::get("user_id");
        $booking->professional_id = $request->input('professional_id');
        $booking->date = now()->timezone('Asia/Manila')->toDateString();
        $booking->time = now()->timezone('Asia/Manila')->toTimeString();
        $booking->status = "Pending";
        $booking->save();

        $user_id = Session::get("user_id");
        $user_bookings = DB::select("SELECT booking_id, b.user_id, b.professional_id, username, date, time, status FROM bookings as b
        INNER JOIN professionals as p ON b.professional_id = p.professional_id
        INNER JOIN profiles as p1 ON p1.profile_id = p.profile_id
        WHERE b.user_id = " . $user_id);

        return view('02_bookings', compact('user_bookings'));
    }

    // Show Payments
    public function paymentHistory()
    {
        $user_id = Session::get("user_id");
        $user_payments = DB::select("SELECT payment_id, b.booking_id, b.user_id, b.professional_id, p3.username AS professional_username, amount, b.date, b.time, p1.status FROM payments AS p1
        INNER JOIN bookings as b ON b.booking_id = p1.booking_id
        INNER JOIN professionals as p2 ON p2.professional_id = b.professional_id
        INNER JOIN profiles as p3 ON p3.profile_id = p2.profile_id
        WHERE b.user_id = " . $user_id);
        return view('02_payments', compact('user_payments'));
    }

    // Edit Booking Status (to be edited)
    public function editPayment($booking_id)
    {
        $user_id = Session::get("user_id");
        $booking = DB::select("SELECT booking_id, user_id, professional_id, date, time, status FROM bookings
        WHERE booking_id =" . $booking_id);
        return view('03_bookings-edit', compact('booking'));
    }

    // Update Booking Status (to be edited)
    public function updatePayment($booking_id, Request $request)
    {
        $user_id = Session::get("user_id");
        $booking = Booking::where('booking_id', $booking_id)
        ->update([
            'status' => $request->input('status'),
        ]);

        return redirect('03_bookings');
    }

    //------------------------
    //=PICTURE=
    //------------------------
    public function upload(Request $request)
    {
        $user_id = Session::get("user_id");
        DB::statement('ALTER TABLE user_images AUTO_INCREMENT = 1');
        $sp = new UserImage;
        //$sp->student_id = $id;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('image_uploads'), $filename);
            $sp->user_id = $user_id;
            $sp->image = $filename;
        }
        $sp->save();
        return redirect("/02_profile");
    }
    public function showUpload($id) // To be Modified
    {
        $student = DB::select("SELECT first_name, last_name FROM students WHERE student_id = " . $id);
        return view('students_upload', compact('student'));
    }

    //------------------------
    //=PROFESSIONAL-DASHBOARD=
    //------------------------

    // Show Profile page
    public function showProfile_p()
    {
        $user_id = Session::get("user_id");
        $user = DB::select("SELECT us.user_id, professional_id, email_address, username, first_name, last_name, mobile_number, social_media, location, expertise, availability, rates FROM users AS us INNER JOIN profiles AS p ON us.user_id = p.user_id INNER JOIN professionals AS p1 ON p.profile_id = p1.profile_id WHERE us.user_id = " . $user_id);
        if (!empty($user)) {
            $firstUser = $user[0];
            session()->put('username', $firstUser->username);
            session()->put('professional_id', $firstUser->professional_id);
        }
        return view('03_profile', compact('user'));
    }

    // Show Profile Edit Page
    public function editProfile_p()
    {
        $user_id = Session::get("user_id");
        $user = DB::select("SELECT us.user_id, professional_id, email_address, username, first_name, last_name, mobile_number, social_media, location, expertise, availability, rates FROM users AS us INNER JOIN profiles AS p ON us.user_id = p.user_id INNER JOIN professionals AS p1 ON p.profile_id = p1.profile_id WHERE us.user_id = " . $user_id);
        return view('03_profile-edit', compact('user'));
    }

    // Update DB - redirect to Profile page
    public function updateProfile_p(Request $request)
    {
        $user_id = Session::get("user_id");
        $professional_id = Session::get("professional_id");
        $user = User::where('user_id', $user_id)
        ->update([
            'email_address' => $request->input('email_address'),
        ]);
        $profile = Profile::where('user_id', $user_id)
        ->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'mobile_number' => $request->input('mobile_number'),
            'username' => $request->input('username'),
            'social_media' => $request->input('social_media'),
            'location' => $request->input('location'),
        ]);
        $professional = Professional::where('professional_id', $professional_id)
        ->update([
            'expertise' => $request->input('expertise'),
            'availability' => $request->input('availability'),
            'rates' => $request->input('rates'),
        ]);

        return redirect('03_profile');
    }


    // User Dashboard
    public function searchFunction_p(Request $request)
    {
        $expertise = $request->input("expertise");
        $rate = $request->input("rate");
        $location = $request->input("location");
        if ($expertise) {
            $results = DB::select("SELECT pr1.professional_id, pr1.profile_id, username, expertise, availability, rates, pr2.location, region, lat, lng FROM professionals AS pr1
            INNER JOIN profiles as pr2 ON pr1.profile_id = pr2.profile_id
            INNER JOIN locations as l ON l.location = pr2.location WHERE region = " . $location);
            return view('02_dashboard', compact('expertise', 'rate', 'location', 'results'));
        } else {
            $results = DB::select("SELECT pr1.professional_id, pr1.profile_id, username, expertise, availability, rates, pr2.location FROM professionals AS pr1
            INNER JOIN profiles as pr2 ON pr1.profile_id = pr2.profile_id LIMIT 5");
            return view('03_dashboard', compact('expertise', 'rate', 'location', 'results'));
        }
    }
    
    // Show Reviews
    public function showReviews_p()
    {
        $user_id = Session::get("user_id");
        $user_reviews = DB::select("SELECT username, booking_id, rating, review, last_update FROM users AS us
        INNER JOIN profiles AS p ON us.user_id = p.user_id 
        INNER JOIN reviews AS r ON us.user_id = reviewer_id
        WHERE reviewer_id = " . $user_id);
        $professional_reviews = DB::select("SELECT username, booking_id, rating, review, last_update FROM users AS us
        INNER JOIN profiles AS p ON us.user_id = p.user_id 
        INNER JOIN reviews AS r ON us.user_id = reviewer_id
        WHERE reviewee_id = " . $user_id);
        return view('03_reviews', compact('user_reviews', 'professional_reviews'));
    }

    // Show Messages
    public function showMessages_p()
    {
        $user_id = Session::get("user_id");
        $messages_sent = DB::select("SELECT message_id, sender_id, receiver_id, p.username AS receiver_username, content, date, time FROM messages AS m
        INNER JOIN profiles AS p ON p.user_id = m.receiver_id
        WHERE sender_id = " . $user_id);
        $messages_received = DB::select("SELECT message_id, sender_id, receiver_id, p.username AS sender_username, content, date, time FROM messages AS m
        INNER JOIN profiles AS p ON p.user_id = m.sender_id
        WHERE receiver_id = " . $user_id);
        
        return view('03_messages', compact('messages_received', 'messages_sent'));
    }

    // Show Bookings
    public function bookingHistory_p()
    {
        $user_id = Session::get("user_id");
        $professional_id = Session::get("professional_id");
        $user_bookings = DB::select("SELECT booking_id, b.user_id, username, location, professional_id, date, time, status FROM bookings as b
        INNER JOIN profiles as p ON p.user_id = b.user_id
        WHERE professional_id = " . $professional_id);
        return view('03_bookings', compact('user_bookings'));
    }

    // Book Appointment
    // public function addBooking_p(Request $request)
    // {
    //     $booking = new Booking;
    //     $booking->user_id = Session::get("user_id");
    //     $booking->professional_id = $request->input('professional_id');
    //     $booking->date = now()->timezone('Asia/Manila')->toDateString();
    //     $booking->time = now()->timezone('Asia/Manila')->toTimeString();
    //     $booking->status = "Pending";
    //     $booking->save();

    //     $user_id = Session::get("user_id");
    //     $user_bookings = DB::select("SELECT booking_id, b.user_id, username, professional_id, date, time, status FROM users AS us
    //     INNER JOIN profiles AS p ON us.user_id = p.user_id 
    //     INNER JOIN bookings AS b ON us.user_id = b.user_id
    //     WHERE b.user_id = " . $user_id);

    //     return view('03_bookings', compact('user_bookings'));
    // }

    // Show Payments
    public function paymentHistory_p()
    {
        $user_id = Session::get("user_id");
        $professional_id = Session::get("professional_id");
        $user_payments = DB::select("SELECT payment_id, p.booking_id, p.user_id, username, professional_id, amount, p.date, p.time, p.status FROM payments AS p
        INNER JOIN bookings AS b ON b.booking_id = p.booking_id
        INNER JOIN profiles AS p1 ON p1.user_id = p.user_id
        WHERE professional_id = " . $professional_id);
        return view('03_payments', compact('user_payments'));
    }

    // Edit Booking Status
    public function editBooking($booking_id)
    {
        $user_id = Session::get("user_id");
        $booking = DB::select("SELECT booking_id, user_id, professional_id, date, time, status FROM bookings
        WHERE booking_id =" . $booking_id);
        return view('03_bookings-edit', compact('booking'));
    }

    // Update Booking Status
    public function updateBooking($booking_id, Request $request)
    {
        $user_id = Session::get("user_id");
        $booking = Booking::where('booking_id', $booking_id)
        ->update([
            'status' => $request->input('status'),
        ]);

        return redirect('03_bookings');
    }
    

}
