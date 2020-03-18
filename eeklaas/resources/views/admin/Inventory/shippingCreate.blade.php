@extends('layouts.app')

@section('title','Shipping')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('stockIn.create')}}" class="btn btn-primary">Stock In</a>
                    <a href="{{ route('stockOut.create')}}" class="btn btn-warning">Stock out</a>
                </div>
                <hr>
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">Add Shipping Info</h4>
                    </div>
                    <div class="card-content">
                        <form method="POST" action="{{ route('shipping.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Product ID</label>
                                        <input type="text" class="form-control" name="product_id" value="{{$delivery->product_id}}">
                                        <input type="text" class="form-control" name="seller_id" value="{{$delivery->seller_id}}">
                                        <input type="hidden" name="id" value="{{$delivery->id}}">
                                        <input type="hidden" name="payment_type" value="{{$delivery->payment->name}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Product Name</label>
                                        <input type="text" class="form-control" name="productName" value="{{$delivery->product->title}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label">Quantity</label>
                                    <input type="text" name="quantity" value="{{$qty =$delivery->product_quantity}}" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label">Unit Price</label>
                                    <input type="text" name="price" class="form-control" value="{{$price = $delivery->product->price}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label">Shipping Cost</label>
                                    <input type="text" name="shipping_charge" value="{{$charge=$delivery->shipping_charge}}" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label">Discount</label>
                                    <input type="text" name="discount" value="{{$disCount = $delivery->custom_discount}}" class="form-control">
                                </div>
                            </div>
                            @php
                                $total_price=0;
                                 $total_price = $price * $qty;
                                 $sumToal = $total_price + $charge ;
                                 $sum = $sumToal-$disCount;
                            @endphp
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label">Total Price</label>
                                    <input type="text" name="total_price" value="{{$sum}}" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label">Shipping Address</label>
                                    <textarea class="form-control" name="address" rows="4">{{$delivery->shipping_address}}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label">Customer Phone</label>
                                    <input type="number" class="form-control" name="phone" value="{{$delivery->phone_no}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <select class="form-control" name="supplier">
                                        <option>Select Supplier</option>
                                        <option>Rahim</option>
                                        <option>Kairm</option>
                                        <option>Sharif</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
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
