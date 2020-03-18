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

                    <div class="card">
                        <div class="card-header card-header-primary" data-background-color="purple">
                            <h4 class="card-title ">Show Details</h4>
                            <span class="float-right">
                                    <a href="{{route('all.banner')}}" class="btn btn-info">Manage Banner</a>
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-bordered table-hover">
                                    <tbody>
                                    <tr>
                                        <th>SL.</th>
                                        <td>{{$viewBanner->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Product Name</th>
                                        <td>{{$viewBanner->title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Category</th>
                                        <td>{{$viewBanner->category->name}}</td>
                                    </tr>

                                    <tr>
                                        <th>Banner Description</th>
                                        <td>{{$viewBanner->description}}</td>
                                    </tr>
                                    <tr>
                                        <th>Banner Image</th>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img src="{{ asset('uploads/banner/'.$viewBanner->image)}}" width="100%" height="300px;">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
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
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable();

        } );
    </script>
@endpush
