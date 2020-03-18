<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Eeklaas</title>
<link rel="icon" href="{{ asset('frontend/images/icon/icon.png') }}" type="image/png">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- start all css link  -->

<!-- <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}"> -->
<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
<!-- <link rel="stylesheet" href="{{ asset('frontend/css/flexslider.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/pricing.css') }}"> -->
<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
<!-- <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}"> -->
<!-- <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datetimepicker.min.css') }}"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

<!-- end all css link -->


</head>
<body class="cms-index-index index-opt-1">
<div class="wrapper">
  <header class="site-header header-opt-2 cate-show">
    <div class="header-top">
      <div class="container">
        <ul class="nav-left" >
          <li ><span><i class="fa fa-phone" aria-hidden="true"></i>+ 00 123 456 789</span></li>
          <li ><span><i class="fa fa-envelope" aria-hidden="true"></i> Contact us today !</span></li>
        </ul>
        <ul class="nav-right">
          <!-- <li class="dropdown switcher  switcher-language"> <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle switcher-trigger" aria-expanded="false"> <img class="switcher-flag" alt="flag" src="{{ asset('frontend/images/flags/flag_bangladesh.png') }}"> <span>Bangla</span> <i aria-hidden="true" class="fa fa-angle-down"></i> </a>
            <ul class="dropdown-menu switcher-options ">
              <li class="switcher-option"> <a href="#"> <img class="switcher-flag" alt="flag" src="{{ asset('frontend/images/flags/flag_bangladesh.png') }}">Bangla </a> </li>
              <li class="switcher-option"> <a href="#"> <img class="switcher-flag" alt="flag" src="{{ asset('frontend/images/flags/flag_english.png') }}">English </a> </li>
            </ul>
          </li> -->
          <li class="dropdown setting"> <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle "><span>My Account</span> <i aria-hidden="true" class="fa fa-angle-down"></i></a>
            <div class="dropdown-menu  ">
              <ul class="account">
                                    <li><a href="wish_list.html">Wishlist</a></li>
                                    <li><a href="customer_acc.html">My Account</a></li>
                                    <li><a href="chk_out.html">Checkout</a></li>
                                    <li><a href="login.html">Login/Register</a></li>
                                    <li><a href="ad_customer.html">Dashboard</a></li>
              </ul>
            </div>
          </li>
          <!-- <li><a href="/" >Sell On Eelaas</a></li> -->
          <li><a href="login.html">Sign Up</a></li>
          <li><a href="{{ route('login') }}">Login </a></li>
        </ul>
      </div>
    </div>
    <div class="header-content">
      <div class="container">
        <div class="row">
          <div class="col-md-3 nav-left"> <strong class="logo"> <a href=""><img src="{{ asset('frontend/images/icon/logo.png') }}" alt="logo"></a> </strong> </div>
          <div class="nav-right"> <a href="" class="link-wishlist"><span>wishlish</span></a>
            <div class="block-minicart dropdown"> <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"> <span class="cart-icon"></span> <span class="cart-text">cart</span> <span class="counter qty"> <span class="counter-number">2</span> <span class="counter-label">2<span>Item(s)</span></span> <span class="counter-price">&#2547; 75.00</span> </span> </a>
              <div class="dropdown-menu">
                <form>
                  <div  class="minicart-content-wrapper" >
                    <div class="subtitle"> You have 2 item(s) in your cart </div>
                    <div class="minicart-items-wrapper">
                      <ol class="minicart-items">
                        <li class="product-item"> <a class="product-item-photo" href="#" title="The Name Product"> <img class="product-image-photo" src="{{ asset('images/media/index1/minicart.jpg') }}" alt="The Name Product"> </a>
                          <div class="product-item-details"> <strong class="product-item-name"> <a href="#">Donec Ac Tempus</a> </strong>
                            <div class="product-item-price"> <span class="price">61,19 €</span> </div>
                            <div class="product-item-qty"> <span class="label">Qty: </span ><span class="number">1</span> </div>
                            <div class="product-item-actions"> <a class="action delete" href="#" title="Remove item"> <span>Remove</span> </a> </div>
                          </div>
                        </li>
                        <li class="product-item"> <a class="product-item-photo" href="#" title="The Name Product"> <img class="product-image-photo" src="{{ asset('images/media/index1/minicart2.jpg') }}" alt="The Name Product"> </a>
                          <div class="product-item-details"> <strong class="product-item-name"> <a href="#">Donec Ac Tempus</a> </strong>
                            <div class="product-item-price"> <span class="price">61,19 €</span> </div>
                            <div class="product-item-qty"> <span class="label">Qty: </span ><span class="number">1</span> </div>
                            <div class="product-item-actions"> <a class="action delete" href="#" title="Remove item"> <span>Remove</span> </a> </div>
                          </div>
                        </li>
                      </ol>
                    </div>
                    <div class="subtotal"> <span class="label">Total</span> <span class="price">&#2547; 630</span> </div>
                    <div class="actions">
                      <button class="btn btn-checkout" type="button" title="Check Out"> <span>Checkout</span> </button>
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
                  <form>
                    <div class="box-group">
                      <input type="text" class="form-control" placeholder="Search here...">
                      <button class="btn btn-search" type="button"><span>search</span></button>
                    </div>
                  </form>
                </div>
                <div class="categori-search  ">
                  <select data-placeholder="All Categories" class="categori-search-option">
                    <option>All Categories</option>
                    <option>Fashion</option>
                    <option>Tops Blouses</option>
                    <option>Clothing</option>
                    <option>Furniture</option>
                    <option>Bathtime Goods</option>
                    <option>Shower Curtains</option>
                  </select>
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
                <li class="parent"> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat1.png') }}" alt="nav-cat"></span> Electronics </a> <span class="toggle-submenu"></span>
                  <div class="submenu" style="background-image: url({{ asset('frontend/images/media/index1/bgmenu.jpg') }});">
                    <ul class="categori-list clearfix">
                      <li class="col-sm-3"> <strong class="title"><a href="">Smartphone</a></strong>
                        <ul>
                          <li><a href="">Skirts </a></li>
                          <li><a href="">Jackets</a></li>
                          <li><a href="">Jumpusuits</a></li>
                          <li><a href="">Scarvest</a></li>
                          <li><a href="">T-Shirts</a></li>
                        </ul>
                      </li>
                      <li class="col-sm-3"> <strong class="title"><a href="">TElevision</a></strong>
                        <ul>
                          <li><a href="">Skirts </a></li>
                          <li><a href="">Jackets</a></li>
                          <li><a href="">Jumpusuits</a></li>
                          <li><a href="">Scarvest</a></li>
                          <li><a href="">T-Shirts</a></li>
                        </ul>
                      </li>
                      <li class="col-sm-3"> <strong class="title"><a href="">Camera</a></strong>
                        <ul>
                          <li><a href="">Skirts </a></li>
                          <li><a href="">Jackets</a></li>
                          <li><a href="">Jumpusuits</a></li>
                          <li><a href="">Scarvest</a></li>
                          <li><a href="">T-Shirts</a></li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="categori-list clearfix">
                      <li class="col-sm-3"> <strong class="title"><a href="">Smartphone</a></strong>
                        <ul>
                          <li><a href="">Skirts </a></li>
                          <li><a href="">Jackets</a></li>
                          <li><a href="">Jumpusuits</a></li>
                          <li><a href="">Scarvest</a></li>
                          <li><a href="">T-Shirts</a></li>
                        </ul>
                      </li>
                      <li class="col-sm-3"> <strong class="title"><a href="">TElevision</a></strong>
                        <ul>
                          <li><a href="">Skirts </a></li>
                          <li><a href="">Jackets</a></li>
                          <li><a href="">Jumpusuits</a></li>
                          <li><a href="">Scarvest</a></li>
                          <li><a href="">T-Shirts</a></li>
                        </ul>
                      </li>
                      <li class="col-sm-3"> <strong class="title"><a href="">Camera</a></strong>
                        <ul>
                          <li><a href="">Skirts </a></li>
                          <li><a href="">Jackets</a></li>
                          <li><a href="">Jumpusuits</a></li>
                          <li><a href="">Scarvest</a></li>
                          <li><a href="">T-Shirts</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="parent"> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat2.png') }}" alt="nav-cat"></span> Sports & Outdoors </a> <span class="toggle-submenu"></span>
                  <div class="submenu">
                    <div class="categori-img"> <a href=""><img src="{{ asset('frontend/images/media/index1/categori-img1.jpg') }}" alt="categori-img"></a> </div>
                    <ul class="categori-list">
                      <li class="col-sm-3"> <strong class="title"><a href="">Smartphone</a></strong>
                        <ul>
                          <li><a href="">Skirts </a></li>
                          <li><a href="">Jackets</a></li>
                          <li><a href="">Jumpusuits</a></li>
                          <li><a href="">Scarvest</a></li>
                          <li><a href="">T-Shirts</a></li>
                        </ul>
                      </li>
                      <li class="col-sm-3"> <strong class="title"><a href="">TElevision</a></strong>
                        <ul>
                          <li><a href="">Skirts </a></li>
                          <li><a href="">Jackets</a></li>
                          <li><a href="">Jumpusuits</a></li>
                          <li><a href="">Scarvest</a></li>
                          <li><a href="">T-Shirts</a></li>
                        </ul>
                      </li>
                      <li class="col-sm-3"> <strong class="title"><a href="">Camera</a></strong>
                        <ul>
                          <li><a href="">Skirts </a></li>
                          <li><a href="">Jackets</a></li>
                          <li><a href="">Jumpusuits</a></li>
                          <li><a href="">Scarvest</a></li>
                          <li><a href="">T-Shirts</a></li>
                        </ul>
                      </li>
                      <li class="col-sm-3"> <strong class="title"><a href="">washing machine</a></strong>
                        <ul>
                          <li><a href="">Skirts </a></li>
                          <li><a href="">Jackets</a></li>
                          <li><a href="">Jumpusuits</a></li>
                          <li><a href="">Scarvest</a></li>
                          <li><a href="">T-Shirts</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="parent"> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat3.png') }}" alt="nav-cat"></span> Smartphone & Tablets </a> <span class="toggle-submenu"></span>
                  <div class="submenu"> <strong class="subtitle"><span>special products</span></strong>
                    <div class="owl-carousel" 
                                                data-nav="true" 
                                                data-dots="false" 
                                                data-margin="30" 
                                                data-autoplayTimeout="300" 
                                                data-autoplay="true" 
                                                data-loop="true"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "600":{"items":1},
                                                "992":{"items":4}
                                                }'>
                      <div class="product-item product-item-opt-1">
                        <div class="product-item-info">
                          <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="{{ asset('frontend/images/media/index1/product-menu1.jpg') }}"></a> </div>
                          <div class="product-item-detail"> <strong class="product-item-name"><a href="">Asus Ispiron 20</a></strong>
                            <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-item product-item-opt-1">
                        <div class="product-item-info">
                          <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="{{ asset('frontend/images/media/index1/product-menu2.jpg') }}"></a> </div>
                          <div class="product-item-detail"> <strong class="product-item-name"><a href="">Electronics Ispiron 20 </a></strong>
                            <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-item product-item-opt-1">
                        <div class="product-item-info">
                          <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="{{ asset('frontend/images/media/index1/product-menu3.jpg') }}"></a> </div>
                          <div class="product-item-detail"> <strong class="product-item-name"><a href="">Samsung Ispiron 20 </a></strong>
                            <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-item product-item-opt-1">
                        <div class="product-item-info">
                          <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="{{ asset('frontend/images/media/index1/product-menu4.jpg') }}"></a> </div>
                          <div class="product-item-detail"> <strong class="product-item-name"><a href="">Electronics Ispiron 20 </a></strong>
                            <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-item product-item-opt-1">
                        <div class="product-item-info">
                          <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="{{ asset('frontend/images/media/index1/product-menu4.jpg') }}"></a> </div>
                          <div class="product-item-detail"> <strong class="product-item-name"><a href="">Samsung Ispiron 20 </a></strong>
                            <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat4.png') }}" alt="nav-cat"></span> Health & Beauty </a> </li>
                <li> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat5.png') }}" alt="nav-cat"></span> Bags, Shoes & Accessories </a> </li>
                <li> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat6.png') }}" alt="nav-cat"></span> Toys & Hobbies </a> </li>
                <li> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat7.png') }}" alt="nav-cat"></span> Computers & Networking </a> </li>
                <li> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat8.png') }}" alt="nav-cat"></span> Laptops & Accessories </a> </li>
                <li> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat9.png') }}" alt="nav-cat"></span> Jewelry  & Watches </a> </li>
                <li> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat10.png') }}" alt="nav-cat"></span> Flashlights & Lamps </a> </li>
                <li> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat11.png') }}" alt="nav-cat"></span> Cameras & Photo </a> </li>
                <li class="cat-link-orther"> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat10.png') }}" alt="nav-cat"></span> Sport & Outdoors </a> </li>
                <li class="cat-link-orther"> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat9.png') }}" alt="nav-cat"></span> Watch & Jewellry </a> </li>
              </ul>
              <div class="view-all-categori"> <a  class="open-cate btn-view-all">All Categories</a> </div>
            </div>
          </div>
          <div class="block-nav-menu">
            <div class="clearfix"><span data-action="close-nav" class="close-nav"><span>close</span></span></div>
            <ul class="ui-menu">
              <li class="parent parent-megamenu"> <a href="Contact.html">Demo</a> <span class="toggle-submenu"></span>
                <div class="megamenu drop-menu">
                  <ul>
                    <li class="col-md-3"> <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                      <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3"> <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                      <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3"> <strong class="title"><a href=""> <span>Kid's</span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                      <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3">
                      <div class="img-categori"> <a href=""><img alt="img" src="{{ asset('frontend/images/media/index1/img-categori5.jpg') }}"></a> </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="parent parent-megamenu"> <a href="Contact.html">Demo</a> <span class="toggle-submenu"></span>
                <div class="megamenu drop-menu">
                  <ul>
                    <li class="col-md-3"> <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                      <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3"> <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                      <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3"> <strong class="title"><a href=""> <span>Kid's</span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                      <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3">
                      <div class="img-categori"> <a href=""><img alt="img" src="images/media/index1/img-categori5.jpg"></a> </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="parent parent-megamenu"> <a href="Contact.html">Demo</a> <span class="toggle-submenu"></span>
                <div class="megamenu drop-menu">
                  <ul>
                    <li class="col-md-3"> <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                      <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3"> <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                      <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3"> <strong class="title"><a href=""> <span>Kid's</span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                      <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3">
                      <div class="img-categori"> <a href=""><img alt="img" src="images/media/index1/img-categori5.jpg"></a> </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="parent parent-megamenu"> <a href="Contact.html">Demo</a> <span class="toggle-submenu"></span>
                <div class="megamenu drop-menu">
                  <ul>
                    <li class="col-md-3"> <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                      <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3"> <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                      <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3"> <strong class="title"><a href=""> <span>Kid's</span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                      <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3">
                      <div class="img-categori"> <a href=""><img alt="img" src="images/media/index1/img-categori5.jpg"></a> </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="parent parent-megamenu"> <a href="Contact.html">Demo</a> <span class="toggle-submenu"></span>
                <div class="megamenu drop-menu">
                  <ul>
                    <li class="col-md-3"> <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                      <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3"> <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                      <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3"> <strong class="title"><a href=""> <span>Kid's</span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                      <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3">
                      <div class="img-categori"> <a href=""><img alt="img" src="images/media/index1/img-categori5.jpg"></a> </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="parent parent-megamenu"> <a href="Contact.html">Demo</a> <span class="toggle-submenu"></span>
                <div class="megamenu drop-menu">
                  <ul>
                    <li class="col-md-3"> <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                      <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3"> <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                      <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3"> <strong class="title"><a href=""> <span>Kid's</span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                      <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3">
                      <div class="img-categori"> <a href=""><img alt="img" src="images/media/index1/img-categori5.jpg"></a> </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="parent parent-megamenu"> <a href="Contact.html">Demo</a> <span class="toggle-submenu"></span>
                <div class="megamenu drop-menu">
                  <ul>
                    <li class="col-md-3"> <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                      <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3"> <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                      <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3"> <strong class="title"><a href=""> <span>Kid's</span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                      <strong class="title"><a href=""><span>Women's </span></a></strong>
                      <ul class="list-submenu">
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Clothing</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Sunglasses</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3">
                      <div class="img-categori"> <a href=""><img alt="img" src="images/media/index1/img-categori5.jpg"></a> </div>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
          <span data-action="toggle-nav" class="nav-toggle-menu"><span>Menu</span><i aria-hidden="true" class="fa fa-bars"></i></span>
          <div class="block-minicart dropdown "> <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"> <span class="cart-icon"></span> </a>
            <div class="dropdown-menu">
              <form>
                <div  class="minicart-content-wrapper" >
                  <div class="subtitle"> You have 2 item(s) in your cart </div>
                  <div class="minicart-items-wrapper">
                    <ol class="minicart-items">
                      <li class="product-item"> <a class="product-item-photo" href="#" title="The Name Product"> <img class="product-image-photo" src="images/media/index1/minicart.jpg" alt="The Name Product"> </a>
                        <div class="product-item-details"> <strong class="product-item-name"> <a href="#">Donec Ac Tempus</a> </strong>
                          <div class="product-item-price"> <span class="price">61,19 €</span> </div>
                          <div class="product-item-qty"> <span class="label">Qty: </span ><span class="number">1</span> </div>
                          <div class="product-item-actions"> <a class="action delete" href="#" title="Remove item"> <span>Remove</span> </a> </div>
                        </div>
                      </li>
                      <li class="product-item"> <a class="product-item-photo" href="#" title="The Name Product"> <img class="product-image-photo" src="images/media/index1/minicart2.jpg" alt="The Name Product"> </a>
                        <div class="product-item-details"> <strong class="product-item-name"> <a href="#">Donec Ac Tempus</a> </strong>
                          <div class="product-item-price"> <span class="price">61,19 €</span> </div>
                          <div class="product-item-qty"> <span class="label">Qty: </span ><span class="number">1</span> </div>
                          <div class="product-item-actions"> <a class="action delete" href="#" title="Remove item"> <span>Remove</span> </a> </div>
                        </div>
                      </li>
                    </ol>
                  </div>
                  <div class="subtotal"> <span class="label">Total</span> <span class="price">&#2547; 630</span> </div>
                  <div class="actions">
                    <button class="btn btn-checkout" type="button" title="Check Out"> <span>Checkout</span> </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="block-search">
            <div class="block-title"> <span>Search</span> </div>
            <div class="block-content">
              <div class="form-search">
                <form>
                  <div class="box-group">
                    <input type="text" class="form-control" placeholder="Search here...">
                    <button class="btn btn-search" type="button"><span>search</span></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="dropdown setting"> <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle "><span>Settings</span> <i aria-hidden="true" class="fa fa-user"></i></a>
            <div class="dropdown-menu  ">
              <div class="switcher  switcher-language"> <strong class="title">Select language</strong>
              <ul>
                <li class="switcher-option"> <a href="#"> <img class="switcher-flag" alt="flag" src="images/flags/flag_bangladesh.png">Bangla </a> </li>
                <li class="switcher-option"> <a href="#"> <img class="switcher-flag" alt="flag" src="images/flags/flag_english.png">English </a> </li>
                </ul>
              </div>
              <ul class="account">
                                    <li><a href="wish_list.html">Wishlist</a></li>
                                    <li><a href="customer_acc.html">My Account</a></li>
                                    <li><a href="chk_out.html">Checkout</a></li>
                                    <li><a href="login.html">Login/Register</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  
  @yield('content')

  <footer class="site-footer footer-opt-1">
    <div class="container">
      <div class="footer-column">
        <div class="row">
          <div class="col-md-3 col-lg-3 col-xs-6 col"> <strong class="logo-footer"> <a href=""><img src="images/media/index1/logo-footer.png" alt="logo"></a> </strong>
            <table class="address">
              <tr>
                <td><b>Address: </b></td>
                <td>Street 68, Gulshan, Dhaka, Bangladesh</td>
              </tr>
              <tr>
                <td><b>Phone: </b></td>
                <td>+ 65 123 456 789</td>
              </tr>
              <tr>
                <td><b>Email:</b></td>
                <td>Support@abcd.com</td>
              </tr>
            </table>
          </div>
          <div class="col-md-2 col-lg-2 col-xs-6 col">
            <div class="links">
              <h3 class="title">Company</h3>
              <ul>
                <li><a href="">About Us</a></li>
                <li><a href="">Testimonials</a></li>
                <li><a href="">Affiliate Program</a></li>
                <li><a href="">Terms & Conditions</a></li>
                <li><a href="">Terms & Conditions</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 col-lg-2 col-xs-6 col">
            <div class="links">
              <h3 class="title">My Account</h3>
              <ul>
                <li><a href="">My Order</a></li>
                <li><a href="">My Wishlist</a></li>
                <li><a href="">My Credit Slip</a></li>
                <li><a href="">My Addresses</a></li>
                <li><a href="">My Account</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 col-lg-2 col-xs-6 col">
            <div class="links">
              <h3 class="title">Support</h3>
              <ul>
                <li><a href="">New User Guide</a></li>
                <li><a href="">Help Center</a></li>
                <li><a href="">Refund Policy</a></li>
                <li><a href="">Report Spam</a></li>
                <li><a href="">FAQ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-xs-6 col">
            <div class="block-newletter">
              <div class="block-title">NEWSLETTER</div>
              <div class="block-content">
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Your Email Address">
                    <span class="input-group-btn">
                    <button class="btn btn-subcribe" type="button"><span>ok</span></button>
                    </span> </div>
                </form>
              </div>
            </div>
            <div class="block-social">
              <div class="block-title">Let’s Socialize </div>
              <div class="block-content"> <a href="" class="sh-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="" class="sh-pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a> <a href="" class="sh-vk"><i class="fa fa-vk" aria-hidden="true"></i></a> <a href="" class="sh-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="" class="sh-google"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="payment-methods">
        <div class="block-title"> Accepted Payment Methods </div>
        <div class="block-content"> <img alt="payment" src="images/media/index1/payment1.png"> <img alt="payment" src="images/media/index1/payment2.png"> <img alt="payment" src="images/media/index1/payment3.png"> <img alt="payment" src="images/media/index1/payment4.png"> <img alt="payment" src="images/media/index1/payment5.png"> <img alt="payment" src="images/media/index1/payment6.png"> <img alt="payment" src="images/media/index1/payment7.png"> <img alt="payment" src="images/media/index1/payment8.png"> <img alt="payment" src="images/media/index1/payment9.png"> <img alt="payment" src="images/media/index1/payment10.png"> </div>
      </div>
      <div class="footer-links">
        <ul class="links">
          <li><strong class="title">HOT SEARCHED KEYWORDS:</strong></li>
          <li><a href="">Xiaomi Mi3 </a></li>
          <li><a href="">Digiflip Pro XT 712 Tablet</a></li>
          <li><a href="">Mi 3 Phones </a></li>
          <li><a href="">Iphone 6 Plus </a></li>
          <li><a href="">Women's Messenger Bags</a></li>
          <li><a href="">Wallets </a></li>
          <li><a href="">Women's Clutches </a></li>
          <li><a href="">Backpacks Totes</a></li>
        </ul>
        <ul class="links">
          <li><strong class="title">tvs: </strong></li>
          <li><a href="">Sony TV </a></li>
          <li><a href=""> Samsung TV </a></li>
          <li><a href="">LG TV </a></li>
          <li><a href="">Panasonic TV </a></li>
          <li><a href=""> Onida TV </a></li>
          <li><a href=""> Toshiba TV </a></li>
          <li><a href=""> Philips TV</a></li>
          <li><a href="">Micromax TV</a></li>
          <li><a href="">LED TV </a></li>
          <li><a href=""> LCD TV </a></li>
          <li><a href="">Plasma TV </a></li>
          <li><a href="">3D TV </a></li>
          <li><a href="">Smart TV </a></li>
        </ul>
      </div>
      <div class="footer-bottom">
        <div class="links">
          <ul>
            <li><a href=""> Company Info – Partnerships </a></li>
          </ul>
          <ul>
            <li><a href="">Online Shopping </a></li>
            <li><a href="">Promotions </a></li>
            <li><a href="">My Orders </a></li>
            <li><a href="">Help </a></li>
            <li><a href="">Site Map </a></li>
            <li><a href="">Customer Service </a></li>
            <li><a href="">Support </a></li>
          </ul>
          <ul>
            <li><a href="">Most Populars </a></li>
            <li><a href="">Best Sellers </a></li>
            <li><a href="">New Arrivals </a></li>
            <li><a href="">Special Products </a></li>
            <li><a href=""> Manufacturers </a></li>
            <li><a href="">Our Stores </a></li>
            <li><a href="">Shipping </a></li>
            <li><a href="">Payments </a></li>
            <li><a href="">Payments </a></li>
            <li><a href="">Refunds </a></li>
          </ul>
          <ul>
            <li><a href="">Terms & Conditions </a></li>
            <li><a href="">Policy </a></li>
            <li><a href="">Policy </a></li>
            <li><a href=""> Shipping </a></li>
            <li><a href="">Payments </a></li>
            <li><a href="">Returns </a></li>
            <li><a href="">Refunds </a></li>
            <li><a href="">Warrantee </a></li>
            <li><a href="">FAQ </a></li>
            <li><a href="">Contact </a></li>
          </ul>
        </div>
      </div>
      <div class="copyright"> Copyright © 2019 Eeklaas. All Rights Reserved </div>
    </div>
  </footer>
  <a href="#" class="back-to-top"> <i aria-hidden="true" class="fa fa-angle-up"></i> </a> </div>

  <script type="text/javascript" src="{{ asset('frontend/js/jquery.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('frontend/js/jquery.sticky.js') }}"></script> 
<script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('frontend/js/jquery.bxslider.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('frontend/js/jquery.actual.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('frontend/js/chosen.jquery.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('frontend/js/jquery.parallax-1.1.3.js') }}"></script> 
<script type="text/javascript" src="{{ asset('frontend/js/jquery.elevateZoom.min.js') }}"></script> 
<script src="{{ asset('frontend/js/fancybox/source/jquery.fancybox.pack.js') }}"></script> 
<script src="{{ asset('frontend/js/fancybox/source/helpers/jquery.fancybox-media.js') }}"></script> 
<script src="{{ asset('frontend/js/fancybox/source/helpers/jquery.fancybox-thumbs.js') }}"></script> 
<script src="{{ asset('frontend/js/arcticmodal/jquery.arcticmodal.js') }}"></script> 
<script type="text/javascript" src="{{ asset('frontend/js/main.js') }}"></script>

</body>
</html>