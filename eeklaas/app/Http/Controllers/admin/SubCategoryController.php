<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::all();
        return view('admin.subcategory.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = Category::all();
        return view('admin.subcategory.create',compact('subcategories'));
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
            'category'=>'required',
            'name'=>'required',
            'description'=>'required',
          ]);
          
          $subcategory = new SubCategory();
          $subcategory->category_id = $request->category;
          $subcategory->name=$request->name;
          $subcategory->description=$request->description;
          $subcategory->slug=str_slug($request->name);
          $subcategory->save();
          return redirect()->route('subcategory.index')->with('successMsg','Sub Category Successfully Saved');
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
        $subcategory = SubCategory::find($id);
        $categories = Category::all();
        return view('admin.subcategory.edit',compact('subcategory','categories'));
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
          'category' => 'required',
          'name'=>'required',
          'description'=>'required',
        ]);
        $subcategory = SubCategory::find($id);
        $subcategory->category_id = $request->category;
        $subcategory->name=$request->name;
        $subcategory->description=$request->description;
        $subcategory->slug=str_slug($request->name);
        $subcategory->save();
        return redirect()->route('subcategory.index')->with('successMsg','Subcategory Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        subcategory::find($id)->delete();
        return redirect()->back()->with('successMsg','SubCategory Successfully Deleted');
    }
}
