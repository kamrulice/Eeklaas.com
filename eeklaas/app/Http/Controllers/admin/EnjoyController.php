<?php

namespace App\Http\Controllers\admin;

use App\Enjoy;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnjoyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $enjoys = Enjoy::all();
      return view('admin.enjoy.index',compact('enjoys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.enjoy.create');
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
          'description' => 'required',
          'image' => 'required|mimes:jpeg,jpg,bmp,png',
      ]);
      $image = $request->file('image');
      $slug = str_slug($request->title);
      if (isset($image))
      {
          $currentDate = Carbon::now()->toDateString();
          $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
          if (!file_exists('uploads/enjoy'))
          {
              mkdir('uploads/enjoy', 0777 , true);
          }
          $image->move('uploads/enjoy',$imagename);
      }else {
          $imagename = 'dafault.png';
      }

      $enjoy = new Enjoy();
      $enjoy->title = $request->title;
      $enjoy->description = $request->description;
      $enjoy->image = $imagename;
      $enjoy->save();
      return redirect()->route('enjoy.index')->with('successMsg','Enjoyment Successfully Saved');
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
      $enjoy = Enjoy::find($id);
      return view('admin.enjoy.edit',compact('enjoy'));
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
          'description' => 'required',
          'image' => 'mimes:jpeg,jpg,bmp,png',
      ]);
      $image = $request->file('image');
      $slug = str_slug($request->title);
      $enjoy = Enjoy::find($id);
      if (isset($image))
      {
          $currentDate = Carbon::now()->toDateString();
          $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
          if (!file_exists('uploads/enjoy'))
          {
              mkdir('uploads/enjoy', 0777 , true);
          }
          $image->move('uploads/enjoy',$imagename);
      }else {
          $imagename = $enjoy->image;
      }

      $enjoy->title = $request->title;
      $enjoy->description = $request->description;
      $enjoy->image = $imagename;
      $enjoy->save();
      return redirect()->route('enjoy.index')->with('successMsg','Enjoyment Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $enjoy = Enjoy::find($id);
      if (file_exists('uploads/enjoy/'.$enjoy->image))
      {
          unlink('uploads/enjoy/'.$enjoy->image);
      }
      $enjoy->delete();
      return redirect()->back()->with('successMsg','Enjoyment Successfully Deleted');
    }
}
