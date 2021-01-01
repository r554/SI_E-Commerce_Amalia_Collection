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
            <?php
            // Cek role user
            if ($this->session->userdata('role') == 2) { // Jika sudah bisa mendapatkan session
            ?>
                <li class="nav-item">
                    <a href="<?php echo base_url('Dashboard/tampil') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://dashboard.tawk.to/?lang=en#/monitoring" class="nav-link">
                        <i class="nav-icon far fa-file-archive"></i>
                        <p>
                            Live Chat
                        </p>
                    </a>
                </li>
            <?php
            }
            ?>
            <?php
            // Cek role user
            if ($this->session->userdata('role') == 1) { // Jika sudah bisa mendapatkan session
            ?>
                <li class="nav-item">
                    <a href="<?php echo base_url('Manager/Dashboard_Manager/tampil_manager') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
            <?php
            }
            ?>

            <?php
            // Cek role user
            if ($this->session->userdata('role') == 2) { // Jika sudah bisa mendapatkan session
            ?>
                <?php

                $this->db->from('tbl_order');
                $this->db->where('tbl_order.status', 1);
                $c_pesanan_baru = $this->db->get()->num_rows();

                $this->db->from('tbl_order');
                $this->db->where('tbl_order.status', 2);
                $c_verifikasi_pembayaran = $this->db->get()->num_rows();

                $this->db->from('tbl_order');
                $this->db->where('tbl_order.status', 3);
                $c_perlu_dikirim = $this->db->get()->num_rows();

                $this->db->from('tbl_order');
                $this->db->where('tbl_order.status', 4);
                $c_pesanan_dikirim = $this->db->get()->num_rows();

                $this->db->from('tbl_order');
                $this->db->where('tbl_order.status', 5);
                $c_pesanan_selesai = $this->db->get()->num_rows();

                $this->db->from('tbl_order');
                $this->db->where('tbl_order.status', 6);
                $c_pesanan_dibatalkan = $this->db->get()->num_rows();

                $this->db->from('tbl_refund');
                $this->db->where('tbl_refund.status_refund', 7);
                $c_refund_baru = $this->db->get()->num_rows();


                ?>
                <li class="nav-header">
                    Pesanan
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('Admin/Pesanan/tampil_semua_pesanan') ?>" class="nav-link">
                        <i class="nav-icon fas fa-envelope-open-text"></i>
                        <p>
                            Pesanan Baru
                            <?php if (!empty($c_pesanan_baru)) { ?>
                                <span class="badge badge-info right"><?= $c_pesanan_baru; ?></span>
                            <?php } ?>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('Admin/Pesanan/tampil_semua_verifikasi_pembayaran') ?>" class="nav-link">
                        <i class="nav-icon fas fa-user-check"></i>
                        <p>
                            Verifikasi Pembayaran
                            <?php if (!empty($c_verifikasi_pembayaran)) { ?>
                                <span class="badge badge-warning right"><?= $c_verifikasi_pembayaran ?></span>
                            <?php } ?>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('Admin/Pesanan/tampil_semua_perlu_dikirim') ?>" class="nav-link">
                        <i class="nav-icon far fa-share-square"></i>
                        <p>
                            Perlu Dikirim
                            <?php if (!empty($c_perlu_dikirim)) { ?>
                                <span class="badge badge-warning right"><?= $c_perlu_dikirim ?></span>
                            <?php } ?>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('Admin/Pesanan/tampil_semua_pesanan_dikirim') ?>" class="nav-link">
                        <i class="nav-icon far fa-paper-plane"></i>
                        <p>
                            Pesanan Dikirim
                            <?php if (!empty($c_pesanan_dikirim)) { ?>
                                <span class="badge badge-info right"><?= $c_pesanan_dikirim ?></span>
                            <?php } ?>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('Admin/Pesanan/tampil_semua_pesanan_selesai') ?>" class="nav-link">
                        <i class="nav-icon fas fa-check-double"></i>
                        <p>
                            Pesanan Selesai
                            <?php if (!empty($c_pesanan_selesai)) { ?>
                                <span class="badge badge-success right"><?= $c_pesanan_selesai ?></span>
                            <?php } ?>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('Admin/Pesanan/tampil_semua_pesanan_dibatalkan') ?>" class="nav-link">
                        <i class="nav-icon far fa-window-close"></i>
                        <p>
                            Pesanan Dibatalkan
                            <?php if (!empty($c_pesanan_dibatalkan)) { ?>
                                <span class="badge badge-danger right"><?= $c_pesanan_dibatalkan ?></span>
                            <?php } ?>
                        </p>
                    </a>
                </li>
            <?php
            }
            ?>

            <li class="nav-header">
                Pengembalian Pemesanan
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url('Admin/Pengembalian_Barang/tampil_refund_baru') ?>" class="nav-link">
                    <i class="nav-icon fa fa-exclamation-circle"></i>
                    <p>
                        Refund Baru
                        <?php if (!empty($c_refund_baru)) { ?>
                            <span class="badge badge-warning right"><?= $c_pesanan_dibatalkan ?></span>
                        <?php } ?>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url('Admin/Pengembalian_Barang/tampil_refund_diproses') ?>" class="nav-link">
                    <i class="nav-icon fa fa-hourglass-end"></i>
                    <p>
                        Refund Diproses
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url('Admin/Pengembalian_Barang/tampil_refund_selesai') ?>" class="nav-link">
                    <i class="nav-icon fa fa-check-square"></i>
                    <p>
                        Refund Selesai
                    </p>
                </a>
            </li>

            <?php
            // Cek role user
            if ($this->session->userdata('role') == 2) { // Jika sudah bisa mendapatkan session
            ?>
                <li class="nav-header">
                    Kelola Produk
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('data_produk/tampil') ?>" class="nav-link">
                        <i class="nav-icon far fa-list-alt"></i>
                        <p>
                            Data Produk
                        </p>
                    </a>
                </li>
            <?php
            }
            ?>

            <?php
            // Cek role user
            if ($this->session->userdata('role') == 1) { // Jika sudah bisa mendapatkan session
            ?>
                <li class="nav-item">
                    <a href="<?php echo base_url('data_produk/tampil_manajer') ?>" class="nav-link">
                        <i class="nav-icon far fa-list-alt"></i>
                        <p>
                            Data Produk
                        </p>
                    </a>
                </li>
            <?php
            }
            ?>


            <?php
            // Cek role user
            if ($this->session->userdata('role') == 1) { // Jika sudah bisa mendapatkan session
            ?>
                <li class="nav-item">
                    <a href="<?php echo base_url('Admin/data_karyawan/tampil') ?>" class="nav-link ">
                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                        <p>
                            Data Karyawan
                        </p>
                    </a>
                </li>
            <?php
            }
            ?>

            <?php
            // Cek role user
            if ($this->session->userdata('role') == 2) { // Jika sudah bisa mendapatkan session
            ?>
                <li class="nav-item">
                    <a href="<?php echo base_url('Admin/data_customer/tampil') ?>" class="nav-link ">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Data Pelanggan
                        </p>
                    </a>
                </li>
            <?php
            }
            ?>

            <?php
            // Cek role user
            if ($this->session->userdata('role') == 1) { // Jika sudah bisa mendapatkan session
            ?>
                <li class="nav-item">
                    <a href="<?php echo base_url('Admin/data_customer/tampil_manajer') ?>" class="nav-link ">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Data Pelanggan
                        </p>
                    </a>
                </li>
            <?php
            }
            ?>

            <?php
            // Cek role user
            if ($this->session->userdata('role') == 2) { // Jika sudah bisa mendapatkan session
            ?>
                <li class="nav-item">
                    <a href="<?php echo base_url('Admin/kategori/tampil_kategori') ?>" class="nav-link">
                        <i class="nav-icon fab fa-buffer"></i>
                        <p>
                            Pengaturan Kategori
                        </p>
                    </a>
                </li>
            <?php
            }
            ?>

            <?php
            // Cek role user
            if ($this->session->userdata('role') == 2) { // Jika sudah bisa mendapatkan session
            ?>
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
            <?php
            }
            ?>

            <?php
            // Cek role user
            if ($this->session->userdata('role') == 2) { // Jika sudah bisa mendapatkan session
            ?>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-toolbox"></i>
                        <p>
                            Pengaturan Blog
                            <i class="fas fa-angle-left right"></i>
                            <!-- <span class="badge badge-info right">6</span> -->
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('blog/tampil_tentangkami') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tentang Kami</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('blog/tampil_blog') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blog</p>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php
            }
            ?>

            <li class="nav-item">
                <a href="<?php echo base_url('Admin/Laporan/index') ?>" class="nav-link">
                    <i class="nav-icon far fa-file-archive"></i>
                    <p>
                        Laporan
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>