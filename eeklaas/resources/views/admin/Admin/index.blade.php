@extends('layouts.app')

@section('title','Banner')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('admin.create')}}" class="btn btn-primary">Add New</a>
                    @include('layouts.include.msg')
                    <div class="card">
                        <div class="card-header card-header-primary" data-background-color="purple">
                            <h4 class="card-title ">All Admins</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered table-hover">
                                <thead>
                                    <th>SL.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                <?php $i=0;?>
                                    @foreach($admins as $admin)
                                        <tr>
                                            <td><?php echo $i++;?></td>
                                            <td>{{$admin->name}}</td>
                                            <td>{{$admin->email}}</td>
                                            <td>{{$admin->phone}}</td>
                                            <td>
                                                @if($admin->isAdmin==0)
                                                    <button class="btn btn-success btn-sm">Supper Admin</button>
                                                    @elseif($admin->isAdmin==1)
                                                    <button class="btn btn-info btn-sm">Admin</button>
                                                @elseif($admin->isAdmin==2)
                                                    <button class="btn btn-info btn-sm">Manager</button>
                                                @elseif($admin->isAdmin==3)
                                                    <button class="btn btn-info btn-sm">Content Creator</button>
                                                @elseif($admin->isAdmin==4)
                                                    <button class="btn btn-info btn-sm">Moderator</button>
                                                @elseif($admin->isAdmin==5)
                                                    <button class="btn btn-info btn-sm">Advertiser</button>
                                                    @else
                                                    <button class="btn btn-info btn-sm">Suppliers</button>
                                                    @endif


                                                @if($admin->status==1)

                                                        <a href="{{route('admin.active',$admin->id)}}"><button class="btn btn-success btn-sm">Active</button></a>
                                                    @else
                                                        <a href="{{route('admin.active',$admin->id)}}"><button class="btn btn-warning btn-sm">Inactive</button></a>
                                                    @endif
                                            </td>
                                            <td>
                                                <a href="{{route('admin.edit',$admin->id)}}">
                                                    <button class="btn btn-primary btn-sm">Edit</button>
                                                </a>
                                                <a href="{{route('admin.delete',$admin->id)}}" onclick="return confirm('Are sure want to delete ?')">
                                                    <button class="btn btn-danger btn-sm">Delete</button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$admins->links()}}
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
