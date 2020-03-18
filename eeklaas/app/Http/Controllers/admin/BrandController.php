<?php

namespace App\Http\Controllers\admin;


use App\Brand;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::orderBy('id','desc')->get();
        
        return view('admin.brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.create');
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
            'name'=>'required',
            'description'=>'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
          ]);
          $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/brand'))
            {
                mkdir('uploads/brand', 0777 , true);
            }
            $image->move('uploads/brand',$imagename);
        }else {
            $imagename = 'dafault.png';
        }
          $brand = new Brand();
          $brand->name=$request->name;
          $brand->description=$request->description;
          $brand->slug = str::slug($request->name);
          $brand->image = $imagename;
          $brand->save();
          return redirect()->route('brand.index')->with('successMsg','Brand Successfully Saved');
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


        $brand = Brand::find($id);
        if (!is_null($brand)) {
                return view('admin.brand.edit',compact('brand'));
            }else{
                return view('admin.brand.index');
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
          'name'=>'required',
            'description' => 'required',
        ]);
        $brand = Brand::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/brand'))
            {
                mkdir('uploads/brand',0777,true);
            }
            unlink('uploads/brand/'.$brand->image);
            $image->move('uploads/brand',$imagename);
        }else{
            $imagename = $brand->image;
        }
        
        $brand->name = $request->name;
        $brand->description=$request->description;
        $brand->slug = str::slug($request->name);
        $brand->image = $imagename;
        $brand->save();
        return redirect()->route('brand.index')->with('successMsg','Brand Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        brand::find($id)->delete();
        return redirect()->back()->with('successMsg','Brand Successfully Deleted');
    }
}
