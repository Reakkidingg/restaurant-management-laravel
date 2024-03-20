<!-- Start header -->
@include('front-end.layouts.header')
<!-- End header -->

<!-- Start leftsidebar -->
@include('front-end.layouts.menu-bar')
<!-- End leftsidebar -->

    <!-- Main Content -->
    @yield('content')
    <!-- End of Main Content -->

<!-- Start Footer -->
@include('front-end.layouts.footer')
<!-- End Footer -->