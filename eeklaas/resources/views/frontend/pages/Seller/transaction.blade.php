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

                    <div class="card col-md-6 offset-3">
                        <div class="card-header card-header-primary" data-background-color="purple">
                            @if(Session::has('msg'))
                                <span class="alert alert-success alert-dismissable text-center">{{Session::get('msg')}}</span>
                            @endif
                            <h4 class="card-title text-center ">Transaction Overview</h4>
                            <span class="float-right">
{{--                                <a href="{{route('expiry.product.invoice')}}" target="_blank">--}}
{{--                                    <button class="btn btn-success btn-sm">Generate Invoice</button>--}}
{{--                                </a>--}}
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div class="mt-2">Total Sales Amounts<span class="float-right badge badge-info badge-pill">{{$dueTotal}}</span></div>
                                <div class="mt-2">Receive Amounts<span class="float-right badge badge-success badge-pill">{{$total}}</span></div>
                                @php $totalTransaction =$dueTotal-$total;  @endphp
                                <div class="mt-2">Due Amounts<span class="float-right badge badge-danger badge-pill">{{$totalTransaction}}</span></div>
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
