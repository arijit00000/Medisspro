<?php

namespace App\Http\Controllers\Front_End;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\HeaderFooter;

class AboutusController extends Controller
{
    public function about(){
        $data = HeaderFooter::get();
        return view('frontend.about-us',compact('data'));
    }
}
