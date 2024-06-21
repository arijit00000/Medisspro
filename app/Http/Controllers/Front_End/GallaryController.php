<?php

namespace App\Http\Controllers\Front_End;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\HeaderFooter;

class GallaryController extends Controller
{
    public function gallary(){
        $data = HeaderFooter::get();
        return view('frontend.gallery',compact('data'));
    }
}
