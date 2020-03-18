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
  <main class="site-main">
    <div class="modal fade popup-newsletter" id="popup-newsletter" tabindex="-1" role="dialog" >
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-image: url(images/media/index1/Popup.jpg);">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <div class="block-newletter">
            <div class="block-title">signup for our newsletter & promotions</div>
            <div class="block-content">
              <form>
                <label>on your next purchase</label>
                <div class="input-group">
                  <input type="text" placeholder="Enter your email..." class="form-control">
                  <span class="input-group-btn">
                  <button type="button" class="btn btn-subcribe"><span>Subscribe</span></button>
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
          <div class="block-nav-categori">
            <div class="block-title"> <span>Categories</span> </div>
            <div class="block-content">
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
                <li class="parent"> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat2.png') }}" alt="nav-cat"></span> Smartphone & Table </a> <span class="toggle-submenu"></span>
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
                <li class="parent"> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat3.png') }}" alt="nav-cat"></span> Television </a> <span class="toggle-submenu"></span>
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
                <li> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat4.png') }}" alt="nav-cat"></span> Shoes & Accessories </a> </li>
                <li> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat5.png') }}" alt="nav-cat"></span> Camera & Photo </a> </li>
                <li> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat6.png') }}" alt="nav-cat"></span> Watch & Jewellry </a> </li>
                <li> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat7.png') }}" alt="nav-cat"></span> Accessories </a> </li>
                <li> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat8.png') }}" alt="nav-cat"></span> Sport & Outdoors </a> </li>
                <li> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat9.png') }}" alt="nav-cat"></span> Computer & Networking </a> </li>
                <li> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat10.png') }}" alt="nav-cat"></span> Flashlights & Lamps </a> </li>
                <li> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat11.png') }}" alt="nav-cat"></span> Cameras & Photo </a> </li>
                <li class="cat-link-orther"> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat10.png') }}" alt="nav-cat"></span> Sport & Outdoors </a> </li>
                <li class="cat-link-orther"> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat9.png') }}" alt="nav-cat"></span> Watch & Jewellry </a> </li>
                <li class="cat-link-orther"> <a href=""> <span class="icon"><img src="{{ asset('frontend/images/icon/index1/nav-cat8.png') }}" alt="nav-cat"></span> Flashlights & Lamps </a> </li>
              </ul>
              <div class="view-all-categori"> <a  class="open-cate btn-view-all">All Categories</a> </div>
            </div>
          </div>
          <!-- start carusel slider -->
          <div class="block-slide-main slide-opt-2">
            <div class="owl-carousel " 
                  data-nav="true" 
                  data-dots="false" 
                  data-margin="0" 
                  data-items='1' 
                  data-autoplayTimeout="700" 
                  data-autoplay="true" 
                  data-loop="true">

                 <!--  @foreach(App\Slider::orderBy('id','desc')->take(2)->get() as $parent)
                <img src="{{ asset('uploads/slider/'.$parent->image) }}" alt="baner-floor" width="900px" height="450px">
                @endforeach -->
                 @foreach($sliders as $slider)
                <img src="{{ asset('uploads/slider/'.$slider->image) }}" alt="baner-floor" width="900px" height="450px">
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
                <li role="presentation" class="active"> <a href="#tabproduct1"  role="tab" data-toggle="tab">best SELLERS </a> </li>
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
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/sellers1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href="wish_list.html"><span>wishlist</span></a> <a class="btn btn-quickview" href="pro_det.html"><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                        <span class="product-item-label label-price">30% <span>off</span></span> </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="pro_det.html">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/sellers2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                        <span class="product-item-label label-new">New</span> </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/sellers3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/sellers2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/sellers3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
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
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/sellers1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/sellers2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/sellers3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/sellers2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/sellers3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/sellers1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/sellers2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/sellers3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/sellers2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/sellers3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
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
        </div>
      </div>
    </div>
    <div class="clearfix" style="background-color: #eeeeee;margin-bottom: 40px; padding-top:30px;">
      <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-1">
        <div class="container">
          <div class="block-title "> <span class="title">&nbsp; Fashion</span>
            <div class="links dropdown">
              <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bars" aria-hidden="true"></i> </button>
              <div class="dropdown-menu" >
                <ul  >
                  <li role="presentation" class="active"><a href="#floor1-1"  role="tab" data-toggle="tab">Best Seller </a></li>
                  <li role="presentation"><a href="#"  role="tab" data-toggle="tab">New Arrivals </a></li>

                  <!-- @foreach($subcategories as $subcategory)
                    <li role="presentation"><a href="#floor1-4"  role="tab" data-toggle="tab">{{ $subcategory->name }}</a></li>  
                  @endforeach -->

                  <!-- @foreach($subcategories as $subcategory)
                      <li class="filter" data-filter="#{{ $subcategory->slug }}">{{ $subcategory->name }}</li>
                  @endforeach -->

                  @foreach(App\SubCategory::orderBy('name','asc')->where('category_id',1)->get() as $parent)
                <li role="presentation"><a href="#floor1-4"  role="tab" data-toggle="tab">{{$parent->name}}</a></li>
                <!-- <li role="presentation"><a href="#floor1-4"  role="tab" data-toggle="tab">{{$parent->name}}</a></li> -->
                @endforeach




                  <!-- <li role="presentation"><a href="#floor1-4"  role="tab" data-toggle="tab">Women </a></li>
                  <li role="presentation"><a href="#floor1-5"  role="tab" data-toggle="tab">Men</a></li>
                  <li role="presentation"><a href="#floor1-6"  role="tab" data-toggle="tab">Kids </a></li>
                  <li role="presentation"><a href="#floor1-7"  role="tab" data-toggle="tab">Accessories</a></li> -->
                </ul>
              </div>
            </div>
            <div class="actions"> <a href="/">
              <div class="mor">MORE PRODUCT</div>
              </a> </div>
          </div>
          <div class="block-banner-floor">
            <div class="col-sm-6"> <a href="" class="box-img"><img src="{{ asset('frontend/images/media/index1/banner1-1.jpg') }}" alt="banner"></a> </div>
            <div class="col-sm-6"> <a href="" class="box-img"><img src="{{ asset('frontend/images/media/index1/banner1-2.jpg') }}" alt="banner"></a> </div>
          </div>
          <div class="block-content">
            
            <div class="col-banner">
             <span class="label-featured"><img src="{{ asset('frontend/images/icon/index1/label-featured.png') }}" alt="label-featured"></span>
              <a href="" class="box-img">


                @foreach(App\Category::orderBy('name','asc')->where('id',2)->get() as $parent)
                <img src="{{ asset('uploads/category/'.$parent->image)}}" alt="baner-floor" width="234" height="350">
                @endforeach
                
              </a> 
              
            </div>

            
            <!-- <div class="col-banner"> <span class="label-featured"><img src="{{ asset('frontend/images/icon/index1/label-featured.png') }}" alt="label-featured"></span> <a href="" class="box-img"><img src="{{ asset('frontend/images/media/index1/baner-floor1.jpg') }}" alt="baner-floor"></a> </div> -->
            <div class="col-products tab-content">
              <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
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
                  <!-- @foreach(App\Product::orderBy('id','asc')->where('category_id',1)->get() as $parent) -->
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="{{ asset('uploads/product/'.$parent->image)}}" width="186" height="266"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href=""></a></strong>
                      <!-- <div class="product-item-detail"> <strong class="product-item-name"><a href="">{{$parent->name}}</a></strong> -->
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; </span> </div>
                          <!-- <div class="product-item-price"> <span class="price">&#2547; {{$parent->price}}</span> </div> -->
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <!-- <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- @endforeach -->
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane  fade" id="floor1-2" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                        <span class="product-item-label label-price">30% <span>off</span></span> </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane  fade" id="floor1-3" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                        <span class="product-item-label label-price">30% <span>off</span></span> </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="tab-pane  fade" id="floor1-4" role="tabpanel"> -->
                @foreach($products as $product)
              <div class="tab-pane  fade" id="floor1-4" role="tabpanel">
              <!-- <div class="tab-pane  fade" id="{{ $product->category->slug}}" role="tabpanel"> -->
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
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="{{ asset('uploads/product/'.$parent->image)}}" width="186" height="266"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">{{$product->name}}</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; {{$product->price}}</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <!-- <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
   
                                @endforeach



                                   
                  <!-- <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                        <span class="product-item-label label-price">30% <span>off</span></span> </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor1-5" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                        <span class="product-item-label label-price">30% <span>off</span></span> </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane  fade" id="floor1-6" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                        <span class="product-item-label label-price">30% <span>off</span></span> </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane  fade" id="floor1-7" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                        <span class="product-item-label label-price">30% <span>off</span></span> </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
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
        </div>
      </div>
      <div class="block-floor-products block-floor-products-opt1 floor-products2" id="floor0-2">
        <div class="container">
          <div class="block-title"> <span class="title"> &nbsp;Sports</span>
            <div class="links dropdown">
              <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bars" aria-hidden="true"></i> </button>
              <div class="dropdown-menu" >
                <ul  >
                  <li role="presentation" class="active"><a href="#floor2-1"  role="tab" data-toggle="tab">Best Seller </a></li>
                  <li role="presentation"><a href="#floor2-3"  role="tab" data-toggle="tab">New Arrivals </a></li>
                  <li role="presentation"><a href="#floor2-4"  role="tab" data-toggle="tab">Tennis </a></li>
                  <li role="presentation"><a href="#floor2-5"  role="tab" data-toggle="tab">Football </a></li>
                  <li role="presentation"><a href="#floor2-6"  role="tab" data-toggle="tab">Swimming </a></li>
                  <li role="presentation"><a href="#floor2-7"  role="tab" data-toggle="tab">Climbing</a></li>
                </ul>
              </div>
            </div>
            <div class="actions"> <a href="/">
              <div class="mor">MORE PRODUCT</div>
              </a> </div>
          </div>
          <div class="block-banner-floor">
            <div class="col-sm-6"> <a href="" class="box-img"><img src="{{asset('frontend/images/media/index1/banner2-1.jpg')}}" alt="banner"></a> </div>
            <div class="col-sm-6"> <a href="" class="box-img"><img src="{{asset('frontend/images/media/index1/banner2-2.jpg')}}" alt="banner"></a> </div>
          </div>
          <div class="block-content">
            <!-- <div class="col-banner"> <span class="label-featured"><img src="images/icon/index1/label-featured.png" alt="label-featured"></span> <a href="" class="box-img"><img src="images/media/index1/baner-floor2.jpg" alt="baner-floor"></a> </div> -->
            <!-- <div class="col-banner"> <span class="label-featured"><img src="{{asset('images/icon/index1/label-featured.png')}}" alt="label-featured"></span> -->
             <a href="" class="box-img">
              <div class="col-banner"> <span class="label-featured"><img src="{{asset('frontend/images/icon/index1/label-featured.png')}}" alt="label-featured"></span>
              @foreach(App\Category::orderBy('name','asc')->where('id',5)->get() as $parent)
                <img src="{{ asset('uploads/category/'.$parent->image)}}" alt="baner-floor" width="234" height="350">
                @endforeach
              </a>
                <!-- <a href="" class="box-img">@foreach($categories as $key=>$category)
                <img src="{{ asset('uploads/category/'.$category->image)}}" alt="baner-floor">
                @endforeach</a> -->
              </div>
            <div class="col-products tab-content">
              <div class="tab-pane active in  fade " id="floor2-1" role="tabpanel">
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
                  @foreach(App\Product::orderBy('name','asc')->where('category_id',5)->get() as $parent)

                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="{{ asset('uploads/product/'.$parent->image)}}" width="186" height="266"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">{{$parent->name}}</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; {{$parent->price}}</span> 
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
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor2-2" role="tabpanel">
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
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor2-3" role="tabpanel">
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
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor2-4" role="tabpanel">
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
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor2-5" role="tabpanel">
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
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor2-6" role="tabpanel">
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
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor2-7" role="tabpanel">
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
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
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
        </div>
      </div>
      <div class="block-floor-products block-floor-products-opt1 floor-products3" id="floor0-3">
        <div class="container">
          <div class="block-title "> <span class="title"> &nbsp; electronic</span>
            <div class="links dropdown">
              <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bars" aria-hidden="true"></i> </button>
              <div class="dropdown-menu" >
                <ul  >
                  <li role="presentation" class="active"><a href="#floor3-1"  role="tab" data-toggle="tab">Most Viewed </a></li>
                  <li role="presentation"><a href="#floor3-2"  role="tab" data-toggle="tab">Television </a></li>
                  <li role="presentation"><a href="#floor3-3"  role="tab" data-toggle="tab">Air Conditional</a></li>
                  <li role="presentation"><a href="#floor3-4"  role="tab" data-toggle="tab">ARM </a></li>
                  <li role="presentation"><a href="#floor3-5"  role="tab" data-toggle="tab"> Theater </a></li>
                  <li role="presentation"><a href="#floor3-6"  role="tab" data-toggle="tab">Accessories </a></li>
                </ul>
              </div>
            </div>
            <div class="actions"> <a href="/">
              <div class="mor">MORE PRODUCT</div>
              </a> </div>
          </div>
          <div class="block-banner-floor">
            <div class="col-sm-6"> <a href="" class="box-img"><img src="{{asset('frontend/images/media/index1/banner3-1.jpg')}}" alt="banner"></a> </div>
            <div class="col-sm-6"> <a href="" class="box-img"><img src="{{asset('frontend/images/media/index1/banner3-2.jpg')}}" alt="banner"></a> </div>
          </div>
          <div class="block-content">
            <a href="" class="box-img">
              <div class="col-banner"> <span class="label-featured"><img src="frontend/images/icon/index1/label-featured.png" alt="label-featured"></span> 
              @foreach(App\Category::orderBy('name','asc')->where('id',6)->get() as $parent)
                <img src="{{ asset('uploads/category/'.$parent->image)}}" alt="baner-floor" width="234" height="350">
                @endforeach
              </a>
              <!-- <a href="" class="box-img"><img src="images/media/index1/baner-floor3.jpg" alt="baner-floor"></a>  -->

            </div>
            <div class="col-products tab-content">
              <div class="tab-pane active in  fade " id="floor3-1" role="tabpanel">
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
                  @foreach(App\Product::orderBy('name','asc')->where('category_id',6)->get() as $parent)

                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="{{ asset('uploads/product/'.$parent->image)}}" width="186" height="266"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">{{$parent->name}}</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; {{$parent->price}}</span> 
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor3-2" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor3-3" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor3-4" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor3-5" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor3-6" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
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
        </div>
      </div>
      <div class="block-floor-products block-floor-products-opt1 floor-products4" id="floor0-4">
        <div class="container">
          <div class="block-title "> <span class="title"> &nbsp; Digital</span>
            <div class="links dropdown">
              <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bars" aria-hidden="true"></i> </button>
              <div class="dropdown-menu" >
                <ul  >
                  <li role="presentation" class="active"><a href="#floor4-1"  role="tab" data-toggle="tab">Best Seller </a></li>
                  <li role="presentation"><a href="#floor4-3"  role="tab" data-toggle="tab">New Arrivals </a></li>
                  <li role="presentation"><a href="#floor4-4"  role="tab" data-toggle="tab"> Mobile </a></li>
                  <li role="presentation"><a href="#floor4-5"  role="tab" data-toggle="tab"> Camera </a></li>
                  <li role="presentation"><a href="#floor4-6"  role="tab" data-toggle="tab">Laptop </a></li>
                  <li role="presentation"><a href="#floor4-7"  role="tab" data-toggle="tab">Notebook</a></li>
                </ul>
              </div>
            </div>
            <div class="actions"> <a href="/">
              <div class="mor">MORE PRODUCT</div>
              </a> </div>
          </div>
          <div class="block-banner-floor">
            <div class="col-sm-6"> <a href="" class="box-img"><img src="{{asset('frontend/images/media/index1/banner4-1.jpg')}}" alt="banner"></a> </div>
            <div class="col-sm-6"> <a href="" class="box-img"><img src="{{asset('frontend/images/media/index1/banner4-2.jpg')}}" alt="banner"></a> </div>
          </div>
          <div class="block-content">
            <a href="" class="box-img">
              <div class="col-banner"> <span class="label-featured"><img src="frontend/images/icon/index1/label-featured.png" alt="label-featured"></span> 
              @foreach(App\Category::orderBy('name','asc')->where('id',7)->get() as $parent)
                <img src="{{ asset('uploads/category/'.$parent->image)}}" alt="baner-floor" width="234" height="350">
                @endforeach
              </a>
             </div>


            <div class="col-products tab-content">
              <div class="tab-pane active in  fade " id="floor4-1" role="tabpanel">
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
                  @foreach(App\Product::orderBy('name','asc')->where('category_id',7)->get() as $parent)

                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="{{ asset('uploads/product/'.$parent->image)}}" width="186" height="266"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">{{$parent->name}}</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; {{$parent->price}}</span> 
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor4-2" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor4-3" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor4-4" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor4-5" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor4-6" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor4-7" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
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
        </div>
      </div>
      <div class="block-floor-products block-floor-products-opt1 floor-products5" id="floor0-5">
        <div class="container">
          <div class="block-title "> <span class="title">&nbsp; furniture</span>
            <div class="links dropdown">
              <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bars" aria-hidden="true"></i> </button>
              <div class="dropdown-menu" >
                <ul  >
                  <li role="presentation" class="active"><a href="#floor5-1"  role="tab" data-toggle="tab">Best Seller </a></li>
                  <li role="presentation"><a href="#floor5-2"  role="tab" data-toggle="tab">Most Viewed </a></li>
                  <li role="presentation"><a href="#floor5-3"  role="tab" data-toggle="tab">Television </a></li>
                  <li role="presentation"><a href="#floor5-4"  role="tab" data-toggle="tab">Air Conditional </a></li>
                  <li role="presentation"><a href="#floor5-5"  role="tab" data-toggle="tab"> ARM</a></li>
                  <li role="presentation"><a href="#floor5-6"  role="tab" data-toggle="tab"> Theater </a></li>
                  <li role="presentation"><a href="#floor5-7"  role="tab" data-toggle="tab">Accessories</a></li>
                </ul>
              </div>
            </div>
            <div class="actions"> <a href="/">
              <div class="mor">MORE PRODUCT</div>
              </a> </div>
          </div>
          <div class="block-banner-floor">
            <div class="col-sm-6"> <a href="" class="box-img"><img src="{{asset('frontend/images/media/index1/banner5-1.jpg')}}" alt="banner"></a> </div>
            <div class="col-sm-6"> <a href="" class="box-img"><img src="{{asset('frontend/images/media/index1/banner5-2.jpg')}}" alt="banner"></a> </div>
          </div>
          <div class="block-content">
            <a href="" class="box-img">
              <div class="col-banner"> <span class="label-featured"><img src="frontend/images/icon/index1/label-featured.png" alt="label-featured"></span> 
              @foreach(App\Category::orderBy('name','asc')->where('id',8)->get() as $parent)
                <img src="{{ asset('uploads/category/'.$parent->image)}}" alt="baner-floor" width="234" height="350">
                @endforeach
              </a>
          </div>
            <div class="col-products tab-content">
              <div class="tab-pane active in  fade " id="floor5-1" role="tabpanel">
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
                  @foreach(App\Product::orderBy('name','asc')->where('category_id',8)->get() as $parent)

                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="{{ asset('uploads/product/'.$parent->image)}}" width="186" height="266"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">{{$parent->name}}</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; {{$parent->price}}</span> 
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris </a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor5-2" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris </a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor5-3" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris </a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor5-4" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris </a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor5-5" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris </a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor5-6" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris </a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor5-7" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris </a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
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
        </div>
      </div>
      <div class="block-floor-products block-floor-products-opt1 floor-products6" id="floor0-6">
        <div class="container">
          <div class="block-title "> <span class="title"> &nbsp; jewelry</span>
            <div class="links dropdown">
              <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bars" aria-hidden="true"></i> </button>
              <div class="dropdown-menu" >
                <ul  >
                  <li role="presentation" class="active"><a href="#floor6-1"  role="tab" data-toggle="tab">Best Seller </a></li>
                  <li role="presentation"><a href="#floor6-3"  role="tab" data-toggle="tab">New Arrivals</a></li>
                  <li role="presentation"><a href="#floor6-4"  role="tab" data-toggle="tab">AMobile </a></li>
                  <li role="presentation"><a href="#floor6-5"  role="tab" data-toggle="tab"> Camera </a></li>
                  <li role="presentation"><a href="#floor6-6"  role="tab" data-toggle="tab"> Laptop </a></li>
                  <li role="presentation"><a href="#floor6-7"  role="tab" data-toggle="tab">Notebook</a></li>
                </ul>
              </div>
            </div>
            <div class="actions"> <a href="/">
              <div class="mor">MORE PRODUCT</div>
              </a> </div>
          </div>
          <div class="block-banner-floor">
            <div class="col-sm-6"> <a href="" class="box-img"><img src="{{asset('frontend/images/media/index1/banner6-1.jpg')}}" alt="banner"></a> </div>
            <div class="col-sm-6"> <a href="" class="box-img"><img src="{{asset('frontend/images/media/index1/banner6-2.jpg')}}" alt="banner"></a> </div>
          </div>
          <div class="block-content">
            <a href="" class="box-img">
              <div class="col-banner"> <span class="label-featured"><img src="frontend/images/icon/index1/label-featured.png" alt="label-featured"></span> 
              @foreach(App\Category::orderBy('name','asc')->where('id',9)->get() as $parent)
                <img src="{{ asset('uploads/category/'.$parent->image)}}" alt="baner-floor" width="234" height="350">
                @endforeach
              </a>
          </div>
            <div class="col-products tab-content">
              <div class="tab-pane active in  fade " id="floor6-1" role="tabpanel">
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
                  
                  @foreach(App\Product::orderBy('name','asc')->where('category_id',9)->get() as $parent)

                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="{{ asset('uploads/product/'.$parent->image)}}" width="186" height="266"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">{{$parent->name}}</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; {{$parent->price}}</span> 
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
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor6-2" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor6-3" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor6-4" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor6-5" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor6-6" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="floor6-7" role="tabpanel">
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
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-1.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-2.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                          <div class="product-reviews-summary">
                            <div class="rating-summary">
                              <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
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
        </div>
      </div>
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
            <li  class="active" data-tab="brand1-1"> <img src="images/media/index1/brand-nav1.png" alt="img"> </li>
            <li   data-tab="brand1-2"> <img src="images/media/index1/brand-nav2.png" alt="img"> </li>
            <li   data-tab="brand1-3"> <img src="images/media/index1/brand-nav3.png" alt="img"> </li>
            <li   data-tab="brand1-4"> <img src="images/media/index1/brand-nav4.png" alt="img"> </li>
            <li  data-tab="brand1-5"> <img src="images/media/index1/brand-nav5.png" alt="img"> </li>
            <li   data-tab="brand1-6"> <img src="images/media/index1/brand-nav6.png" alt="img"> </li>
            <li   data-tab="brand1-7"> <img src="images/media/index1/brand-nav7.png" alt="img"> </li>
            <li   data-tab="brand1-8"> <img src="images/media/index1/brand-nav8.png" alt="img"> </li>
            <li data-tab="brand1-9"> <img src="images/media/index1/brand-nav1.png" alt="img"> </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active  " role="tabpanel" id="brand1-1">
              <div class="row">
                <div class="col-md-4">
                  <div class="col-title"> <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                    <div class="des"> Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection. </div>
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
                      <div class="item">
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase1.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase2.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase3.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase4.jpg"></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase3.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase4.jpg"></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
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
              </div>
            </div>
            <div class="tab-pane " role="tabpanel" id="brand1-2">
              <div class="row">
                <div class="col-md-4">
                  <div class="col-title"> <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                    <div class="des"> Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection. </div>
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
                      <div class="item">
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase1.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase2.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase3.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase4.jpg"></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
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
              </div>
            </div>
            <div class="tab-pane  " role="tabpanel" id="brand1-3">
              <div class="row">
                <div class="col-md-4">
                  <div class="col-title"> <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                    <div class="des"> Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection. </div>
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
                      <div class="item">
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase1.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase2.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase3.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase4.jpg"></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
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
              </div>
            </div>
            <div class="tab-pane  " role="tabpanel" id="brand1-4">
              <div class="row">
                <div class="col-md-4">
                  <div class="col-title"> <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                    <div class="des"> Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection. </div>
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
                      <div class="item">
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase1.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase2.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase3.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase4.jpg"></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
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
              </div>
            </div>
            <div class="tab-pane  " role="tabpanel" id="brand1-5">
              <div class="row">
                <div class="col-md-4">
                  <div class="col-title"> <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                    <div class="des"> Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection. </div>
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
                      <div class="item">
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase1.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase2.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase3.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase4.jpg"></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
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
              </div>
            </div>
            <div class="tab-pane  " role="tabpanel" id="brand1-6">
              <div class="row">
                <div class="col-md-4">
                  <div class="col-title"> <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                    <div class="des"> Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection. </div>
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
                      <div class="item">
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase1.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase2.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase3.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase4.jpg"></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
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
              </div>
            </div>
            <div class="tab-pane  " role="tabpanel" id="brand1-7">
              <div class="row">
                <div class="col-md-4">
                  <div class="col-title"> <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                    <div class="des"> Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection. </div>
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
                      <div class="item">
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase1.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase2.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase3.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase4.jpg"></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
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
              </div>
            </div>
            <div class="tab-pane  " role="tabpanel" id="brand1-8">
              <div class="row">
                <div class="col-md-4">
                  <div class="col-title"> <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                    <div class="des"> Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection. </div>
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
                      <div class="item">
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase1.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase2.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase3.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase4.jpg"></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
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
              </div>
            </div>
            <div class="tab-pane  " role="tabpanel" id="brand1-9">
              <div class="row">
                <div class="col-md-4">
                  <div class="col-title"> <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                    <div class="des"> Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection. </div>
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
                      <div class="item">
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase1.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase2.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase3.jpg" ></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> <span class="old-price">&#2547; 52.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item  product-item-opt-1 ">
                          <div class="product-item-info">
                            <div class="product-item-photo"> <a class="product-item-img" href=""><img alt="product name" src="images/media/index1/showcase4.jpg"></a> </div>
                            <div class="product-item-detail"> <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                              <div class="clearfix">
                                <div class="product-item-price"> <span class="price">&#2547; 45.00</span> </div>
                                <div class="product-reviews-summary">
                                  <div class="rating-summary">
                                    <div title="80%" class="rating-result"> <span style="width:80%"> <span><span>80</span>% of <span>100</span></span> </span> </div>
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
            <div class="col-md-3 col-sm-6">
              <div class="item">
                <div class="description" style="background-image: url(images/media/index1/hot-categories1.png)">
                  <div class="title"><span>Electronics</span></div>
                  <a href="" class="btn">shop now</a> </div>
                <ul>
                  <li><a href="">Batteries & Chargers</a></li>
                  <li><a href="">Headphone, Headset</a></li>
                  <li><a href="">Home Audio</a></li>
                  <li><a href="">Mp3 Player Accessories</a></li>
                </ul>
              </div>
              <div class="item">
                <div class="description" style="background-image: url(images/media/index1/hot-categories2.png)">
                  <div class="title"><span>Jewelry & <br>
                    Watches</span></div>
                  <a href="" class="btn">shop now</a> </div>
                <ul>
                  <li><a href="">Men Watches</a></li>
                  <li><a href="">Wedding Rings</a></li>
                  <li><a href="">Earring</a></li>
                  <li><a href="">Necklaces</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="item">
                <div class="description" style="background-image: url(images/media/index1/hot-categories3.png)">
                  <div class="title"><span>Sport & <br>
                    Outdoors</span></div>
                  <a href="" class="btn">shop now</a> </div>
                <ul>
                  <li><a href="">Golf Supplies</a></li>
                  <li><a href="">Outdoor & Traveling Supplies</a></li>
                  <li><a href="">Camping & Hiking</a></li>
                  <li><a href="">Fishing</a></li>
                </ul>
              </div>
              <div class="item">
                <div class="description" style="background-image: url(images/media/index1/hot-categories4.png)">
                  <div class="title"><span>Digital</span></div>
                  <a href="" class="btn">shop now</a> </div>
                <ul>
                  <li><a href="">Accessories for iPhone</a></li>
                  <li><a href="">Accessories for iPad</a></li>
                  <li><a href="">Accessories for Tablet PC</a></li>
                  <li><a href="">Tablet PC</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="item">
                <div class="description" style="background-image: url(images/media/index1/hot-categories5.png)">
                  <div class="title"><span>Fashion</span></div>
                  <a href="" class="btn">shop now</a> </div>
                <ul>
                  <li><a href="">Batteries & Chargers</a></li>
                  <li><a href="">Headphone, Headset</a></li>
                  <li><a href="">Home Audio</a></li>
                  <li><a href="">Mp3 Player Accessories</a></li>
                </ul>
              </div>
              <div class="item">
                <div class="description" style="background-image: url(images/media/index1/hot-categories6.png)">
                  <div class="title"><span>Furniture</span></div>
                  <a href="" class="btn">shop now</a> </div>
                <ul>
                  <li><a href="">Batteries & Chargers </a></li>
                  <li><a href="">Headphone, Headset</a></li>
                  <li><a href="">Home Audio</a></li>
                  <li><a href="">Mp3 Player Accessories</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="item">
                <div class="description" style="background-image: url(images/media/index1/hot-categories7.png)">
                  <div class="title"><span>Health & <br>
                    Beauty</span></div>
                  <a href="" class="btn">shop now</a> </div>
                <ul>
                  <li><a href="">Bath & Body</a></li>
                  <li><a href="">Shaving & Hair Removal</a></li>
                  <li><a href="">Fragrances</a></li>
                  <li><a href="">Salon & Spa Equipment</a></li>
                </ul>
              </div>
              <div class="item">
                <div class="description" style="background-image: url(images/media/index1/hot-categories8.png)">
                  <div class="title"><span>Toys & <br>
                    Hobbies</span></div>
                  <a href="" class="btn">shop now</a> </div>
                <ul>
                  <li><a href="">Walkera</a></li>
                  <li><a href="">Fpv System & Parts</a></li>
                  <li><a href="">RC Cars & Parts</a></li>
                  <li><a href="">Helicopters & Part</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
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