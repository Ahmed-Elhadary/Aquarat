<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.all_blogs')->with('blogs',blog::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('dashboard.pages.add_blog');

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
            $image->move(public_path('/images/Blog/'), $image_name);
            $image=$image_name;
        }
    if ($request->hasFile('video'))
    {

        $this->validate($request, [
            'video' => 'file|mimetypes:video/mp4',
        ]);
      $path = $request->file('video')->store('videos', ['disk' => 'my_files']);
      blog::create([
        'ar_description'=>$request->ar_description,
        'ar_title'=>$request->ar_title,
         'en_title'=>$request->en_title,
        'en_description'=>$request->en_description,
        'video'=>$path,
        'type'=>$request->type
    ]);
    }else{
        blog::create([
            'ar_description'=>$request->ar_description,
            'en_description'=>$request->en_description,
            'ar_title'=>$request->ar_title,
            'en_title'=>$request->en_title,
            'image'=>$image,
            'type'=>$request->type
        ]);
    }
        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog,$id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = blog::find($id);
        return view('dashboard.pages.edit_blog')->with('blog',$blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = blog::findOrFail($id);
        if($request->has('image')) {
            if ($request->hasFile('image')) {
                $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
                $p_image= $timestamp . '_' . $request->image->getClientOriginalName();
                $request->image->move(public_path('/images/Blog/'), $p_image);
                $blog->update([
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
      $blog->update([
        'ar_description'=>$request->ar_description,
        'en_description'=>$request->en_description,
        'ar_title'=>$request->ar_title,
        'en_title'=>$request->en_title,
        'video'=>$path,
        'type'=>$request->type
    ]);
    }else{

        $blog->update([
            'ar_description' => $request->ar_description,
            'en_description' => $request->en_description,
            'ar_title'=>$request->ar_title,
            'en_title'=>$request->en_title,
            'type'=>$request->type
        ]);
    }
        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        blog::find($id)->delete();
        return redirect()->back();
    }
}
