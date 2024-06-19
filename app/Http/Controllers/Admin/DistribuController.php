<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\ContactUs\ContactUs;

class DistribuController extends Controller
{
    public function show(){
        $data = ContactUs::where('form_type', 'distributor')->get();

        return view('admin.distributorlist', compact('data'));
    }
}
