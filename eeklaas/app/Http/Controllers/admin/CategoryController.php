<?php

namespace App\Http\Controllers\admin;


use App\Category;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id','desc')->get();
        
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $main_categories = Category::orderBy('name','desc')->where('parent_id',NULL)->get();
        return view('admin.category.create',compact('main_categories'));
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
            if (!file_exists('uploads/category'))
            {
                mkdir('uploads/category', 0777 , true);
            }
            $image->move('uploads/category',$imagename);
        }else {
            $imagename = 'dafault.png';
        }
          $category = new Category();
          $category->name=$request->name;
          $category->description=$request->description;
          $category->parent_id=$request->parent_id;
          $category->slug = str::slug($request->name);
          $category->image = $imagename;
          $category->save();
          return redirect()->route('category.index')->with('successMsg','Category Successfully Saved');
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
        $main_categories = Category::orderBy('name','desc')->where('parent_id',NULL)->get();

        $category = Category::find($id);
        if (!is_null($category)) {
                return view('admin.category.edit',compact('category','main_categories'));
            }else{
                return view('admin.category.index');
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
            'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        $category = Category::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/category'))
            {
                mkdir('uploads/category',0777,true);
            }
            unlink('uploads/category/'.$category->image);
            $image->move('uploads/category',$imagename);
        }else{
            $imagename = $category->image;
        }
        $category->name = $request->name;
        $category->description = $request->description;
        $category->image = $imagename;
        $category->save();
        return redirect()->route('category.index')->with('successMsg','Category Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        category::find($id)->delete();
        return redirect()->back()->with('successMsg','Category Successfully Deleted');
    }
}
