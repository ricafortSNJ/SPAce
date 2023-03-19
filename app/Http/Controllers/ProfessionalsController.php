<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Models\Professional;
use Illuminate\Support\Facades\Hash;
use Session;

class ProfessionalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (Session::get('user_type') == 'admin') {
            $professionals = DB::select("SELECT * FROM professionals ORDER BY professional_id DESC LIMIT 10;");
            return view('/04_professionals', compact('professionals'));
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
        return view('/04_professionals-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        DB::statement('ALTER TABLE professionals AUTO_INCREMENT = 1');
        $professional = new Professional;
        $professional->profile_id = $request->input('profile_id');
        $professional->expertise = $request->input('expertise');
        $professional->availability = $request->input('availability');
        $professional->rates = $request->input('rates');
        $professional->save();
        
        return redirect("/admin/professionals");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $professional = DB::select("SELECT * FROM professionals WHERE professional_id = " . $id);
        return view('/04_professionals-show', compact('professional'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $professional = DB::select("SELECT * FROM professionals WHERE professional_id = " . $id);
        return view('/04_professionals-edit', compact('professional'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $professional = Professional::where('professional_id', $id)
        ->update([
            'profile_id' =>  $request->input('profile_id'),
            'expertise' =>  $request->input('expertise'),
            'availability' =>  $request->input('availability'),
            'rates' =>  $request->input('rates'),
        ]);

        return redirect('/admin/professionals');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $class = Professional::where('professional_id', $id)->delete();

        return redirect('/admin/professionals');
    }
}
