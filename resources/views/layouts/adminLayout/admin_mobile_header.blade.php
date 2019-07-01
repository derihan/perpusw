<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img src="{{ asset ('backend-template-master/images/icon/logo.png') }}" alt="CoolAdmin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
            <li>
                    <a class="js-arrow" href="{{ url ('/admin/dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Master Data
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="#">-> Data Anggota</a>
                        </li>
                        <li>
                            <a href="{{ url ('admin/masterData/data_buku') }}">-> Data Buku</a>
                        </li>
                        <li>
                            <a href="#">-> Belum Tersedia</a>
                        </li>
                        <li>
                            <a href="#">-> Belum Tersedia</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="chart.html">
                        <i class="fas fa-undo"></i>Sirkulasi
                    </a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-table"></i>Sirkulasi
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="#">-> Laporan Transaksi</a>
                        </li>
                        <li>
                            <a href="#">-> Laporan Buku</a>
                        </li>
                        <li>
                            <a href="#">-> Belum Tersedia</a>
                        </li>
                        <li>
                            <a href="#">-> Belum Tersedia</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->