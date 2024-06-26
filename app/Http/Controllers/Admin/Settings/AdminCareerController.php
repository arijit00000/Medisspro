<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career\Career;
use App\Models\Career\CareerApply;

class AdminCareerController extends Controller
{
    protected function show(){
        $careerdata = Career::get();
        return view('admin.settings.career', compact('careerdata'));
    }

    public function list(){
        $careerlist = CareerApply::with('addCareer')->get();
        return view('admin.career-list', compact('careerlist'));
    }

    protected function submit(Request $request){
        $request->validate([
            "serviceheading"=>'required',
            "servicecontent"=>'required'
        ]);

        $id = $request->input('serviceid');

        if(empty($id)){
            $insertdata = ([
                "career_name" => $request->input('serviceheading'),
                "career_description" => $request->input('servicecontent')
            ]);

            Career::create($insertdata);
        }
        else{
            $insertdata = ([
                "career_name" => $request->input('serviceheading'),
                "career_description" => $request->input('servicecontent')
            ]);

            Career::where('career_id', $id)->update($insertdata);
        }
        return response()->json(['success'=>true]);
    }   
    
    protected function delete(Request $request, $id){
        Career::where('career_id', $id)->delete();
        return response()->json(['success'=>true]);
    }
}
