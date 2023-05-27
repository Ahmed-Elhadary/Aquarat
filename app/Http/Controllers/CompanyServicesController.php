<?php

namespace App\Http\Controllers;

use App\Models\Modelbackend\CompanyServices;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CompanyServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('dashboard.pages.all_companyservice')->with('company_services',CompanyServices::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('dashboard.pages.add_companyservice');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image= null;
        if($request->hasFile('image')) {
            $image =  $request->image;
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $image_name = $timestamp . $image-> getClientOriginalName();
            $image->move(public_path('/images/CompanyService/'), $image_name);
            $image=$image_name;
        }

        CompanyServices::create([
            'ar_name'=>$request->ar_name,
            'ar_details'=>$request->ar_details,
            'image'=>$image,
        ]);
        return redirect()->route('companyservice.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelbackend\CompanyServices  $companyServices
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyServices $companyServices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelbackend\CompanyServices  $companyServices
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyServices $companyServices,$id)
    {
        $companyservice = CompanyServices::find($id);
        return view('dashboard.pages.edit_companyservice')->with('companyservice',$companyservice);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelbackend\CompanyServices  $companyServices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $companyservice = CompanyServices::findOrFail($id);
        if($request->has('image')) {
            if ($request->hasFile('image')) {
                $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
                $p_image= $timestamp . '_' . $request->image->getClientOriginalName();
                $request->image->move(public_path('/Images/CompanyService/'), $p_image);
                $companyservice->update([
                    'image' => $p_image
                ]);
            }
        }
        $companyservice->update([
            'ar_name' => $request->ar_name,
            'ar_details' => $request->ar_details,
        ]);
        return redirect()->route('companyservice.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelbackend\CompanyServices  $companyServices
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyServices $companyServices,$id)
    {
        CompanyServices::find($id)->delete();
        return redirect()->back();
    }
}
