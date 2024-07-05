<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurProduct\OurProduct;
use App\Models\OurProduct\ProductBrochure;
use App\Models\Settings\ContactUs\ContactUs;


class AdminProductController extends Controller
{
    protected function show(){
        $product = OurProduct::get();
        return view('admin.settings.product', compact('product'));
    }

    protected function submit(Request $request){
        
        $request->validate([
            "serviceimg1" => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "serviceimg2" => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "serviceheading"=>'required',
            "servicecontent"=>'required'
        ]);

        if($request->hasFile('serviceimg1')){
           $image1 = $request->file('serviceimg1');
           $image1Name = time().'_1'.$image1->getClientOriginalExtension();
           $image1Path = $image1->move('uploads',$image1Name);
        }

        if($request->hasFile('serviceimg2')){
           $image2 = $request->file('serviceimg2');
           $image2Name = time().'_2'.$image2->getClientOriginalExtension();
           $image2Path = $image2->move('uploads',$image2Name);
        }

        $id = $request->input('serviceid');
        
        if(empty($id)){
            $insertdata = ([
                "product_img1" => $image1Path,
                "product_img2" => $image2Path,
                "product_name" => $request->input('serviceheading'),
                "product_details" => $request->input('servicecontent')
            ]);

            OurProduct::create($insertdata);
        }
        else{
            if(isset($image1Path) && isset($image2Path)){
                $insertdata = ([
                    "product_img1" => $image1Path,
                    "product_img2" => $image2Path,
                    "product_name" => $request->input('serviceheading'),
                    "product_details" => $request->input('servicecontent')
                ]);
            }
            elseif(isset($image1Path)){
                $insertdata = ([
                    "product_img1" => $image1Path,
                    "product_name" => $request->input('serviceheading'),
                    "product_details" => $request->input('servicecontent')
                ]); 
            }
            elseif(isset($image2Path)){
                $insertdata = ([
                    "product_img2" => $image2Path,
                    "product_name" => $request->input('serviceheading'),
                    "product_details" => $request->input('servicecontent')
                ]); 
            }
            else{
                $insertdata = ([
                    "product_name" => $request->input('serviceheading'),
                    "product_details" => $request->input('servicecontent')
                ]);
            }

            OurProduct::where('product_id', $id)->update($insertdata);
        }
        return response()->json(['success'=>true]);
    }

    protected function delete(Request $request, $id){
        OurProduct::where('product_id', $id)->delete();
        return response()->json(['success'=>true]);
    }

    protected function brochure(){
        $brochure = ProductBrochure::get();
        return view('admin.settings.product-brochure', compact('brochure'));
    }

    protected function brochureSubmit(Request $request){
        $request->validate([
            "brochure" => 'mimes:pdf'
        ]);

        if($request->hasFile('brochure')){
           $brochure = $request->file('brochure');
           $brochureName = '_pro'.time().$brochure->getClientOriginalExtension();
           $brochurePath = $brochure->move('uploads',$brochureName);
        }

        $id = $request->input('brochureid');

        if(empty($id)){
            $insertdata = ([
                "brochure_name" => $brochurePath
            ]);

            ProductBrochure::create($insertdata);
        }
        else{
            $insertdata = ([
                "brochure_name" => $brochurePath
            ]);

            ProductBrochure::update($insertdata);
        }

        return response()->json(['success'=>true]);
    }

    public function brochureDelete(Request $request, $id){
        ProductBrochure::where('brochure_id', $id)->delete();
        return response()->json(['success'=>true]);
    }

    public function list(){
        $productList = ContactUs::where('form_type', 'product')->get();
        return view('admin.product-list', compact('productList'));
    }
}
