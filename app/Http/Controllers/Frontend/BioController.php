<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;


class BioController extends Controller
{
    public function bio()
    {
        return view('frontend.home.bio');
    }
}
