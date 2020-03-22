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
                    @if(count($orders)>0)
                    <table class="table table-bordered table-hover" style="width:100%">
                    <thead class=" text-primary">
                      <th>SL.NO</th>
                        <th>Invoice No.</th>
                        <th>Orderer Name</th>
                        <th>Orderer Phone No</th>
                        <th>Delivery Status</th>
                        <th>Action</th>
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
                          <a href="{{route('order-completed',$order->id)}}" class="btn btn-warning btn-sm">Processing</a>
                          @else
                          <a href="{{route('order-completed',$order->id)}}" class="btn btn-success btn-sm">Completed</a>
                           @endif
                        </td>
                        <td>
                         <a href="{{route('user.order.view',$order->id)}}" class="btn btn-info btn-sm">View</a>
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
                    @else
                    <div class="card pt-5">
                        <div class="card-header text-center bg-success text-light">@if(Auth::check()){{Auth::user()->name}}@endif ,You Have No Order Yet...
                                        </div>
                                    </div>
                    @endif
                        </div>

                    </div>
                </div>
                <br>
            </div>


        </main>










@endsection
