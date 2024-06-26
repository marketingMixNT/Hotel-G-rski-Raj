<?php

namespace App\Http\Controllers;

use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $privacyPolicy = PrivacyPolicy::select('content')->first();

        // dd($privacyPolicy);
    
        return view('pages.privacy-policy', ['privacyPolicy' => $privacyPolicy]);
    }
    
}
