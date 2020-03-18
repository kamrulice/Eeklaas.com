@extends('frontend.pages.users.master')
<body class="index-opt-1 catalog-product-view catalog-view_op1 page-order">

<div class="wrapper">

    @section('sub-content')

        <div style="background-color: #fafafa" class="box-border">
            @if(Session::has('message'))
            <div class="alert alert-dismissible alert-success text-center">{{Session::get('message')}} </div>
            @endif
            <h3 class="2">Order Details</h3><hr>
            <table class="table table-bordered">
                <thead>
                    <th>Customer Name</th>
                    <th>Contact Number</th>
                    <th>Shipping Address</th>
                    <th>Product Name</th>
                    <th>Product Qty</th>
                    <th>Total Price</th>
                </thead>
                <tbody>
                    <td>{{$users->name}}</td>
                    <td>{{$users->phone}}</td>
                    <td>{{$address->address}}</td>
                    <td>{{$productName->title}}</td>
                    <td>{{$cart->product_quantity}}</td>
                </tbody>
            </table>
            <div class="row>">
                <div class="col-md-8">
                    <form style="margin-left: 238px;" action="{{route('order.confirm')}}" method="post">
                       @csrf
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Confirm Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
    <a href="#" class="back-to-top">
        <i aria-hidden="true" class="fa fa-angle-up"></i>
    </a>
</div>




