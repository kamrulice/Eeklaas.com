@extends('layouts.app')

@section('title','Dashboard')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="red">
                            <i class="material-icons">info_outline</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Orders</p>
                            <h3 class="title text-danger font-weight-bold">{{ App\OrderManage::where('status',0)->count() }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">local_offer</i><a href="{{ route('order.index')}}">Get More Details...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="orange">
                            <i class="material-icons">content_copy</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Delivery Pending</p>
                            <h3 class="title font-weight-bold text-warning">{{\App\OrderManage::where('is_complete',0)->count()}}
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-danger">info</i>
                                <a href="#pablo">Total Categories and Items</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="green">
                            <i class="material-icons">slideshow</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Delivery Completed</p>
                            <h3 class="title font-weight-bold text-success">{{App\OrderManage::where('is_complete',1)->count() }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">date_range</i> <a href="{{route('inventory.index')}}">Get More Details...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="blue">
                            <i class="total-sales"><img src="{{asset('uploads/slider/sale.png')}}" alt="image"> </i>

                        </div>
                        <div class="card-content">
                            <p class="category">Sales</p>
                            <h3 class="title font-weight-bold text-primary">{{\App\OrderDetails::all()->count()}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">date_range</i><a href="{{route('inventory.index')}}">Get More Details...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-md-6" style="height:350px; ">
                        <div class="card" style="height:400px; ">
                            <div class="card-body">
                                {!! $saleReport->render() !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="height:350px; ">
                        <div class="card">
                            <div class="card-body">
                                {!! $sallers->render() !!}
                            </div>

                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="card-content">
                    </div>
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title text-center">Inventory</h4>
                    </div>
                    {!! $chart->render() !!}
                </div>
                <div class="card">
                    <div class="card-content">
                    </div>
                    {!! $charts->render() !!}
                </div>

            </div>
        </div>
    </div>
@endsection
{!! Charts::scripts() !!}
{!! $chart->script() !!}
{!! $charts->script() !!}
{!! $saleReport->script() !!}


@push('scripts')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>

@endpush
