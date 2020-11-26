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
                        <a href="#home" class="nav-link scroll-link">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#shop" class="nav-link scroll-link">Products</a>
                    </li>

                    <li class="nav-item">
                        <a href="#new" class="nav-link scroll-link">New</a>
                    </li>

                    <li class="nav-item">
                        <a href="#recent" class="nav-link scroll-link">Recent</a>
                    </li>

                    <li class="nav-item">
                        <a href="#blog" class="nav-link scroll-link">Blog</a>
                    </li>
                </ul>
            </div>

            <div class="nav-icons">
                <div class="dropdown">
                    <a type="button" class="fas fa-search" href="<?php echo base_url('page/contoh') ?>"></a>
                    <a type="button" class="fas fa-shopping-basket" href="#"></a>
                    <a type="button" class="fas fa-user" data-toggle="dropdown"></a>
                    <div class="dropdown-menu">
                        <h5 class="dropdown-divider"></h5>
                        <a class="dropdown-item" href="#">Keranjang</a>
                        <a class="dropdown-item" href="#">Pesanan Saya</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                        <h5 class="dropdown-divider"></h5>
                        <a class="dropdown-item" href="#">Bukti Pembayaran</a>
                    </div>
                </div>
            </div>

            <div class="hamburger">
                <i class="fas fa-bars"></i>
            </div>

        </div>
    </nav>
</header>
<!-- End Header -->