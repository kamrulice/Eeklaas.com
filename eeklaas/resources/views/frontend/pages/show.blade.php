@extends('frontend.layouts.master')

@section('title')

{{$product->title}} || Eeklaas

@endsection

@section('content')

<!-- start main-site -->
    <main class="site-main">
        <hr>
<div class="columns container">

<div class="row">
  <div class=" col-md-3 col-md-pull-9 col-sidebar">
    <div class="block-sidebar block-sidebar-categorie">
      <div class="block-title"> <strong>Categories</strong> </div>
      <div class="block-content">
        <ul class="items">
            @foreach(\App\Category::all() as $category)
          <li class="parent"> <a href="">{{$category->name}}</a> <span class="toggle-submenu"></span>
            <ul class="subcategory">
                @foreach(\App\SubCategory::where('category_id', $category->id)->get() as $subCategory)
              <li>
                  <a href="{{route('subCategory.show',$subCategory->id)}}">{{$subCategory->name}}</a>
              </li>
               @endforeach
            </ul>
          </li>
            @endforeach
        </ul>
      </div>
    </div>
  </div>
  <div class="col-md-9 col-md-push-3 col-main">
    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-6">
        <div class="product-media media-horizontal">
          <div class="image_preview_container images-large">
              @php
                  $i = 1;
              @endphp
              @foreach ($product->images as $image)
                    @if($i>0)
                  <img id="img_zoom" data-zoom-image="{{asset('uploads/products/'.$image->image)}}" src="{{ asset('uploads/products/'.$image->image)}}" alt="{{$product->title}}" height="300px;" width="500px;">
                    @endif
                  @php $i--; @endphp
              @endforeach

          </div>
          <div class="product_preview images-small"> </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-6">
        <div class="product-info-main">
          <h2 class="page-title"> {{$product->title }}</h2>
          <h4 class="page-title">
           @if($product->quantity>0)
                  <div class="stock available"> <span class="label">Availability: </span>In stock </div>
                  @else
                  <div class="stock available"> <span class="label">Availability: </span>stock out </div>
              @endif
          </h4>
          <div class="product-reviews-summary">
            <div class="rating-summary">
              <div class="rating-result" title="70%"> <span style="width:70%"> <span><span>70</span>% of <span>100</span></span> </span> </div>
            </div>
            <div class="reviews-actions"> <a href="" class="action view">Based  on 3 ratings</a></div>
          </div>
          <div class="product-info-price">
            <div class="price-box"> 
            <span class="price">@if($product->new_price)
                  <div class="product-item-price"> Price:&nbsp; <span class="price">&#2547;{{$product->new_price}}</span></div>         
                  @else
                  <div class="product-item-price">Price:&nbsp;  <span class="price">&#2547;{{$product->price}}</span></div>
                  @endif
            </div>
          </div>
          <div class="product-code"> Item Code:{{$product->sku}} </div><br>
{{--          <div class="product-info-stock">--}}

