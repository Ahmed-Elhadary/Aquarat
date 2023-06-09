<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Modelbackend\ContactInfo;
use App\Models\Modelbackend\MainCategory;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index(){
        $categories = MainCategory::paginate(6);
        $contactInfo = ContactInfo::all()->first();
        return view('frontend.pages.category',compact('contactInfo','categories'));
    }
}
