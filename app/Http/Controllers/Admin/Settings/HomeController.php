<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\Home\SettingsHomeBanner;
use App\Models\Settings\Home\SettingsHometopHeadline;
use App\Models\Settings\Home\SettingsHomeAbout;
use App\Models\Settings\Home\SettingsHomeServiceHeadline;
use App\Models\Settings\Home\SettingsHomeServiceCard;
use App\Models\Settings\Home\SettingsHomeKeyHeadline;
use App\Models\Settings\Home\SettingsHomeKeyachivement;
use App\Models\Settings\Home\SettingsHomeTestimonialHeadline;
use App\Models\Settings\Home\SettingsHomeGallaryHeadline;
use App\Models\Settings\Home\SettingsHomeGallary;

class HomeController extends Controller
{
    public function home (Request $request){
        $serviceheadline = SettingsHomeServiceHeadline::where('id','1')->get();
        $keyachivementheadline = SettingsHomeKeyHeadline::where('id','1')->get();
        $homeabout = SettingsHomeAbout::where('id','1')->get();
        $banner = SettingsHomeBanner::where('id','1')->get();
        $topheadline = SettingsHometopHeadline::get();
        $servicecard = SettingsHomeServiceCard::get();
        $keyachivement = SettingsHomeKeyachivement::where('id','1')->get();
        $testimonialheadline = SettingsHomeTestimonialHeadline::where('id','1')->get();
        $gallaryheadline = SettingsHomeGallaryHeadline::where('id','1')->get();
        $gallary = SettingsHomeGallary::get();

        return view('admin.settings.home',compact('serviceheadline', 'topheadline','servicecard','keyachivementheadline','homeabout','banner','keyachivement','testimonialheadline','gallaryheadline', 'gallary'));
    }

    public function bannersubmit (Request $request){

        if($request->hasFile('banner1')){
           $banner1 = $request->file('banner1');
           $banner1Name = time().'.'.$banner1->getClientOriginalExtension();
           $banner1Path = $banner1->move('uploads',$banner1Name);
        //    dd("$banner1Path");
        }

        if($request->hasFile('banner2')){
           $banner2 = $request->file('banner2');
           $banner2Name = time().'2'.'.'.$banner2->getClientOriginalExtension();
           $banner2Path = $banner2->move('uploads',$banner2Name);
        //    dd("$banner2Path");
        }

        $bannerid = $request->input('bannerid');
        
        if(empty($bannerid)){

            $insertdata = [
                "banner_img_1" => $banner1Path,
                "banner_img_2" => $banner2Path,
                "headline" => $request->input('headline'),
                "subheadline" => $request->input('subheadline'),
                "content" => $request->input('content')
            ];

            SettingsHomeBanner::create($insertdata);
            return response()->json(['success'=>true]);
        }
        else{

            if(isset($banner1Path) && isset($banner2Path)){
                $insertdata = [
                    "banner_img_1" => $banner1Path,
                    "banner_img_2" => $banner2Path,
                    "headline" => $request->input('headline'),
                    "subheadline" => $request->input('subheadline'),
                    "content" => $request->input('content')
                ];
            }

            else if(isset($banner1Path)){
                $insertdata = [
                    "banner_img_1" => $banner1Path,
                    "headline" => $request->input('headline'),
                    "subheadline" => $request->input('subheadline'),
                    "content" => $request->input('content')
                ];
            }
            else if(isset($banner2Path)){
                $insertdata = [
                    "banner_img_2" => $banner2Path,
                    "headline" => $request->input('headline'),
                    "subheadline" => $request->input('subheadline'),
                    "content" => $request->input('content')
                ];
            }
            else{
                $insertdata = [
                    "headline" => $request->input('headline'),
                    "subheadline" => $request->input('subheadline'),
                    "content" => $request->input('content')
                ];
            }

            SettingsHomeBanner::where('id',$bannerid)->update($insertdata);
            return response()->json(['success'=>true]); 
        }
    }

    public function topheadingsubmit(Request $request){

        if($request->hasFile('image')){
           $image = $request->file('image');
           $imageName = time().'.'.$image->getClientOriginalExtension();
           $imagePath = $image->move('uploads',$imageName);
        //    dd("$banner1Path");
        }
        
        $insertdata = [
            "image" => $imagePath,
            "headline" => $request->input('heading'),
            "subheadline" => $request->input('context')
        ];

        SettingsHometopHeadline::create($insertdata);
        return response()->json(['success'=>true]);
    }

    public function aboutsubmit(Request $request){

        if($request->hasFile('image')){
           $image = $request->file('image');
           $imageName = time().'.'.$image->getClientOriginalExtension();
           $imagePath = $image->move('uploads',$imageName);
        //    dd("$banner1Path");
        }

        $homeaboutid = $request->input('id');

        if(empty($homeaboutid)){

        $insertdata = [
            "image" => $imagePath,
            "headline" => $request->input('heading'),
            "content" => $request->input('context')
        ];

        SettingsHomeAbout::create($insertdata);
        return response()->json(['success'=>true]);
        }
        else{

            if(isset($imagePath)){

                $insertdata = [
                "image" => $imagePath,
                "headline" => $request->input('heading'),
                "content" => $request->input('context')
            ];

            SettingsHomeAbout::where('id',$homeaboutid)->update($insertdata);
            return response()->json(['success'=>true]);

            }
            else{
                $insertdata = [
                "headline" => $request->input('heading'),
                "content" => $request->input('context')
                ];

            SettingsHomeAbout::where('id',$homeaboutid)->update($insertdata);
            return response()->json(['success'=>true]);
            }
        }
    }

