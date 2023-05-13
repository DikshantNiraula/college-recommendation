<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\College;
use App\Models\CollegeCourse;
use App\Models\Faq;
use App\Models\InfoCounter;
use App\Models\Inquiry;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Services\NearestCollegeService;
use Illuminate\Http\Request;

class UiController extends Controller
{
    public function home()
    {
        $colleges = College::latest()->get();
        $courses = CollegeCourse::latest()->get();
        return view('ui.home', compact('colleges','courses'));
    }

    public function about()
    {
        $about = AboutUs::first();
        $infocount = InfoCounter::first();
        $testimonials = Testimonial::latest()->limit(5)->get();
        return view('ui.about', compact('about','infocount','testimonials'));
    }

    public function services()
    {
        $setting = Setting::first();
        $services = Service::latest()->limit(16)->get();
        return view('ui.services', compact( 'services','setting'));
    }

    public function service($slug)
    {
        $services = Service::latest()->limit(10)->get();
        $service = Service::where('id',$slug)->first();
        return view('ui.service', compact( 'service','services'));
    }

    public function colleges()
    {
        $colleges = College::latest()->get();
        $courses = CollegeCourse::orderBy('title','asc')->limit(10)->get();
        return view('ui.colleges', compact( 'colleges','courses')); 
    }


    public function blogs()
    {
        $blogs = Blog::latest()->paginate(3);
        return view('ui.blogs', compact('blogs'));
    }
    
    public function blogDetail()
    {
        return view('ui.blog');
    }

    public function faqs()
    {
        $faqs = Faq::latest()->limit(25)->get();
        return view('ui.faqs', compact( 'faqs'));
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('ui.contact', compact('setting', ));
    }

    public function terms()
    {
        $pageTitle = "Terms and Conditions";
        $terms = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id elit eget sapien bibendum aliquam. Nam quis augue auctor, tincidunt elit at, lobortis elit. Nunc eleifend velit id nulla ultrices venenatis. Sed ut augue auctor, bibendum tellus vitae, placerat enim.";
        return view('ui.terms', compact('pageTitle', 'terms'));
    }

    public function storeInquiry(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'string|email|max:255',
            'phone' => 'required|string|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'service_id' => 'nullable'
        ]);

        Inquiry::create($request->all());

        //Pending Mail to Client

        return back()->with('success', 'Enquiry sent successfully!');;
    }

    public function getNearestColleges(Request $request)
    {
         // Retrieve the location from the request
    $locationData = $request->all();

    // Call the college service to get the nearest colleges
    $colleges = (new NearestCollegeService)->getNearestColleges($locationData);

    // Return the response
return view('ui.append-nearest-college',compact('colleges'))->render();
}
}