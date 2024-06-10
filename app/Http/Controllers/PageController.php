<?php

namespace App\Http\Controllers;

use App\Models\Slides;
use App\Models\Advantages;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

        $slides = Slides::orderBy('sort')->get();
     $advantages = Advantages::orderBy('sort')->get();


        return view('pages.home.index', ['slides' => $slides,'advantages'=>$advantages]);
    }
}
