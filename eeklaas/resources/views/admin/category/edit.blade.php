@extends('layouts.app')

@section('title','Edit')

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
                            <h4 class="title">Edit Category</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('category.update',$category->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Description</label>
                                            <textarea class="form-control" name="description">{{ $category->description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Parent Category (Optional)</label>
                                  <select class="form-control" name="parent_id">
                                    <option>Select category</option>
                                    @foreach ($main_categories as $cat)
                                      <option value="{{ $cat->id }}" {{ $cat->id == $category->parent_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="oldimg" class="control-label">Category Old Image</label><br>
                                        <img src="{{ asset('uploads/category/'.$category->image)}}" 
                                        style="width: 100px;height: 100px;"><br>

                                        <label for="image" class="control-label">Category New Image</label>
                                        <input type="file" name="image">
                                    </div>
                                </div>

                                <a href="{{ route('category.index') }}" class="btn btn-danger">Back</a>
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
