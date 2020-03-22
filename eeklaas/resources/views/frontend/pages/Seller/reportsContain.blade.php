@extends('frontend.layouts.master')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
@endpush
@section('content')
    <div class="content">
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
                        </ul>
                    </header>
                    <div class="card">
                        <div class="card-header card-header-primary" data-background-color="purple">
                            <h4 class="card-title text-center">Sales Summary</h4>
                            <span class="float-right">
                                <a href="{{route('seller.product.invoice')}}" target="_blank">
                                    <button class="btn btn-success btn-sm">Generate Invoice</button>
                                </a>
                            </span>
                        </div>
                        <div class="card-body">
                        <table id="table" class="table table-bordered table-hover table-responsive offset-3">
                        <thead>
                            <th>SL.</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total Price</th>
                             
                        </thead>
                        <tbody>
                            @foreach($complete as $key=> $delivery)
                                <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$delivery->product_name}}</td>
                                <td>{{$delivery->product_quantity}}</td>
                                <td>{{$delivery->product_price}}</td>
                                <td>{{$delivery->product_quantity*$delivery->product_price}}</td>
                                @php
                                $total_price= $delivery->product_quantity*$delivery->product_price;
                                 $total += $total_price ;@endphp
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3"></td>
                            <td>Total Sale</td>
                            <td><?php echo $total; ?></td>
                        </tr>
                        </tbody>
                    </table>



                            <div class="text-center">
                                <span class="text-center">{{$complete->links()}}</span>
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
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush
