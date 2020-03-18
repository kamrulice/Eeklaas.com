@extends('frontend.layouts.master')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <header class="header " style="box-shadow:-1px 10px 8px 7px #E6E6E6;">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active"  href="{{route('seller.dashboard')}}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('seller.productAdd')}}">Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('sellerAll.product')}}">Inventory</a>
                            </li>
                        </ul>
                    </header>

                    <div class="card">
                        <div class="card-header card-header-primary" data-background-color="purple">
                            @if(Session::has('msg'))
                                <span class="alert alert-success alert-dismissable text-center">{{Session::get('msg')}}</span>
                            @endif
                            <h4 class="card-title text-center">Products Advertisement Board</h4>
                                <span class="float-right">
                                    <a href="{{route('all.banner')}}" class="btn btn-info">Manage Banner</a>
                                </span>
                        </div>
                        <div class="card-body">
                             <div class="col-md-8 offset-2">
                                 <form method="POST" action="{{ route('banner.save') }}" enctype="multipart/form-data">
                                     @csrf
                                     <div class="row">
                                         <div class="col-md-12">
                                             <div class="form-group label-floating">
                                                 <label class="control-label">Title</label>
                                                 <input type="text" class="form-control" name="title">
                                                 <input type="hidden" name="seller_id" @if(Session::has('sellerId'))value="{{Session::get('sellerId')}}" @endif>
                                             </div>
                                         </div>
                                     </div>
                                     <select class="form-control" name="category_id" id="category">
                                         <option selected disabled>Please Select a Category</option>
                                         @foreach(\App\Category::all() as $category)
                                             <option value="{{ $category->id }}">{{ $category->name }}</option>
                                         @endforeach
                                     </select>
                                     <div class="row">
                                         <div class="col-md-12">
                                             <div class="form-group label-floating">
                                                 <label class="control-label">Description</label>
                                                 <textarea class="form-control" rows="5" name="description"></textarea>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-12">
                                             <label class="control-label">Image</label>
                                             <input type="file" name="image" class="form-control">
                                         </div>
                                     </div><br>
                                     <button type="submit" class="btn btn-primary">Save</button>
                                 </form>
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable();

        } );
    </script>
@endpush
