<?php

namespace App\Http\Controllers\Front_End;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\HeaderFooter;
use App\Models\Career\Career;
use App\Models\Career\CareerApply;

class CareerController extends Controller
{
    public function career(){
        $data = HeaderFooter::get();
        $careerdata = Career::get();
        return view('frontend.careers',compact('data', 'careerdata'));
    }

    public function submit(Request $request){

        // dd($request->all());
        $request-validate([
            "applyName" => 'required',
            "applyEmail" => 'required|email',
            "applyPhone" => 'required',
            "filename" => 'required|mimes:pdf|max:2048'
        ]);

        if($request->hasFile('filename')){
           $file = $request->file('filename');
           $fileName = time().'_'.$file->getClientOriginalExtension();
           $filePath = $file->move('uploads',$fileName);
        }

        $insertdata = ([
            "career_id" => $request->input('applyId'),
            "name" => $request->input('applyName'),
            "email" => $request->input('applyEmail'),
            "mobile" => $request->input('applyPhone'),
            "experience" => $request->input('applyExp'),
            "status" => $request->input('Working'),
            "doc" => $filePath,
            "message" => $request->input('applyMessage')
        ]);

        CareerApply::create($insertdata);
        return response()->json(['success'=>true]);
    }
}
