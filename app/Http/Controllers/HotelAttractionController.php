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


        
        $hotelAttraction = HotelAttraction::where('slug->pl', $slug)->first();



        $otherAttractions = HotelAttraction::select('id','title','short_desc','thumbnail','slug')
            ->where('id', '!=', $hotelAttraction->id)
            ->orderBy('sort')
            ->get();


        return view('pages.hotelAttraction.index', ['hotelAttraction' => $hotelAttraction,'otherAttractions' =>$otherAttractions ]);
    }
}