    public function serviceheadlinesubmit(Request $request){

        $insertdata = [
            "headline" => $request->input('heading'),
            "subheadline" => $request->input('subheadline')
        ];

        $serviceheadlineid = $request->input('id');
        
        if(!empty($serviceheadlineid)){
            SettingsHomeServiceHeadline::where('id',$serviceheadlineid)->update($insertdata);
            return response()->json(['success'=>true]);
        }
        else{
            SettingsHomeServiceHeadline::create($insertdata);

            return response()->json(['success'=>true]);
        }
    }

    public function servicecardsubmit(Request $request){

        if($request->hasFile('image')){
           $image = $request->file('image');
           $imageName = time().'.'.$image->getClientOriginalExtension();
           $imagePath = $image->move('uploads',$imageName);
        //    dd("$banner1Path");
        }
        
        $insertdata = [
            "image" => $imagePath,
            "headline" => $request->input('heading'),
            "content" => $request->input('context')
        ];

        SettingsHomeServiceCard::create($insertdata);
        return response()->json(['success'=>true]);
    }

    public function keyheadlinesubmit(Request $request){

        $insertdata = [
            "headline" => $request->input('heading'),
            "subheadline" => $request->input('subheadline')
        ];

        $keyheadlineid = $request->input('id');
        
        if(!empty($keyheadlineid)){
            SettingsHomeKeyHeadline::where('id',$keyheadlineid)->update($insertdata);
            return response()->json(['success'=>true]);
        }
        else{
            SettingsHomeKeyHeadline::create($insertdata);

            return response()->json(['success'=>true]);
        }
    }

    public function keyachivement(Request $request){

        if($request->hasFile('keyimage')){
           $keyimage = $request->file('keyimage');
           $keyimageName = time().'.'.$keyimage->getClientOriginalExtension();
           $keyimagePath = $keyimage->move('uploads',$keyimageName);
        //    dd("$banner1Path");
        }

        $keyachiveid = $request->input('keyachiveid');
        
        if(empty($keyachiveid)){

            $insertdata = [
            "heading_1" => $request->input('keyheading1'),
            "subheading_1" => $request->input('keysubheading1'),
            "heading_2" => $request->input('keyheading2'),
            "subheading_2" => $request->input('keysubheading2'),
            "image" => $keyimagePath,
            "heading_3" => $request->input('keyheading3'),
            "subheading_3" => $request->input('keysubheading3'),
            "heading_4" => $request->input('keyheading4'),
            "subheading_4" => $request->input('keysubheading4')
        ];

            SettingsHomeKeyachivement::create($insertdata);
            return response()->json(['success'=>true]);  
        }
        else{

            if(isset($keyimagePath)){
                
                $insertdata = [
                    "heading_1" => $request->input('keyheading1'),
                    "subheading_1" => $request->input('keysubheading1'),
                    "heading_2" => $request->input('keyheading2'),
                    "subheading_2" => $request->input('keysubheading2'),
                    "image" => $keyimagePath,
                    "heading_3" => $request->input('keyheading3'),
                    "subheading_3" => $request->input('keysubheading3'),
                    "heading_4" => $request->input('keyheading4'),
                    "subheading_4" => $request->input('keysubheading4')
                ];

                SettingsHomeKeyachivement::where('id',$keyachiveid)->update($insertdata);
                return response()->json(['success'=>true]);
            }
            else{
                $insertdata = [
                    "heading_1" => $request->input('keyheading1'),
                    "subheading_1" => $request->input('keysubheading1'),
                    "heading_2" => $request->input('keyheading2'),
                    "subheading_2" => $request->input('keysubheading2'),
                    "heading_3" => $request->input('keyheading3'),
                    "subheading_3" => $request->input('keysubheading3'),
                    "heading_4" => $request->input('keyheading4'),
                    "subheading_4" => $request->input('keysubheading4')
                ];

                SettingsHomeKeyachivement::where('id',$keyachiveid)->update($insertdata);
                return response()->json(['success'=>true]);
            }
        }
    }

    public function testimonialheadlinesubmit(Request $request){

        $insertdata = [
            "headline" => $request->input('heading'),
            "subheadline" => $request->input('subheadline')
        ];

        $testimonialid = $request->input('id');
        
        if(!empty($testimonialid)){
            SettingsHomeTestimonialHeadline::where('id',$testimonialid)->update($insertdata);
            return response()->json(['success'=>true]);
        }
        else{
            SettingsHomeTestimonialHeadline::create($insertdata);

            return response()->json(['success'=>true]);
        }
    }

    public function gallaryheadlinesubmit(Request $request){

        $insertdata = [
            "headline" => $request->input('heading'),
            "subheadline" => $request->input('subheadline')
        ];

        $gallaryheadlineid = $request->input('id');
        
        if(!empty($gallaryheadlineid)){
            SettingsHomeGallaryHeadline::where('id',$gallaryheadlineid)->update($insertdata);
            return response()->json(['success'=>true]);
        }
        else{
            SettingsHomeGallaryHeadline::create($insertdata);

            return response()->json(['success'=>true]);
        }
    }

    public function gallarysubmit(Request $request){

        if($request->hasFile('gallary1')){
           $gallary1 = $request->file('gallary1');
           $gallary1Name = time().'.'.$gallary1->getClientOriginalExtension();
           $gallary1Path = $gallary1->move('uploads',$gallary1Name);
        //    dd("$banner1Path");
        }

        $insertdata = [
            "gallary_img" => $gallary1Path
        ];

            SettingsHomeGallary::create($insertdata);

            return response()->json(['success'=>true]);
    }

}
