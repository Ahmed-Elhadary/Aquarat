<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Modelbackend\ContactInfo;
use App\Models\Modelbackend\MainCategory;
use App\Models\Modelbackend\Product;
use App\Models\Modelbackend\Services;
use Illuminate\Http\Request;

class servicesController extends Controller
{
    public function index(){
        $products = Product::all();
        $categories = MainCategory::all();
        $contactInfo = ContactInfo::all()->first();
        return view('frontend.pages.services',compact('contactInfo','products','categories'));
    }
}
