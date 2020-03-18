<?php

namespace App\Http\Controllers\admin;

use App\Fslider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FsliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $fsliders = Fslider::all();
      return view('admin.fslider.index',compact('fsliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fslider.create');
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
          'title' => 'required',
          'image' => 'required|mimes:jpeg,jpg,bmp,png',
      ]);
      $image = $request->file('image');
      $slug = str_slug($request->title);
      if (isset($image))
      {
          $currentDate = Carbon::now()->toDateString();
          $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
          if (!file_exists('uploads/fslider'))
          {
              mkdir('uploads/fslider', 0777 , true);
          }
          $image->move('uploads/fslider',$imagename);
      }else {
          $imagename = 'dafault.png';
      }

      $fslider = new Fslider();
      $fslider->title = $request->title;
      $fslider->image = $imagename;
      $fslider->save();
      return redirect()->route('fslider.index')->with('successMsg','Featured Slider Successfully Saved');
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
      $fslider = Fslider::find($id);
      return view('admin.fslider.edit',compact('fslider'));
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
          'title' => 'required',
          'image' => 'mimes:jpeg,jpg,bmp,png',
      ]);
      $image = $request->file('image');
      $slug = str_slug($request->title);
      $fslider = Fslider::find($id);
      if (isset($image))
      {
          $currentDate = Carbon::now()->toDateString();
          $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
          if (!file_exists('uploads/fslider'))
          {
              mkdir('uploads/fslider', 0777 , true);
          }
          $image->move('uploads/fslider',$imagename);
      }else {
          $imagename = $fslider->image;
      }

      $fslider->title = $request->title;
      $fslider->image = $imagename;
      $fslider->save();
      return redirect()->route('fslider.index')->with('successMsg','Featured Slider Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $fslider = Fslider::find($id);
      if (file_exists('uploads/fslider/'.$fslider->image))
      {
          unlink('uploads/fslider/'.$fslider->image);
      }
      $fslider->delete();
      return redirect()->back()->with('successMsg','Featured Slider Successfully Deleted');
    }
}
