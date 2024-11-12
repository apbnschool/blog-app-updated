<!doctype html>
<html lang="en" dir="ltr"> <!-- This "app.blade.php" master page is used for all the pages content present in "views/livewire" except "custom" and "switcher" pages -->

<!-- Mirrored from laravel8.spruko.com/noa/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2023 13:07:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Noa - Laravel Bootstrap 5 Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="laravel admin template, bootstrap admin template, admin dashboard template, admin dashboard, admin template, admin, bootstrap 5, laravel admin, laravel admin dashboard template, laravel ui template, laravel admin panel, admin panel, laravel admin dashboard, laravel template, admin ui dashboard">

    <!-- TITLE -->
    <title>Noa - Laravel Bootstrap 5 Admin & Dashboard Template</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/admin-assets/assets/images/brand/favicon.ico')}}" />

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('/admin-assets/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{asset('/admin-assets/assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('/admin-assets/assets/css/skin-modes.css')}}" rel="stylesheet" />



    <!--- FONT-ICONS CSS -->
    <link href="{{asset('/admin-assets/assets/plugins/icons/icons.css')}}" rel="stylesheet" />

    <!-- INTERNAL Switcher css -->
    <link href="{{asset('/admin-assets/assets/switcher/css/switcher.css')}}" rel="stylesheet">
    <link href="{{asset('/admin-assets/assets/switcher/demo.css')}}" rel="stylesheet">

</head>

<body class="ltr app sidebar-mini">

<!-- Switcher-->
<!-- Switcher -->
@include('admin.include.right-sidebar')
<!-- End Switcher -->
<!-- Switcher-->

<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="{{asset('/admin-assets/assets/images/loader.svg')}}" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
    <div class="page-main">

        <!-- app-Header -->
       @include('admin.include.header')
        <!-- /app-Header -->

        <!--APP-SIDEBAR-->
        @include('admin.include.left-sidebar')
        <!--/APP-SIDEBAR-->

        <!--app-content open-->
        <div class="app-content main-content mt-0">
            <div class="side-app">

                <!-- CONTAINER -->
                @yield('body')
            </div>
        </div>
        <!-- CONTAINER CLOSED -->
    </div>

@include('admin.include.footer')

</div>
<!-- page -->

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

<!-- JQUERY JS -->
<script src="{{asset('/admin-assets/assets/plugins/jquery/jquery.min.js')}}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{asset('/admin-assets/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('/admin-assets/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- SIDE-MENU JS -->
<script src="{{asset('/admin-assets/assets/plugins/sidemenu/sidemenu.js')}}"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{asset('/admin-assets/assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
<script src="{{asset('/admin-assets/assets/plugins/p-scroll/pscroll.js')}}"></script>

<!-- STICKY JS -->
<script src="{{asset('/admin-assets/assets/js/sticky.js')}}"></script>


<!-- APEXCHART JS -->
<script src="{{asset('/admin-assets/assets/js/apexcharts.js')}}"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="{{asset('/admin-assets/assets/plugins/select2/select2.full.min.js')}}"></script>

<!-- CHART-CIRCLE JS-->
<script src="{{asset('/admin-assets/assets/plugins/circle-progress/circle-progress.min.js')}}"></script>

<!-- INTERNAL DATA-TABLES JS-->
<script src="{{asset('/admin-assets/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/admin-assets/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
<script src="{{asset('/admin-assets/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>

<!-- INDEX JS -->
<script src="{{asset('/admin-assets/assets/js/index1.js')}}"></script>
<script src="{{asset('/admin-assets/assets/js/index.js')}}"></script>

<!-- Reply JS-->
<script src="{{asset('/admin-assets/assets/js/reply.js')}}"></script>


<!-- COLOR THEME JS -->
<script src="{{asset('/admin-assets/assets/js/themeColors.js')}}"></script>

<!-- CUSTOM JS -->
<script src="{{asset('/admin-assets/assets/js/custom.js')}}"></script>

<!-- SWITCHER JS -->
<script src="{{asset('/admin-assets/assets/switcher/js/switcher.js')}}"></script>

</body>


<!-- Mirrored from laravel8.spruko.com/noa/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2023 13:08:40 GMT -->
</html>
