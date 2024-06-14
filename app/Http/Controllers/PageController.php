<?php

namespace App\Http\Controllers;

use App\Models\Slides;
use App\Models\Advantages;
use App\Models\Offer;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

        $slides = Slides::orderBy('sort')->get();
     $advantages = Advantages::orderBy('sort')->get();
     $offers = Offer::orderBy('sort')->get();


        return view('pages.home.index', ['slides' => $slides,'advantages'=>$advantages,'offers'=>$offers]);
    }
}
