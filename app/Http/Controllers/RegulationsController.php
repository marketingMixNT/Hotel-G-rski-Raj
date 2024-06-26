<?php

namespace App\Http\Controllers;

use App\Models\Regulations;
use Illuminate\Http\Request;

class RegulationsController extends Controller
{
    
    public function __invoke(Request $request)
    {
        $regulations = Regulations::select('content')->first();
    
        return view('pages.regulations', ['regulations' => $regulations]);
    }
}
