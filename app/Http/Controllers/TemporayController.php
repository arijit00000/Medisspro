<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temporary;

class TemporayController extends Controller
{
    public function show(){
        $data = Temporary::get();
        return view('admin.service', compact('data'));
    }
}
