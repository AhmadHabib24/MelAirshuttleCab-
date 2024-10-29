<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
{
    $testimonials = Testimonial::all();
   // Check if this outputs the expected data
//    dd($testimonials);
    return view('user.Testimonial', compact('testimonials'));
}


    public function adminindex()
    {
        $testimonials = Testimonial::all(); // Fetch all testimonials from the database
        return view('auth.testimonials.index', compact('testimonials')); // Pass data to view
    }

    public function create()
    {
        return view('auth.testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'author_name' => 'required|string|max:255',
            'author_title' => 'required|string|max:255',
            'content' => 'required|string',
            'author_image' => 'nullable|image',
        ]);

        $testimonial = new Testimonial();
        $testimonial->author_name = $request->author_name;
        $testimonial->author_title = $request->author_title;
        $testimonial->content = $request->content;

        if ($request->hasFile('author_image')) {
            $imageName = time() . '_' . $request->file('author_image')->getClientOriginalName();
            $imagePath = "testimonials/$imageName";

            // Move the uploaded file to the specified path
            $request->file('author_image')->move(public_path('testimonials'), $imageName);
            $testimonial->author_image = $imagePath;
        }

        $testimonial->save();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial added successfully');
    }




    public function edit(Testimonial $testimonial)
    {
        return view('auth.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'author_name' => 'required|string|max:255',
            'author_title' => 'required|string|max:255',
            'content' => 'required|string',
            'author_image' => 'nullable|image',
        ]);

        $testimonial->author_name = $request->author_name;
        $testimonial->author_title = $request->author_title;
        $testimonial->content = $request->content;

        if ($request->hasFile('author_image')) {
            // Check and delete the old image if it exists
            if ($testimonial->author_image) {
                $oldImagePath = public_path($testimonial->author_image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $imageName = time() . '_' . $request->file('author_image')->getClientOriginalName();
            $imagePath = "testimonials/$imageName";

            // Move the uploaded file to the specified path
            $request->file('author_image')->move(public_path('testimonials'), $imageName);
            $testimonial->author_image = $imagePath;
        }

        $testimonial->save();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated successfully');
    }



    public function destroy(Testimonial $testimonial)
    {
        // Delete the image if it exists
        if ($testimonial->author_image) {
            Storage::disk('public')->delete($testimonial->author_image);
        }
        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted successfully');
    }
}
