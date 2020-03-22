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
                    <div class="order-detail-content">
                    <div class="table-responsive">
                     
                        <div class="">
                          <ul class="list-group">
                            <span class="text-success font-weight-bold">Receiver Details</span>
                              <li class="list-group-item"><strong>Name:</strong> &nbsp;{{$shipping->first_name}} &nbsp;{{$shipping->last_name}}</li>
                              <li class="list-group-item"><strong>Mobile:</strong> &nbsp;{{$shipping->mobile}}</li>
                               <li class="list-group-item"><strong>Address:</strong>&nbsp;{{$shipping->address}}</li>
                               <li class="list-group-item"><strong>Payment Type:</strong>&nbsp;{{$payment->method}}</li>
                          </ul>
                           </div>
                            <table class="table table-bordered table-hover">
                               <thead>
                                   <tr>
                                     <th width="5%">SL</th>
                                       <th width="15%">Product Name</th>
                                       <th width="15%">Image</th>
                                        <th width="10%">Unit price</th>
                                        <th width="5%">Quantity</th>
                                        <th width="5%">Total Price</th>

                                    </tr>
                                 </thead>
                                  <tbody>
                                   @foreach($orders as $key=> $order)
                                      <tr>
                                         <td>{{$key+1}}</td>
                                         <td>{{$order->product_name }}</td>
                                         @php
                                            $product = App\Product::where('id',$order->product_id)->first();
                                            $images = App\ProductImage::where('product_id',$product->id)->first();
                                          @endphp
                                          <td>
                                            
                                            <img src="{{asset('uploads/products/'.$images->image)}}" alt="" height="40px" width="40px">
                                          </td>
                                          <td>{{$order->product_price }}</td>
                                          <td>{{$order->product_quantity }}</td>
                                        
                                          <td>{{$order->product_price *$order->product_quantity}}</td>
                                        </tr>
                                             @endforeach
                                             <tr>
                                                 <td colspan="4"></td>
                                                 <td colspan="">Sub-Total</td>
                                                 <td>{{$orderView->subtotal}}</td>
                                             </tr>
                                             <tr>
                                                 <td colspan="4"></td>
                                                 <td colspan="">Shipping Cost</td>
                                                 <td>60</td>
                                             </tr>
                                             <tr>
                                                 <td colspan="4"></td>
                                                 <td colspan="">Total</td>
                                                 <td>{{$orderView->total}}</td>
                                             </tr>

                                             </tbody>
                                         </table>

                        </div>
                    </div>
                </div>
                <br>
            </div>
        </main>
@endsection
