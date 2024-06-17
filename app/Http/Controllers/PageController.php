<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Slides;
use App\Models\Apartment;
use App\Models\Advantage;
use App\Models\Attraction;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

        $slides = Slides::orderBy('sort')->get();
        $advantages = Advantage::orderBy('sort')->get();
        $offers = Offer::orderBy('sort')->get();
        $attractions = Attraction::orderBy('sort')->get();
        $testimonials = Testimonial::orderBy('sort')->get();
        $apartments = Apartment::orderBy('sort')->get();




        return view('pages.home.index', ['slides' => $slides, 'advantages' => $advantages, 'offers' => $offers, 'attractions' => $attractions, 'testimonials' => $testimonials,'apartments'=>$apartments]);
    }
}
