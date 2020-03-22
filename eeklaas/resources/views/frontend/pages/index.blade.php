@extends('frontend.layouts.master')


@section('content')

<!-- start main-site -->

<main class="site-main">
      <div class="modal fade popup-newsletter" id="popup-newsletter" tabindex="-1" role="dialog" >
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-image: url({{asset('backend/img/cover.jpeg')}});">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <div class="block-newletter">
            <div class="block-title">signup for our newsletter & promotions</div>
            <div class="block-content">
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible"><h2 style="font-size: 20px;">{{Session::get('message')}}</h2></div>
                @endif
                <form action="{{route('newsletter.email')}}" method="post">
                    @csrf
                <label>on your next purchase</label>
                <div class="input-group">
                    <input type="email" name="email" placeholder="Enter your email..." class="form-control">
                  <span class="input-group-btn">
                  <button type="submit" class="btn btn-subcribe"><span>Subscribe</span></button>
                  </span> </div>
              </form>
            </div>
            <div class="checkbox btn-checkbox">
              <label>
                <input type="checkbox">
                <span>Dont’s show this popup again!</span> </label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="block-section-top block-section-top2">
        <div class="container">
            <div class="box-section-top">

{{--      //menu --}}{{--                <div class="block-nav-categori">--}}
{{--                    <div class="block-title"> <span>Categories</span> </div>--}}
{{--                    <div class="block-content">--}}

{{--                        <ul class="ui-categori">--}}
{{--                            @foreach(App\Category::all() as $category)--}}
{{--                                <li class="parent"> <a href="{{route('all-product',$category->id)}}"> <span class="icon">--}}
{{--                          </span> {{$category->name}} </a> <span class="toggle-submenu"></span>--}}
{{--                                    <div class="submenu row col-md-12" style="background-image: url({{ asset('uploads/category/'.$category->image)}})">--}}
{{--                                        <ul class="categori-list clearfix">--}}
{{--                                            @foreach(\App\SubCategory::where('category_id', $category->id)->get() as $subCategory)--}}
{{--                                                <li class="col-sm-3">--}}
{{--                                                    <strong class="title">--}}
{{--                                                        <a href="{{ route('subCategory.show',$subCategory->id)}}">{{$subCategory->name}}</a>--}}
{{--                                                    </strong>--}}
{{--                                                    <div class="col-sm-3">--}}
{{--                                                        <ul class="list-submenu">--}}
{{--                                                            @foreach(\App\Product::where('sub_category_id',$subCategory->id)->get() as $product)--}}
{{--                                                                <li><a href="{{ route('products.show',$product->id)}}">{{$product->title}}</a> </li>--}}
{{--                                                            @endforeach--}}
{{--                                                        </ul>--}}
{{--                                                        <a href="{{ route('subCategory.show',$subCategory->id)}}"></a>--}}
{{--                                                    </div>--}}
{{--                                                </li>--}}
{{--                                            @endforeach--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                        <!-- <div class="view-all-categori"> <a  class="open-cate btn-view-all">All Categories</a> </div> -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- start carusel slider -->--}}
                <div class="block-slide-main slide-opt-2">
                    <div class="owl-carousel "
                         data-nav="true"
                         data-dots="false"
                         data-margin="0"
                         data-items='1'
                         data-autoplayTimeout="700"
                         data-autoplay="true"
                         data-loop="true">
                        @foreach(App\Slider::orderBy('id','desc')->take(3)->get() as $key=>$slider)
                            <div class="item" > <a href="" class="img-slide"><img src="{{ asset('uploads/slider/'.$slider->image) }}" alt="img" width="900px" height="450px"></a> </div>
                        @endforeach
                    </div>
                </div>
                <!-- end carusel slider -->
            </div>
        </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block-tab-products-opt1">
            <div class="block-title">
              <ul class="nav" role="tablist">
                <li role="presentation" class="active"> <a href="#tabproduct1"  role="tab" data-toggle="tab">Best SELLERS </a> </li>
                <li role="presentation"> <a href="#tabproduct2" role="tab" data-toggle="tab">ON SALE</a> </li>
                <li role="presentation"> <a href="#tabproduct3"  role="tab" data-toggle="tab">NEW PRODUCTS</a> </li>
              </ul>
            </div>
            <div class="block-content tab-content">

              <div role="tabpanel" class="tab-pane active fade in " id="tabproduct1">
                  <div class="owl-carousel"
                                          data-nav="true"
                                          data-dots="false"
                                          data-margin="30"
                                          data-responsive='{
                                          "0":{"items":1},
                                          "480":{"items":2},
                                          "480":{"items":2},
                                          "768":{"items":3},
                                          "992":{"items":4}
                                      }'>
{{--                      Best Seller--}}

                                @foreach($orders as $key => $best )

                              @foreach(App\Product::where('id', $key)
                                ->where('published',1)
                                ->get() as   $parent)

<!--                                   --><?php
//                              echo "<pre>";
//                              print_r($parent) ;
//                              echo "</pre>";
//                              ?>
                      <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
              <div class="product-item-photo">

                @php $i = 1; @endphp
                             @foreach($parent->images as $image)
                                     @if($i > 0)

                          <a class="product-item-img" href="{{ route('products.show',$parent->id)}}">
                               <img alt="product name" src="{{ asset('uploads/products/'.$image->image)}}" width="186" height="266">
                             </a>
                                      @endif
                                    @php $i--; @endphp
                                      @endforeach
                                       <div class="product-item-actions">
                                      @include('frontend.pages.products.partials.wish-button')
                                       </div>

                                        @include('frontend.pages.products.partials.cart-button')
                                        @if($product->offer_price>0)
                        <span class="product-item-label label-price">{{$product->offer_price}}% <span>off</span></span>
                        @endif
                                            </div>
                                          <div class="product-item-detail"> <strong class="product-item-name"><a href="pro_det.html">{{$parent->title}}</a></strong>
                                                <div class="clearfix">
                                                 
                @if($parent->new_price)
                  <div class="product-item-price"> <span class="price">&#2547;{{$parent->new_price}}</span> <span class="old-price">&#2547;{{$parent->price}}.00</span> </div>         
                  @else
                  <div class="product-item-price"> <span class="price">&#2547;{{$parent->price}}</span></div>
                  @endif
                                                  <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                      <div title="80%" class="rating-result">
                                                          <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                  @endforeach

                                    @endforeach

                                      </div>
                                    </div>


{{--                end best seller--}}



              <div role="tabpanel" class="tab-pane fade" id="tabproduct3">
                <div class="owl-carousel"
                                        data-nav="true"
                                        data-dots="false"
                                        data-margin="30"
                                        data-responsive='{
                                        "0":{"items":1},
                                        "480":{"items":2},
                                        "480":{"items":2},
                                        "768":{"items":3},
                                        "992":{"items":4}
                                    }'>
                 @foreach(App\Product::where('published',1)->latest()->take(8)->get() as $product)
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
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="tabproduct2">
                <div class="owl-carousel"
                                        data-nav="true"
                                        data-dots="false"
                                        data-margin="30"
                                        data-responsive='{
                                        "0":{"items":1},
                                        "480":{"items":2},
                                        "480":{"items":2},
                                        "768":{"items":3},
                                        "992":{"items":4}
                                    }'>
                 @foreach(App\Product::where('status', 1)
                            ->where('published',1)
                            ->get() as $product)
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
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span></span>of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix" style="background-color: #eeeeee;margin-bottom: 40px; padding-top:30px;">





