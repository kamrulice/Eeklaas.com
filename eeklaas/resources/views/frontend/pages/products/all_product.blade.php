@extends('frontend.layouts.master')


@section('content')

<!-- start main-site -->

<main class="site-main">
    <div class="columns container">

      <div class="row">
        <div class="col-md-3 col-md-pull-9  col-sidebar">
          <div id="layered-filter-block" class="block-sidebar block-filter no-hide">
            <div class="close-filter-products"><i class="fa fa-times" aria-hidden="true"></i></div>
            <div class="block-title"> <strong>PRODUCT FILTER</strong> </div>
            <div class="block-content">
              <div class="filter-options-item filter-options-categori">
                <div class="filter-options-title">Categories</div>
                <div class="filter-options-content">
                  <ol class="items">
                      @foreach(\App\Category::all() as $category)
                          <?php $i=0;?>
                          @foreach(\App\Product::where('category_id', $category->id)->get() as $product)
                                  <?php $i++ ;?>
                      @endforeach
                              <li class="item ">
                                  <label>
                                      <input type="checkbox">
                                      <span>{{$category->name}}<span class="count">  (<?php echo $i;?>)</span></span> </label>
                              </li>
                          @endforeach
                  </ol>
                </div>
              </div>
              <div class="filter-options-item filter-options-price">
                <div class="filter-options-title">Price</div>
                <div class="filter-options-content">
                  <div class="slider-range">
                    <div id="slider-range" ></div>
                    <div class="action"> <span class="price"> <span>Range:</span> $<span id="amount-left"></span> -
                      $<span id="amount-right"></span> </span> </div>
                  </div>
                  <ol class="items">
                    <li class="item ">
                      <label>
                        <input type="checkbox">
                        <span>$20 - $50 <span class="count">(20)</span> </span> </label>
                    </li>
                    <li class="item ">
                      <label>
                        <input type="checkbox">
                        <span>$50 - $100 <span class="count">(20)</span> </span> </label>
                    </li>
                    <li class="item ">
                      <label>
                        <input type="checkbox">
                        <span>$100 - $250 <span class="count">(20)</span> </span> </label>
                    </li>
                  </ol>
                </div>
              </div>
              <div class="filter-options-item filter-options-color">
                <div class="filter-options-title">COLOR</div>
                <div class="filter-options-content">
                  <ol class="items">
                    <li class="item">
                      <label>
                        <input type="checkbox">
                        <span> <span class="img" style="background-color: #fca53c;"></span> <span class="count">(30)</span> </span> </label>
                    </li>
                    <li class="item">
                      <label>
                        <input type="checkbox">
                        <span> <span class="img" style="background-color: #6b5a5c;"></span> <span class="count">(20)</span> </span> </label>
                    </li>
                    <li class="item">
                      <label>
                        <input type="checkbox">
                        <span> <span class="img" style="background-color: #000000;"></span> <span class="count">(20)</span> </span> </label>
                    </li>
                    <li class="item">
                      <label>
                        <input type="checkbox">
                        <span> <span class="img" style="background-color: #3063f2;"></span> <span class="count">(20)</span> </span> </label>
                    </li>
                    <li class="item">
                      <label>
                        <input type="checkbox">
                        <span> <span class="img" style="background-color: #f9334a;"></span> <span class="count">(20)</span> </span> </label>
                    </li>
                    <li class="item">
                      <label>
                        <input type="checkbox">
                        <span> <span class="img" style="background-color: #964b00;"></span> <span class="count">(20)</span> </span> </label>
                    </li>
                    <li class="item">
                      <label>
                        <input type="checkbox">
                        <span> <span class="img" style="background-color: #faebd7;"></span> <span class="count">(20)</span> </span> </label>
                    </li>
                    <li class="item">
                      <label>
                        <input type="checkbox">
                        <span> <span class="img" style="background-color: #e84c3d;"></span> <span class="count">(20)</span> </span> </label>
                    </li>
                    <li class="item">
                      <label>
                        <input type="checkbox">
                        <span> <span class="img" style="background-color: #fccacd;"></span> <span class="count">(20)</span> </span> </label>
                    </li>
                  </ol>
                </div>
              </div>
              <div class="filter-options-item filter-options-size">
                <div class="filter-options-title">SIZE</div>
                <div class="filter-options-content">
                  <ol class="items">
                    <li class="item ">
                      <label>
                        <input type="checkbox">
                        <span>X <span class="count">(20)</span></span> </label>
                    </li>
                    <li class="item ">
                      <label>
                        <input type="checkbox">
                        <span>XXL <span class="count">(20)</span></span> </label>
                    </li>
                    <li class="item ">
                      <label>
                        <input type="checkbox">
                        <span>XXL <span class="count">(20)</span></span> </label>
                    </li>
                    <li class="item ">
                      <label>
                        <input type="checkbox">
                        <span>m <span class="count">(20)</span></span> </label>
                    </li>
                    <li class="item ">
                      <label>
                        <input type="checkbox">
                        <span>L <span class="count">(20)</span></span> </label>
                    </li>
                    <li class="item ">
                      <label>
                        <input type="checkbox">
                        <span>32 <span class="count">(20)</span></span> </label>
                    </li>
                    <li class="item ">
                      <label>
                        <input type="checkbox">
                        <span>36 <span class="count">(20)</span></span> </label>
                    </li>
                    <li class="item ">
                      <label>
                        <input type="checkbox">
                        <span>37 <span class="count">(20)</span></span> </label>
                    </li>
                    <li class="item ">
                      <label>
                        <input type="checkbox">
                        <span>X <span class="count">(20)</span></span> </label>
                    </li>
                    <li class="item ">
                      <label>
                        <input type="checkbox">
                        <span>XXL <span class="count">(20)</span></span> </label>
                    </li>
                    <li class="item ">
                      <label>
                        <input type="checkbox">
                        <span>XXL <span class="count">(20)</span></span> </label>
                    </li>
                    <li class="item ">
                      <label>
                        <input type="checkbox">
                        <span>m <span class="count">(20)</span></span> </label>
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="block-sidebar block-sidebar-products">
            <div class="block-title"> <strong>PRODUCTS</strong> </div>
            <div class="block-content">
                @foreach(\App\Product::latest()->take(5)->get() as $product)
                    <div class="product-item product-item-opt-1">
                        <div class="product-item-info">
                            <div class="product-item-photo">
                                <a href="{{ route('products.show',$product->id)}}" class="product-item-img">
                                    @php $i = 1; @endphp
                                    @foreach($product->images as $image)
                                        @if($i > 0)

                                            <a class="product-item-img" href="{{ route('products.show',$product->id)}}">
                                                <img alt="product name" src="{{ asset('uploads/products/'.$image->image)}}" width="200" height="200">
                                            </a>
                                        @endif
                                        @php $i--; @endphp
                                    @endforeach
                                </a>
                            </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">{{$product->title}}</a></strong>
                                <div class="clearfix">
                                    <div class="product-item-price"> <span class="price">&#2547;{{$product->price}}</span> </div>
                                    <div class="product-reviews-summary">
                                        <div class="rating-summary">
                                            <div title="70%" class="rating-result"> <span style="width:70%"> <span><span>70</span>% of <span>100</span></span> </span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
          </div>
        </div>
        <div class="col-md-9 col-md-push-3  col-main">

          <div class="block-slide-main slide-opt-2">
            <div class="owl-carousel "
                  data-nav="true"
                  data-dots="false"
                  data-margin="0"
                  data-items='1'
                  data-autoplayTimeout="700"
                  data-autoplay="true"
                  data-loop="true">
                  @foreach($sliders as $key=>$slider)
                    <div class="item" > <a href="" class="img-slide"><img src="{{ asset('uploads/slider/'.$slider->image) }}" alt="img" width="900px" height="450px"></a> </div>
                   @endforeach
            </div>
          </div>

          @foreach($categories as $category)
          <h1 class="cat-title">{{$category->name}}</h1>

          <div class="toolbar-products toolbar-top">
            <div class="btn-filter-products"> <span>Filter</span> </div>
            <div class="toolbar-sorter">
              <label    class="label">Short by:</label>
              <select class="sorter-options form-control" >
                <option selected="selected" value="position">Position</option>
                <option value="name">Name</option>
                <option value="price">Price</option>
              </select>
              <a href="" class="sorter-action"></a>
              <label   class="label"> <span>Show:</span> </label>
              <select class="limiter-options form-control" style="margin-left: 5px" >
                <option selected="selected" value="9">Show 18</option>
                <option value="15">Show 15</option>
                <option value="30">Show 30</option>
              </select>
            </div>
            <div class="modes"> <strong  class="label">View as:</strong> <strong  class="modes-mode active mode-grid" title="Grid"> <span>grid</span> </strong> <a  href="/" title="List" class="modes-mode mode-list"> <span>list</span> </a> </div>
            <div class="toolbar-option">
              <div class="toolbar-sorter ">
                <label    class="label">Short by:</label>
                <select class="sorter-options form-control" >
                  <option selected="selected" value="position">Position</option>
                  <option value="name">Name</option>
                  <option value="price">Price</option>
                </select>
                <a href="" class="sorter-action"></a> </div>
              <div class="toolbar-limiter">
                <label   class="label"> <span>Show:</span> </label>
                <select class="limiter-options form-control" >
                  <option selected="selected" value="9">Show 18</option>
                  <option value="15">Show 15</option>
                  <option value="30">Show 30</option>
                </select>
              </div>
            </div>
            <ul class="pagination">
              <li class="action"></li>
            </ul>
          </div>
          <div class="products  products-grid">
            <ol class="product-items row">
              @foreach($products = \App\Product::where('category_id',$category->id)->paginate(12) as $product)
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

          </div>

          <div class="toolbar-products toolbar-bottom">
            <div class="res">{{$products->perpage()}} of  {{$products->total()}}</div>
            <div class="modes"> <strong  class="label">View as:</strong> <strong  class="modes-mode active mode-grid" title="Grid"> <span>grid</span> </strong> <a  href="Category2.html" title="List" class="modes-mode mode-list"> <span>list</span> </a> </div>
            <div class="toolbar-option"> </div>
            <ul class="pagination">
              <li class="active">{{$products->links()}}</li>

            </ul>
          </div>
        </div>
          @endforeach
      </div>
    </div>
  </main>

<!-- end main-site -->

@endsection

