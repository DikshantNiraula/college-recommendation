<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        // Retrieve the validated form data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        $data = $request->all();
        // Store the uploaded image
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $imagePath = $imageName;
        }
        
        // Create a new testimonial record
        $testimonial = new Testimonial([
            'name' => $data['name'],
            'description' => $data['description'],
            'image' => $imagePath,
            'designation' => $data['designation']
        ]);

        // Save the testimonial record
        $testimonial->save();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial added successfully!');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        // Retrieve the validated form data
        // Retrieve the validated form data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        $data = $request->all();
        
        // Update the testimonial record
        $testimonial->update([
            'name' => $data['name'],
            'description' => $data['description'],
            'designation' => $data['designation']
        ]);

        // Update the image if a new one is uploaded
        if ($request->hasFile('image')) {
            // Delete old image
            Storage::disk('public')->delete($testimonial->image);

            // Store the new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $imagePath = $imageName;
            $testimonial->update(['image' => $imagePath]);
        }

        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully!');
    }

    public function destroy($id)
    {
        // Delete the testimonial record
        $testimonial = Testimonial::where('id',$id)->first();
        $testimonial->delete();

        // Delete the image
        Storage::disk('public')->delete($testimonial->image);

        return redirect()->back()->with('success', 'Testimonial deleted successfully!');
    }
}
