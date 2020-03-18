@extends('frontend.layouts.master')

@section('content')
	<div class="container mt-5">
		@include('layouts.include.msg')<br>
		@if(Session::has('messages'))
            <div class="alert alert-danger text-center">{{Session::get('messages')}}</div>
        @endif
		<h2>My Cart Items</h2>
		@if (App\Cart::totalItems() > 0)
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

				@foreach (App\Cart::totalCarts() as $cart)
					<tr>
						<td>{{ $loop->index + 1 }}</td>
						<td>
							<a href="{{ route('products.show',$cart->product->id)}}">{{ $cart->product->title }}</a>
						</td>
						<td>
							@if (is_object($cart) && count($cart->product->images) > 0)
								<img src="{{ asset('uploads/products/' . $cart->product->images->first()->image) }}" width="100">
							@endif

						</td>
						<td>
							<form action="{{ route('carts.update',$cart->id)}}" method="post" class="form-inline" style="margin-left: 50px">
								@csrf
								<input type="number" name="product_quantity" style="width: 60px" class="form-control" value="{{ $cart->product_quantity }}">
								<button type="submit" title="Update Product Quantity" class="btn btn-success"><i class="fa fa-refresh"></i></button>
							</form>
						</td>
						<td>
							@php
								$total_price += $cart->product->price * $cart->product_quantity;
							@endphp

							{{ $cart->product->price }} Taka
						</td>
						<td>
							{{ $cart->product->price * $cart->product_quantity  }} Taka
						</td>
						<td>
							<form action="{{ route('carts.delete',$cart->id)}}" method="post" class="form-inline" style="margin-left: 20px">
								@csrf
								<input type="hidden" name="cart_id">
								<button type="submit" title="Delete Cart Product" class="btn btn-outline-danger"><i class="fa fa-trash" style="font-size: 15px"></i></button>
							</form>
						</td>
					</tr>
				@endforeach
				<tr>
					<td colspan="5"></td>
					<td style="float: right; border-left: none;">
						Total Amount:
					</td>
					<td>
						<strong>{{ $total_price}} Taka</strong>
					</td>
					<td></td>
				</tr>
			</tbody>
		</table>

		<div style="float: right;margin-bottom: 20px;">
			<a href="{{ route('products')}}" class="btn btn-info">Continue Shopping..</a>
			<a href="{{ route('checkouts')}}" class="btn btn-warning">Proceed to Checkout</a>
		</div>

		<div class="clearfix"></div>
		@else
		<div class="alert alert-warning text-center">
			<strong><h4>There is no Items in Your Cart.</h4></strong>
			<a href="" class="btn btn-outline-info">Continue Shopping..</a>
		</div>
		@endif
	</div>
@endsection
