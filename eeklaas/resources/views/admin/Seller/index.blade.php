@extends('layouts.app')

@section('title','Seller')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <div class="card">
                        <div class="card-header card-header-primary" data-background-color="purple">
                            <h4 class="card-title ">All Sellers</h4>
                        </div>
                        <div class="card-body">
                            <table id="table" class="table table-responsive table-bordered table-hover">
                                <thead>
                                <th>SL.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Action</th>
                                </thead>
                                <tbody>

                                @foreach($admins as $key=> $admin)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$admin->name}}</td>
                                        <td>{{$admin->email}}</td>
                                        <td>{{$admin->phone}}</td>
                                        <td>
                                            @if($admin->status==1)

                                                <a href="{{route('seller.active',$admin->id)}}"><button class="btn btn-success btn-sm">Active</button></a>
                                            @else
                                                <a href="{{route('seller.active',$admin->id)}}"><button class="btn btn-warning btn-sm">Inactive</button></a>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="dropdown show">
                                                <a class="btn btn-secondary btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Options
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a href="{{route('seller.delete',$admin->id)}}" onclick="return confirm('Are you sure want to delete this seller ?')">
                                                        <button class="btn btn-danger btn-sm">Delete</button>
                                                    </a>
                                                    <a href="{{route('sellers.details',$admin->id)}}">
                                                        <button class="btn btn-info btn-sm">View</button>
                                                    </a>
                                                    <a href="{{route('sellers.productSales',$admin->id)}}">
                                                        <button class="btn btn-primary btn-sm">Sales</button>
                                                    </a>
                                                    <a href="{{route('seller.products',$admin->id)}}" class="btn btn-success btn-sm">Products</a>
                                                    <a href="{{route('seller.orderStatus',$admin->id)}}" class="btn btn-dark btn-sm">Orders</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush
