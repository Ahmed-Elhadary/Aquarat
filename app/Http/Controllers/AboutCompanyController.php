<?php

namespace App\Http\Controllers;

use App\Models\Modelbackend\AboutCompany;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AboutCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('dashboard.pages.all_aboutcompany')->with('about_company',AboutCompany::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelbackend\AboutCompany  $aboutCompany
     * @return \Illuminate\Http\Response
     */
    public function show(AboutCompany $aboutCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelbackend\AboutCompany  $aboutCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutCompany $aboutCompany,$id)
    {
        $about_company = AboutCompany::find($id);
        return view('dashboard.pages.edit_aboutcompany')->with('about_company',$about_company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelbackend\AboutCompany  $aboutCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about_company = AboutCompany::findOrFail($id);

        if($request->has('image')) {
            if ($request->hasFile('image')) {
                $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
                $p_image= $timestamp . '_' . $request->image->getClientOriginalName();
                $request->image->move(public_path('/images/About/'), $p_image);
                $about_company->update([
                    'image' => $p_image
                ]);
            }
        }
        if($request->has('image2')) {
            if ($request->hasFile('image2')) {
                $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
                $p_image2= $timestamp . '_' . $request->image2->getClientOriginalName();
                $request->image2->move(public_path('/images/About/'), $p_image2);
                $about_company->update([
                    'image2' => $p_image2
                ]);
            }
        }
        if($request->has('image3')) {
            if ($request->hasFile('image3')) {
                $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
                $p_image3= $timestamp . '_' . $request->image3->getClientOriginalName();
                $request->image3->move(public_path('/images/About/'), $p_image3);
                $about_company->update([
                    'image3' => $p_image3
                ]);
            }
        }    if($request->has('image4')) {
            if ($request->hasFile('image4')) {
                $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
                $p_image4= $timestamp . '_' . $request->image4->getClientOriginalName();
                $request->image4->move(public_path('/images/About/'), $p_image4);
                $about_company->update([
                    'image4' => $p_image4
                ]);
            }
        }

        $about_company->update([
            'years' => $request->en_year,
            'ar_company_name' => $request->ar_company_name,
            'en_company_name' => $request->en_company_name,
            'ar_details' => $request->ar_details,
            'en_details' => $request->en_details
        ]);
        return redirect()->route('aboutcompany.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelbackend\AboutCompany  $aboutCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AboutCompany::find($id)->delete();
        return redirect()->back();
    }
}
