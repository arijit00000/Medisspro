<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\ContactUs\ContactUS;
// use App\Models\Settings\Home\SettingsHomeServiceCard;

class ContactUsController extends Controller
{
    public function show(Request $request){
        // dd($request->all('search'));
        $search = $request->input('search');

        if(!empty($search)){
            $Contact = ContactUs::where('email','LIKE', '%' .$search. '%')
                                    ->orwhere('f_name','LIKE', '%' .$search. '%')
                                    ->orwhere('l_name','LIKE', '%' .$search. '%')
                                    ->orwhere('mobile','LIKE', '%' .$search. '%')
                                    // ->orWhereHas('addServiceCard', function($query) use ($search) {
                                    //     $query->where('headline', 'LIKE', '%' . $search . '%');
                                    // })
                                    ->orderBy('created_at','DESC')
                                    ->paginate(30)
                                    ->withQueryString();
                                    // ->appends(['search' => $search]); // same work
                                    // ->appends(request()->query()); // same work before laravel 7
            return view('admin.contact-us',compact('Contact','search'));
        }
        else{
        $Contact = ContactUs::orderBy('created_at','DESC')->paginate(30);
        return view('admin.contact-us',compact('Contact','search'));
        }
    }
}
