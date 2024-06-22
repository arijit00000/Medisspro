<?php

namespace App\Http\Controllers\Front_End;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\HeaderFooter;
use App\Models\OurService\OurService;

class HomeController extends Controller
{
    public function home(){
        $data = HeaderFooter::get();
        $service = OurService::get();
        return view('frontend.index',compact('data', 'service'));
    }
}
