<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Modelbackend\AboutCompany;
use App\Models\Modelbackend\ClientReview;
use App\Models\Modelbackend\Company;
use App\Models\Modelbackend\ContactInfo;
use App\Models\Modelbackend\People;
use App\Models\Modelbackend\Position;
use App\Models\Modelbackend\Product;
use App\Models\Modelbackend\Slider;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $aboutCompany = AboutCompany::all()->take(1);
        $people = People::all()->take(4);
        $sliders = Slider::all();
        $reviews = ClientReview::all();
        $products = Product::orderBy('id', 'desc')->take(10)->get();
        $companies = Company::all();
        $contactInfo = ContactInfo::all()->first();

        return view('index',compact('companies','aboutCompany','contactInfo','sliders','reviews','people','products'));
    }
}
