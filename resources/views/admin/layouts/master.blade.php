<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Feb 2020 20:30:24 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/assets/images/favicon.png')}}">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{ asset('admin/assets/node_modules/morrisjs/morris.css') }}" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{ asset('admin/assets/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('admin/assets/dist/css/style.min.css')}}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{ asset('admin/assets/dist/css/pages/dashboard1.css')}}" rel="stylesheet">

    <link href="{{asset('admin/assets/node_modules/icheck/skins/all.css')}}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="skin-default-dark fixed-layout">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Elite admin</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
        @include('admin.layouts.partials.header')
    <!-- ============================================================== -->
    <!-- ============================================================== -->
        @include('admin.layouts.partials.navbar')
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
        @yield('content')
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
        @include('admin.layouts.partials.footer')
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('admin/assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="{{ asset('admin/assets/node_modules/popper/popper.min.js')}}"></script>
<script src="{{ asset('admin/assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('admin/assets/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--Wave Effects -->
<script src="{{ asset('admin/assets/dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{ asset('admin/assets/dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('admin/assets/dist/js/custom.min.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="{{ asset('admin/assets/node_modules/raphael/raphael-min.js')}}"></script>
<script src="{{ asset('admin/assets/node_modules/morrisjs/morris.min.js')}}"></script>
<script src="{{ asset('admin/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<!-- Popup message jquery -->
{{--<script src="{{ asset('admin/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>--}}
<!-- Chart JS -->
<script src="{{ asset('admin/assets/dist/js/dashboard1.js')}}"></script>
{{--<script src="{{ asset('admin/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>--}}
<script src="{{ asset('admin/assets/node_modules/icheck/icheck.min.js')}}"></script>
</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Feb 2020 20:34:40 GMT -->
</html>
