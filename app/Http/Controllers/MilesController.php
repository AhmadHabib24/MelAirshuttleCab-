<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MilesController extends Controller
{
    public function fare(Request $request)
    {
        // dd($request->all());
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

            // Return the distance and total fare
            return response()->json([
                'distance' => $distanceInKilometers,
                'fare' => $totalFare
            ]);
        } else {
            // Handle error if the API response does not contain valid distance data
            return response()->json([
                'error' => 'Unable to calculate distance.'
            ], 400);
        }
    }
}
