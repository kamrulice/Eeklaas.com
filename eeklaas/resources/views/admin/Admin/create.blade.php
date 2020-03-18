@extends('layouts.app')

@section('title','Banner Create')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.include.msg')
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Add New Admin</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" @if($adminEdit)action="{{ route('admin.update') }}" @else action="{{ route('admin.store') }}" @endif enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Name</label>
                                            <input type="text" class="form-control" name="name" @if($adminEdit) value="{{$adminEdit->name}}" @endif>
                                            <input type="hidden" class="form-control" name="id" value="{{$adminEdit->id}}">
                                            <input type="hidden" class="form-control" name="role_id" value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Phone</label>
                                            <input type="text" class="form-control" name="phone" @if($adminEdit) value="{{$adminEdit->phone}}" @endif>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email</label>
                                            <input type="email" class="form-control" name="email" @if($adminEdit) value="{{$adminEdit->email}}" @endif>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Password</label>
                                            <input type="password" class="form-control" name="password" @if($adminEdit) value="{{$adminEdit->password}}" @endif>
                                        </div>
                                    </div>
                                </div>
                                <select class="form-control" name="isAdmin">
                                    <option selected disabled>Please Select a Role</option>
                                        <option value="0">Supper Admin</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Manager</option>
                                        <option value="3">Content Creator</option>
                                        <option value="4"> Moderator</option>
                                        <option value="5">Advertiser</option>
                                        <option value="6">Suppliers</option>
                                </select>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
