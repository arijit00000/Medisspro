<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\ContactUs\ContactUs;

class ServiceController extends Controller
{
    public function show(){
        $data = ContactUs::where('form_type', NULL)->with('addServiceCard')->get();
        return view('admin.service', compact('data'));
    }
}
