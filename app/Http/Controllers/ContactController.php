<?php

namespace App\Http\Controllers;

use App\Models\HomeGallery;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index () {

        $gallery = HomeGallery::orderBy('sort')->take(4)->get();

        return view('pages.contact.index',['gallery'=>$gallery]);
    }
}
