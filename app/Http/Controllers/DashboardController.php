<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Faq;
use App\Models\Inquiry;
use App\Models\Service;

class DashboardController extends Controller
{
    public function index()
    {
        $blogCount = Blog::count();
        $serviceCount = Service::count();
        $faqCount = Faq::count();
        $enquiryCount = Inquiry::count();

        return view('admin.dashboard',compact('blogCount','serviceCount','faqCount','enquiryCount'));
    }
}
