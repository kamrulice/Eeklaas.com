 @extends('layouts.app')

@section('title','Seller Details')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary" data-background-color="purple">
                            <h4 class="card-title text-center">Seller Orders Summary</h4>
                        </div>
                        <div class="card-body">
                        <table id="table" class="table table-bordered table-hover table-responsive">
                        <thead>
                            <th>SL.</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total Price</th>
                             
                        </thead>
                        <tbody>
                            @foreach($orders as $key=> $delivery)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$delivery->product_name}}</td>
                                    <td>{{$delivery->product_quantity}}</td>
                                    <td>{{$delivery->product_price}}</td>
                                    <td>{{$delivery->product_price*$delivery->product_quantity}}</td>
                                
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
