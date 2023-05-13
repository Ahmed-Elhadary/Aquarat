<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyStoreRequest;
use App\Http\Requests\CompanyUpdateRequest;
use App\Models\Modelbackend\Company;
use Carbon\Carbon;
use Illuminate\Http\Request;
use File;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies=Company::all();
        return view('dashboard.pages.company.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('dashboard.pages.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyStoreRequest $request)
    {
        // dd($request->all());
        $image = null;
        if ($request->hasFile('image')) {
            $image =  $request->image;
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $image_name = $timestamp . $image->getClientOriginalName();
            $image->move(public_path('/images/company/'), $image_name);
            $image = $image_name;
        }
        Company::create([
            'ar_name' => $request->ar_name,
            'en_name' => $request->en_name,
            'years'=>$request->year,
            'en_details'=>$request->en_details,
             'ar_details'=>$request->ar_details,
             'featured'=>$request->featured,
            'image' => $image,
        ]);

        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $company = Company::find($id);
        if ($company) {
            return view('dashboard.pages.company.edit', compact('company'));
        } else {
            return redirect()->route('companies.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyUpdateRequest $request, $id)
    {
        $company = Company::find($id);

        if ($company) {
            if (isset($request->image)) {
                $image = null;
                $image =  $request->image;
                $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
                $image_name = $timestamp . $image->getClientOriginalName();
                $image->move(public_path('/images/company/'), $image_name);
                $image = $image_name;
                if ($company->image) {
                    if (File::exists(public_path('/images/company/' . $company->image))) {
                        File::delete(public_path('/images/company/' . $company->image));
                    }
                }
                $company->update([
                    'image' => $image
                ]);
            }
            $company->update([
                'ar_name' => $request->ar_name,
                'en_name' => $request->en_name,
                'years'=>$request->year,
                'en_details'=>$request->en_details,
                'ar_details'=>$request->ar_details,
                'featured'=>$request->featured,
            ]);
        }
        return redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $company=Company::find($id);
      $company->delete();
      return redirect()->route('companies.index');
    }
}
