<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Modelbackend\ContactInfo;
use Illuminate\Http\Request;
use App\Models\Modelbackend\Questions;

class faqController extends Controller
{
    public function index(){
        $faqs = Questions::all();
        $contactInfo = ContactInfo::all()->first();
        return view('frontend.pages.faq',compact('contactInfo','faqs'));
    }
}
