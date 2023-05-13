<?php

namespace App\Http\Controllers;

use App\Models\Modelbackend\CompanyAchievements;
use Illuminate\Http\Request;

class CompanyAchievementsController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.all_achievements')->with('rates',CompanyAchievements::all());

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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelbackend\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyAchievements $rate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelbackend\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rates = CompanyAchievements::find($id);
        return view('dashboard.pages.edit_achievements')->with('rates',$rates);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelbackend\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rates = CompanyAchievements::findOrFail($id);
        $rates->update([
            'clients' => $request->clients,
            'employee' => $request->employee,
            'since' => $request->since
        ]);
        return redirect()->route('achievements.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelbackend\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CompanyAchievements::find($id)->delete();
        return redirect()->back();
    }
}
