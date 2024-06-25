<?php

namespace App\Http\Controllers\Front_End;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\HeaderFooter;
use App\Models\OurProduct\OurProduct;

class ProductController extends Controller
{
    public function product(){
        $data = HeaderFooter::get();
        $product = OurProduct::get();
        return view('frontend.products',compact('data','product'));
    }

    public function detailsPage($id){
        $data = HeaderFooter::get();
        $product = OurProduct::where('product_id',$id)->get();
        return view('frontend.products-details',compact('product','data'));
    }
}
