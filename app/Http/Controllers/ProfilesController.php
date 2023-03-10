<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $profiles = DB::select("SELECT * FROM profiles LIMIT 20");
        return view('profiles', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('profiles_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $profile = new Profile;
        $profile->email_address = $request->input('email_address');
        $profile->password = $request->input('password');
        $profile->is_customer = $request->input('is_customer');
        $profile->is_professional = $request->input('is_professional');
        $profile->save();
        
        return redirect("admin/profiles");
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
}
