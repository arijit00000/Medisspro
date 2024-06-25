<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Distributor\DistributorHeading;
use App\Models\Distributor\DistributorList;
use App\Models\Distributor\DistributorImage;

class AdminDistributorController extends Controller
{
    protected function show(){
        $distributor = DistributorHeading::get();
        $distributorlist = DistributorList::get();
        $distributorimage = DistributorImage::get();
        return view('admin.settings.distributor', compact('distributor', 'distributorlist','distributorimage'));
    }

    protected function headingsubmit(Request $request){
        $request->validate([
            "heading"=>'required',
            "subheading"=>'required'
        ]);

        $id = $request->input('distributorid');
        
        if(empty($id)){
            $insertdata = ([
                "distributor_headline" => $request->input('heading'),
                "distributor_subheadline" => $request->input('subheading')
            ]);

            DistributorHeading::create($insertdata);
        }
        else{
            $insertdata = ([
                "distributor_headline" => $request->input('heading'),
                "distributor_subheadline" => $request->input('subheading')
            ]);

            DistributorHeading::where('distributorheading_id', $id)->update($insertdata);
        }
        return response()->json(['success'=>true]);
    }

    protected function delete(Request $request, $id){
        DistributorHeading::where('distributorheading_id', $id)->delete();
        return response()->json(['success'=>true]);
    }

    protected function listsubmit(Request $request){
        $request->validate([
            "distributorlistimage" => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "distributorlistname"=>'required'
        ]);

        if($request->hasFile('distributorlistimage')){
           $image = $request->file('distributorlistimage');
           $imageName = time().'.'.$image->getClientOriginalExtension();
           $imagePath = $image->move('uploads',$imageName);
        }

        $id = $request->input('distributorlistid');

        if(empty($id)){
            $insertdata = ([
                "list_img" => $imagePath,
                "list_name" => $request->input('distributorlistname')
            ]);

            DistributorList::create($insertdata);
        }
        else{
            if(isset($imagePath)){
                $insertdata = ([
                    "list_img" => $imagePath,
                    "list_name" => $request->input('distributorlistname')
                ]);
            }
            else{
                $insertdata = ([
                    "list_name" => $request->input('distributorlistname')
                ]);
            }

            DistributorList::where('distribotorlist_id', $id)->update($insertdata);
        }
        return response()->json(['success'=>true]);
    }

    protected function listdelete(Request $request, $idi){
        DistributorList::where('distribotorlist_id', $idi)->delete();
        return response()->json(['success'=>true]);
    }

    protected function imgsubmit(Request $request){
        $request->validate([
            "distributorimage" => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->hasFile('distributorimage')){
           $image = $request->file('distributorimage');
           $imageName = time().'.'.$image->getClientOriginalExtension();
           $imagePath = $image->move('uploads',$imageName);
        }

        $id = $request->input('distributorimgid');
        
        if(empty($id)){
            $insertdata = ([
                "distributor_img" => $imagePath
            ]);
            DistributorImage::create($insertdata);
        }
        else{
            $insertdata = ([
                "distributor_img" => $imagePath
            ]);
            DistributorImage::where('distributorimg_id', $id)->update($insertdata);
        }
        return response()->json(['success'=>true]);
    }
}
