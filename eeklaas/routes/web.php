<?php
if (version_compare(PHP_VERSION, '7.2.0', '>=')) {

    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// register email

// Route::get('verifyemailfirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');

Auth::routes(['verify' => true]);

// frontend View
Route::get('/','HomeController@index')->name('welcome');
Route::get('/product/{id}','HomeController@show')->name('products.show');
Route::post('/product/rating','HomeController@productRating')->name('rating.product');
Route::get('/product_show/{id}','HomeController@product_show')->name('product_show');
Route::get('/list/{id}','HomeController@list');
Route::get('/products','ProductsController@index')->name('products');
Route::get('/all-product/{id}','ProductsController@all')->name('all-product');
Route::get('/search','HomeController@search')->name('search');

Route::get('/best-sale','HomeController@best_sale')->name('best-sale');

Route::get('subCategory/show{id}','ProductsController@subCategory')->name('subCategory.show');

// cart

Route::group(['prefix' => 'carts'], function() {
    Route::get('/', 'CartsController@index')->name('carts');
    Route::post('/store', 'CartsController@store')->name('carts.store');
    Route::post('/update/{id}', 'CartsController@update')->name('carts.update');
    Route::post('/delete/{id}', 'CartsController@destroy')->name('carts.delete');
});


// wishlist

Route::group(['prefix' => 'wishlists','middleware'=>['user','auth']], function() {
    Route::get('/', 'WishlistsController@index')->name('wishlists');
    Route::post('/store', 'WishlistsController@store')->name('wishlists.store');
    Route::post('/update/{id}', 'WishlistsController@update')->name('wishlists.update');
    Route::post('/delete/{id}', 'WishlistsController@destroy')->name('wishlists.delete');
});

// checkouts

Route::group(['prefix' => 'checkouts'], function() {
    Route::get('/', 'CheckoutsController@index')->name('checkouts');
    Route::post('/store', 'CheckoutsController@store')->name('checkouts.store');
});

// payment

Route::group(['prefix' => 'payments'], function() {
    Route::get('/', 'PaymentsController@index')->name('payments');
    Route::post('/store', 'CheckoutsController@store')->name('checkouts.store');
});










 // for user update, dashboard etc
Route::group(['prefix' => 'user','middleware'=>['user','auth'] ], function() {
  Route::get('/dashboard','UsersController@dashboard')->name('user.dashboard');
  Route::get('/account','UsersController@account')->name('user.account');
  Route::post('/account/update', 'UsersController@updateaccount')->name('account-update');
  Route::get('/order','UsersController@order')->name('user.order');
  Route::get('/order_status','UsersController@order_status')->name('user.order_status');
  Route::post('/order/update', 'UsersController@updateorder')->name('order-update');
  Route::get('/address','UsersController@address')->name('user.address');
  Route::post('/address/update','UsersController@updateaddress')->name('address-update');
  Route::get('/track','UsersController@track')->name('user.track');
  Route::post('/confirm/order','UsersController@confirmOder')->name('confirm.order');
  Route::get('/view/confirm/order','UsersController@viewOrder')->name('view.order');
  Route::post('/submit/order','UsersController@store')->name('order.confirm');
  Route::get('/order/invoice','UsersController@invoice')->name('order.invoice');
  Route::post('/user/order/delete/{id}','UsersController@delete')->name('user-order-delete');

  Route::get('/user/order/view/{id}','UsersController@viewOrder')->name('user.order.view');

  // generate Invoice

  Route::get('/invoice/{id}', 'UsersController@generateUserInvoice')->name('invoice');

  });


Route::post('/reservation','ReservationController@reserve')->name('reservation.reserve');
Route::post('/contact','ContactController@sendMessage')->name('contact.send');



// login option
Route::get('login/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\RegisterController@handleProviderCallback');




// user route

Route::group(['prefix' => 'user'], function(){
  Route::get('/token/{token}','VerificationController@verify')->name('verification');
    Route::get('/dashboard','UsersController@dashboard')->name('user.dashboard');
});

Auth::routes();

// Admin Panel

  Route::group(['prefix'=>'admin','middleware'=>['auth','admin'],'namespace'=>'admin'],function(){

  Route::get('dashboard','DashboardController@index')->name('admin.dashboard');
  Route::resource('slider','SliderController');
  Route::resource('about','AboutController');
  Route::resource('enjoy','EnjoyController');
  Route::resource('bfast','BfastController');
  Route::resource('brand','BrandController');
  Route::resource('banner','BannerController');
  Route::resource('fslider','FsliderController');
  Route::resource('category','CategoryController');
  Route::resource('subcategory','SubCategoryController');
  Route::resource('product','ProductController');
  Route::get('reservation','ReservationController@index')->name('reservation.index');
  Route::post('reservation/{id}','ReservationController@status')->name('reservation.status');
  Route::delete('reservation/{id}','ReservationController@destory')->name('reservation.destory');

  Route:: get('contact','ContactController@index')->name('contact.index');
  Route:: get('contact/{id}','ContactController@show')->name('contact.show');
  Route:: delete('contact/{id}','ContactController@destroy')->name('contact.destroy');

  //Email

  Route::get('/email/content','EmailController@EmailShow')->name('email.content');
  Route::get('/email/edit/{id}','EmailController@emailEdit')->name('email.edit');
  Route::post('/email/update/','EmailController@updateEmail')->name('email.update');
  Route::get('/email/delete/{id}','EmailController@deleteEmail')->name('email.delete');


// Admin control

      Route::get('/admin/users','AdminController@admin')->name('admin.users');
      Route::get('/admin/create','AdminController@adminCreate')->name('admin.create');
      Route::post('/admin/store','AdminController@adminStore')->name('admin.store');
      Route::get('/admin/active/{id}','AdminController@active')->name('admin.active');
      Route::get('/admin/edit/{id}','AdminController@adminEdit')->name('admin.edit');
      Route::post('/admin/update/','AdminController@adminUpdate')->name('admin.update');
      Route::get('/admin/delete/{id}','AdminController@adminDelete')->name('admin.delete');

  /**
   * Orders Routes For Adminpanel
   */

  Route::get('/', 'OrdersController@index')->name('order.index');
  Route::post('/update/quantity/{id}', 'OrdersController@update')->name('update.customer');
  Route::get('/view/{id}', 'OrdersController@show')->name('orders-show');
  Route::post('/delete/{id}', 'OrdersController@delete')->name('order-delete');
  Route::get('/invoice/{id}', 'OrdersController@generateInvoice')->name('adminOrder.invoice');


  Route::get('/completed/{id}', 'OrdersController@completed')->name('order-completed');
  Route::post('/paid/{id}', 'OrdersController@paid')->name('order-paid');
  Route::post('/charge-update/{id}', 'OrdersController@chargeUpdate')->name('order-charge');
   


  // Seller controll
      Route::get('/seller/content','AdminController@allSeller')->name('seller.content');
      Route::get('/seller/active/{id}/','AdminController@sellerActive')->name('seller.active');
      Route::get('/seller/delete/{id}/','AdminController@sellerDelete')->name('seller.delete');
      Route::get('/seller/details/{id}/','AdminController@sellerDetails')->name('sellers.details');
      Route::get('/seller/products/{id}/','AdminController@sellerProduct')->name('seller.products');
      Route::get('/seller/orderStatus/{id}','AdminController@sellerOrder')->name('seller.orderStatus');
      Route::get('/dropImage','AdminController@productImage')->name('products.image');
      Route::post('/productImage','AdminController@productImageUpload')->name('admin.image.upload');


    // Inventory Controller
      Route::get('/inventory/index','AdminController@inventory')->name('inventory.index');
      Route::get('/stockIn/create','AdminController@stockIn')->name('stockIn.create');
      Route::get('/stockOut/create','AdminController@stockOut')->name('stockOut.create');
      Route::get('/shipping/orders/{id}','AdminController@shipping')->name('shipping.orders');
      Route::post('/add/quantity/','AdminController@addQuantity')->name('add.quantity');
      Route::post('/add/discount/','AdminController@addDiscount')->name('add.discount');

      Route::get('/delivery/complete/{id}','AdminController@complete')->name('delivery.complete');
      Route::get('/stock/invoice/','AdminController@stockInvoice')->name('invoice.create');
      Route::get('/stockOut/invoice','AdminController@stockOutInvoice')->name('invoice.stockOut');
      Route::get('/sales/invoice','AdminController@salesInvoice')->name('sales.invoice');
      Route::get('/product/published/{id}','AdminController@publishedProduct')->name('product.published');

      // Sales Info

      Route::get('/sales/report','AdminController@Sales')->name('sales.index');
      Route::get('/sellers/productSales/{id}','AdminController@sellerSales')->name('sellers.productSales');
      Route::get('seller/sales/invoice/','AdminController@sellerSalesInvoice')->name('seller.sales.invoice');



});


  // Ajax API Sub category

  Route::get('/get-subcat-content/{id}', 'HomeController@getsubcatContent');
  Route::get('/get-brand-content/{id}', 'HomeController@getbrand');



  // Ajax API Routs
//Route::get('get-subcategory/{id}', function($id) {
//    return json_encode(App\SubCategory::where('category_id', $id)->get());
//});
//
//// Ajax API Routs
//Route::get('get-product/{id}', function($id) {
//    return json_encode(App\product::where('sub_category_id', $id)->get());
//});


// News Letter
Route::post('/newsletter/email','HomeController@send')->name('newsletter.email');


// vendor panel

Route::group(['middleware'=>'seller'],function(){

    Route::get('/seller/register','SellerController@sellerRegister')->name('seller.register');
    Route::post('/seller/store','SellerController@store')->name('seller.save');
    Route::get('/seller/login','SellerController@loginForm')->name('seller.login');
    Route::post('/seller/save','SellerController@Sellerstore')->name('seller.store');

// Seller Dashboard

    Route::get('/seller/dashboard','SellerController@sellerDashboard')->name('seller.dashboard');
    Route::post('/seller/info','SellerController@sellerinfo')->name('seller.info');
    Route::get('/seller/product','SellerController@product')->name('seller.productAdd');
    Route::post('/seller/productStore','SellerController@productStore')->name('seller.productStore');
    Route::get('/dropzone/image','SellerController@productImageUpload')->name('upload.product');
    Route::post('/image/upload','SellerController@productImage')->name('image.upload');
    Route::get('/sellerAll/product','SellerController@allProductShow')->name('sellerAll.product');
    Route::get('/seller/details','SellerController@sellerDetails')->name('seller.details');
    Route::get('/rejects/product','SellerController@rejectsProduct')->name('rejects.product');
    Route::get('/reject/delete/{id}','SellerController@rejectsDelete')->name('reject.delete');
    Route::get('/expire/product','SellerController@expiryProduct')->name('expire.product');
    Route::get('/expiry/product/invoice','SellerController@expiryProductInvoice')->name('expiry.product.invoice');
    Route::get('/seller/advertise','SellerController@sellerAdvertise')->name('seller.advertise');
    Route::post('/seller/banner','SellerController@bannerSave')->name('banner.save');
    Route::get('/seller/allBanner','SellerController@allBanner')->name('all.banner');
    Route::get('/seller/delete/{id}','SellerController@bannerDelete')->name('seller.banner.delete');
    Route::get('/seller/bannerEdit/{id}','SellerController@bannerEdit')->name('seller.banner.edit');
    Route::get('/seller/bannerShow/{id}','SellerController@bannerShow')->name('seller.banner.show');
    Route::post('/seller/bannerUpdate/','SellerController@bannerstore')->name('seller.banner.update');

// Seller Product info

    Route::get('/sellerProduct/edit/{id}','SellerProductController@sellerProductEdit')->name('sellerProduct.edit');
    Route::get('/sellerProduct/view/{id}','SellerProductController@sellerProductView')->name('sellerProduct.view');
    Route::post('/seller/productUpdate','SellerProductController@sellerProductUpdate')->name('seller.productUpdate');
    Route::post('/sellerProduct/delete/{id}','SellerProductController@sellerProductDelete')->name('sellerProduct.delete');
    Route::post('/seller/Addquantity/','SellerProductController@sellerAddQuantity')->name('seller.Addquantity');
    Route::post('/seller/AddDiscount','SellerProductController@sellerAddDiscount')->name('seller.AddDiscount');
    Route::get('/sellerOrder/product','SellerProductController@sellerOrderProduct')->name('sellerOrder.product');
    Route::get('/seller/productStock','SellerProductController@sellerProductStock')->name('seller.productStock');
    Route::get('/seller/productStockOut','SellerProductController@sellerProductStockOut')->name('seller.productStockOut');
    Route::get('/seller/productReports','SellerProductController@sellerProductReports')->name('seller.productReports');
    Route::get('/seller/product/invoice','SellerProductController@sellerProductInvoice')->name('seller.product.invoice');
    Route::get('/seller/stock/invoice','SellerProductController@sellerStockInvoice')->name('seller.stock.invoice');
    Route::get('/seller/stockOut/invoice','SellerProductController@sellerStockOutInvoice')->name('seller.stockOut.invoice');
    Route::get('/seller/transactions','SellerProductController@sellerTransaction')->name('seller.transactions');
  
    Route::get('/seller/order/view/{id}','SellerProductController@sellerOrder')->name('seller.order.view');
});


// sms verification

Route::get('/seller/verify','SellerVerifyController@getVerify')->name('seller.verify');
Route::post('/seller/verify','SellerVerifyController@postVerify')->name('seller.check');

Route::get('facebook', function () {
    return view('facebook');
});

Route::get ( '/login/facebook', 'SocialAuthController@redirect' )->name('redirect.facebook');
Route::get ( '/callback/facebook', 'SocialAuthController@callback' );


Route::get ( '/redirect/google', 'SocialAuthController@redirectToGoogle' )->name('redirect.google');
Route::get ( '/callback/google', 'SocialAuthController@handleGoogleCallback' );
