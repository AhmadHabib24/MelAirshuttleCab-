<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingInfo;
use App\Models\Car;
use App\Models\CarCategory;

class AdminCabBookingController extends Controller
{
    //
    public function Index()
    {
        $data = BookingInfo::all();
        return view('auth.cab-booking.cab-booking', ['bookings' => $data]);
    }
    public function edit($id)
    {
        $booking = BookingInfo::findOrFail($id);
        return view('auth.cab-booking.edit', compact('booking'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string',
            'package_type' => 'required|string|max:255',
            'passengers' => 'required|integer|min:1',
            'start_dest' => 'required|string|max:255',
            'end_dest' => 'required|string|max:255',
            'ride_date' => 'required|date',
            'ride_time' => 'required|date_format:H:i',
            'luggage' => 'required|string|max:225',
        ]);

        $booking = BookingInfo::findOrFail($id);
        $booking->update($request->all());

        return redirect()->route('cab-booking')->with('success', 'Booking updated successfully!');
    }

    public function destroy($id)
    {
        $booking = BookingInfo::findOrFail($id);
        // dd($booking);
        $booking->delete();
        return redirect()->route('cab-booking')->with('success', 'Booking deleted successfully');
    }

    public function view()
    {
        $cardata = Car::with('category')->get();
        // dd($cardata);

        // dd($cardata);
        return view('auth.direct-booking.index', compact('cardata'));
    }
    public function createbooking()
    {
        $category = CarCategory::all();
        return view('auth.direct-booking.create', compact('category'));
    }
    public function storebooking(Request $request)
    {
        // Validate the form data
        $request->validate([
            'car_name' => 'required|string|max:255',
            'car_model' => 'required|string|max:255',
            'initial_charge' => 'required|numeric',
            'per_mil_km' => 'required|numeric',
            'per_stopped_traffic' => 'required|numeric',
            'passengers' => 'required|numeric',
            'car_category' => 'required|integer|exists:car_categories,id', // Updated validation rule
            'car_image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Validate image
        ]);

        // Initialize variable to store image path
        $carImagePath = null;

        // Handle file upload using the specified approach
        if ($request->hasFile('car_image')) {
            // Generate a unique image name
            $imageName = time() . '_' . $request->file('car_image')->getClientOriginalName();
            // Move the uploaded file to the public directory
            $request->file('car_image')->move(public_path('car_images'), $imageName);
            $carImagePath = 'car_images/' . $imageName; // Save the path relative to public
        }

        // Save the data into the database
        Car::create([
            'car_name' => $request->input('car_name'),
            'car_model' => $request->input('car_model'),
            'initial_charge' => $request->input('initial_charge'),
            'per_mil_km' => $request->input('per_mil_km'),
            'per_stopped_traffic' => $request->input('per_stopped_traffic'),
            'passengers' => $request->input('passengers'),
            'car_category' => $request->input('car_category'), // Ensure this is the ID of the category
            'car_image' => $carImagePath, // Use the new image path variable
        ]);

        // Redirect with success message
        return redirect()->route('direct-booking.view')->with('success', 'Offer added successfully.');
    }

    public function editbooking($id)
    {
        $car = Car::findOrFail($id);
        // dd($category);
        return view('auth.direct-booking.edit', compact('car'));
    }
    public function updatebooking(Request $request, $id)
    {
        // Find the car by ID
        $car = Car::findOrFail($id);

        // Validate incoming request data
        $request->validate([
            'car_name' => 'required|string|max:255',
            'car_model' => 'required|string|max:255',
            'initial_charge' => 'required|numeric',
            'per_mil_km' => 'required|numeric',
            'per_stopped_traffic' => 'required|numeric',
            'passengers' => 'required|integer',
            'car_category' => 'required|string|max:255',
            'car_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        ]);

        // Update the car details
        $car->car_name = $request->input('car_name');
        $car->car_model = $request->input('car_model');
        $car->initial_charge = $request->input('initial_charge');
        $car->per_mil_km = $request->input('per_mil_km');
        $car->per_stopped_traffic = $request->input('per_stopped_traffic');
        $car->passengers = $request->input('passengers');
        $car->car_category = $request->input('car_category');

        // Handle image upload
        if ($request->hasFile('car_image')) {
            // Delete the old image if it exists
            if ($car->car_image) {
                // Assuming the old image path is stored relative to the public folder
                $oldImagePath = public_path($car->car_image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Delete the old image
                }
            }

            // Generate a unique image name
            $imageName = time() . '_' . $request->file('car_image')->getClientOriginalName();
            // Move the uploaded file to the public directory
            $request->file('car_image')->move(public_path('car_images'), $imageName);
            $car->car_image = 'car_images/' . $imageName; // Save the path relative to public
        }

        // Save the updated car details
        $car->save();

        // Redirect to the booking view with a success message
        return redirect()->route('direct-booking.view')->with('success', 'Offer updated successfully.');
    }

    public function deletebooking($id)
    {
        $car = Car::findOrFail($id);
        // dd($booking);
        $car->delete();
        return redirect()->route('direct-booking.view')->with('success', 'Offer deleted successfully');
    }



    //car_category

    public function car_category()
    {
        $carcategory = CarCategory::all();

        return view('auth.car-category.index', compact('carcategory'));
    }
    public function categorycreate()
    {
        return view('auth.car-category.create');
    }

    public function categorystore(Request $request)
    {
        $request->validate([
            'car_category' => 'required|string|max:255',

        ]);
        // dd($request);
        CarCategory::create([
            'name' => $request->input('car_category'),

        ]);
        return redirect()->route('car-category.view')->with('success', 'Car Category added successfully.');
    }
    public function categoryedit($id)
    {
        $category = CarCategory::findOrFail($id);
        // dd($category);
        return view('auth.car-category.edit', compact('category'));
    }

    public function categoryupdate(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        $category = CarCategory::findOrFail($id);
        $category->update($request->all());

        return redirect()->route('car-category.view')->with('success', 'Category updated successfully!');
    }
    public function categorydelete($id)
    {
        $Category = CarCategory::findOrFail($id);
        // dd($booking);
        $Category->delete();
        return redirect()->route('car-category.view')->with('success', 'Category deleted successfully');
    }
}
