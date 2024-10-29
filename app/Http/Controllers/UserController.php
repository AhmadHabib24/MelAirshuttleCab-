<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\CarCategory;
use App\Models\OurService;
use App\Models\Car;
use App\Models\DirectBooking;

class UserController extends Controller
{
    //
    public function loadview()
    {
        $about = AboutUs::all();
        $services = OurService::all();

        // Fetch distinct car category names by joining with car_categories table
        $car_categories = Car::distinct()
            ->join('car_categories', 'cars.car_category', '=', 'car_categories.id')
            ->pluck('car_categories.name'); // Get the name from car_categories

        // Fetch all cars with their relevant details, including category
        $cars = Car::with('category') // Assuming Car model has a 'category' relationship
            ->get();

        return view('user.index', compact('about', 'services', 'car_categories', 'cars'));
    }
    public function direct_booking(Request $request)
    {
        // Get the car data from the request
        $carData = [
            'car_name' => $request->query('car_name'),
            'car_model' => $request->query('car_model'),
            'initial_charge' => $request->query('initial_charge'),
            'per_mil_km' => $request->query('per_mil_km'),
            'per_stopped_traffic' => $request->query('per_stopped_traffic'),
            'passengers' => $request->query('passengers'),
        ];

        return view('user.direct-booking', compact('carData'));
    }
    public function storeBooking(Request $request)
    {
        // Validate the request data
        $request->validate([
            'car_name' => 'required|string',
            'car_model' => 'required|string',
            'initial_charge' => 'required|numeric',
            'per_mil_km' => 'required|numeric',
            'per_stopped_traffic' => 'required|numeric',
            'passengers' => 'required|integer',
            'email' => 'required|email',
            'phone' => 'required|string',
            'name' => 'required|string',
            'starting_dest' => 'required|string',
            'ending_dest' => 'required|string',
            'ride_date' => 'required|date',
            'ride_time' => 'required|date_format:H:i',
            'message' => 'nullable|string',
        ]);

        // Create a new booking
        DirectBooking::create($request->all());

        // Redirect or return response
        return redirect()->route('thank-you')->with('success', 'Booking successful! Our team will contact you shortly. If you are in a hurry, please call us at +923037887248 for further details.');
    }




    public function faqspage()
    {
        return view('user.Faqs');
    }
    // public function ouroffers()
    // {
    //     $services = OurService::all();
    //     return view('user.index',compact('services'));
    // }


    public function fare(Request $request)
    {
        // Validate the input
        $request->validate([
            'pick' => 'required|string',
            'delivery' => 'required|string',
        ]);

        $pick = str_replace(' ', '', $request->input('pick'));
        $delivery = str_replace(' ', '', $request->input('delivery'));

        

        // Get the distance from Google Distance Matrix API
        $apiKey = env('GOOGLE_MATRIX_API_KEY');
        $apiUrl = 'https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins=' . urlencode($pick) . '&destinations=' . urlencode($delivery) . '&key=' . $apiKey;

        $mileageResult = file_get_contents($apiUrl);
        
        $response = json_decode($mileageResult, true);

        // Check if the response contains valid distance data
        if (isset($response['rows'][0]['elements'][0]['distance']['value'])) {
            // Get distance in meters and convert to kilometers
            $distanceInKilometers = $response['rows'][0]['elements'][0]['distance']['value'] / 1000;

            // Price per kilometer
            $pricePerKilometer = 2.50;

            // Calculate total fare
            $totalFare = $distanceInKilometers * $pricePerKilometer;
            session(['distance' => $distanceInKilometers, 'fare' => $totalFare]);
        
                return view('user.fare', compact('totalFare','distanceInKilometers'));
            // Store the distance and fare in the session
          
        } else {
            // Handle error if the API response does not contain valid distance data
            return redirect()->route('fareestimate')->withErrors(['error' => 'Unable to calculate distance.']);
        }
    }

    public function showFareEstimate()
{
    // Retrieve distance and fare from session
    $distance = session('distance');
    $fare = session('fare');

    // Pass the values to the view
    return view('user.fare', compact('distance', 'fare'));
}
}
