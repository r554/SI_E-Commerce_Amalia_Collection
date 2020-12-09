<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <?php $foto_admin = $this->session->userdata('foto_admin') ?>
        <div class="image">
            <img src="<?php echo base_url() ?>assets/Gambar/foto_profil/<?php echo $foto_admin ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <?php $nama = $this->session->userdata('nama') ?>
        <div class="info">
            <a href="#" class="d-block"><?php echo $nama; ?></a>
        </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icdf
           m con font library -->
            <li class="nav-item">
                <a href="<?php echo base_url('Dashboard/tampil') ?>" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard A
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo base_url('Manager/Dashboard_Manager/tampil_manager') ?>" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard M
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-sticky-note"></i>
                    <p>
                        Pesanan
                        <i class="fas fa-angle-left right"></i>
                        <!-- <span class="badge badge-info right">6</span> -->
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo base_url('Admin/Pesanan/tampil_semua_pesanan') ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pesanan Baru</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Admin/Pesanan/tampil_semua_verifikasi_pembayaran') ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Verifikasi Pembayaran</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Admin/Pesanan/tampil_semua_perlu_dikirim') ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Perlu Dikirim</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Admin/Pesanan/tampil_semua_pesanan_dikirim') ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pesanan Dikirim</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Admin/Pesanan/tampil_semua_pesanan_selesai') ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pesanan Selesai</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Admin/Pesanan/tampil_semua_pesanan_dibatalkan') ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pesanan Dibatalkan</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="<?php echo base_url('data_produk/tampil') ?>" class="nav-link">
                    <i class="nav-icon far fa-list-alt"></i>
                    <p>
                        Data Produk
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url('Admin/data_karyawan/tampil') ?>" class="nav-link ">
                    <i class="nav-icon fas fa-chalkboard-teacher"></i>
                    <p>
                        Data Karyawan
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url('Admin/data_customer/tampil') ?>" class="nav-link ">
                    <i class="nav-icon far fa-user"></i>
                    <p>
                        Data Pelanggan
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url('Admin/kategori/tampil_kategori') ?>" class="nav-link">
                    <i class="nav-icon fab fa-buffer"></i>
                    <p>
                        Pengaturan Kategori
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-toolbox"></i>
                    <p>
                        Pengaturan Homepage
                        <i class="fas fa-angle-left right"></i>
                        <!-- <span class="badge badge-info right">6</span> -->
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo base_url('Admin/Flashsale/produkflashsale') ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Flash Sale</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Admin/Banner/tampil') ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Banner Iklan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('Admin/footer/tampilfooter') ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Footer</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="<?php echo base_url('Admin/Laporan/index') ?>" class="nav-link">
                    <i class="nav-icon far fa-file-archive"></i>
                    <p>
                        Laporan
                    </p>
                </a>
            </li>



            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>