@foreach (App\Category::orderBy('id', 'asc')->where('parent_id', NULL)->get() as $parent)

<div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-1">
        <div class="container">
          <div class="block-title "> <span class="title">&nbsp; {{$parent->name}}</span>
            <div class="links dropdown">
              <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bars" aria-hidden="true"></i> </button>
              <div class="dropdown-menu" >
                <ul>
                  <li role="presentation" class="active"><a href="#floor1-1"  onClick="getSubcatContent(event, 'bestseller')" role="tab" data-toggle="tab">Best Seller </a></li>
                  <li role="presentation"><a href="#floor1-3"  onClick="getSubcatContent(event, 'newarrival')" role="tab" data-toggle="tab">New Arrivals </a></li>

                  @foreach (App\SubCategory::orderBy('name', 'desc')->where('category_id', $parent->id)->get() as $sub)
                      <li role="presentation"><a href="#" onClick="getSubcatContent('{{$sub->id}}')" role="tab" data-toggle="tab">{{$sub->name}} </a></li>
                    @endforeach
                </ul>
              </div>
            </div>
            <div class="actions"> <a href="{{route('all-product',$parent->id)}}">
              <div class="mor">MORE PRODUCT</div>
              </a> </div>
          </div>

          <div class="block-banner-floor row">
              @foreach (App\Banner::where('category_id', $parent->id)->take(2)->get() as $banner)
                  <div class="col-sm-6" style="box-sizing:border-box">
               <img alt="product name" src="{{ asset('uploads/banner/'.$banner->image)}}" style="width: 100%;height: 65px;">
               </div>
              @endforeach
          </div>
          <div class="block-content">
            <div class="col-banner">
             <span class="label-featured"><img src="{{ asset('frontend/images/icon/index1/label-featured.png') }}" alt="label-featured"></span>
              <a href="" class="box-img">

                <img src="{{asset('uploads/category/'.$parent->image)}}" alt="baner-floor" width="234" height="350">


              </a>

            </div>

            <div class="col-products tab-content">
              <div class="tab-pane active in  fade " id="subcategory" role="tabpanel">
                <div class="owl-carousel"
                                        data-nav="true"
                                        data-dots="false"
                                        data-margin="0"
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>

                  @foreach(App\Product::where('category_id', $parent->id)
                                        ->where('published',1)
                                        ->get() as $product)
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
                        @if($product->offer_price>0)
                        <span class="product-item-label label-price">{{$product->offer_price}}% <span>off</span></span>
                        @endif
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="{{ route('products.show',$parent->id)}}">{{$product->title}}</a></strong>
                        <div class="clearfix">
                        @if($product->new_price)
                  <div class="product-item-price"> <span class="price">&#2547;{{$product->new_price}}</span> <span class="old-price">&#2547;{{$product->price}}.00</span> </div>         
                  @else
                  <div class="product-item-price"> <span class="price">&#2547;{{$product->price}}</span></div>
                  @endif
        
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach

                </div>

              </div>


            </div>
          </div>
        </div>
      </div>
            @foreach($datas as $product)

            <div class="tab-pane  fade" id="load-subcat-content" role="tabpanel">
                <div class="owl-carousel"
                     data-nav="true"
                     data-dots="false"
                     data-margin="0"
                     data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>



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
                                        <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                    </div>
                                    @include('frontend.pages.products.partials.cart-button')
                                </div>
                                <div class="product-item-detail"> <strong class="product-item-name"><a href="">{{$product->title}}</a></strong>
                                    <div class="clearfix">
                                        <div class="product-item-price"> <span class="price">{{$product->price}}</span> </div>
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

                </div>
            </div>
