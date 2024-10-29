<?php

namespace App\Http\Controllers;

use App\Models\OurService;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //
    public function loadView()
    {
        $our_services = OurService::all();
        return view('auth.service.index', compact('our_services'));
    }
    public function create()
    {
        return view('auth.service.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image',
        ]);

        $service = new OurService();
        $service->title = $request->title;
        $service->description = $request->description;

        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $imagePath = "services/$imageName";

            // Move the uploaded file to the specified path
            $request->file('image')->move(public_path('services'), $imageName);
            $service->image = $imagePath;
        }

        $service->save();

        return redirect()->route('admin.our-service.loadView')->with('success', 'Service added successfully');
    }


    public function edit($id)
    {
        // Find the service by ID
        $service = OurService::findOrFail($id);

        // Return the edit view with the service data
        return view('auth.service.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Find the service by ID
        $service = OurService::findOrFail($id);

        // Update the service details
        $service->title = $request->title;
        $service->description = $request->description;

        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $imagePath = "services/$imageName";

            // Move the uploaded file to the specified path
            $request->file('image')->move(public_path('services'), $imageName);
            $service->image = $imagePath;
        }

        // Save the updated service
        $service->save();

        // Redirect back with success message
        return redirect()->route('admin.our-service.loadView')->with('success', 'Service updated successfully!');
    }

    public function destroy($id)
    {
        // Find the service by ID
        $service = OurService::findOrFail($id);
    
        // Delete the service
        $service->delete();
    
        // Redirect back with a success message
        return redirect()->route('admin.our-service.loadView')->with('success', 'Service deleted successfully!');
    }
    
}
