<header class="site-header header-opt-2 cate-show">
  @if (Route::has('login'))

                        @auth
                            <!-- <a href="{{ url('/') }}">Home</a> -->

                            <div class="header-top">
                                <div class="container">
                                  <ul class="nav-left" >
                                    <li ><span><i class="fa fa-phone" aria-hidden="true"></i>+ 00 123 456 789</span></li>
                                    <li ><span><i class="fa fa-envelope" aria-hidden="true"></i> Contact us today !</span></li>
                                  </ul>
                                  <ul class="nav-right">
                                    <li class="dropdown setting"> <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle "><span>My Account</span> <i aria-hidden="true" class="fa fa-angle-down"></i></a>
                                      <div class="dropdown-menu  ">
                                        <ul class="account">
                                                              <li><a href="{{ route('wishlists')}}">Wishlist</a></li>
                                                              <li><a href="{{ route('carts')}}">Checkout</a></li>
                                                              <li><a href="{{ route('user.dashboard')}}">Dashboard</a></li>
                                        </ul>
                                      </div>
                                    </li>

                                        <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      <img class="img rounded-circle" src="{{App\Helpers\ImageHelper::getUserImage(Auth::User()->id)}}" class="img rounded-circle" style="width: 40px;border-radius: 50%;">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                  </ul>
                                </div>
                            </div>

                        @else
                          <div class="header-top">
      <div class="container">
        <ul class="nav-left" >
          <li ><span><i class="fa fa-phone" aria-hidden="true"></i>+ 00 123 456 789</span></li>
          <li ><span><i class="fa fa-envelope" aria-hidden="true"></i> Contact us today !</span></li>
        </ul>
        <ul class="nav-right">
          <li class="dropdown setting"> <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle "><span>My Account</span> <i aria-hidden="true" class="fa fa-angle-down"></i></a>
            <div class="dropdown-menu  ">
              <ul class="account">
                                    <li><a href="{{ route('wishlists')}}">Wishlist</a></li>
                                    <li><a href="{{ route('carts')}}">Checkout</a></li>
                                    <li><a href="{{ route('user.dashboard')}}">Dashboard</a></li>
              </ul>
            </div>
          </li>
          <!-- <li><a href="/" >Sell On Eelaas</a></li> -->
          <li><a href="{{ route('register') }}">Sign Up</a></li>
          <li><a href="{{ route('login') }}">Login </a></li>
        </ul>
      </div>
    </div>
                        @endauth
                @endif




    <div class="header-content">
      <div class="container">
        <div class="row">
          <div class="col-md-3 nav-left"> <strong class="logo"> 
                <a href="{{route('welcome')}}"><img src="{{ asset('frontend/images/icon/logo.png') }}" alt="logo"></a>
              </strong> 
          </div>
          <div class="nav-right">
            <a href="{{ route('wishlists')}}" class="link-wishlist"><span>wishlish</span> <span class="counter qty" id="totalWishlists"><span class="counter-number" >
              {{ App\Wishlist::totalItems()}}</span></span></a>
            <div class="block-minicart dropdown">
                <a class="dropdown-toggle" href="{{route('carts')}}" role="button" data-toggle="dropdown">
                    <span class="cart-icon"></span>
                    <span class="cart-text">cart</span> <span class="counter qty">
                        <span class="counter-number" id="totalItems">
              {{ App\Cart::totalItems()}}
            </span> <span class="counter-label">2<span>Item(s)</span></span> <span class="counter-price">&#2547; 75.00</span> </span> </a>
              <div class="dropdown-menu">
                <form>
                  <div  class="minicart-content-wrapper" >
                    <div class="subtitle"> You have {{ App\Cart::totalItems()}} item(s) in your cart </div>
                    <div class="minicart-items-wrapper">
                      <ol class="minicart-items">

                        @php
                          $total_price = 0;
                        @endphp

                        @foreach (App\Cart::totalCarts() as $cart)

                        <li class="product-item"> <a class="product-item-photo" href="#" title="{{ $cart->product->title }}">
                          @if (is_object($cart) && count($cart->product->images) > 0)
                            <img src="{{ asset('uploads/products/' . $cart->product->images->first()->image) }}" width="100">
                          @endif
                         <!-- <img class="product-image-photo" src="{{ asset('images/media/index1/minicart.jpg') }}" alt="The Name Product"> -->
                          </a>
                          <div class="product-item-details"> <strong class="product-item-name"> <a href="#">{{ $cart->product->title }}</a> </strong>
                            <div class="product-item-price"> <span class="price">{{ $cart->product->price }} Taka</span> </div>
                            <div class="product-item-qty"> <span class="label">Qty: </span ><span class="number">{{ $cart->product_quantity }}</span> </div>
                            <div class="product-item-actions"> <a class="action delete" href="#" title="Remove item"> <span>Remove</span> </a> </div>
                          </div>
                        </li>

                        @endforeach
                      </ol>
                    </div>
                    <div class="actions">
                      <a href="{{ route('carts')}}" class="btn btn-warning">Checkout</a>
                      <!-- <button class="btn btn-checkout" type="button" title="Check Out" href="{{route('carts')}}"> <span>Checkout</span> </button> -->
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class=" nav-mind">
            <div class="block-search">
              <div class="block-title"> <span>Search</span> </div>
              <div class="block-content">
                <div class="form-search">
                  <form action="{{ route('search')}}" method="get">
                    @csrf
                    <div class="box-group">
                      <input type="text" name="search" class="form-control" placeholder="Search here and press enter...">
                      <button class="btn btn-search"  type="submit"><span>search</span></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
                
    <div class="  header-nav mid-header">
      <div class="container">
        <div class="box-header-nav"> <span data-action="toggle-nav-cat" class="nav-toggle-menu nav-toggle-cat"><span>Categories</span><i aria-hidden="true" class="fa fa-bars"></i></span>
          <div class="block-nav-categori">
            <div class="block-title"> <span>Categories</span> </div>
            <div class="block-content">
              <div class="clearfix"><span data-action="close-cat" class="close-cate"><span>Categories</span></span></div>
                <ul class="ui-categori">
                    @foreach(App\Category::all() as $category)
                        <li class="parent"> <a href="{{route('all-product',$category->id)}}"> <span class="icon">
                            <img src="{{ asset('frontend/images/icon/index1/nav-cat1.png') }}" alt="nav-cat">
                          </span> {{$category->name}} </a> <span class="toggle-submenu"></span>
                            <div class="submenu" style="background-image: url({{ asset('uploads/category/'.$category->image)}})">
                                <ul class="categori-list clearfix">
                                    @foreach(\App\SubCategory::where('category_id', $category->id)->get() as $subCategory)
                                        <li class="col-sm-3">
                                            <strong class="title">
                                                <a href="{{ route('subCategory.show',$subCategory->id)}}">{{$subCategory->name}}</a>
                                            </strong>
                                            <ul class="list-submenu">
                                                @foreach(\App\Product::where('sub_category_id',$subCategory->id)->get() as $product)
                                                    <li><a href="{{ route('products.show',$product->id)}}">{{$product->title}}</a> </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <a href="{{ route('subCategory.show',$subCategory->id)}}"></a>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    @endforeach
                </ul>
{{--              <div class="view-all-categori"> <a  class="open-cate btn-view-all">All Categories</a> </div>--}}
            </div>
          </div>
          <div class="block-nav-menu">
            <div class="clearfix"><span data-action="close-nav" class="close-nav"><span>close</span></span></div>

          </div>
          <span data-action="toggle-nav" class="nav-toggle-menu"><span>Menu</span><i aria-hidden="true" class="fa fa-bars"></i></span>
          <div class="block-minicart dropdown ">
              <a class="dropdown-toggle" href="{{route('carts')}}" role="button" data-toggle="dropdown">
                  <span class="cart-icon"></span></a>




            <div class="dropdown-menu">
                <form>
                    <div  class="minicart-content-wrapper" >
                        <div class="subtitle"> You have {{ App\Cart::totalItems()}} item(s) in your cart </div>
                        <div class="minicart-items-wrapper">
                            <ol class="minicart-items">

                                @php
                                    $total_price = 0;
                                @endphp

                                @foreach (App\Cart::totalCarts() as $cart)

                                    <li class="product-item"> <a class="product-item-photo" href="#" title="{{ $cart->product->title }}">
                                            @if (is_object($cart) && count($cart->product->images) > 0)
                                                <img src="{{ asset('uploads/products/' . $cart->product->images->first()->image) }}" width="100">
                                        @endif
                                        <!-- <img class="product-image-photo" src="{{ asset('images/media/index1/minicart.jpg') }}" alt="The Name Product"> -->
                                        </a>
                                        <div class="product-item-details"> <strong class="product-item-name"> <a href="#">{{ $cart->product->title }}</a> </strong>
                                            <div class="product-item-price"> <span class="price">{{ $cart->product->price }} Taka</span> </div>
                                            <div class="product-item-qty"> <span class="label">Qty: </span ><span class="number">{{ $cart->product_quantity }}</span> </div>
                                            <div class="product-item-actions"> <a class="action delete" href="#" title="Remove item"> <span>Remove</span> </a> </div>
                                        </div>
                                    </li>

                                @endforeach
                            </ol>
                        </div>
                        <div class="actions">
                            <a href="{{ route('carts')}}" class="btn btn-warning">Checkout</a>
                        <!-- <button class="btn btn-checkout" type="button" title="Check Out" href="{{route('carts')}}"> <span>Checkout</span> </button> -->
                        </div>
                    </div>
                </form>
            </div>
          </div>
            <div class="block-search">
                <div class="block-title"> <span>Search</span> </div>
                <div class="block-content">
                    <div class="form-search">
                        <form action="{{ route('search')}}" method="get">
                            @csrf
                            <div class="box-group">
                                <input type="text" name="search" class="form-control" placeholder="Search">
                                <button class="btn btn-search"  type="submit"><span>search</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          <div class="dropdown setting">  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  <img class="img rounded-circle" src="{{App\Helpers\ImageHelper::getUserImage(Auth::User()->id)}}" class="img rounded-circle" style="width: 40px;border-radius: 50%;">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>
            <div class="dropdown-menu  ">
              <!-- <div class="switcher  switcher-language"> <strong class="title">Select language</strong>
              <ul>
                <li class="switcher-option"> <a href="#"> <img class="switcher-flag" alt="flag" src="images/flags/flag_bangladesh.png">Bangla </a> </li>
                <li class="switcher-option"> <a href="#"> <img class="switcher-flag" alt="flag" src="images/flags/flag_english.png">English </a> </li>
                </ul>
              </div> -->
              <ul class="account">
                                    <li><a href="{{ route('wishlists')}}">Wishlist</a></li>
                                    <li><a href="{{route('user.account')}}">My Account</a></li>
                                    <li><a href="{{route('carts')}}">Checkout</a></li>
                                    <li><a href="{{route('register')}}">Login/Register</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