{{--          </div>--}}
{{--          <div class="product-overview">--}}
{{--            <div class="overview-content"> Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien.--}}
{{--                Praesent egestas tristique nibh. Nullam dictum felis eu pede mollis pretium.--}}
{{--                Fusce egestas elit eget lorem. </div>--}}
{{--          </div>--}}
          <div class="product-add-form">
              <div class="product-options-wrapper">
                  @if($product->quantity>0)
                      <form class="" action="{{route('carts.store') }}" method="post">
                          @csrf
                              @if($product->size!=null)
                              <div class="form-group form-inline">
                                  <label>Size&nbsp;</label>
                                  <select class="form-control" style="" name="size">
                                      <option value="M">M</option>
                                      <option value="L">L</option>
                                      <option value="XL">XL</option>
                                      <option value="XXL">XXL</option>
                                  </select>
                              </div>
                          @endif
                          <div class="form-group">
                              <input type="hidden" name="product_id" value="{{ $product->id }}">
                              <input type="hidden" name="user_id" value="@if(Auth::check()){{ Auth::user()->id }}@endif">
                              <button type="button" class="btn btn-info mt-2" onclick="addToCart({{ $product->id,Auth::user()->id}})"><span>Add to Cart</span></button>
                          </div>
                      </form>

                  @endif
              </div>
          </div>
        </div>
      </div>
    </div><hr>
    <div class="product-info-detailed ">
      <ul class="nav nav-pills" role="tablist">
        <li role="presentation" class="active"><a href="#description" class="btn btn-outline-secondary"  role="tab" data-toggle="tab">Description</a></li>&nbsp;
        <li role="presentation"><a href="#reviews" class="btn btn-outline-primary" role="tab" data-toggle="tab">reviews</a></li>
      </ul>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="description">
          <div class="block-title">Description</div>
          <div class="block-content">
            <p>{{$product->description}}</p>
          </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="reviews">
          <div class="block-title">Reviews({{$ratings->count()}})</div>
          <div class="block-content"> <span class="heading">User Rating</span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span>
            <p>4.1 average based on 1 reviews.</p>
            <hr style="border:3px solid #f1f1f1">
            <h3>Review for this product</h3>
            <hr style="border:1px solid #f1f1f1; padding: 0; margin:0 0 2% 0 ">
            <div class="col-md-2">
                @php
                    $i = 1;
                @endphp
                @foreach ($product->images as $image)
                    @if($i>0)
                        <img id="img_zoom" data-zoom-image="{{asset('uploads/products/'.$image->image)}}" src="{{ asset('uploads/products/'.$image->image)}}" alt="{{$product->title}}">
                    @endif
                    @php $i--; @endphp
                @endforeach
            </div>
              @foreach($ratings as $rating)
            <p>
                <span class="fa fa-star checked">
                </span><span class="fa fa-star checked"></span> <span class="fa fa-star checked">
                </span> <span class="fa fa-star checked"></span> <span class="fa fa-star">
                </span><br>{{$rating->message}}
            </p>
              @endforeach
            <p></p>
            <div style="background-color: rgba(247,247,247,0.50)" class="box-border">
              <h3>Add a Review</h3>
              <hr style="border:1px solid #f1f1f1; padding: 0; margin:0 0 1% 0 ">
              <p style="color: #ff3366; font-size:12px">Your email address will not be published. Required fields are marked *</p>
             <form action="{{route('rating.product')}}" method="POST">
                 @csrf
                 <ul>
                     <li class="row">
                         <div class="col-sm-6">
                             <label for="name" class="required">Name *</label>
                             <input class="input form-control" name="name" id="name" type="text">
                             <input class="input form-control" name="product_id" value="{{$product->id}}" type="hidden">
                         </div>
                         <div class="col-sm-6">
                             <label for="email" class="required">Email *</label>
                             <input name="email" class="input form-control" id="email" type="email">
                         </div>
                         <div style="margin-top: 3%" class="col-sm-12">
                             <strong style="color:#ff3366">Your Rating </strong>
                             <style>
                                 .checked{
                                     color: orange;
                                 }
                             </style>
                             <span class="fa fa-star checked" onmouseover="starmark(this)" onclick="starmark(item)" id="1one" style="font-size:25px; cursor:pointer;"></span>
                             <span class="fa fa-star checked" onmouseover="starmark(this)" onclick="starmark(item)" id="2one" style="font-size:25px; cursor:pointer;"></span>
                             <span class="fa fa-star checked" onmouseover="starmark(this)" onclick="starmark(item)" id="3one" style="font-size:25px; cursor:pointer;"></span>
                             <span class="fa fa-star checked" onmouseover="starmark(this)" onclick="starmark(item)" id="4one" style="font-size:25px; cursor:pointer;"></span>
                             <span class="fa fa-star checked" onmouseover="starmark(this)" onclick="starmark(item)" id="5one" style="font-size:25px; cursor:pointer;"></span>
{{--                             <button class="btn btn-success" onclick="showRating()">Submit</button>--}}

                         </div>
                         <div class="col-sm-12">
                             <input style="margin: 2% 0" type="checkbox">
                             <span> Save my name, email and website in this browser for the next time I comment.</span> </div>
                         <div class="col-sm-12">
                             <label style="margin-top: 2%" for="comment" class="required">Put your opinion here</label>
                             <textarea class="form-control" name="message" rows="4" cols="50"></textarea>
                             <p>e.g. (1) Good product. keep it up (2) Better Service. Go Ahead!</p>
                         </div>
                     </li>
                     <li>
                         <button style="margin-top: 2%" type="submit" class="button">Submit</button>
                     </li>
                 </ul>
             </form>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="additional">
          <div class="block-title"></div>
          <div class="block-content"></div>
        </div>
        <div role="tabpanel" class="tab-pane" id="tab-cust">
          <div class="block-title"></div>
          <div class="block-content"></div>
        </div>
      </div>
    </div>
    <div class="block-related ">
      <div class="block-title"> <strong class="title">RELATED products</strong> </div>
      <div class="block-content ">
        <ol class="product-items owl-carousel " data-nav="true" data-dots="false" data-margin="30" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"992":{"items":3}}'>
         @foreach(\App\Product::where('category_id', $product->category_id)
                                  ->where('published',1)
                                ->get() as $product)
            <li class="product-item product-item-opt-2">
            <div class="product-item-info">
              <div class="product-item-photo">
                  <a href="{{ route('products.show',$product->id)}}" class="product-item-img">
                      @php
                          $i = 1;
                      @endphp
                      @foreach ($product->images as $image)
                          @if($i > 0)
                          <img src="{{ asset('uploads/products/'.$image->image)}}" alt="{{$product->title}}" height="250px;">
                            @endif
                          @php $i--; @endphp
                      @endforeach
                  </a>
                <div class="product-item-actions">
                    @include('frontend.pages.products.partials.wish-button')
                </div>
                  @include('frontend.pages.products.partials.cart-button')
                  @if($product->offer_price>0)
                        <span class="product-item-label label-price">{{$product->offer_price}}% <span>off</span></span>
                        @endif
              </div>
              <div class="product-item-detail"> <strong class="product-item-name"><a href="">{{$product->title}}</a></strong>
                <div class="clearfix">

                @if($product->new_price)
                  <div class="product-item-price"> <span class="price">&#2547;{{$product->new_price}}</span> <span class="old-price">&#2547;{{$product->price}}.00</span> </div>         
                  @else
                  <div class="product-item-price"> <span class="price">&#2547;{{$product->price}}</span></div>
                  @endif
                  
                  <div class="product-reviews-summary">
                    <div class="rating-summary">
                      <div class="rating-result" title="70%"> <span style="width:70%"> <span><span>70</span>% of <span>100</span></span> </span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
             @endforeach
        </ol>
      </div>
    </div>
  </div>
</div>
</div>
  </main>

<!-- end maitn site -->
{{--    <script type="text/javascript">--}}
{{--        var rating ="";--}}
{{--        function starmark(item) {--}}
{{--            var count = item.id[0];--}}
{{--             rating = count;--}}
{{--             var subId = item.id.substring(1);--}}
{{--             for(var i= 0; i<5; i++){--}}
{{--                 if(i<count){--}}
{{--                     document.getElementById((i+1)*subId).style.color="orange";--}}
{{--                 }else{--}}
{{--                     document.getElementById((i+1)*subId).style.color="black";--}}
{{--                 }--}}
{{--             }--}}
{{--        }--}}

{{--        function showRating() {--}}
{{--                alert(rating);--}}
{{--        }--}}
{{--    </script>--}}

@endsection


