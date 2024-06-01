<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\Home\SettingsHomeHeaderFooter;

class FrontendAboutController extends Controller
{
    public function aboutUs(){
        $data = SettingsHomeHeaderFooter::where('id','1')->get();
        return view('about-us',compact('data'));
    }
}
