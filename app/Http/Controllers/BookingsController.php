<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Hash;
use Session;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (Session::get('user_type') == 'admin') {
            $bookings = DB::select("SELECT * FROM bookings ORDER BY booking_id DESC LIMIT 10;");
            return view('/04_bookings', compact('bookings'));
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
        return view('/04_bookings-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        DB::statement('ALTER TABLE bookings AUTO_INCREMENT = 1');
        $booking = new Booking;
        $booking->user_id = $request->input('user_id');
        $booking->professional_id = $request->input('professional_id');
        $booking->date = $request->input('date');
        $booking->time = $request->input('time');
        $booking->status = $request->input('status');
        $booking->save();
        
        return redirect("/admin/bookings");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $booking = DB::select("SELECT * FROM bookings WHERE booking_id = " . $id);
        return view('/04_bookings-show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $booking = DB::select("SELECT * FROM bookings WHERE booking_id = " . $id);
        return view('/04_bookings-edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $booking = Booking::where('booking_id', $id)
        ->update([
            'user_id' =>  $request->input('user_id'),
            'professional_id' =>  $request->input('professional_id'),
            'date' =>  $request->input('date'),
            'time' =>  $request->input('time'),
            'status' =>  $request->input('status'),
        ]);

        return redirect('/admin/bookings');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $class = Booking::where('booking_id', $id)->delete();

        return redirect('/admin/bookings');
    }
}
