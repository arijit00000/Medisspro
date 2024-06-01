<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\Home\SettingsHomeHeaderFooter;
use App\Models\Settings\Home\SettingsHomeGallaryHeadline;
use App\Models\Settings\Home\SettingsHomeGallary;

class FrontendGallaryController extends Controller
{
    public function gallary(){
        $data = SettingsHomeHeaderFooter::where('id','1')->get();
        $gallaryheadline = SettingsHomeGallaryHeadline::where('id','1')->get();
        $gallary = SettingsHomeGallary::get();
        return view('gallery',compact('data','gallary','gallaryheadline'));
    }
}
