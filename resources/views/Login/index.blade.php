<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="WRAPCODERS">
    <title>{{ $title }}</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('asset/bootstrap-5/images/logo.png') }}">
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/bootstrap-5/css/bootstrap.min.css') }}">
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/bootstrap-5/vendors/css/vendors.min.css') }}">
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/bootstrap-5/css/theme.min.css') }}">
</head>

<body class="bg-login">
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="auth-minimal-wrapper">
        <div class="auth-minimal-inner">
            <div class="minimal-card-wrapper">
                <div class="card mb-4 mt-5 mx-4 mx-sm-0 position-relative">
                    <div
                        class="wd-90 bg-white p-2 rounded-circle shadow-lg position-absolute translate-middle top-0 start-50">
                        <img src="{{ asset('asset/bootstrap-5/images/logo.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="card-body p-sm-5">
                        <h1 style="text-align: center;" class="mt-4">Selamat Datang</h1>
                        <h5 style="text-align: center; margin-top: -10px" class="mb-4">di Website RPL Politeknik
                            Kampar</h5>
                        <div class="mb-4">
                            <label>Username :</label>
                            <input type="email" class="form-control" placeholder="Masukkan Username" value=""
                                required>
                        </div>
                        <div class="mb-3">
                            <label>Password :</label>
                            <input type="password" class="form-control" placeholder="Masukkan Password" value=""
                                required>
                        </div>
                        <div class="w-100 text-center mx-auto">
                            <div class="mt-5">
                                <button type="submit" class="btn btn-lg btn-warning w-100">Login</button>
                            </div>
                            </form>
                            <div class="mt-1 text-muted">
                                <span> Belum punya akun?</span>
                                <a href="#" style="color: orange" class="fw-bold">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p
                    style="text-align: center; color:rgb(253, 253, 253); font-size: 14px; font-weight: bold; margin-top: 10px; margin-bottom: 5px">
                    <span style="color: black">&copy;</span> COPYRIGHT POLITEKNIK KAMPAR
                </p>
            </div>
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! BEGIN: Vendors JS !-->
    <script src="{{ 'asset/bootstrap-5/vendors/js/vendors.min.js' }}"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{ asset('asset/bootstrap-5/js/common-init.min.js') }}"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{ asset('asset/bootstrap-5/js/theme-customizer-init.min.js') }}"></script>
    <!--! END: Theme Customizer !-->
</body>

</html>
