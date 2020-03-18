@extends('layouts.app')

@section('title','product view')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.include.msg')
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Product Quality Check</h4>
                        </div>
                        <div class="card-content">
                            <table id="table" class="table table-bordered table-hover">
                                <tbody>
                                <tr>
                                    <th>SL.</th>
                                    <td>{{$products->id}}</td>
                                </tr>
                                <tr>
                                    <th>Product Name</th>
                                    <td>{{$products->title}}</td>
                                </tr>
                                <tr>
                                    <th>Category</th>
                                    <td>{{$products->category->name}}</td>
                                </tr>
                                <tr>
                                    <th>SubCategory</th>
                                    <td>{{$products->sub_category->name}}</td>
                                </tr>
                                <tr>
                                    <th>Product Description</th>
                                    <td>
                                        <textarea class="form-control" rows="6" cols="4" style="">{{$products->description}}</textarea></td>
                                </tr>
                                <tr>
                                    <th>Product Quantity</th>
                                    <td>{{$products->quantity}}</td>
                                </tr>
                                <tr>
                                    <th>Product Price</th>
                                    <td>{{$products->price}}</td>
                                </tr>
                                <tr>
                                    <th>Product Image</th>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="row">
                                                    @foreach(\App\ProductImage::where('product_id',$products->id)->get() as $image)
                                                        <div class="col-md-3">
                                                            <img src="{{ asset('uploads/products/'.$image->image)}}"
                                                                 style="width: 150px;height: 150px;"><br>

                                                        </div>
                                                    @endforeach
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Expire Date</th>
                                    <td>{{$products->date_line}}</td>
                                </tr>
                                <tr>
                                    <th>Color</th>
                                    <td>{{$products->color}}</td>
                                </tr>
                                <tr>
                                    <th>Size</th>
                                    <td>{{$products->size}}</td>
                                </tr>
                                </tbody>
                            </table>
                            <form method="POST" action="{{route('product.update',$products->id) }}" enctype="multipart/form-data" name="edit/productForm">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="published" value="1">
                                <button type="submit"  class="btn btn-danger">Approved</button>
                            </form>
                            <button data-toggle="modal" data-target="#reject{{$products->id}}" class="btn btn-success">Reject</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="reject{{$products->id}}"  role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Cause Of Rejected</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('product.update',$products->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                 <textarea class="form-control" rows="4" cols="4" name="reject" placeholder="Type Your Text Here..."></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">post</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection

@push('scripts')



@endpush
