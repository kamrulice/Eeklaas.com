@extends('frontend.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                    <header class="header " style="box-shadow:-1px 10px 8px 7px #E6E6E6;">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link"   href="{{route('seller.dashboard')}}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('seller.productAdd')}}" class="nav-link">Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('sellerAll.product')}}" role="tab">Inventory</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('sellerOrder.product')}}" role="tab">Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('seller.advertise')}}" role="tab">Advertising</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('seller.details')}}" role="tab">Seller Details</a>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown show">
                                    <a class="nav-link dropdown-toggle" href="#" role="tab" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Reports
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="nav-link" href="{{route('seller.productReports')}}" role="tab" style="font-size:15px;">Sales</a>
                                        <a class="nav-link" href="{{route('seller.productStock')}}" style="font-size:15px;">Stock IN</a>
                                        <a class="nav-link" href="{{route('seller.productStockOut')}}" style="font-size:15px;">Stock Out</a>
                                        <a class="nav-link" href="{{route('seller.transactions')}}" style="font-size:15px;">Transaction overview</a>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </header>
            </div>
            <div class="container">
                <div class="col-md-12">
                    <a href="{{ route('seller.advertise')}}" class="btn btn-primary">Add New</a>
                    @if(Session::has('msg'))
                        <div>
                            <span class="alert alert-success text-center">{{Session::get('msg')}}</span>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header card-header-primary" data-background-color="purple">
                            <h4 class="card-title ">All Banner</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>SL.</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($banners as $key=>$banner)
                                        <tr>
                                            <td>{{ $key + 1}}</td>
                                            <td>{{ $banner->title}}</td>
                                            <td><img class="img-responsive img-thumbnails img-bordered" src="{{ asset('uploads/banner/'.$banner->image)}}" style="height:100px;width:100px;"></td>
                                            <td>{{ $banner->created_at->diffForHumans()}}</td>

                                            <td>
                                                <a href="{{route('seller.banner.show',$banner->id)}}"><button class="btn btn-success btn-sm">View</button></a>
                                                <a href="{{route('seller.banner.edit',$banner->id)}}"><button class="btn btn-info btn-sm">Edit</button></a>
                                                <a href="{{route('seller.banner.delete',$banner->id)}}" onclick="return confirm('Are You Sure Want to Delete ?')">
                                                    <button class="btn btn-danger btn-sm">Delete</button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div><span class="text-center">{{$banners->links()}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection





