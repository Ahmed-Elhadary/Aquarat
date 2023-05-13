<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Modelbackend\AboutCompany;
use App\Models\Modelbackend\Company;
use App\Models\Modelbackend\CompanyAchievements;
use App\Models\Modelbackend\CompanyDate;
use App\Models\Modelbackend\CompanyServices;
use App\Models\Modelbackend\ContactInfo;

class aboutController extends Controller
{
    public function index()
    {
        $dates = CompanyDate::orderBy('company_date', 'ASC')->get();
        $aboutCompany = AboutCompany::all()->take(1);
        $services = CompanyServices::all();
        $achievements = CompanyAchievements::all()->first();
        $contactInfo = ContactInfo::all()->first();

        return view('frontend.pages.about', compact('dates', 'achievements', 'services', 'contactInfo', 'aboutCompany'));
    }
    public function about_company($id)
    {
        $company = Company::find($id);
        $contactInfo = ContactInfo::all()->first();

        return view('frontend.pages.about_company', compact('company','contactInfo'));
    }
}
