<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ asset ('backend-template-master/images/icon/logo.png') }}" alt="Cool Admin" />
        </a>
    </div> 
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
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
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->