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
                            <h4 class="card-title text-center">Seller Details</h4>
                        </div>
                        <div class="card-body">
                            <table id="table" class="table table-responsive table-bordered table-hover">
                                 <tr>
                                     <th>Seller Name</th>
                                     <td>{{$seller->name}}</td>
                                 </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$seller->email}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{$seller->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{$seller->address}}</td>
                                </tr>
                                <tr>
                                    <th>Seller Image</th>
                                    <td>
                                        <img src="{{asset($seller->ProfileImage)}}" alt="image" style="height:200px; width:341px;">
                                    </td>
                                </tr>
                                <tr>
                                    <th>NID Number</th>
                                    <td>{{$seller->NidNumber}}</td>
                                </tr>
                                <tr>
                                    <th>NID Image</th>
                                    <td>
                                        <img src="{{asset($seller->NidImage)}}" alt="image" style="height:200px; width:341px;">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Bank Account Name</th>
                                    <td>{{$seller->account_name}}</td>
                                </tr>
                                <tr>
                                    <th>Bank Account Number</th>
                                    <td>{{$seller->account_number }}</td>
                                </tr>
                                <tr>
                                    <th>Bank Name</th>
                                    <td>{{$seller->bank_name}}</td>
                                </tr>
                                <tr>
                                    <th>Branch Name</th>
                                    <td>{{$seller->branch_name}}</td>
                                </tr>
                                <tr>
                                    <th>Cheque Image</th>
                                    <td>
                                        <img src="{{asset($seller->checkImage)}}" alt="image" style="height:200px; width:341px;">
                                    </td>
                                </tr>
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
