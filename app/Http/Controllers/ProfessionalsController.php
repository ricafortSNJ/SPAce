<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Models\Professional;

class ProfessionalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $professionals = DB::select("SELECT * FROM professionals LIMIT 20");
        return view('professionals', compact('professionals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('professionals_create');
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
}
