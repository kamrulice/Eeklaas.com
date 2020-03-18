@extends('layouts.app')

@section('title','Create')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if(Session::has('successMsg'))
                        <div>
                            <span class="alert alert-success alert-dismissable">{{Session::get('successMsg')}}</span>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Upload Product Image</h4>
                        </div>
                        <div class="card-content">
                            <form action="{{route('admin.image.upload')}}" class="dropzone" method="POST" id="my-awesome-dropzone" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="fallback">
                                    <input name="file" type="file" multiple/>
                                </div>
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

