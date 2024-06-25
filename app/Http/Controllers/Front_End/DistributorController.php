<?php

namespace App\Http\Controllers\Front_End;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\HeaderFooter;
use App\Models\Distributor\DistributorHeading;
use App\Models\Distributor\DistributorList;
use App\Models\Distributor\DistributorImage;

class DistributorController extends Controller
{
    public function distributor(){
        $data = HeaderFooter::get();
        $distributor1 = DistributorHeading::where('distributorheading_id', '1')->get();
        $distributor = DistributorHeading::get();
        $distributorlist = DistributorList::get();
        $image1 = DistributorImage::where('distributorimg_id', '1')->get();
        $image2 = DistributorImage::where('distributorimg_id', '2')->get();
        return view('frontend.distributor',compact('data', 'distributor1', 'distributor', 'distributorlist','image1', 'image2'));
    }
}
