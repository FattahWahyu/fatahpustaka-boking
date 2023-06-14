        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('home'); ?>">
                <div class="sidebar-brand-icon">
                    <img src="<?= base_url('assets/img/upload/suzuran-lite.jpg') ?>" width="40px"></img>
                </div>
                <div class="sidebar-brand-text mx-3">Pustaka Booking</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

           

            <!-- Looping Menu-->
                <div class="sidebar-heading">
                    Home
                </div>
                    <li class="nav-item active">
                        <!-- Nav Item - Dashboard -->
                        <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('admin'); ?>">
                                <i class="fa fa-fw fa-book"></i>
                                <span>Dashboard</span></a>
                        </li>
                    </li>

                <!-- Divider -->
                <hr class="sidebar-divider mt-3">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Master Data
                </div>
                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item active">
                        <!-- Nav Item - Dashboard -->
                        <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('buku/kategori'); ?>">
                            <i class="fas fa-fw fa-swatchbook"></i>
                                <span>Kategori Buku</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('buku'); ?>">
                            <i class="fas fa-fw fa-journal-whills"></i>
                                <span>Data Buku</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('user/anggota'); ?>">
                            <i class="fas fa-fw fa-users"></i>
                                <span>Data Anggota</span></a>
                        </li>
                    </li>

                <!-- Divider -->
                <hr class="sidebar-divider mt-3">
                
                <!-- Heading -->
                <div class="sidebar-heading">
                    Transaksi
                </div>
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <!-- Nav Item Dashboard -->
                <li class="nav-item">
                    <a class="nav-link pb-0" href="<?= base_url('pinjam') ?>">
                        <i class="fa fa-fw fa-shopping-cart"></i>
                        <span>Data Peminjaman</span>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pb-0" href="<?= base_url('pinjam/daftarBooking') ?>">
                        <i class="fa fa-fw fa-list"></i>
                        <span>Data Booking</span>
                </a>
                </li>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider mt-3">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Laporan
                </div>
                <!-- Nav Item Dashboard -->
                <li class="nav-item active">
                    <!-- Nav Item dashboard -->
                <li class="nav-item">
                    <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_buku'); ?>">
                        <i class="fa fa-fw fa-address-book"></i>
                        <span>Laporan Data Buku</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_anggota'); ?>">
                        <i class="far fa-fw fa-id-badge"></i>
                        <span>Laporan Data Anggota</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_pinjam'); ?>">
                        <i class="fa fa-fw fa-address-book"></i>
                        <span>Laporan Peminjaman</span></a>
                </li>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider mt-3">

                <li class="nav-item active">
                    <!-- Nav Item dashboard -->
                <li class="nav-item">
                    <a class="nav-link pb-0" href="<?= base_url('autentifikasi/logout'); ?>">
                        <i class="fas fa-fw fa-sign-out-alt fa-rotate-180"></i>
                        <span>Keluar</span></a>
                </li>
                </li>
                
                <!-- Divider -->
                <hr class="sidebar-divider mt-3">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar --   > 
        
        