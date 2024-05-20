<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\ContactUs\ContactUs;
use App\Models\Settings\Home\SettingsHomeHeaderFooter;

class FrontendContactController extends Controller
{
    public function contactUs(Request $request) {

        $data = SettingsHomeHeaderFooter::where('id','1')->get();
        return view('contact-us',compact('data'));
    }

    public function contactSubmit(Request $request){
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
            "inquire" => $request->input('inquiry')
        ];

        ContactUs::create($insertdata);

        // if ($validator -> fails()){
        //     echo "If Condition";
        //     return response()->json('Arijit', 200);
        // }
        // else{
        //     echo "Else COndition";
        //     return response()->json('Dutta', 400);
        // }
        return response()->json(['success'=>true]);
    }
}
