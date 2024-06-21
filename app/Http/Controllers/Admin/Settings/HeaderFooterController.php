<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\Settings\HeaderFooter;
use Illuminate\Http\Request;

class HeaderFooterController extends Controller
{
    public function homeheader(Request $request){
        $data = HeaderFooter::get();
        return view('admin.settings.header-footer',compact('data'));
    }

    public function homeheadersubmit(Request $request){

        $insertdata = [
            "facebook" => $request->input('facebook'),
            "linkdin" => $request->input('linkdin'),
            "instagram" => $request->input('instragram'),
            "twitter" => $request->input('twitter'),
            "mobile" => $request->input('mobile'),
            "email" => $request->input('email'),
            "corporate_office" => $request->input('corporateoffice'),
            "branch_office" => json_encode([$request->input('branchoffice')]),
            "web" => $request->input('website')
        ];

        $id = $request->input('id');

        if(empty($id)){
            HeaderFooter::create($insertdata);
            return redirect()->back()->with('success','Succefully Added');
        }
        else{
            HeaderFooter::where('headerfooter_id',$id)->update($insertdata);
            return redirect()->back()->with('success','Succefully Update');
        }
    }
}
