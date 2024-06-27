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
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
  
    public function __invoke(Request $request)
    {
        $slides = Cache::remember('slides', 60, function () {
            return Slide::orderBy('sort')->get();
        });

        $advantages = Cache::remember('advantages', 60, function () {
            return Advantage::orderBy('sort')
                ->select('id', 'title', 'description', 'thumbnail')
                ->get();
        });

        $offers = Cache::remember('offers', 60, function () {
            return Offer::published()->orderBy('sort')
                ->select('id', 'title', 'slug', 'short_desc', 'thumbnail', 'price', 'nights', 'food')->get();
        });

        $apartments = Cache::remember('apartments', 60, function () {
            return Apartment::orderBy('sort')
                ->select('id','name','slug','surface','person','beds','reservation_link','short_desc')
                ->selectRaw("JSON_UNQUOTE(JSON_EXTRACT(gallery, '$[0]')) as thumbnail")
                ->get();
        });

        $gallery = Cache::remember('gallery', 60, function () {
            return HomeGallery::orderBy('sort')->get();
        });

        $attractions = Cache::remember('attractions', 60, function () {
            return LocalAttraction::orderBy('sort')
                ->take(3)
                ->select('id','title','description')
                ->selectRaw("JSON_UNQUOTE(JSON_EXTRACT(images, '$[0]')) as thumbnail")
                ->get();
        });

        $testimonials = Cache::remember('testimonials', 60, function () {
            return Testimonial::orderBy('sort')->get();
        });

        return view('pages.home.index', compact('slides', 'advantages', 'offers', 'attractions', 'testimonials', 'apartments', 'gallery'));
    }
}
