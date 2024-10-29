<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MatrixApiService;

class MatrixController extends Controller
{
    //
    protected $matrixApiService;

    public function __construct(MatrixApiService $matrixApiService)
    {
        $this->matrixApiService = $matrixApiService;
    }

    public function index(Request $request)
    {
        // Get parameters from request
        $params = $request->all();

        // Fetch data from the Matrix API
        $data = $this->matrixApiService->fetchData($params);

        return response()->json($data);
    }
    public function showForm()
    {
        return view('user.matrix'); // Ensure this points to the correct Blade view
    }

    

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'origin' => 'required|string',
            'destination' => 'required|string',
        ]);
    
        $data = $this->matrixApiService->fetchData($validated);
    
        // Log the data instead of dumping
        // Log::info('Matrix API Response:', $data);
    
        return response()->json($data);
    }
    
}
