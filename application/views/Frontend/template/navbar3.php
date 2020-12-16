<!-- Header -->
<header class="header" id="header">
    <nav class="navigation">
        <div class="nav-center container">
            <a href="<?= base_url('Homepage') ?>" class="logo">
                <h1>AM<span>A</span>LIA <span>COLLECTION</span></h1>
            </a>

            <div class="nav-menu">
                <div class="nav-top">
                    <div class="logo">
                        <h1>AM<span>A</span>LIA <span>COLLECTION</span></h1>
                    </div>
                    <div class="close">
                        <i class="fas fa-times"></i>
                    </div>
                </div>

                <ul class="nav-list">

                    <li class="nav-item">
                        <a href="<?= base_url('Homepage') ?>" class="nav-link scroll-link">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url('Homepage/semua_produk') ?>" class="nav-link scroll-link">Products</a>
                    </li>

                    <li class="nav-item">
                        <!-- <a href="#new" class="nav-link scroll-link">Informasi</a> -->
                        <a class="nav-link scroll-link" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Informasi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url('Page/syarat_penggunaan') ?>" style="font-size: 16px;">Syarat Penggunaan</a>
                            <a class="dropdown-item" href="<?= base_url('Page/ketentuan_pengembalian') ?>" style="font-size: 16px;">Ketentuan Pengembalian</a>
                            <a class="dropdown-item" href="<?= base_url('Page/ketentuan_pengiriman') ?>" style="font-size: 16px;">Ketentuan Pengiriman</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="#blog" class="nav-link scroll-link">Blog </a>
                    </li>

                    <?php
                    // Cek role user
                    if ($this->session->userdata('id')) { // Jika sudah bisa mendapatkan session
                    ?>
                        <li class="nav-item">
                            <a href="<?php echo base_url('pesanan_saya') ?>" class="nav-link scroll-link">Pesananku</a>
                        </li>

                    <?php } ?>

                </ul>
            </div>

            <!-- <div class="nav-icons">
                <div class="dropdown">
                    <a type="button" class="fas fa-search" href="<?php echo base_url('Homepage/semua_produk') ?>"></a>
                    <a type="button" class="fas fa-shopping-basket" href=""></a>
                    <a type="button" class="fas fa-user" data-toggle="dropdown"></a>
                    <div class="dropdown-menu">
                        <h5 class="dropdown-divider"></h5>
                        <a class="dropdown-item" href="#">Keranjang</a>
                        <a class="dropdown-item" href="">Pesanan Saya</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                        <h5 class="dropdown-divider"></h5>
                        <a class="dropdown-item" href="buktipembayaran">Bukti Pembayaran</a>
                        <a class="dropdown-item" href="Login0/logout">Log Out</a>

                    </div>
                </div>
            </div> -->

            <div class="nav-icons">
                <?php
                // Cek role user
                if ($this->session->userdata('id')) { // Jika sudah bisa mendapatkan session
                ?>
                    <span title="Keluar"><a href="<?php echo base_url('Login0/logout') ?>"><i class="fas fa-sign-out-alt"></i></a></span>
                    <span title="Akun"><a href="<?php echo base_url('Profile') ?>"><i class="fas fa-user"></i></a></span>

                <?php } ?>
                <span title="Keranjang"><a href="<?php echo base_url('keranjang/tampil_semua_keranjang/' . $this->session->userdata('id')) ?>"><i class="fas fa-shopping-basket"></i></a> 2</span>

                <?php
                // Cek role user
                if (!$this->session->userdata('id')) { // Jika sudah bisa mendapatkan session
                ?>
                    <a href="<?php echo base_url('Login0') ?>"><button class="shadow-sm btn btn-lg" style="color: white;background: linear-gradient(to right, #ff99cc 0%, #ff6699 100%); font-size: 15px;"><i class="fas fa-sign-in-alt"></i> Masuk/Daftar</button></a>
                <?php } ?>
            </div>

            <div class="hamburger">
                <i class="fas fa-bars"></i>
            </div>

        </div>
    </nav>
</header>
<!-- End Header -->