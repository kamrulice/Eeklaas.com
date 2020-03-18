<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('backend/img/sidebar-1.jpg')}}">
<div class="logo">
  <a href="{{route('admin.dashboard')}}" class="simple-text logo-normal">
    EEKLAAS
  </a>
</div>
<div class="sidebar-wrapper">

  @if (Route::has('login'))

    @auth
    <!-- <a href="{{ url('/') }}">Home</a> -->
    @if(Auth::user() && Auth::user()->isAdmin  == '0')
    <ul class="nav">
      <li class="nav-item {{ Request::is('admin/dashboard*') ? 'active':''}}">
        <a class="nav-link" href="{{ route('admin.dashboard')}}">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
        <li class="nav-item {{ Request::is('admin/users*') ? 'active':''}}">
            <a class="nav-link" href="{{route('admin.users')}}">
                <i class="material-icons">Admin</i>
                <p>Admin Users</p>
            </a>
        </li>
      <li class="nav-item {{ Request::is('admin/slider*') ? 'active':''}}">
        <a class="nav-link" href="{{ route('slider.index')}}">
          <i class="material-icons">slideshow</i>
          <p>Slider</p>
        </a>
      </li>
      <!-- <li class="nav-item {{ Request::is('admin/about*') ? 'active':''}}">
        <a class="nav-link" href="{{ route('about.index')}}">
          <i class="material-icons">book</i>
          <p>About Us</p>
        </a>
      </li> -->
      <li class="nav-item {{ Request::is('admin/category*') ? 'active':''}}">
        <a class="nav-link" href="{{ route('category.index')}}">
          <i class="material-icons">content_paste</i>
          <p>Category</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('admin/brand*') ? 'active':''}}">
        <a class="nav-link" href="{{ route('brand.index')}}">
          <i class="material-icons">content_paste</i>
          <p>Brand</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('admin/subcategory*') ? 'active':''}}">
        <a class="nav-link" href="{{ route('subcategory.index')}}">
          <i class="material-icons">content_paste</i>
          <p>SubCategory</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('admin/product*') ? 'active':''}}">
        <a class="nav-link" href="{{ route('product.index')}}">
          <i class="material-icons">library_books</i>
          <p>Products</p>
        </a>
      </li>
        <li class="nav-item {{ Request::is('admin/inventory*') ? 'active':''}}">
            <a class="nav-link" href="{{route('inventory.index')}}">
                <i class="material-icons">library_books</i>
                <p>Inventory</p>
            </a>
        </li>
        <li class="nav-item {{ Request::is('admin/Sales*') ? 'active':''}}">
            <a class="nav-link" href="{{ route('sales.index')}}">
                <i class="material-icons">library_books</i>
                <p>Sales Report</p>
            </a>
        </li>
      <li class="nav-item {{ Request::is('admin/order*') ? 'active':''}}">
        <a class="nav-link" href="{{ route('order.index')}}">
          <i class="material-icons">content_paste</i>
          <p>Order</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('admin/banner*') ? 'active':''}}">
        <a class="nav-link" href="{{ route('banner.index')}}">
          <i class="material-icons">library_books</i>
          <p>Banner</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('admin/email*') ? 'active':''}}">
            <a class="nav-link" href="{{ route('email.content')}}">
                <i class="material-icons">content_paste</i>
                <p>Email</p>
            </a>
        </li>
        <li class="nav-item {{ Request::is('admin/seller*') ? 'active':''}}">
            <a class="nav-link" href="{{ route('seller.content')}}">
                <i class="material-icons">content_paste</i>
                <p>Seller</p>
            </a>
        </li>
    </ul>
    @endif

    @if(Auth::user() && Auth::user()->isAdmin  == '1')
      <ul class="nav">
        <li class="nav-item {{ Request::is('admin/dashboard*') ? 'active':''}}">
          <a class="nav-link" href="{{ route('admin.dashboard')}}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('admin/slider*') ? 'active':''}}">
          <a class="nav-link" href="{{ route('slider.index')}}">
            <i class="material-icons">slideshow</i>
            <p>Slider</p>
          </a>
        </li>

        <li class="nav-item {{ Request::is('admin/product*') ? 'active':''}}">
          <a class="nav-link" href="{{ route('product.index')}}">
            <i class="material-icons">library_books</i>
            <p>Products</p>
          </a>
        </li>
          <li class="nav-item {{ Request::is('admin/users*') ? 'active':''}}">
              <a class="nav-link" href="{{route('admin.users')}}">
                  <i class="material-icons">Admin</i>
                  <p>Admin Users</p>
              </a>
          </li>
    </ul>
    @endif
@endauth
  @endif
  </div>
</div>
