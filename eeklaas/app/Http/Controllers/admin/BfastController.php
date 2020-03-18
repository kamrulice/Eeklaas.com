<?php

namespace App\Http\Controllers\admin;

use App\Bfast;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BfastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $bfasts = Bfast::all();
      return view('admin.bfast.index',compact('bfasts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bfast.create');
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
          if (!file_exists('uploads/bfast'))
          {
              mkdir('uploads/bfast', 0777 , true);
          }
          $image->move('uploads/bfast',$imagename);
      }else {
          $imagename = 'dafault.png';
      }

      $bfast = new Bfast();
      $bfast->title = $request->title;
      $bfast->description = $request->description;
      $bfast->image = $imagename;
      $bfast->save();
      return redirect()->route('bfast.index')->with('successMsg','Breakfast Successfully Saved');
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
      $bfast = Bfast::find($id);
      return view('admin.bfast.edit',compact('bfast'));
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
      $bfast = Bfast::find($id);
      if (isset($image))
      {
          $currentDate = Carbon::now()->toDateString();
          $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
          if (!file_exists('uploads/bfast'))
          {
              mkdir('uploads/bfast', 0777 , true);
          }
          $image->move('uploads/bfast',$imagename);
      }else {
          $imagename = $bfast->image;
      }

      $bfast->title = $request->title;
      $bfast->description = $request->description;
      $bfast->image = $imagename;
      $bfast->save();
      return redirect()->route('bfast.index')->with('successMsg','Breakfast Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $bfast = Bfast::find($id);
      if (file_exists('uploads/bfast/'.$bfast->image))
      {
          unlink('uploads/bfast/'.$bfast->image);
      }
      $bfast->delete();
      return redirect()->back()->with('successMsg','Breakfast Successfully Deleted');
    }
}
