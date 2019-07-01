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
    <title>Librarian Login</title>

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
    <link href="{{ asset ('backend-template-master/css/custom.css') }}" rel="stylesheet" media="all">
    

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                @if(Session::has('flash_message_error'))
                    <div class="alert alert-danger alert-block">
                        <a href="{{ url('/admin') }}" class="close" data-dimis="alert" >x</a>
                        <strong>{!! session('flash_message_error') !!}</strong>
                    </div>
                @endif
                @if(Session::has('flash_message_success'))
                    <div class="alert alert-success alert-block">
                        <a href="{{ url('/admin') }}" class="close" data-dimis="alert" >x</a>
                        <strong>{!! session('flash_message_success') !!}</strong>
                    </div>
                @endif
                    <div class="login-content">
                        <div class="login-logo">
                            <div class="form-group">
                                <label class="judul">Login Librarian</label>
                            </div>
                        </div>
                        <div class="login-form">
                            <form action="{{ url('admin') }}" method="POST"> @csrf
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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