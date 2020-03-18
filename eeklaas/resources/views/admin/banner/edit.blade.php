@extends('layouts.app')

@section('title','Banner Edit')

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
                            <h4 class="title">Edit Banner</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('banner.update',$banner->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">title</label>
                                            <input type="text" class="form-control" name="title" value="{{ $banner->title }}">

                                        </div>
                                    </div>
                                </div>
                                <select class="form-control" name="category_id" id="category">
                                    <option selected disabled>Please Select a Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Description</label>
                                            <textarea class="form-control" name="description">{{ $banner->description }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="oldimg" class="control-label">banner Old Image</label><br>
                                        <img src="{{ asset('uploads/banner/'.$banner->image)}}"
                                        style="width: 100px;height: 100px;"><br>

                                        <label for="image" class="control-label">Banner New Image</label>
                                        <input type="file" name="image">
                                    </div>
                                </div>

                                <a href="{{ route('banner.index') }}" class="btn btn-danger">Back</a>
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
