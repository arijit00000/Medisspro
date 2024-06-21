<?php

namespace App\Http\Controllers\Front_End;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        $data = HeaderFooter::get();
        return view('frontend.blog',compact('data'));
    }
}
