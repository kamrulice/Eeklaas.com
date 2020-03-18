@extends('frontend.layouts.master')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <header class="header " style="box-shadow:-1px 10px 8px 7px #E6E6E6;">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active"  href="{{route('seller.dashboard')}}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('seller.productAdd')}}">Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('sellerAll.product')}}">Inventory</a>
                            </li>
                        </ul>
                    </header>
                    @if(Session::has('msg'))
                        <p class="text-center alert alert-success alert-dismissable">{{Session::get('msg')}}</p>
                    @endif
                    <div class="card">
                        <div class="card-header card-header-primary" data-background-color="purple">
                            <h4 class="card-title ">All Products</h4>
                        </div>
                        <div class="card-body">

                        <table id="table" class="table table-bordered table-hover">
                                    <thead>
                                    <th width="4%">ID</th>
                                    <th width="4%">SKU</th>
                                    <th width="15%">product Name</th>
                                    <th width="15%">Category Name</th>
                                    <th width="5%">Price</th>
                                    <th width="5%">Discount</th>
                                    <th width="5%">publication status </th>
                                    <th width="20%">Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $key=>$product)
                                        <tr>
                                            <td>{{ $key + 1}}</td>
                                            <td>{{$product->sku}}</td>
                                            <td>{{ $product->title}}</td>
                                            <td>{{ $product->category->name}}</td>
                                            <td>{{ $product->price}}</td>
                                            <td>{{ $product->offer_price}}</td>
                                            <td>
                                                @if($product->published==1)
                                                    <button type="submit"  class="btn btn-success btn-sm text-light">Approved</button>
                                                @else
                                                    <button type="submit" class="btn btn-warning btn-sm text-light">Pending</button>
                                                @endif
                                            </td>

                                            <td>

                                                <div class="dropdown show">
                                                    <a class="btn btn-primary btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Options
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                                        <a href="{{ route('sellerProduct.edit',$product->id)}}">
                                                            <button class="btn btn-info btn-sm">Edit</button>
                                                        </a>
                                                        <a href="{{ route('sellerProduct.view',$product->id)}}">
                                                            <button class="btn btn-primary btn-sm mt-2">View</button>
                                                        </a>
                                                        <a href="{{route('sellerProduct.delete',$product->id)}}" class="btn btn-danger btn-sm mt-2"
                                                           onclick="return confirm('Are you Sure?You want to delete this?')">Delete
                                                        </a>

                                                        <button data-toggle="modal" data-target="#exampleModalLong{{ $key }}" class="btn btn-success btn-sm mt-2">Add Quantity</button>
                                                        <button data-toggle="modal" data-target="#exampleModalLongs{{$key}}" class="btn btn-dark btn-sm mt-2">Add Discount</button>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        {{-- Modal form--}}
                                        <div class="modal fade" id="exampleModalLong{{ $key }}"  role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Add Quantity</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('add.quantity')}}" method="POST">
                                                            @csrf
                                                            <div class="form-group">
                                                                <input type="number" class="form-control" name="quantity" placeholder="Add Product Quantity">
                                                                <input type="hidden" name="id" value="{{$product->id}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-success">Add</button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="exampleModalLongs{{$key}}"  role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Add Discount Price</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('add.discount')}}" method="POST">
                                                            @csrf
                                                            <div class="form-group">
                                                                <input type="number" id="offer_price" class="form-control" name="offer_price" placeholder="Add Discount Price">
                                                                <input type="hidden" value="{{$product->id}}" name="id">
                                                                <input type="hidden" id="status" value="1" name="status">
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-success">Save</button>
                                                            </div>

                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        {{-- Modal form--}}

                                    @endforeach
                                    </tbody>
                                </table>
                            <div class="text-center">
                                <span class="text-center">{{$products->links()}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
@push('scripts')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable();
            // $('#exampleModalLong').modal();

        } );

    </script>

@endpush

