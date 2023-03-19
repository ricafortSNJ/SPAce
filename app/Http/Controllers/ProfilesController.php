<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Hash;
use Session;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (Session::get('user_type') == 'admin') {
            $profiles = DB::select("SELECT * FROM profiles ORDER BY profile_id DESC LIMIT 10;");
            return view('/04_profiles', compact('profiles'));
        } else {
            return view('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('/04_profiles-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        DB::statement('ALTER TABLE profiles AUTO_INCREMENT = 1');
        $profile = new Profile;
        $profile->user_id = $request->input('user_id');
        $profile->username = $request->input('username');
        $profile->first_name = $request->input('first_name');
        $profile->last_name = $request->input('last_name');
        $profile->mobile_number = $request->input('mobile_number');
        $profile->image_id = 999;
        $profile->social_media = $request->input('social_media');
        $profile->privacy_setting = 'ABCD';
        $profile->location = $request->input('location');
        $profile->save();
        
        return redirect("/admin/profiles");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $profile = DB::select("SELECT * FROM profiles WHERE profile_id = " . $id);
        return view('/04_profiles-show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $profile = DB::select("SELECT * FROM profiles WHERE profile_id = " . $id);
        return view('/04_profiles-edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $profile = Profile::where('profile_id', $id)
        ->update([
            'user_id' =>  $request->input('user_id'),
            'username' =>  $request->input('username'),
            'first_name' =>  $request->input('first_name'),
            'last_name' =>  $request->input('last_name'),
            'mobile_number' =>  $request->input('mobile_number'),
            'social_media' => $request->input('social_media'),
            'location' =>  $request->input('location'),
        ]);

        return redirect('/admin/profiles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $class = Profile::where('profile_id', $id)->delete();

        return redirect('/admin/profiles');
    }
}
