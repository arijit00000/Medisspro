<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\ContactUs\ContactUS;

class ContactUsController extends Controller
{
    public function show(){
        $Contact = ContactUs::with('addServiceCard')->paginate(30);
        return view('admin.contact-us',compact('Contact'));
    }
}
