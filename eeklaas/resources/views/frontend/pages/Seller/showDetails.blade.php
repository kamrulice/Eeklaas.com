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
                            <h4 class="card-title ">Show Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-bordered table-hover">
                                     <tbody>
                                        <tr>
                                            <th>SL.</th>
                                            <td>{{$products->id}}</td>
                                        </tr>
                                        <tr>
                                            <th>SKU</th>
                                            <td>{{$products->sku}}</td>
                                        </tr>
                                        <tr>
                                            <th>Product Name</th>
                                            <td>{{$products->title}}</td>
                                        </tr>
                                        <tr>
                                            <th>Category</th>
                                            <td>{{$products->category->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>SubCategory</th>
                                            <td>{{$products->sub_category->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Product Description</th>
                                            <td>{{$products->description}}</td>
                                        </tr>
                                        <tr>
                                            <th>Product Quantity</th>
                                            <td>{{$products->quantity}}</td>
                                        </tr>
                                        <tr>
                                            <th>Product Price</th>
                                            <td>{{$products->price}}</td>
                                        </tr>
                                        <tr>
                                            <th>Offer Price</th>
                                            <td>{{$products->offer_price}}</td>
                                        </tr>
                                        <tr>
                                            <th>Product Image</th>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <div class="row">
                                                            @foreach(\App\ProductImage::where('product_id',$products->id)->get() as $image)
                                                                <div class="col-md-3">
                                                                    <img src="{{ asset('uploads/products/'.$image->image)}}"
                                                                         style="width: 150px;height: 150px;"><br>

                                                                </div>
                                                            @endforeach
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Expire Date</th>
                                            <td>{{$products->date_line}}</td>
                                        </tr>
                                        <tr>
                                            <th>Color</th>
                                            <td>{{$products->color}}</td>
                                        </tr>
                                        <tr>
                                            <th>Size</th>
                                            <td>{{$products->size}}</td>
                                        </tr>
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable();

        } );
    </script>
@endpush
