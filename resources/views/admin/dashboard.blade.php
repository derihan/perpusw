<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- icon -->
    <link rel="shortcut icon" href="{{ asset ('backend-template-master/images/icon/logo-mini.png')}}">

    <!-- Fontfaces CSS-->
    <link href="{{ asset ('backend-template-master/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset ('backend-template-master/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset ('backend-template-master/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset ('backend-template-master/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset ('backend-template-master/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset ('backend-template-master/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset ('backend-template-master/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset ('backend-template-master/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset ('backend-template-master/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset ('backend-template-master/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset ('backend-template-master/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset ('backend-template-master/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset ('backend-template-master/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper"></div>
        @include('layouts.adminLayout.admin_mobile_header')

        <!-- MENU SIDEBAR-->
        @include('layouts.adminLayout.admin_sidebar')
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            @include('layouts.adminLayout.admin_dektop_header')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <!-- breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                        <!-- end breadcrumb -->
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
            @include('layouts.adminLayout.admin_footer')
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset ('backend-template-master/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset ('backend-template-master/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset ('backend-template-master/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset ('backend-template-master/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset ('backend-template-master/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset ('backend-template-master/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset ('backend-template-master/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset ('backend-template-master/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset ('backend-template-master/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset ('backend-template-master/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset ('backend-template-master/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset ('backend-template-master/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset ('backend-template-master/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset ('backend-template-master/js/main.js') }}"></script>

</body>

</html>
<!-- end document-->


