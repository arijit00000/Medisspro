<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\ContactUS\SettingsContactHeadline;
use App\Models\Settings\ContactUS\SettingsContactContext;

class ContactController extends Controller
{
    public function home(){
        $headline = SettingsContactHeadline::get();
        $context = SettingsContactContext::get();

        return view('admin.settings.contact-us', compact('headline', 'context'));
    }

    public function heading(Request $request){

        $insertdata = [
            "headline" => $request->input('heading'),
            "subheadline" => $request->input('subheadline')
        ];

        $serviceheadlineid = $request->input('id');
        
        if(!empty($serviceheadlineid)){
            SettingsContactHeadline::where('id',$serviceheadlineid)->update($insertdata);
            return response()->json(['success'=>true]);
        }
        else{
            SettingsContactHeadline::create($insertdata);

            return response()->json(['success'=>true]);
        }
    }

    public function context(Request $request){

        $insertdata = [
            "headline" => $request->input('heading'),
            "subheadline" => $request->input('subheadline')
        ];

        $serviceheadlineid = $request->input('id');
        
        if(!empty($serviceheadlineid)){
            SettingsContactContext::where('id',$serviceheadlineid)->update($insertdata);
            return response()->json(['success'=>true]);
        }
        else{
            SettingsContactContext::create($insertdata);

            return response()->json(['success'=>true]);
        }
    }
}
