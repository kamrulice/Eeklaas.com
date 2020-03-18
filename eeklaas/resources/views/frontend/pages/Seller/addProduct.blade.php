@extends('frontend.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <header class="header " style="box-shadow:-1px 10px 8px 7px #E6E6E6;">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="{{route('seller.productAdd')}}" role="tab" aria-controls="profile">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"   href="{{route('sellerAll.product')}}" role="tab">Inventory</a>
                    </li>
                </ul>
            </header>
            </div>
            <div class="container">
                <div class="row" style="border:40px solid #E7E7E7;">
                    <div class="col-md-12">
                        @include('layouts.include.msg')
                        <div class="card col-md-10 offset-2 float-left">
                            <div class="card-header" data-background-color="purple">
                                <h2 class="title" style="font-size:20px; ">Add New Product</h2>
                                <a class="btn btn-info" href="{{route('upload.product')}}"></a>
                            </div>
                            <div class="card-content">
                                <form method="POST" action="{{route('seller.productStore')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <select class="form-control" name="category" id="category">
                                                    <option selected disabled>Please Select a Category</option>
                                                    @foreach(App\Category::all() as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <select class="form-control" name="subcategory" id="subcategory">
                                                    <option value="">Select SubCategory</option>
                                                    @foreach(App\SubCategory::all() as $subCategory)
                                                        <option value="{{$subCategory->id}}">{{$subCategory->name}}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <select class="form-control" name="brand" id="brand">
                                                    <option selected disabled> Select Select a Brand</option>
                                                    @foreach(App\Brand::all() as $brand)
                                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Name</label>
                                                <input type="text" class="form-control" name="title">
                                                <input type="hidden" class="form-control" name="seller_id" @if(Session::has('sellerId'))value="{{Session::get('sellerId')}}" @endif>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Description</label>
                                                <textarea class="form-control" name="description" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Price</label>
                                                <input type="number" class="form-control" name="price">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Quantity</label>
                                                <input type="number" class="form-control" name="quantity">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <select class="form-control" name="size">
                                                    <option>Select Size</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                    <option>XL</option>
                                                    <option>XXL</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <select class="form-control" name="color">
                                                    <option>Select Color</option>
                                                    <option>Red</option>
                                                    <option>Green</option>
                                                    <option>Blue</option>
                                                    <option>Yellow</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Date Line</label>
                                                <input type="date" class="form-control" name="date_line">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-12">

{{--                                            <div class="row">--}}
{{--                                                <div class="col-md-3">--}}
{{--                                                    <input type="file" name="product_image[]">--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-3">--}}
{{--                                                    <input type="file" name="product_image[]">--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-3">--}}
{{--                                                    <input type="file" name="product_image[]">--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-3">--}}
{{--                                                    <input type="file" name="product_image[]">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

                                        </div>
                                    </div><br>
                                    <button type="submit" class="btn btn-success">Save</button>
                                </form>
                            </div>
                        </div>
                </div>


            </div>
        </div>
    </div>

@endsection
