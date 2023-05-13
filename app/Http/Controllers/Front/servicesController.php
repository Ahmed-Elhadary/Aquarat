<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Modelbackend\ContactInfo;
use App\Models\Modelbackend\Services;
use Illuminate\Http\Request;

class servicesController extends Controller
{
    public function index(){
        $services = Services::all();
        $contactInfo = ContactInfo::all()->first();
        return view('frontend.pages.services',compact('contactInfo','services'));
    }
}
