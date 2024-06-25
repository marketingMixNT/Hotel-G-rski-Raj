<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Slide;
use App\Models\Advantage;
use App\Models\Apartment;
use App\Models\HomeGallery;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\LocalAttraction;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $slides = Slide::orderBy('sort')->get();
       
        $advantages = Advantage::orderBy('sort')
            ->select('id', 'title', 'description', 'thumbnail')
            ->get();

        $offers = Offer::published()->orderBy('sort')
            ->select('id', 'title', 'slug', 'short_desc', 'thumbnail', 'price', 'nights', 'food')->get();


        $apartments = Apartment::orderBy('sort')
        ->select('id','name','slug','surface','person','beds','reservation_link','short_desc')
        ->selectRaw("JSON_UNQUOTE(JSON_EXTRACT(gallery, '$[0]')) as thumbnail")
        ->get();

        $gallery = HomeGallery::orderBy('sort')->get();

        $attractions = LocalAttraction::orderBy('sort')
        ->take(3)
        ->select('id','title','description')
        ->selectRaw("JSON_UNQUOTE(JSON_EXTRACT(images, '$[0]')) as thumbnail")
        ->get();

        $testimonials = Testimonial::orderBy('sort')->get();



        return view('pages.home.index', ['slides' => $slides, 'advantages' => $advantages, 'offers' => $offers, 'attractions' => $attractions, 'testimonials' => $testimonials, 'apartments' => $apartments,'gallery'=>$gallery]);
    }
}
