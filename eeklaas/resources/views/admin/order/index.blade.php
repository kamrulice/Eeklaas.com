@extends('layouts.app')
@section('title','create Order')

@push('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
@endpush

@section('content')
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- <a href="{{ route('brand.create')}}" class="btn btn-primary">Add New</a> -->
            @include('layouts.include.msg')
            <div class="card">
              <div class="card-header card-header-primary" data-background-color="purple">
                <h4 class="card-title ">All Orders</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="table" class="table" style="width:100%">
                    <thead class=" text-primary">
                      <th>SL.NO</th>
                        <th>Invoice No.</th>
                        <th>Orderer Name</th>
                        <th>Orderer Phone No</th>
                        <th>Order Status</th>
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
                          @if($order->status==0)
                           <a href="{{route('orders-show',$order->id)}}" class="btn btn-warning btn-sm">View Order</a>
                           @else
                           <a href="{{route('orders-show',$order->id)}}" class="btn btn-success btn-sm">Seen</a>
                           @endif
                           
                        </td>
                        <td>
                          @if($order->is_complete==0)
                          <a href="{{route('order-completed',$order->id)}}" class="btn btn-warning btn-sm">Processing</a>
                          @else
                          <a href="{{route('order-completed',$order->id)}}" class="btn btn-success btn-sm">Completed</a>
                           @endif
                        </td>
                        <td>
                             
                          <a href="#deleteModal{{ $order->id }}" data-toggle="modal" class="btn btn-sm btn-danger">Delete</a>
                          <!-- Delete Modal -->
                            <div class="modal fade" id="deleteModal{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Are You Sure To Delete?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{{ route('order-delete', $order->id) }}" method="post">
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
                </div>
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
