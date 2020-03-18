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
                            <h4 class="card-title text-center">Seller Orders Summary</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-responsive">
                                <thead>
                                <th>SL.</th>
                                <th>SKU</th>
                                <th>Product Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Supplier</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>shipping Cost</th>
                                <th>Discount</th>
                                <th>Total Price</th>
                                <th>Payment</th>
                                <th>Status</th>
                                </thead>
                                <tbody>
                                @foreach($orders as $key=> $delivery)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$delivery->shipping->sku}}</td>
                                        <td>{{$delivery->productName}}</td>
                                        <td>{{$delivery->phone}}</td>
                                        <td>{{$delivery->address}}</td>
                                        <td>{{$delivery->supplier}}</td>
                                        <td>{{$delivery->quantity}}</td>
                                        <td>{{$delivery->price}}</td>
                                        <td>{{$delivery->shipping_charge}}</td>
                                        <td>{{$delivery->discount}}</td>
                                        <td>{{$delivery->total_price}}</td>
                                        <td>{{$delivery->payment_type}}</td>
                                        <td>
                                            @if($delivery->status==0)
                                                <a href=""><button class="btn btn-warning btn-sm">Processing</button></a>
                                            @else
                                                <a href=""><button class="btn btn-success btn-sm">Completed</button></a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="text-center">
                                <span class="text-center">{{$orders->links()}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection


