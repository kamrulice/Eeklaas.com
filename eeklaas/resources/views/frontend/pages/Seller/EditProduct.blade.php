@extends('frontend.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <header class="header " style="box-shadow:-1px 10px 8px 7px #E6E6E6;">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('seller.productAdd')}}" class="nav-link">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"   href="{{route('sellerAll.product')}}" role="tab">Inventory</a>
                    </li>
                </ul>
            </header>
            <div class="container">
                <div class="row" style="border:40px solid #E7E7E7;">
                    <div class="col-md-12">
                        @include('layouts.include.msg')
                        <div class="card col-md-10 offset-2 float-left">
                            <div class="card-header" data-background-color="purple">
                                <h2 class="title">Edit Product</h2>
                            </div>
                            <div class="card-content">
                                <form method="POST" action="{{ route('seller.productUpdate') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <select class="form-control" name="category">
                                                    <option>Select Category Name</option>
                                                    @foreach($categories as $category)
                                                        <option {{ $category->id == $products->category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <select class="form-control" name="brand">
                                                    @foreach($subCategory as $brand)
                                                        <option {{ $brand->id == $products->parent->id ? 'selected' : '' }} value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <select class="form-control" name="brand" id="brand">
                                                    @foreach($brands as $brand)
                                                        <option {{ $brand->id == $products->parent->id ? 'selected' : '' }} value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Name</label>
                                                <input type="text" class="form-control" name="title" value="{{$products->title}}">
                                                <input type="hidden" name="id" value="{{$products->id}}">
                                                <input type="hidden" name="seller_id" @if(Session::has('sellerId'))value="{{Session::get('sellerId')}}" @endif>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Description</label>
                                                <textarea class="form-control" name="description" rows="5">{{$products->description}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Price</label>
                                                <input type="number" class="form-control" name="price" value="{{$products->price}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Quantity</label>
                                                <input type="number" class="form-control" name="quantity" value="{{$products->quantity}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <select class="form-control" name="size">
                                                    <option>{{$products->size}}</option>
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
                                                    <option>{{$products->color}}</option>
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
                                                <input type="date" class="form-control" name="date_line" value="{{$products->date_line}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="control-label">Product Old Image</label>
                                            <div class="row">
                                                @foreach(\App\ProductImage::where('product_id',$products->id)->get() as $image)
                                                <div class="col-md-3">
                                                    <img src="{{ asset('uploads/products/'.$image->image)}}"
                                                         style="width: 100px;height: 100px;"><br>
                                                      <input type="file" name="product_image[]">
                                                </div>
                                                @endforeach
                                            </div>

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
    </div>
@endsection
