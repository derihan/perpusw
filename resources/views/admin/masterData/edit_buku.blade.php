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
                                <li class="breadcrumb-item">Dashboard</li>
                                <li class="breadcrumb-item">Master Data</li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Buku</li>
                            </ol>
                        </nav>
                        <!-- end breadcrumb -->
                        <!-- button add -->
                        
                        
                        <br>                     
                        <!-- end button -->
                        <!-- table -->
                        <div class="row">
                            <div class="col-md-6">
                                <form action="{{ route('edit')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $buku->id }}">
                                    <div class="form-group">
                                        <label for="namabuku">Judul Buku || min 6 karakter</label>
                                        <input type="text" class="form-control" id="namabuku" name="judul" value="{{ $buku->judul }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="namapengarang">Nama Pengarang || min 6 karakter</label>
                                        <input type="text" class="form-control" id="namapengarang" name="pengarang" value="{{ $buku->pengarang }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tahunterbit">Penerbit || min 6 karakter</label>
                                        <input type="text" class="form-control" id="tahunterbit" name="penerbit" value="{{ $buku->penerbit }}" required>
                                    </div><div class="form-group">
                                        <label for="tahunterbit">Tahun Terbit </label>
                                        <input type="number" class="form-control" id="tahunterbit" name="tahun_terbit" min="1990" value="{{ $buku->tahun_terbit }}" required>
                                    </div><div class="form-group">
                                        <label for="jmlbuku">Jumlah Buku </label>
                                        <input type="number" class="form-control" id="jmlbuku" name="jumlah_buku" min="0" value="{{ $buku->jumlah_buku }}" >
                                    </div>
                                    <div>
                                        <label for="deskripsi">Deskripsi || min 6 karakter </label>
                                        <textarea class="form-control" rows="2" id="deskripsi" name="deskripsi">{{ $buku->deskripsi }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="lokasirak">Lokasi Awal Buku  : {{ $buku->lokasi }}, pindah ke : </label>
                                        <select class="form-control" id="lokasirak" name="lokasi">
                                            <option value="rak1">Rak 1</option>
                                            <option value="rak2">Rak 2</option>
                                            <option value="rak3">Rak 3</option>
                                        </select>
                                    </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">default image </label>
                                            <br>
                                            <img src="{{ url('/uploads/'.$buku->cover) }}" alt="">
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="cover" >
                                        </div>
                                        <button type="reset" class="btn btn-secondary">Kembali</button>
                                        <button type="submit" class="btn btn-primary">Edit Data</button>
                                    </form>                          
                                </div>
                            </div>
                        </div>
                        <!-- end table -->
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


    <!-- Modal -->
   
    <!-- end modal -->

    <style>
        .modal-body{
        height: 400px;
        overflow-y: auto;
        }
    </style>

</body>

</html>
<!-- end document-->


