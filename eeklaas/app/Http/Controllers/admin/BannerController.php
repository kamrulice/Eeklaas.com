<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Banner;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::orderBy('id','desc')->get();

        return view('admin.banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('created_at','DESC')->get();
        return view('admin.banner.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'category_id'=>'required',
            'title'=>'required',
            'description'=>'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
          ]);
          $image = $request->file('image');
        $slug = str_slug($request->title);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/banner'))
            {
                mkdir('uploads/banner', 0777 , true);
            }
            $image->move('uploads/banner',$imagename);
        }else {
            $imagename = 'dafault.png';
        }
          $banner = new Banner();
          $banner->title=$request->title;
          $banner->category_id=$request->category_id;
          $banner->description=$request->description;
          $banner->image = $imagename;
          $banner->save();
          return redirect()->route('banner.index')->with('successMsg','Banner Successfully Saved');

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
        $categories = Category::orderBy('created_at','DESC')->get();
        $banner = banner::find($id);
        if (!is_null($banner)) {
                return view('admin.banner.edit',compact('banner','categories'));
            }else{
                return view('admin.banner.index');
            }

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
        $this->validate($request,[
          'category_id'=>'required',
            'title'=>'required',
            'description'=>'required',
        ]);
        $banner = Banner::find($id);

        $image = $request->file('image');
        $slug = str_slug($request->title);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/banner'))
            {
                mkdir('uploads/banner',0777,true);
            }
            unlink('uploads/banner/'.$banner->image);
            $image->move('uploads/banner',$imagename);
        }else{
            $imagename = $banner->image;
        }

//        $banner = new Banner();
          $banner->title=$request->title;
          $banner->category_id=$request->category_id;
          $banner->description=$request->description;
          $banner->image = $imagename;
          $banner->save();
          return redirect()->route('banner.index')->with('successMsg','Banner Successfully Saved');


    }
    public function destroy($id)
    {
        Banner::find($id)->delete();
        return redirect()->back()->with('successMsg','banner Successfully Deleted');
    }

}
