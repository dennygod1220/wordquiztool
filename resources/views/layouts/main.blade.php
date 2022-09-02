<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Word Quiz Tool</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Corporate Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Rappo HTML Template v1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> --}}
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('plugins/animate-css/animate.css') }}">
    <!-- Icon Font css -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fonts/Pe-icon-7-stroke.css') }}">
    <!-- Themify icon Css -->
    <link rel="stylesheet" href="{{ asset('plugins/themify/css/themify-icons.css') }}">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick-theme.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!--Favicon-->
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">


    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
    <script src="{{ asset('plugins/google-map/gmap.js') }}"></script>

    <script src="{{ asset('js/script.js') }}"></script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

</head>

<body id="top-header">

    <!-- LOADER TEMPLATE -->
    <div id="page-loader">
        <div class="loader-icon fa fa-spin colored-border"></div>
    </div>
    <!-- /LOADER TEMPLATE -->




    <!-- NAVBAR ================================================= -->
    @include('layouts.navbar')

    <main class="section">
        @yield('main')
    </main>

    {{-- <footer class="section " id="footer">
   <!--Content -->
   <div class="container">
     <div class="row justify-content-start">
      
     </div> <!-- / .row -->
   </div> <!-- / .container -->
 </footer> --}}


    <!--  Page Scroll to Top  -->

    <a id="scroll-to-top" class="scroll-to-top js-scroll-trigger" href="#top-header">
        <i class="fa fa-angle-up"></i>
    </a>

    <!--
  Essential Scripts
  =====================================-->

</body>

</html>
