<?php

namespace App\Http\Controllers\Front_End;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\HeaderFooter;

class DistributorController extends Controller
{
    public function distributor(){
        $data = HeaderFooter::get();
        return view('frontend.distributor',compact('data'));
    }
}
