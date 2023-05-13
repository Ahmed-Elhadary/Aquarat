<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\Modelbackend\ContactInfo;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $News =  blog::all();
        $contactInfo =  ContactInfo::all()->first();

        return view('frontend.pages.blog',compact('contactInfo','News'));
    }

    public function single($id){
        $blog=blog::findOrFail($id);
        $contactInfo =  ContactInfo::all()->first();

        // dd($blog);
        return view('frontend.pages.single_blog',compact('blog','contactInfo'));
    }
}
