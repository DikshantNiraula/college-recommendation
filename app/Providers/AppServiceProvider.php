<?php

namespace App\Providers;

use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
          // Share data for first setting
          $setting = Setting::first();
          View::share('setting', $setting);
  
          // Share data for 3 latest blogs
          $blogs = Blog::latest()->take(3)->get();
          View::share('blogs', $blogs);
  
          // Share data for first about us
          $aboutUs = AboutUs::first();
          View::share('aboutUs', $aboutUs);
    }
}
