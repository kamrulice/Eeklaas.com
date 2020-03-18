@extends('frontend.layouts.master')


@section('content')

<!-- start main-site -->

<div class="container">

<div class="block-content row">

<main class="site-main">
  <div class="products  products-grid">
    <div class="col-md-12">
      <h4>Searched Products for - <span class="badge badge-primary">{{$search}}</span></h4>
    @if( count($search_products) > 0 )
            <ol class="product-items row">
              @foreach($search_products as $product)
              <li class="col-sm-4 product-item ">
                <div class="product-item-opt-1">
                  <div class="product-item-info">
                    <div class="product-item-photo">
                        <a href="{{ route('products.show',$product->id)}}" class="product-item-img">
                            @php $i = 1; @endphp
                        @foreach($product->images as $image)
                        @if($i > 0)

                      <a class="product-item-img" href="{{ route('products.show',$product->id)}}">
                        <img alt="product name" src="{{ asset('uploads/products/'.$image->image)}}" width="186" height="266">
                      </a>
                        @endif
                        @php $i--; @endphp
                        @endforeach
                        </a>
                      <div class="product-item-actions"> 
                        @include('frontend.pages.products.partials.wish-button')
                      </div>
                        @include('frontend.pages.products.partials.cart-button')
                    </div>
                    <div class="product-item-detail"> <strong class="product-item-name"><a href="">{{$product->title}}</a></strong>
                      <div class="clearfix">
                        <div class="product-item-price"> <span class="price">&#2547; {{$product->price}}</span> <span class="old-price">$52.00</span> </div>
                        <div class="product-reviews-summary">
                          <div class="rating-summary">
                            <div class="rating-result" title="80%"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              @endforeach
            </ol>
    @else

    <div class="col-md-12">
      <h2 class="alert alert-warning">
        There is no item available according to your search 
      </h2>
    </div>
    @endif
    </div>

    

          </div>
    
  </main>


</div>

</div>
<!-- end main-site -->

@endsection

