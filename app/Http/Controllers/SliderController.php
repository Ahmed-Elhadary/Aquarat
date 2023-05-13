<?php

namespace App\Http\Controllers;

use App\Models\Modelbackend\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.all_sliders')->with('sliders',Slider::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.addsliders');

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
            $image->move(public_path('/images/Slider/'), $image_name);
            $image=$image_name;
        }
    if ($request->hasFile('video'))
    {

        $this->validate($request, [
            'video' => 'file|mimetypes:video/mp4',
        ]);
      $path = $request->file('video')->store('videos', ['disk' => 'my_files']);
      Slider::create([
        'ar_description'=>$request->ar_description,
        'en_description'=>$request->en_description,
        'video'=>$path,
        'type'=>$request->type
    ]);
    }else{
        Slider::create([
            'ar_description'=>$request->ar_description,
            'en_description'=>$request->en_description,
            'image'=>$image,
            'type'=>$request->type
        ]);
    }

        return view('dashboard.pages.all_sliders')->with('sliders',Slider::all());
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
        $slider = Slider::find($id);
        return view('dashboard.pages.editsliders')->with('slider',$slider);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $slider = Slider::findOrFail($id);
        if($request->has('image')) {
            if ($request->hasFile('image')) {
                $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
                $p_image= $timestamp . '_' . $request->image->getClientOriginalName();
                $request->image->move(public_path('/images/Slider/'), $p_image);
                $slider->update([
                    'image' => $p_image
                ]);
            }
        }
    if ($request->hasFile('video'))
    {
        $this->validate($request, [
            'video' => 'file|mimetypes:video/mp4',
        ]);
      $path = $request->file('video')->store('videos', ['disk' => 'my_files']);
      $slider->update([
        'ar_description'=>$request->ar_description,
        'en_description'=>$request->en_description,
        'video'=>$path,
        'type'=>$request->type
    ]);
    }else{

        $slider->update([
            'ar_description' => $request->ar_description,
            'en_description' => $request->en_description,
            'type'=>$request->type
        ]);
    }

        // Toastr::success(trans("site.product_success_edit"),trans("site.success"));
        return redirect()->route('sliders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::find($id)->delete();
        return redirect()->back();
    }
}
