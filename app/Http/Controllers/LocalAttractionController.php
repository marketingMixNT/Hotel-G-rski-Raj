<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocalAttraction;

class LocalAttractionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $attractions = LocalAttraction::orderBy('sort')->get();
    
        return view('pages.localAttractions.index', ['attractions' => $attractions]);
    }
}
