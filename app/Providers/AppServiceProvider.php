<?php

namespace App\Providers;

use App\Models\settings;
use App\Models\Testimonial;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
    }
    public function boot()
    {
        $settings=settings::where('id',1)->first();
        View::share('settings', $settings);
        $testimonials= Testimonial::orderBy('id','DESC')->get();
        View::share('testimonials', $testimonials);
    }
}
