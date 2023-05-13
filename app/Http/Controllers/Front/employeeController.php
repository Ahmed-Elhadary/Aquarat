<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Modelbackend\ContactInfo;
use App\Models\Modelbackend\People;
use App\Models\Modelbackend\Position;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function index(){
        $positions = Position::all();
        $people= People::all();
        $contactInfo = ContactInfo::all()->first();
        return view('frontend.pages.employee',compact('contactInfo','positions','people'));
    }
}
