@extends('frontend.layouts.master')

@section('content')

<div class="container mt-5">
        @include('layouts.include.msg')
        <h2>My Wishlist Items</h2>
        @if (App\Wishlist::totalItems() > 0)
            <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Product Title</th>
                    <th>Product Image</th>
                    <th>Product Quantity</th>
                    <th>Unit Price</th>
                    <th>Sub Total Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $total_price = 0;
                @endphp
                
                @foreach (App\Wishlist::totalWishlists() as $wishlist)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>
                            <a href="{{ route('products.show',$wishlist->product->id)}}">{{ $wishlist->product->title }}</a>
                        </td>
                        <td>
                            @if (is_object($wishlist) && count($wishlist->product->images) > 0)
                                <img src="{{ asset('uploads/products/' . $wishlist->product->images->first()->image) }}" width="50">
                            @endif
                            
                        </td>
                        <td>
                            <form action="{{ route('wishlists.update',$wishlist->id)}}" method="post" class="form-inline" style="margin-left: 50px">
                                @csrf
                                <input type="number" name="product_quantity" style="width: 60px" class="form-control" value="{{ $wishlist->product_quantity }}">
                                <button type="submit" title="Update Product Quantity" class="btn btn-success"><i class="fa fa-refresh"></i></button>
                                <!-- <button type="submit" title="Update Product Quantity" class="btn btn-success" style="width: 30px"><i class="fa fa-refresh"></i></button> -->

                            </form>
                        </td>
                        <td>
                            @php
                                $total_price += $wishlist->product->price * $wishlist->product_quantity;
                            @endphp

                            {{ $wishlist->product->price }} Taka
                        </td>
                        <td>
                            {{ $wishlist->product->price * $wishlist->product_quantity  }} Taka
                        </td>
                        <td>
                            <form action="{{ route('wishlists.delete',$wishlist->id)}}" method="post" class="form-inline" style="margin-left: 20px">
                                @csrf
                                <input type="hidden" name="wishlist_id">
                                <button type="submit" title="Delete wishlist Product" class="btn btn-outline-danger"><i class="fa fa-trash" style="font-size: 15px"></i></button>
                            </form><br>
                             
                        </td>
                       
                            <td style="vertical-align: middle">
                                <form class="form-inline" action="{{ route('carts.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $wishlist->product_id }}">
                                    <button type="button" class="wisb" onclick="addToCart({{ $wishlist->product_id }})"><span>Add to Cart</span></button>
                                </form>
                        </td>
                        
                    </tr>
                @endforeach
                <tr>
                    <td colspan="4"></td>
                    <td style="float: right; border-left: none;">
                        Total Amount: 
                    </td>
                    <td>
                        <strong>{{ $total_price}} Taka</strong>

                    </td>
                    <td>

                        
                    </td>
                </tr>
            </tbody>
        </table>

        
        
        <div class="clearfix"></div>
        @else
        <div class="alert alert-warning text-center">
            <strong><h4>There is no Items in Your Wishlist.</h4></strong>
            <a href="{{route('welcome')}}" class="btn btn-outline-info">Continue Shopping..</a>
        </div>
        @endif
    </div>
@endsection