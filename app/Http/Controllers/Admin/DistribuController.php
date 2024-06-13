<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\ContactUs\ContactUS;

class DistribuController extends Controller
{
    public function show(){
        $data = ContactUS::where('form_type', 'distributor')->get();

        return view('admin.distributorlist', compact('data'));
    }
}
