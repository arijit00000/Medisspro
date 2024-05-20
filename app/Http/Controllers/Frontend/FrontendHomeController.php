<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\ContactUs\ContactUs;
use App\Models\Settings\Home\SettingsHomeBanner;
use App\Models\Settings\Home\SettingsHometopHeadline;
use App\Models\Settings\Home\SettingsHomeAbout;
use App\Models\Settings\Home\SettingsHomeServiceHeadline;
use App\Models\Settings\Home\SettingsHomeServiceCard;
use App\Models\Settings\Home\SettingsHomeKeyHeadline;
use App\Models\Settings\Home\SettingsHomeKeyachivement;
use App\Models\Settings\Home\SettingsHomeTestimonialHeadline;
use App\Models\Settings\Home\SettingsHomeGallaryHeadline;
use App\Models\Settings\Home\SettingsHomeGallary;
use App\Models\Settings\Home\SettingsHomeHeaderFooter;

class FrontendHomeController extends Controller
{

    Public function header(){
        $data = SettingsHomeHeaderFooter::where('id','1')->get();

        return view('layouts.header', compact('data'));
    }

    Public function footer(){
        $data = SettingsHomeHeaderFooter::where('id','1')->get();

        return view('layouts.footer', compact('data'));
    }

    public function homepage(Request $request){

        $serviceheadline = SettingsHomeServiceHeadline::where('id','1')->get();
        $keyachivementheadline = SettingsHomeKeyHeadline::where('id','1')->get();
        $homeabout = SettingsHomeAbout::where('id','1')->get();
        $banner = SettingsHomeBanner::where('id','1')->get();
        $topheadline = SettingsHometopHeadline::get();
        $servicecard = SettingsHomeServiceCard::get();
        $keyachivement = SettingsHomeKeyachivement::where('id','1')->get();
        $testimonialheadline = SettingsHomeTestimonialHeadline::where('id','1')->get();
        $gallaryheadline = SettingsHomeGallaryHeadline::where('id','1')->get();
        $gallary = SettingsHomeGallary::get();
        $data = SettingsHomeHeaderFooter::where('id','1')->get();

        return view('welcome', compact(
            'serviceheadline', 
            'topheadline',
            'servicecard',
            'keyachivementheadline',
            'homeabout',
            'banner',
            'keyachivement',
            'testimonialheadline',
            'gallaryheadline',
            'gallary',
            'data',
        ));
    }

    public function enquiresubmit(Request $request){

        $validator =  $request -> validate([
            'f_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'inquiry' => 'required'
        ]);

        $insertdata = [
            "f_name" => $request->input('f_name'),
            "l_name" => $request->input('l_name'),
            "email" => $request->input('email'),
            "mobile" => $request->input('phone'),
            "s_card_id" => $request->input('serviceid'),
            "inquire" => $request->input('inquiry')
        ];

        ContactUs::create($insertdata);

        return response()->json(['success'=>true]);
    }
}
