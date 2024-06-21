<?php

namespace App\Http\Controllers\Front_End;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\HeaderFooter;

class ProductController extends Controller
{
    public function product(){
        $data = HeaderFooter::get();
        return view('frontend.products',compact('data'));
    }
}
