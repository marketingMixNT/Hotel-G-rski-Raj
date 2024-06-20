<?php

namespace App\Http\Controllers;

use App\Models\Slide;


use App\Models\Offer;
use App\Models\Apartment;
use App\Models\Advantage;
use App\Models\Attraction;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

        $slides = Slide::orderBy('sort')->get();
        $advantages = Advantage::orderBy('sort')->get();
        $offers = Offer::orderBy('sort')->get();
        $attractions = Attraction::orderBy('sort')->get();
        $testimonials = Testimonial::orderBy('sort')->get();
        $apartments = Apartment::orderBy('sort')->get();




        return view('pages.home.index', ['slides' => $slides, 'advantages' => $advantages, 'offers' => $offers, 'attractions' => $attractions, 'testimonials' => $testimonials, 'apartments' => $apartments]);
    }

    public function apartments()
    {

        $apartments = Apartment::orderBy('sort')->get();

        return view('pages.apartments.index', ['apartments' => $apartments]);
    }

    public function apartment($slug)
    {


        $apartment = Apartment::where('slug->pl', $slug)->first();

        $otherApartments = Apartment::select('id', 'name', 'slug', 'short_desc', 'surface', 'beds', 'person')
            ->selectRaw("JSON_UNQUOTE(JSON_EXTRACT(gallery, '$[0]')) as thumbnail")
            ->where('id', '!=', $apartment->id)
            ->orderBy('sort')
            ->get();

        return view('pages.apartment.index', ['apartment' => $apartment, 'otherApartments' => $otherApartments]);
    }

    public function offers()
    {

        $offers = Offer::orderBy('sort')->get();

        return view('pages.offers.index', ['offers' => $offers]);
    }

    public function offert($slug)
    {


        $offer = Offer::where('slug->pl', $slug)->first();

        $otherOffers = Offer::select('id')
            ->selectRaw("JSON_UNQUOTE(JSON_EXTRACT(gallery, '$[0]')) as thumbnail")
            ->where('id', '!=', $offer->id)
            ->orderBy('sort')
            ->get();

        return view('pages.offer.index', ['offer' => $offer, 'otherOffers' => $otherOffers]);
    }



    public function localAttractions()
    {
        $attractions = Attraction::orderBy('sort')->get();

        return view('pages.localAttractions.index', ['attractions' => $attractions]);
    }
}
