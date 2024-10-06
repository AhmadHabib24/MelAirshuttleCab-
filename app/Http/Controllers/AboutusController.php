<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutusController extends Controller
{
    //
    public function loadview()
    {
        $about = AboutUs::all();
        // dd($about);
        
        return view('user.about-us', compact('about'));
    }
    public function adminview()
    {
        $data = AboutUs::all();
        return view('auth.about.index', compact('data'));
    }
    public function create()
    {
        return view('auth.about.create');
    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string',
            'phone' => 'required|string|max:20',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image
        ]);

        // Create a new instance of the AboutUs model
        $aboutUs = new AboutUs();
        $aboutUs->heading = $request->heading;
        $aboutUs->description = $request->description;
        $aboutUs->phone = $request->phone;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Generate a unique image name
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            // Move the uploaded file to the public directory
            $request->file('image')->move(public_path('about-us'), $imageName);
            $aboutUs->image = 'about-us/' . $imageName; // Save the path relative to public
        }

        // Save the AboutUs record
        $aboutUs->save();

        // Redirect with success message
        return redirect()->route('admin.about.adminview')->with('success', 'About Us details added successfully!');
    }

    public function edit($id)
    {
        // Retrieve the About Us record by ID
        $aboutUs = AboutUs::findOrFail($id);
        return view('auth.about.edit', compact('aboutUs'));
    }
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string',
            'phone' => 'nullable|string|max:15',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Retrieve the existing About Us record
        $aboutUs = AboutUs::findOrFail($id);

        // Update fields
        $aboutUs->heading = $request->input('heading');
        $aboutUs->description = $request->input('description');
        $aboutUs->phone = $request->input('phone');

        // Handle image upload
        if ($request->hasFile('image')) {
            // Generate a unique image name
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            // Move the uploaded file to the public directory
            $request->file('image')->move(public_path('about-us'), $imageName);
            $aboutUs->image = 'about-us/' . $imageName; // Save the path relative to public
        }

        // Save the updated record
        $aboutUs->save();

        return redirect()->route('admin.about.adminview')->with('success', 'About Us updated successfully.');
    }

    public function destroy($id)
    {
        // Retrieve the About Us record by ID
        $aboutUs = AboutUs::findOrFail($id);

        // Optionally delete the associated image file
        if ($aboutUs->image) {
            unlink(public_path($aboutUs->image));
        }

        // Delete the record from the database
        $aboutUs->delete();

        return redirect()->route('admin.about.adminview')->with('success', 'About Us deleted successfully.');
    }
}
