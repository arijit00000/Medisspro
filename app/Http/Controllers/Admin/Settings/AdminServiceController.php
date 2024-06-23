<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurService\OurService;

class AdminServiceController extends Controller
{

    protected function show(){
        $service = OurService::get();
        return view('admin.settings.service', compact('service'));
    }

    protected function submit(Request $request){
        
        $request->validate([
            "serviceimg" => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "serviceheading"=>'required',
            "servicecontent"=>'required'
        ]);

        if($request->hasFile('serviceimg')){
           $image = $request->file('serviceimg');
           $imageName = time().'.'.$image->getClientOriginalExtension();
           $imagePath = $image->move('uploads',$imageName);
        }

        $id = $request->input('serviceid');
        
        if(empty($id)){
            $insertdata = ([
                "service_img" => $imagePath,
                "service_headline" => $request->input('serviceheading'),
                "service_content" => $request->input('servicecontent')
            ]);

            OurService::create($insertdata);
        }
        else{
            if(isset($imagePath)){
                $insertdata = ([
                    "service_img" => $imagePath,
                    "service_headline" => $request->input('serviceheading'),
                    "service_content" => $request->input('servicecontent')
                ]);
            }
            else{
                $insertdata = ([
                    "service_headline" => $request->input('serviceheading'),
                    "service_content" => $request->input('servicecontent')
                ]);
            }

            OurService::where('s_card_id', $id)->update($insertdata);
        }
        return response()->json(['success'=>true]);
    }

    protected function delete(Request $request, $id){
        OurService::where('s_card_id', $id)->delete();
        return response()->json(['success'=>true]);
    }

}