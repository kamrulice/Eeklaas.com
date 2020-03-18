<!--<form class="form-inline" action="{{ route('wishlists.store') }}" method="post">-->
<!--                            @csrf-->
<!--                            <input type="hidden" name="product_id" value="{{ $product->id }}">-->
<!--                            <button type="button" class="btn btn-wishlist" onclick="addToWishlist({{ $product->id }})">-->

<!--                          </form>-->



<form class="form-inline" action="{{ route('wishlists.store') }}" method="post">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <input type="hidden" name="user_id" value="@if(Auth::check()){{(Auth::user()->id)}}@endif">
   <button type="submit" class="btn btn-wishlist"></button>

</form>
