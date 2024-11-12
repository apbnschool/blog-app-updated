<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Constra - Construction Html5 Template</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name=author content="Themefisher">
    <meta name=generator content="Themefisher Constra HTML Template v1.0">

    <!-- Favicon
  ================================================== -->
    <link rel="icon" type="image/png" href="{{ asset('/website-assets/images/favicon.png') }}">

    <!-- CSS
  ================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('/website-assets/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('/website-assets/plugins/fontawesome/css/all.min.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('/website-assets/plugins/animate-css/animate.css') }}">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="{{ asset('/website-assets/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/website-assets/plugins/slick/slick-theme.css') }}">
    <!-- Colorbox -->
    <link rel="stylesheet" href="{{ asset('/website-assets/plugins/colorbox/colorbox.css') }}">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{ asset('/website-assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/website-assets/css/logo.css') }}">

</head>
<body>

<div class="body-inner" >

@include('website.include.header')

@yield('body')

@include('website.include.footer')
    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="{{ asset('/website-assets/plugins/jQuery/jquery.min.js') }}"></script>
    <!-- Bootstrap jQuery -->
    <script src="{{ asset('/website-assets/plugins/bootstrap/bootstrap.min.js') }}" defer></script>
    <!-- Slick Carousel -->
    <script src="{{ asset('/website-assets/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('/website-assets/plugins/slick/slick-animation.min.js') }}"></script>
    <!-- Color box -->
    <script src="{{ asset('/website-assets/plugins/colorbox/jquery.colorbox.js') }}"></script>
    <!-- shuffle -->
    <script src="{{ asset('/website-assets/plugins/shuffle/shuffle.min.js') }}" defer></script>


    <!-- Google Map API Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <!-- Google Map Plugin-->
    <script src="{{ asset('/website-assets/plugins/google-map/map.js') }}" defer></script>

    <!-- Template custom -->
    <script src="{{ asset('/website-assets/js/script.js') }}"></script>

</div><!-- Body inner end -->
</body>

</html>
