<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rate;

class AboutController extends Controller
{
    public function index()
    {
        $rate=Rate::all();
        return view('frontend.about',compact('rate'));
    }
}
