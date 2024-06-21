<?php

namespace App\Http\Controllers\Front_End;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\HeaderFooter;

class CareerController extends Controller
{
    public function career(){
        $data = HeaderFooter::get();
        return view('frontend.careers',compact('data'));
    }
}
