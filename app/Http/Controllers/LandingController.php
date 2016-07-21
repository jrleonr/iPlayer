<?php

namespace App\Http\Controllers;

use App\iPlayerApi;
use App\Http\Requests;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function getProgrammes(Request $request, iPlayerApi $api, $letter = 'a')
    {
        $programmes = $api->getProgrammesByLetter($letter, $request->input('page'));    

        return view('landing.programmes', compact('programmes'));
    }
}
