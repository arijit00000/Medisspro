<?php

namespace App\Http\Controllers\Front_End;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\HeaderFooter;
use App\Models\OurService\OurService;
// Temporary
use App\Models\Temporary;

class ServicesController extends Controller
{
    public function service(){
        $data = HeaderFooter::get();
        $service = OurService::get();
        return view('frontend.services',compact('data','service'));
    }

    public function querySubmit(Request $request){
        $insertdata = ([
            "first_name" => $request->input('f_name'),
            "last_name" => $request->input('l_name'),
            "email" => $request->input('email'),
            "mobile" => $request->input('mobile'),
            "text" => $request->input('message'),
            "service" => $request->input('choices')
        ]);
        Temporary::insert($insertdata);
        return response()->json(["success"=>true]);
    }
}
