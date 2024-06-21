<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function offers()
    {

        $offers = Offer::orderBy('sort')->get();

        return view('pages.offers.index', ['offers' => $offers]);
    }

    public function offert($slug)
    {


        // $offer = Offer::where('slug->pl', $slug)->first();
        $offer = Offer::where('slug', $slug)->first();

        // dd($offer);

        $otherOffers = Offer::select('id','title','short_desc','thumbnail','price','nights','food','slug')
            ->where('id', '!=', $offer->id)
            ->orderBy('sort')
            ->get();

            // dd($otherOffers);

        return view('pages.offer.index', ['offer' => $offer,'otherOffers' =>$otherOffers ]);
    }
}
