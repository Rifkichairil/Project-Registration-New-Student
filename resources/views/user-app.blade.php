
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('ppdb.png')}}">
    <title>Portal Pendaftaran Peserta Didik Baru</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('user_asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('user_asset/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('user_asset/assets/css/templatemo-plot-listing.css')}}">
    <link rel="stylesheet" href="{{asset('user_asset/assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('user_asset/assets/css/owl.css')}}">

    @yield('style')
<!--

TemplateMo 564 Plot Listing

https://templatemo.com/tm-564-plot-listing

-->
  </head>

<body>
    @include('sweetalert::alert')

  <!-- ***** Preloader Start ***** -->
  {{-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> --}}
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  @include('partials._user-head')
  <!-- ***** Header Area End ***** -->

  {{-- @include('partials._user-banner') --}}


  @yield('content')


  @include('partials._user-footer')


  <!-- Scripts -->
  <script src="{{asset('user_asset/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('user_asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('user_asset/assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('user_asset/assets/js/animation.js')}}"></script>
  <script src="{{asset('user_asset/assets/js/imagesloaded.js')}}"></script>
  <script src="{{asset('user_asset/assets/js/custom.js')}}"></script>
  @yield('script')
</body>

</html>
