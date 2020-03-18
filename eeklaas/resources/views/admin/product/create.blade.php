@extends('layouts.app')

@section('title','Create')

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
                            <h4 class="title">Add New Product</h4>
                            <a href="{{route('products.image')}}">Add</a>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <!-- <label class="control-label">Category</label> -->
                                            <select class="form-control" name="category" id="category">
                                                <option selected disabled>Please Select a Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">

                                            <select class="form-control" name="subcategory">
                                                <option value="">Select SubCategory</option>
                                                @foreach(App\SubCategory::all() as $subCategory)
                                                    <option value="{{$subCategory->id}}">{{$subCategory->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <!-- <label class="control-label">Category</label> -->
                                            <select class="form-control" name="brand" id="brand">
                                                <option selected disabled> Select Select a Brand</option>
                                                @foreach($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Name</label>
                                            <input type="text" class="form-control" name="title">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Description</label>
                                            <textarea class="form-control" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Price</label>
                                            <input type="number" class="form-control" name="price">
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('product.index') }}" class="btn btn-danger">Back</a>
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

<script>
        $("#category").change(function() {
            var category = $("#category").val();
            // Send An Ajax Request To Server With This Categpory
            $("#subcategory").html("");
            var option = "";
            var url = "{{ url('/') }}";
            $.get( url + '/get-subcategory/'+category, function(data) {
                /*optional stuff to do after success */
                data = JSON.parse(data);
                data.forEach(function(element) {
                   option += "<option value='"+ element.id +"'>"+ element.name +"</option>";
                });
                $("#subcategory").html(option)
            });
        })
    </script>

@endpush

