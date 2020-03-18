@extends('layouts.app')

@section('title','Seller')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <div class="card">
                        <div class="card-header card-header-primary" data-background-color="purple">
                            <h4 class="card-title ">All Products</h4>
                        </div>
                        <div class="card-body">
                            <table id="table" class="table table-responsive table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    <th>Expired Date</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($sellerProducts as $key=> $product)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$product->title}}</td>
                                        <td>{{$product->category->name}}</td>
                                        <td>{{$product->quantity }}</td>
                                        <td>{{$product->price }}</td>
                                        <td>{{$product->size}}</td>
                                        <td>{{$product->color}}</td>
                                        <td>{{$product->date_line}}</td>
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
