<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\Settings\Home\SettingsHomeHeaderFooter;
use Illuminate\Http\Request;

class HeaderFooterController extends Controller
{
    public function homeheader(Request $request){
        $data = SettingsHomeHeaderFooter::where('id','1')->get();
        return view('admin.settings.header-footer',compact('data'));
    }

    public function homeheadersubmit(Request $request){
        
        $insertdata = [
            "facebook" => $request->input('facebook'),
            "linkdin" => $request->input('linkdin'),
            "instragram" => $request->input('instragram'),
            "twitter" => $request->input('twitter'),
            "mobile" => $request->input('mobile'),
            "email" => $request->input('email'),
            "home_address" => $request->input('homeaddress'),
            "office_address" => $request->input('officeaddress'),
            "website" => $request->input('website')
        ];

        $id = $request->input('id');

        if(empty($id)){
            SettingsHomeHeaderFooter::create($insertdata);
            return redirect()->back()->with('success','Succefully Added');
        }
        else{
            SettingsHomeHeaderFooter::where('id',$id)->update($insertdata);
            return redirect()->back()->with('success','Succefully Update');
        }
    }
}
