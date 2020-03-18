@extends('layouts.app')
@section('title','create Email')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
{{--                    @include('layouts.include.msg')--}}
                    @if(Session::has('message'))
                        <div class="alert alert-success text-center"><h2 style="font-size: 20px;">{{Session::get('message')}}</h2></div>
                    @endif
                    <div class="card">
                        <div class="card-header card-header-primary" data-background-color="purple">
                            <h4 class="card-title ">All Emails</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table" style="width:100%">
                                    <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($emails as $key=>$email)
                                        <tr>
                                            <td>{{ $key + 1}}</td>
                                            <td>{{ $email->email}}</td>
                                            <td>{{ $email->created_at}}</td>
                                            <td>
                                                 <a href="{{route('email.edit',$email->id)}}">
                                                     <button class="btn btn-primary btn-sm">Edit</button>
                                                 </a>
                                                <a href="{{route('email.delete',$email->id)}}">
                                                    <button class="btn btn-danger btn-sm">Delete</button>
                                                </a>
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
