@extends('frontend.layouts.master')

@section('content')
    <main class="site-main">

            <div style="margin-bottom: 5%" class="columns container">


                <h2 class="page-heading">
                    <span class="page-heading-title3">Order Summary</span>
                </h2>

                <div class="page-content page-order">
                    <ul class="step">
                        <li><span><a href="{{ route('user.dashboard')}}">Dashboard</a></span></li>
                        <li class="current-step"><span><a href="{{ route('user.order_status')}}">Orders</a></span></li>
                        <li><span><a href="{{ route('user.address')}}">Address</a></span></li>
                        <li><span><a href="{{route('user.account')}}">Account Detail</a></span></li>
                        <li><span><a href="{{route('user.track')}}">Track Your Order</a></span></li>

                    </ul>
                    <!-- <div class="heading-counter warning">Your shopping cart contains:
                        <span>2 Product</span>
                    </div> -->
                    <div class="order-detail-content">
                        <div class="table-responsive">
                            <table class="table table-bordered  cart_summary">
                                <thead>
                                    <tr>
                                        <th width="5%">SL</th>
                                        <th>Name of Product</th>
                                        <!-- <th>Quantity</th> -->
                                        <th>Price</th>
                                        <th>Order Date</th>
                                        <th>Delivery Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Order_products as $key=> $Order_product)
                                    <tr>
                                        <td class="cart_product">{{$key+ 1}}</td>
                                        <td class="cart_product">
                                            <p class="product-name"><a href="#">{{$Order_product->product->title}}</a></p>
                                        </td>
                                        <!-- <td class="cart_product"></td> -->
                                        <td class="cart_product"><span>{{$Order_product->product->price}}</span></td>
                                        <td class="cart_product">{{$Order_product->created_at}}</td>

                                        <td class="cart_product">

                                          {{$Order_product->is_completed==1? 'Delivery':'Pending'}}


                                           <!--  @if($order_product->is_completed == 1)
                                          <button class="stkb" name="add">Delivered</button>
                                          @else
                                           <button class="stko" name="add">Pending</button>
                                           @endif -->
                                       </td>

                                    </tr>
                                    @endforeach

                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
                <br>
            </div>


        </main>










@endsection
