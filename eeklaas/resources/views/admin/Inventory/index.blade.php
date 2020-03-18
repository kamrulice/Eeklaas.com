@extends('layouts.app')

@section('title','Inventory')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('stockIn.create')}}" class="btn btn-primary btn-sm">Stock In</a>
                    <a href="{{ route('stockOut.create')}}" class="btn btn-warning btn-sm">Stock out</a>
                    <br>
                    <table id="table" class="table table-bordered table-hover table-responsive">
                        <thead>
                            <th>SL.</th>
                            <th>Product Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Supplier</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>shipping Cost</th>
                            <th>Discount</th>
                            <th>Total Price</th>
                            <th>Payment</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                            @foreach($deliveries as $key=> $delivery)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$delivery->productName}}</td>
                                    <td>{{$delivery->phone}}</td>
                                    <td>{{$delivery->address}}</td>
                                    <td>{{$delivery->supplier}}</td>
                                    <td>{{$delivery->quantity}}</td>
                                    <td>{{$delivery->price}}</td>
                                    <td>{{$delivery->shipping_charge}}</td>
                                    <td>{{$delivery->discount}}</td>
                                    <td>{{$delivery->total_price}}</td>
                                    <td>{{$delivery->payment_type}}</td>
                                    <td>
                                        @if($delivery->status==0)
                                            <a href="{{route('delivery.complete',$delivery->id)}}"><button class="btn btn-warning btn-sm">Processing</button></a>
                                        @else
                                            <a href=""><button class="btn btn-success btn-sm">Completed</button></a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

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
