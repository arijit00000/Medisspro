<?php

namespace App\Http\Controllers\Front_End;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\ContactUs\ContactUs;
use App\Models\Settings\HeaderFooter;

class ContactController extends Controller
{
    public function contact(){
        $data = HeaderFooter::get();
        return view('frontend.contact-us',compact('data'));
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
            "inquire" => $request->input('inquiry'),
            "form_type" => $request->input('type')
        ];
        
        ContactUs::create($insertdata);

        return response()->json(['success'=>true]);
    }
}
