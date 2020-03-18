@extends('layouts.app')

@section('title','Stock')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('stockIn.create')}}" class="btn btn-success">Stock In</a>
                    <a href="{{ route('stockOut.create')}}" class="btn btn-warning">Stock out</a>
                    <a href="{{ route('invoice.create')}}" target="_blank" class="btn btn-dark">Invoice</a>
                    <br>
                    <table id="table" class="table table-bordered table-hover table-responsive">
                        <thead>
                            <th>SL.</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Expire Date</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($stocks as $key=> $stock)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$stock->title}}</td>
                                    <td>{{$stock->category->name}}</td>
                                    <td>{{$stock->quantity}}</td>
                                    <td>{{$stock->date_line}}</td>
                                    <td>
                                        <a><button class="btn btn-info">View</button></a>
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
