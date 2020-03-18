@extends('frontend.pages.users.master')
<body class="index-opt-1 catalog-product-view catalog-view_op1 page-order">
    @include('layouts.include.msg')

    <div class="wrapper">
        
        @section('sub-content')
            <main class="site-main">

            <div style="margin-bottom: 2%" class="columns container">
                <div class="page-content page-order">
            
                    <div class="order-detail-content">
                        <div class="content-text clearfix">
                                <img class="alignleft" src="{{ App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}" class="img rounded-circle" style="width: 200px;">
                            <div style="margin-top:3%">
                            <h1 style="font-weight: 600">{{ Auth::user()->name  }}</h1><hr class="hr">
                            <span class="des">Contact No : {{ Auth::user()->phone  }}</span><br>
                            <span class="des">Number of Orders : {{ App\Cart::totalItems()}}</span><br>
                            <span class="des">Pending Orders : 2</span>
                            </div>
                        </div>

                    <h2 class="page-heading">
                            <span class="page-heading-title3">Cart Details</span>
                        </h2>


                        <div class="table-responsive">
                            <table class="table table-bordered  cart_summary">
                                <thead>
                                    <tr>
                                        <th class="cart_product">SL</th>
                                        <th>Name of Product</th>
                                        <th>Description</th>
                                        <th>Qty</th>
                                        <th>Unit price</th>
                                        <th>Sub Total price</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(App\Cart::totalCarts() as $key=>$cart)
                                    <tr>
                                        <td class="cart_product">{{$key+1}}</td>
                                        <td class="cart_description">{{ $cart->product->title}}</td>
                                        <td class="cart_avail">{{ $cart->product->description}}</td>
                                        
                                        <td class="cart_product">{{ $cart->product_quantity}}</td>
                                        <td class="cart_product">{{ $cart->product->price }} Taka</td>
                                        <td class="cart_product">{{ $cart->product->price * $cart->product_quantity  }} Taka</td>
                                        <td class="cart_product">
                                            <a href="{{route('user.address')}}" class="btn btn-info">Order Now</a>
                                            <!-- <button class="wisb" name="add">Order Now</button> -->
                                        </td>
                                    </tr>
                                    @endforeach

                                    <tr>
                        <td colspan="3"></td>
                        <td class="float-right">Totla Price: </td>
                        <td class="text-center">{{ $total_price }}</td>
                    </tr>
                    <tr>
                        <td colspan="3">NB: Shipping Cost = 100 Taka</td>
                        <td class="float-right">Totla Price With Shipping Cost: </td>
                        <td>{{ $total_price + App\Models\Setting::first()->shipping_cost }}</td>
                    </tr>

                                    
                                </tbody>


                                  
                            </table>

                            <strong>Want Change Cart Items ???<a href="{{route('carts')}}">Please Click Here</a></strong>
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

    
    

 