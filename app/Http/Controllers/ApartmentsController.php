<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentsController extends Controller
{
    public function apartments()
    {

        $apartments = Apartment::orderBy('sort')
        ->select('id','name','slug','surface','person','beds','reservation_link','short_desc')
        ->selectRaw("JSON_UNQUOTE(JSON_EXTRACT(gallery, '$[0]')) as thumbnail")
        ->get();

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
}
