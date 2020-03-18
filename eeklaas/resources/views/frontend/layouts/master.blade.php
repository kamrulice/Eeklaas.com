  <!-- Header top Section -->
  @include('frontend.partials.header_top')

  <!-- Header Section -->
  @include('frontend.partials.menu')



  <!-- content declare   -->
  @yield('content')

  <!-- footer section -->
  @include('frontend.partials.footer')

  <!-- script section -->
  @include('frontend.partials.script')

  <!-- content declare   -->
  @yield('script')

