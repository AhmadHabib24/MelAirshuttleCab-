<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\BookingInfo;

class BookingController extends Controller
{
    //
    public function loadview()
    {
        return view('user.booking-ride');
    }
    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'full-name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string', // Changed from numeric to string to handle special characters
            'package-type' => 'required|string',
            'passengers' => 'required|integer|min:1|max:5',
            'start-dest' => 'required|string|max:255',
            'end-dest' => 'required|string|max:255',
            'ride-date' => 'required|date_format:d/m/Y', // Ensure this matches the format
            'ride-time' => 'required|date_format:H:i',
            'luggage' => 'required|string|max:225',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // dd($request->all());

        // Convert the date from DD/MM/YYYY to YYYY-MM-DD
        $date = $request->input('ride-date');
        $formattedDate = \DateTime::createFromFormat('d/m/Y', $date)->format('Y-m-d');

        // Save the booking info
        BookingInfo::create([
            'full_name' => $request->input('full-name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'package_type' => $request->input('package-type'),
            'passengers' => $request->input('passengers'),
            'start_dest' => $request->input('start-dest'),
            'end_dest' => $request->input('end-dest'),
            'ride_date' => $formattedDate, // Use the formatted date
            'ride_time' => $request->input('ride-time'),
            'luggage' => $request->input('luggage'),
        ]);

        // Redirect to a page with a success message
        return redirect()->route('thank-you')->with('success', 'Booking successful! Our team will contact you shortly. If you are in a hurry, please call us at +923037887248 for further details.');
    }
}