@endforeach

      <div class="block-banner-opt1 effect-banner3">
        <div class="container">
          <div class="row">
            <div class="col-sm-6"> <a href="" class="box-img"><img src="{{asset('frontend/images/media/index1/banner7-1.jpg')}}" alt="banner"></a> </div>
            <div class="col-sm-6"> <a href="" class="box-img"><img src="{{asset('frontend/images/media/index1/banner7-2.jpg')}}" alt="banner"></a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="block-showcase block-showcase-opt1 block-brand-tabs">
      <div class="container">
        <div class="block-title"> <span class="title">brand showcase</span> </div>
        <div class="block-content" >
          <ul class="nav-brand owl-carousel"
                            data-nav="true"
                            data-loop="true"
                            data-dots="false"
                            data-margin="1"
                            data-responsive='{
                            "0":{"items":3},
                            "380":{"items":4},
                            "480":{"items":5},
                            "640":{"items":7},
                            "992":{"items":8}
                        }'>
            @foreach(App\Brand::all() as $brand)
            <li  class="active" data-tab="brand1-1">
                <a href="#" onClick="getBrandById('{{$brand->id}}')" role="tab" data-toggle="tab">
                    <img src="{{asset('uploads/brand/'.$brand->image)}}" alt="{{$brand->name}}">
                </a>
            </li>
              @endforeach
          </ul>
          <div class="tab-content">
            <div id="load-brand" class="tab-pane active  " role="tabpanel">
              <div class="row">
                <div class="col-md-4">
                  <div class="col-title"> <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                    <div class="des"></div>
                    <div class="actions"> <a href="" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a> </div>
                  </div>
                </div>

                <div class="col-md-8">
                  <div class="col-product">
                    <div class="owl-carousel"
                                                data-nav="true"
                                                data-dots="false"
                                                data-margin="0"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                        <div>

                              ==========

                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="block-hot-categories-opt1">
      <div class="container">
        <div class="block-title "> <span class="title">Hot categories</span> </div>

        <div class="block-content">

                <div class="row">
                  @foreach(App\Category::all()->take(4) as $category)
                <div class="col-md-3">
                  <div class="item">
                          <div class="description")>
                            <!-- <div class="description" style="background-image: url({{ asset('uploads/category/'.$category->image)}})"> -->
                              <div class="row">
                                 <div class="col-sm-6">
                                  <div class="title">
                              <span>{{$category->name}}</span>

                            </div>
                            <a href="{{route('all-product',$category->id)}}" class="btn">shop now</a>
                                </div>
                                <div class="col-sm-6">
                                  <img alt="product name" style="margin-top: 10px;" src="{{ asset('uploads/category/'.$category->image)}}" width="117" height="92">
                                </div>

                              </div>

                            </div>


                                  <ul>
                                      @foreach(App\SubCategory::where('category_id', $category->id)->latest()->take(5)->get() as $subCategory)
                                          <li><a href="{{ route('subCategory.show',$subCategory->id)}}">{{$subCategory->name}}</a>
                                            </li>
                                      @endforeach
                                  </ul>
                              </div>

              </div>
              @endforeach
            </div>
          </div>

        </div>
      </div>
    </div>
  </main>

<!-- end main-site -->







@endsection




