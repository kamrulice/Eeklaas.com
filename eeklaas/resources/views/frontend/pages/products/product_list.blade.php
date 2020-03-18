@foreach($subcategory_product as $parent)               
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
                  @endforeach