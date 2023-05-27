<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\Modelbackend\ClientReview;
use App\Models\Modelbackend\CompanyServices;
use App\Models\Modelbackend\ContactInfo;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $CompanyServices =  CompanyServices::all();
        $contactInfo =  ContactInfo::all()->first();

        return view('frontend.pages.blog',compact('CompanyServices','contactInfo'));
    }

    public function reviews(){
        $ClientReviews=ClientReview::all();
        $contactInfo =  ContactInfo::all()->first();

        // dd($blog);
        return view('frontend.pages.single_blog',compact('ClientReviews','contactInfo'));
    }
}
