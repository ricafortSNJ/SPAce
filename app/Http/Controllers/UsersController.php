<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (Session::get("id") == 17) {
            $users = DB::select("SELECT * FROM users LIMIT 20");
            return view('users', compact('users'));
        } else {
            return view('unauthorized');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('users_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $user = new User;
        $user->email_address = $request->input('email_address');
        $user->password = $request->input('password');
        $user->is_customer = $request->input('is_customer');
        $user->is_professional = $request->input('is_professional');
        $user->save();
        
        return redirect("admin/users");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $user = DB::select("SELECT us.user_id, email_address, password, username, first_name, last_name, mobile_number, social_media FROM users AS us
        INNER JOIN profiles AS p ON us.user_id = p.user_id WHERE us.user_id = " . $id);
        return view('users_show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $user = DB::select("SELECT * FROM users WHERE user_id = " . $id);
        return view('users_edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user = User::where('user_id', $id)
        ->update([
            'email_address' => $request->input('email_address'),
            'password' => $request->input('password'),
            'is_customer' => $request->input('is_customer'),
            'is_professional' => $request->input('is_professional'),
        ]);

        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $class = User::where('user_id', $id)->delete();

        return redirect('/admin/users');
    }


    /**
     * USER Functions
     */

    public function showRegister() 
    {
        return view('1_register');
    }
    public function Register(Request $request) 
    {
        DB::statement('ALTER TABLE users AUTO_INCREMENT = 1');
        $user = new User;
        $user->email_address = $request->input("email_address");
        $user->password = Hash::make($request->input("password"));
        $user->user_type = "customer";
        $user->save();

        return redirect('login');
    }
    public function showLogin()
    {
        return view('1_login');
    }

    public function login(Request $request)
    {
        $user = User::where("email_address", "=", $request->email_address)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('id', $user->user_id);
                $request->session()->put('email_address', $user->email_address);
                $request->session()->put('user_type', $user->user_type);
                //if (Session::get('user_type') == 'admin') {
                //    return redirect('/admin/users');
                //}
                return redirect('profile');
            } else {
                return "Incorrect password!";
            }
        } else {
            return "No account is registered to that email!";
        }
    }
    public function logout()
    {
        if (Session::has('id')) {
            Session::pull('id');
            Session::pull('email_address');
            Session::pull('user_type');
            return redirect('/');
        }
    }

    public function showProfile()
    {
        //
        //if (Session::get("id") == 17) {
        //    $users = DB::select("SELECT * FROM users LIMIT 20");
        //    return view('users', compact('users'));
        //} else {
        //    return view('unauthorized');
        //}
        $id = Session::get("id");
        $user = DB::select("SELECT us.user_id, email_address, password, username, first_name, last_name, mobile_number, social_media FROM users AS us
        INNER JOIN profiles AS p ON us.user_id = p.user_id WHERE us.user_id = " . $id);
        return view('profilepage', compact('user'));
        
        
        //return view('users_show', compact('user'));
    }

    public function showReview()
    {
        //
        //if (Session::get("id") == 17) {
        //    $users = DB::select("SELECT * FROM users LIMIT 20");
        //    return view('users', compact('users'));
        //} else {
        //    return view('unauthorized');
        //}
        $id = Session::get("id");
        $user_reviews = DB::select("SELECT username, booking_id, rating, review, last_update FROM users AS us
        INNER JOIN profiles AS p ON us.user_id = p.user_id 
        INNER JOIN reviews AS r ON us.user_id = reviewer_id
        WHERE us.user_id = " . $id);
        return view('reviewpage', compact('user_reviews'));
        
        
        //return view('users_show', compact('user'));
    }
}
