<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Modelbackend\ContactInfo;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index(){
        $contactInfo = ContactInfo::all()->first();
        return view('frontend.pages.contact',compact('contactInfo'));
    }
}
