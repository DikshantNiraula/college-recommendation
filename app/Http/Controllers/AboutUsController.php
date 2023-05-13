<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function create()
    {
        return view('admin.about-us.create');
    }

    public function edit()
    {
        $about = AboutUs::first();
        return view('admin.about-us.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable',
        ]);

        $aboutUs = AboutUs::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);
            $aboutUs->image = $imageName;
        }

        $aboutUs->title = $validatedData['title'];
        $aboutUs->description = $validatedData['description'];
        $aboutUs->save();

        // toastr()->success('About Us Updated successfully!', 'Success');

        return redirect()->back()->with('success', 'About Us Updated Successfully');
    }
}
