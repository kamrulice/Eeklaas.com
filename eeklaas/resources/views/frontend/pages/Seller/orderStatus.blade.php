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
                        <table class="table table-bordered table-hover" style="width:100%">
                    <thead class="text-primary">
                      <tr>
                      <th>SL.NO</th>
                        <th>Invoice No.</th>
                        <th>Orderer Name</th>
                        <th>Phone No</th>
                        <th>Delivery Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($orders as $order)
                     
                      <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $order->invoice_number }}</td>
                        @php
                          $user = App\Delivery::where('id',$order->shipping_id)->first();
                         @endphp
                         <td>{{$user->first_name}}&nbsp;{{$user->last_name}}</td>
                         <td>{{$user->mobile}}</td>
                        
                        <td>
                          @if($order->is_complete==0)
                          <a href="" class="btn btn-warning btn-sm">Processing</a>
                          @else
                          <a href="" class="btn btn-success btn-sm">Completed</a>
                           @endif
                        </td>
                        <td>
                         <a href="{{route('seller.order.view',$order->id)}}" class="btn btn-info btn-sm">View</a>
                          <a href="#deleteModals{{ $order->id }}" data-toggle="modal" class="btn btn-sm btn-danger">Delete</a>

                          <!-- Delete Modal -->
                            <div class="modal fade" id="deleteModals{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Are You Sure To Delete?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{{ route('user-order-delete', $order->id) }}" method="post">
                                      @csrf
                                      <button type="submit" class="btn btn-danger btn-sm">Permanently Delete</button>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>  
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
    </div>
@endsection


