@extends('layouts.app')
@section('title','create Order')

@push('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
@endpush

@section('content')
<div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="card">
           <div class="card-header text-center bg-primary">Order Summary</div>
               <div class="card-body">
                 <div class="table-responsive">
                     @if($orders!=null)
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
                                          <td>
                                              <div class="form-group form-inline">
                                                <form action="{{route('update.customer')}}" method="POST">
                                                @csrf
                                                  <input type="number" name="product_quantity" value="{{$order->product_quantity}}" class="form-control" style="width: 60px">
                                                  <input type="hidden" name="id" value="{{$order->id}}"/>
                                                  <button class="btn btn-success btn-sm" title="update product quantity">update</button>
                                                </form>
                                              </div>
                                          
                                          </td>
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
                                         <div class="">
                                         <span class="float-right">
                                            <a href="{{route('adminOrder.invoice',$orderView->id)}}" target="_blank">
                                                <button class="btn btn-success">Invoice</button>
                                            </a>
                                         </span>
                                         </div>
                                     @endif
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
























































