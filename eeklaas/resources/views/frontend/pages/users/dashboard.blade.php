@extends('frontend.pages.users.master')
<body class="index-opt-1 catalog-product-view catalog-view_op1 page-order">

    <div class="wrapper">

        @section('sub-content')
            <main class="site-main">

            <div style="margin-bottom: 2%">
                <div class="page-content page-order">
                    @include('layouts.include.msg')

                    <div class="order-detail-content">
                        <div class="content-text clearfix">
                        </div>
                        @if(count($orders) >0)
                         <div class="card">
                             <div class="card-header text-center">Order Summary</div>
                             <div class="card-body">
                                 <div class="table-responsive">
                                   
                                        <div class="">
                                            <ul class="list-group">
                                                <span class="text-success font-weight-bold">Receiver Details</span>
                                                <li class="list-group-item"><strong>Name:</strong> &nbsp;{{$shipping->first_name}} &nbsp;{{$shipping->last_name}}</li>
                                                <li class="list-group-item"><strong>Mobile:</strong> &nbsp;{{$shipping->mobile}}</li>
                                                <li class="list-group-item"><strong>Address:</strong>&nbsp;{{$shipping->address}}</li>
                                            </ul>
                                        </div>
                                         <table class="table table-bordered table-hover">
                                             <thead>
                                             <tr>
                                                 <th width="5%">SL</th>
                                                 <th width="15%">Product Name</th>
                                                 <th width="10%">Unit price</th>
                                                 <th width="5%">Quantity</th>
                                                 <th width="5%">Total Price</th>

                                             </tr>
                                             </thead>
                                             <tbody>
                                             @foreach($orders as $key=> $order)
                                                 <tr>
                                                     <td>{{$key+1}}</td>
                                                     <td>{{$order->product_name}}</td>
                                                     <td>{{$order->product_price }}</td>
                                                     <td>{{$order->product_quantity}}</td>
                                                     <td>{{$order->product_price *$order->product_quantity}}</td>
                                                 </tr>
                                             @endforeach
                                             <tr>
                                                 <td colspan="3"></td>
                                                 <td colspan="">Sub-Total</td>
                                                 <td>{{$product->subtotal}}</td>
                                             </tr>
                                             <tr>
                                                 <td colspan="3"></td>
                                                 <td colspan="">Shipping Cost</td>
                                                 <td>60</td>
                                             </tr>
                                             <tr>
                                                 <td colspan="3"></td>
                                                 <td colspan="">Total</td>
                                                 <td>{{$product->total}}</td>
                                             </tr>

                                             </tbody>
                                         </table>
                                         <span class="float-right">
                                            <a href="{{route('order.invoice')}}">
                                                <button class="btn btn-success">Invoice</button>
                                            </a>
                                         </span>
                                         @else
                                    <div class="card">
                                        <div class="card-header text-center bg-success text-light">@if(Auth::check()){{Auth::user()->name}}@endif Welcome to your 
                                        Dashboard, We are happy you are here...
                                        </div>
                                    </div>

                                     @endif
                                 </div>
                             </div>
                         </div>
                    </div>
                </div>
                <br>
            </div>
        </main>
        @endsection
        <a href="#" class="back-to-top">
            <i aria-hidden="true" class="fa fa-angle-up"></i>
        </a>

    </div>




