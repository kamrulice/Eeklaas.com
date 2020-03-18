@extends('layouts.app')

@section('title','Sales')

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
                    <a href="{{ route('sales.invoice')}}" class="btn btn-dark btn-sm" target="_blank">Invoice</a>
                    <br>
                    <table id="table" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>price</th>
                            <th>Discount</th>
                            <th>Shipping Cost</th>
                            <th>Total Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $total=0;?>
                        @foreach($sales as $key=> $delivery)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$delivery->productName}}</td>
                                <td>{{$delivery->quantity}}</td>
                                <td>{{$delivery->price}}</td>
                                <td>{{$delivery->discount}}</td>
                                <td>{{$delivery->shipping_charge}}</td>
                                <td>{{$delivery->total_price}}</td>
                                @php $total = $total+$delivery->total_price @endphp
                            </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="2"></td>

                            <td>Total Sale</td>
                            <td><?php echo $total; ?></td>
                        </tr>
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
