<?php

namespace App\Http\Controllers;

use App\Models\HotelAttraction;
use Illuminate\Http\Request;

class HotelAttractionController extends Controller
{
    public function hotelAttractions()
    {

        $hotelAttractions = HotelAttraction::orderBy('sort')->get();

        return view('pages.hotelAttractions.index', ['hotelAttractions' => $hotelAttractions]);
    }

    public function hotelAttraction($slug)
    {


        // $offer = Offer::where('slug->pl', $slug)->first();
        $hotelAttraction = HotelAttraction::where('slug', $slug)->first();



        $otherAttractions = HotelAttraction::select('id','title','short_desc','thumbnail')
            ->where('id', '!=', $hotelAttraction->id)
            ->orderBy('sort')
            ->get();


        return view('pages.hotelAttraction.index', ['hotelAttraction' => $hotelAttraction,'otherAttractions' =>$otherAttractions ]);
    }
}
