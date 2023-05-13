<?php

namespace App\Http\Controllers;

use App\Models\Modelbackend\ClientReview;
use App\Models\Modelbackend\ContactUs;
use App\Models\Modelbackend\MainCategory;
use App\Models\Modelbackend\People;
use App\Models\Modelbackend\Position;
use App\Models\Modelbackend\Product;
use App\Models\Modelbackend\Questions;
use App\Models\Modelbackend\Services;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.pages.index')->with('product',Product::all())
        ->with('people',People::all())
        ->with('admins',User::all())
        ->with('messages',ContactUs::all())
        ->with('questions',Questions::all())
        ->with('categories',MainCategory::all())
        ->with('reviews',ClientReview::all())
        ->with('services',Services::all());


    }
}
