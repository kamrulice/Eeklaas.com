@extends('frontend.layouts.master')


@section('content')

<!-- start main-site -->

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
                  @foreach($sliders as $key=>$slider)
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
                  <li role="presentation"><a href="#floor1-3"  role="tab" data-toggle="tab">New Arrivals </a></li>
                  @foreach(App\SubCategory::orderBy('name','asc')->where('category_id',1)->get() as $parent)
                <li role="presentation"><a href="#{{ $parent->slug }}"  role="tab" data-toggle="tab">{{$parent->name}}</a></li>

                <!-- @foreach($subcategories as $subcategory)
                      <li class="filter" data-filter="#{{ $subcategory->slug }}">{{ $subcategory->name }}</li>
                  @endforeach -->
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

                @foreach(App\Category::orderBy('name','asc')->where('id',1)->get() as $parent)
                <img src="{{ asset('uploads/category/'.$parent->image)}}" alt="baner-floor" width="234" height="350">
                @endforeach
                <!-- @foreach($categories as $key=>$category)
                <img src="{{ asset('uploads/category/'.$category->image)}}" alt="baner-floor">
                @endforeach -->
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
                  @foreach(App\Product::orderBy('id','asc')->where('category_id',1)->get() as $parent)
                  <div class="product-item  product-item-opt-1 ">
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href="{{ route('products.show',$parent->id)}}"><img alt="product name" src="{{ asset('uploads/product/'.$parent->image)}}" width="186" height="266"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="{{ route('products.show',$parent->id)}}">{{$parent->name}}</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; {{$parent->price}}</span> </div>
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
               @foreach($products as $parent)

              <div class="tab-pane  fade" id="{{ $parent->slug }}"  role="tabpanel">
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
                                    
                  <div class=" product-item  product-item-opt-1" >
                    <div class="product-item-info">
                      <div class="product-item-photo"> <a class="product-item-img" href="{{ route('products.show',$parent->id)}}"><img alt="product name" src="{{ asset('uploads/product/'.$parent->image)}}"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                        <span class="product-item-label label-price">30% <span>off</span></span> </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="{{ route('products.show',$parent->id)}}">{{$parent->name}}</a></strong>
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
              @endforeach
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
                      <div class="product-item-photo"> <a class="product-item-img" href="{{ route('products.show',$parent->id)}}"><img alt="product name" src="{{ asset('uploads/product/'.$parent->image)}}" width="186" height="266"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="{{ route('products.show',$parent->id)}}">{{$parent->name}}</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; {{$parent->price}}</span> </div>
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
                      <div class="product-item-photo"> <a class="product-item-img" href="{{ route('products.show',$parent->id)}}"><img alt="product name" src="{{ asset('uploads/product/'.$parent->image)}}" width="186" height="266"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="{{ route('products.show',$parent->id)}}">{{$parent->name}}</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; {{$parent->price}}</span> </div>
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
                      <div class="product-item-photo"> <a class="product-item-img" href="{{ route('products.show',$parent->id)}}"><img alt="product name" src="{{ asset('uploads/product/'.$parent->image)}}" width="186" height="266"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="{{ route('products.show',$parent->id)}}">{{$parent->name}}</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; {{$parent->price}}</span> </div>
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
                      <div class="product-item-photo"> <a class="product-item-img" href="{{ route('products.show',$parent->id)}}"><img alt="product name" src="{{ asset('uploads/product/'.$parent->image)}}" width="186" height="266"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="{{ route('products.show',$parent->id)}}">{{$parent->name}}</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; {{$parent->price}}</span> </div>
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
                      <div class="product-item-photo"> <a class="product-item-img" href="{{ route('products.show',$parent->id)}}"><img alt="product name" src="{{ asset('uploads/product/'.$parent->image)}}" width="186" height="266"></a>
                        <div class="product-item-actions"> <a class="btn btn-wishlist" href=""><span>wishlist</span></a> <a class="btn btn-quickview" href=""><span>quickview</span></a> </div>
                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <div class="product-item-detail"> <strong class="product-item-name"><a href="{{ route('products.show',$parent->id)}}">{{$parent->name}}</a></strong>
                        <div class="clearfix">
                          <div class="product-item-price"> <span class="price">&#2547; {{$parent->price}}</span> </div>
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

<!-- end main-site -->

@endsection

