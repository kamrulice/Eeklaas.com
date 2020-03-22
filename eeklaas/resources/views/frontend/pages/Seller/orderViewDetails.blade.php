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
                        <div class="order-detail-content">
                        <div class="card-body">
                         
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
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection


