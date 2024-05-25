<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from bestwpware.com/html/tf/duralux-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 May 2024 14:01:15 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="WRAPCODERS" />
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>@yield('title')</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('asset/bootstrap-5/images/logo.png')}}" />
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-5/css/bootstrap.min.css')}}" />
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-5/vendors/css/vendors.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('asset/bootstrap-5/vendors/css/daterangepicker.min.css')}}" />
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="asset/bootstrap-5/css/theme.min.css" />
    <!--! END: Custom CSS-->
    <!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
    <!--! WARNING: Respond.js doesn"t work if you view the page via file: !-->
    <!--[if lt IE 9]>
			<script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    
        @include('layouts.app.header')
        <!--! ================================================================ !-->
        <!--! [End] Header !-->
        <!--! ================================================================ !-->
        <!-- [ page-header ] end -->
            
        <!-- [ Main Content ] start -->
            <div class="main-content">


            @yield('content')
            
            </div>
        <!-- [ Footer ] start -->
        
        @include('layouts.app.footer')

        <!-- [ Footer ] end -->
    
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Theme Customizer !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [End] Theme Customizer !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! Footer Script !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Vendors JS !-->
    <script src="{{asset('asset/bootstrap-5/vendors/js/vendors.min.js')}}"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="{{asset('asset/bootstrap-5/vendors/js/daterangepicker.min.js')}}"></script>
    <script src="{{asset('asset/bootstrap-5/vendors/js/apexcharts.min.js')}}"></script>
    <script src="{{asset('asset/bootstrap-5/vendors/js/circle-progress.min.js')}}"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{asset('asset/bootstrap-5/js/common-init.min.js')}}"></script>
    <script src="{{asset('asset/bootstrap-5/js/dashboard-init.min.js')}}"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{asset('asset/bootstrap-5/js/theme-customizer-init.min.js')}}"></script>
    <!--! END: Theme Customizer !-->
</body>
<!-- Mirrored from bestwpware.com/html/tf/duralux-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 May 2024 14:02:46 GMT -->
</html>