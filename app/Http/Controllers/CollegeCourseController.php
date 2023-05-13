<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\CollegeCourse;
use Illuminate\Http\Request;

class CollegeCourseController extends Controller
{
    public function index()
    {
        $courses = CollegeCourse::latest()->get();

        return view('admin.courses.index', compact( 'courses'));
    }

    public function create()
    {
        $colleges = College::orderBy('college_name')->get();
        return view('admin.courses.create', compact('colleges'));
    }

    public function store(Request $request, College $college)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'course_detail' => 'required|string',
            'price' => 'required',
            'seats_available' => 'required|integer',
            'course_time_year' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $request['image'] = $imageName;
        }
        
        $course = CollegeCourse::create($request->all());

        return redirect()->route('courses.index')
                ->with('success', 'Course created successfully.');
    }

    public function edit(CollegeCourse $course)
    {
        $colleges = College::orderBy('college_name')->get();
        return view('admin.courses.edit', compact('colleges', 'course'));
    }

    public function update(Request $request, CollegeCourse $course)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'course_detail' => 'required|string',
            'price' => 'required',
            'seats_available' => 'required|integer',
            'course_time_year' => 'required|string',
        ]);

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $request['image'] = $imageName;
        }
        
        $course->update($request->all());

        return redirect()->route('courses.index')
                ->with('success', 'Course updated successfully.');    }

}
