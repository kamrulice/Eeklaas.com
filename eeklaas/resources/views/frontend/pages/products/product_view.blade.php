 @foreach($products as $product)
    <div class="product-item  product-item-opt-1 ">
      <div class="product-item-info">
        <div class="product-item-photo"> 

          @php $i = 1; @endphp
            @foreach($product->images as $image)
            @if($i > 0)

          <a class="product-item-img" href="{{ route('products.show',$product->id)}}">
            <img alt="product name" src="{{ asset('uploads/products/'.$image->image)}}" width="186" height="266">
          </a>
            @endif
            @php $i--; @endphp
            @endforeach
          <div class="product-item-actions"> 
            @include('frontend.pages.products.partials.wish-button')
          </div>
          @include('frontend.pages.products.partials.cart-button')
          <span class="product-item-label label-price">30% <span>off</span></span> </div>
        <div class="product-item-detail"> <strong class="product-item-name"><a href="pro_det.html">{{$product->title}}</a></strong>
          <div class="clearfix">
            <div class="product-item-price"> 
              <span class="price">{{$product->price}}</span> 
              <!-- <span class="old-price">&#2547; 52.00</span>  -->
            </div>
            <div class="product-reviews-summary">
              <div class="rating-summary">
                <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endforeach