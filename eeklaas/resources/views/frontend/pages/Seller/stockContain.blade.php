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
                            <h4 class="card-title ">Stock Products</h4>
                            <span class="float-right">
                                <a href="{{route('seller.stock.invoice')}}" target="_blank">
                                    <button class="btn btn-success btn-sm">Generate Invoice</button>
                                </a>
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-bordered table-hover">
                                    <thead>
                                    <th>SL.</th>
                                    <th>SKU</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Quantity</th>
                                    <th>Expire Date</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($stocks as $key=> $stock)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$stock->sku}}</td>
                                            <td>{{$stock->title}}</td>
                                            <td>{{$stock->category->name}}</td>
                                            <td>{{$stock->quantity}}</td>
                                            <td>{{$stock->date_line}}</td>
                                            <td>
                                                <a><button class="btn btn-info btn-sm">View</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <span class="text-center">{{$stocks->links()}}</span>
                                </div>
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
