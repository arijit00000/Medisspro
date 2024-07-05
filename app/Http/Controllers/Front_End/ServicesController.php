<?php

namespace App\Http\Controllers\Front_End;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\HeaderFooter;
use App\Models\OurService\OurService;
use App\Models\Settings\ContactUs\ContactUs;
use App\Models\OurProduct\ProductBrochure;

class ServicesController extends Controller
{
    public function service(){
        $data = HeaderFooter::get();
        $service = OurService::get();
        return view('frontend.services',compact('data','service'));
    }

    public function querySubmit(Request $request){
        
        $formType = $request->input('type');

        if(isset($formType)){
            $insertdata = ([
                "f_name" => $request->input('f_name'),
                "l_name" => $request->input('l_name'),
                "email" => $request->input('email'),
                "mobile" => $request->input('mobile'),
                "inquire" => $request->input('message'),
                "form_type" => $formType
            ]);
        }
        else{
            $insertdata = ([
                "s_card_id" => $request->input('serviceid'),
                "f_name" => $request->input('f_name'),
                "l_name" => $request->input('l_name'),
                "email" => $request->input('email'),
                "mobile" => $request->input('mobile'),
                "inquire" => $request->input('message')
            ]);
        }
        
        ContactUs::insert($insertdata);

        $brochure = ProductBrochure::select('brochure_name')->get();

        $pdf = asset($brochure[0]->brochure_name);

        return response()->json(["success"=>true, "pdf"=>$pdf]);
    }
}
