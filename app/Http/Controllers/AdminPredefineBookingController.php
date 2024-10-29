<?php

namespace App\Http\Controllers;

use App\Models\DirectBooking;


use Illuminate\Http\Request;

class AdminPredefineBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $booking = DirectBooking::all();
        // dd( $booking);
        return view('auth.predefine-booking.index', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        // Find the specific booking by its ID
        $booking = DirectBooking::findOrFail($id);
        // Return the edit view with the booking data
        return view('auth.predefine-booking.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // Validate the request
        $request->validate([
            'car_name' => 'required|string|max:255',
            'car_model' => 'required|string|max:255',
            'initial_charge' => 'required|numeric',
            'per_mil_km' => 'required|numeric',
            'passengers' => 'required|integer',
            'ride_date' => 'required|date',
            'ride_time' => 'required',
            // Add other validations as necessary
        ]);

        // Find the booking by its ID
        $booking = DirectBooking::findOrFail($id);

        // Update booking details
        $booking->update($request->all());

        // Redirect back with a success message
        return redirect()->route('category-booking.index')->with('success', 'Predefine Booking updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the booking by its ID
        $booking = DirectBooking::findOrFail($id);

        // Delete the booking from the database
        $booking->delete();

        // Redirect to the index page with a success message
        return redirect()->route('category-booking.index')->with('success', 'Predefine Booking deleted successfully.');
    }
}
