<form class="form-inline" action="{{route('carts.store') }}" method="post">
	@csrf
	<input type="hidden" name="product_id" value="{{ $product->id }}">
	<input type="hidden" name="user_id" value="@if(Auth::check()){{ Auth::user()->id }}@endif">
	<button type="button" class="btn btn-cart" onclick="addToCart({{ $product->id,Auth::user()->id}})"><span>Add to Cart</span></button>
</form>
