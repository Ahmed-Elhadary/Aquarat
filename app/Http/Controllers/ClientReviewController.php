<?php

namespace App\Http\Controllers;

use App\Models\Modelbackend\ClientReview;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.all_clientreview')->with('reviews',ClientReview::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.add_clientreview');

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
            $image->move(public_path('/images/Reviews/'), $image_name);
            $image=$image_name;
        }

        ClientReview::create([
            'en_message'=>$request->en_message,
            'ar_message'=>$request->ar_message,
            'ar_name'=>$request->ar_name,
            'en_name'=>$request->en_name,
            'en_job'=>$request->en_job,
            'ar_job'=>$request->ar_job,
            'image' => $image
        ]);

        return redirect()->route('clientreview.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelbackend\ClientReview  $clientReview
     * @return \Illuminate\Http\Response
     */
    public function show(ClientReview $clientReview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelbackend\ClientReview  $clientReview
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reviews = ClientReview::find($id);
        return view('dashboard.pages.edit_clientreview')->with('reviews',$reviews);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelbackend\ClientReview  $clientReview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $reviews = ClientReview::findOrFail($id);
        if($request->has('image')) {
            if ($request->hasFile('image')) {
                $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
                $p_image= $timestamp . '_' . $request->image->getClientOriginalName();
                $request->image->move(public_path('/images/Reviews/'), $p_image);
                $reviews->update([
                    'image' => $p_image
                ]);
            }
        }

        $reviews->update([
            'en_message'=>$request->en_message,
            'ar_message'=>$request->ar_message,
            'ar_name'=>$request->ar_name,
            'en_name'=>$request->en_name,
            'en_job'=>$request->en_job,
            'ar_job'=>$request->ar_job
        ]);
        return redirect()->route('clientreview.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelbackend\ClientReview  $clientReview
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        ClientReview::find($id)->delete();
        return redirect()->back();
    }
}
