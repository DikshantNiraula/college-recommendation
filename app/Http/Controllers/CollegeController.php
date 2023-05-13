<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function index()
    {
        $colleges = College::all();
        return view('admin.colleges.index', compact('colleges'));
    }
    
    public function create()
    {
        return view('admin.colleges.create');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'college_name' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable',
        ]);

        $college = new College();

        $college->fill($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $college->image = $imageName;
        }

   
        $college->save();

        return redirect()->route('colleges.index')
            ->with('success', 'College created successfully.');
    }
    
    public function edit(College $college)
    {
        return view('admin.colleges.edit', compact('college'));
    }
    
    public function update(Request $request, College $college)
    {
        $college->fill($request->all());
        $college->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);

            $college->fill(['image' => $imageName]);
            $college->save();
        }

    
        return redirect()->route('colleges.index')
            ->with('success', 'College updated successfully.');

    }
    
    public function destroy(College $college)
    {
        $college->delete();
        return redirect()->route('colleges.index')
        ->with('success', 'College deleted successfully.');
    }
    
}
