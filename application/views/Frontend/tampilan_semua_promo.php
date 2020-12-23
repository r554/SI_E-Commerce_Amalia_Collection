<body>
    <!-- Pre Loader -->
    <div class="preloader" id="preloader">
        <div class="loader"></div>
    </div>
    <!-- End Pre Loader -->

    <!-- Adverts -->
    <div class="adverts">
        <span>This website was built by Indanah Group</span>
    </div>
    <!-- End Adverts -->

    <div class="container">

        <!-- <div class="row mt-5">
            <div class="col-sm-3 col-md-8 mx-auto">
                <form action="<?= base_url('Homepage/semua_produk') ?>" class="row" method="POST">
                    <input class="col-md-11 col-10 rounded-pill" type="text" value="" name="keyword" placeholder="Cari Produk" style="height:60px;font-size:14pt;">

                    <i class="fas fa-search text-success" aria-hidden="true"></i>
                    <input type="submit" class="col-2 col-md-1 btn btn-danger" name="submit">
                </form>
            </div>
        </div> -->
        <!-- <div class="row">
            <div class="col-sm-8 col-md-12 text-center mt-5">

                <label class="mdb-main-label">Cari Produk Berdasarkan Kategori </label><br>

                <select class="mdb-select md-form colorful-select dropdown-primary" searchable="Search here..">
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    <option value="4">Option 4</option>
                    <option value="5">Option 5</option>
                </select>

                <label class="mdb-main-label">Example label</label>

                <select class="mdb-select" searchable="Search here..">
                    <option value="1" disabled selected>Choose your option</option>
                    <option value="2" data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-1.jpg" class="rounded-circle">
                        example
                        1</option>
                    <option value="3" data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle">
                        example
                        2</option>
                    <option value="4" data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-3.jpg" class="rounded-circle">
                        example
                        1</option>
                </select>
            </div> -->
        <!--Blue select-->
        <!-- </div> -->

    </div>

    <div class="container-fluid">
        <h2 class="text-center display-4 mt-5">Pencarian Produk</h2>
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-5 mb-5 ">
                <form action="<?= base_url('Homepage/semua_produk') ?>" method="POST">
                    <div class="input-group">
                        <!-- <input type="search" class="form-control form-control-lg" placeholder="Cari Produk Disini">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-lg btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </div> -->
                        <input class="col-md-11 col-10 rounded-pill" type="text" value="" name="keyword" placeholder="Cari Produk" style="height:60px;font-size:14pt;">
                        <input type="submit" class="col-2 col-md-1 btn btn-danger btn-s fa fa-search" name="submit" value="Cari">
                    </div>
                </form>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-8 mx-auto">
                <a href="#" class="btn btn-info bo-rad-23 p-l-16 p-r-16 m-r-4 m-b-12">
                    Pashmina </a>
            </div>
        </div> -->
    </div>

    <main>

        <!-- Produk Amalia -->
        <section class="section sort-category">

            <div class="title-container">
                <div class="section-titles">
                    <div class="section-title active filter-btn" data-id="trend">
                        <!-- <span class="dot"></span> -->
                        <h1 class="primary-title">Promo Amalia Collection</h1>
                    </div>
                </div>
            </div>

            <!-- Alert Untuk Menampilkan Apabila Pencarian Tidak ditemukan -->
            <?php if (empty($data_produk)) : ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning" role="alert">
                                <b>Pencarian Yang Anda Cari Tidak ditemukan !!!</b> Silahkan Cari kembali.
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5 mt-5">
                        <div class="col-8 mx-auto">
                            <img src="<?= base_url() ?>assets/Frontend/images/data.svg" alt="">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!-- END Alert Untuk Menampilkan Apabila Pencarian Tidak ditemukan -->

            <div class="product-center container2">
                <?php
                $no = $this->uri->segment('3') + 1;
                foreach ($data_produk as $data_produk) {
                ?>
                    <div class="product">
                        <div class="product-header">
                            <img src="<?= base_url() ?>assets/Gambar/foto_produk/<?= $data_produk->gambar_produk; ?>" alt="product">
                        </div>
                        <div class="product-footer">
                            <h3><?= $data_produk->nama_produk; ?></h3>
                            <div class="rating">
                                <!-- <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i> -->
                            </div>
                            <div class="product-price">
                                <strong>
                                    <h4><span style="text-decoration: line-through red;">Rp. <?= str_replace(",", ".", number_format($data_produk->harga)); ?></span>
                                    </h4>
                                </strong>
                                <h4>Rp. <?= str_replace(",", ".", number_format($data_produk->hargadiskon)); ?></h4>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <a href="<?= base_url('homepage/detail_product/' . $data_produk->id_produk) ?>">
                                    <i class="far fa-eye"></i>
                                </a>
                            </li>
                            <!-- <li>
                                <a href="#">
                                    <i class="far fa-heart"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-sync"></i>
                                </a>
                            </li> -->
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </section>
        <!-- Akhir Produk Amalia -->

        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h2> <?php echo $this->pagination->create_links(); ?></h2>
                </div>
            </div>
        </div>

        <!-- Facility -->
        <section class="facility section" id="facility">
            <div class="facility-contianer container">
                <div class="facility-box">
                    <div class="facility-icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <p>Mendukung Semua Kurir</p>
                </div>

                <div class="facility-box">
                    <div class="facility-icon">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <p>100% Garansi Uang Kembali</p>
                </div>

                <div class="facility-box">
                    <div class="facility-icon">
                        <i class="far fa-credit-card"></i>
                    </div>
                    <p>Berbagai Metode Pembayaran</p>
                </div>

                <div class="facility-box">
                    <div class="facility-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <p>24/7 ONLINE SUPPORT</p>
                </div>
            </div>
        </section>
    </main>
    <!-- End Main -->

    <!-- Footer -->
    <footer id="" class="section footer">
        <div class="container2">
            <div class="footer-container">
                <?php
                $no = 1;
                foreach ($footer as $z) {
                ?>
                    <div class="footer-center">
                        <h3>MEDIA SOSIAL</h3>
                        <a href="https://www.instagram.com/<?php echo $z->instagram; ?>/ "> Instagram</a>

                        <a href="https://web.facebook.com/<?php echo $z->facebok; ?>/"> Facebook</a>

                        <a href="https://twitter.com/<?php echo $z->twiter; ?>/"> Twitter</a>

                        <a href="https://www.youtube.com/<?php echo $z->youtube; ?>/"> Youtube</a>

                        <a href="https://line.me/id/<?php echo $z->fax; ?>/"> Line</a>
                        <a href="https://mail.google.com/<?php echo $z->email; ?>/">
                            Email</a>
                        <a href="https://wa.me/<?php echo $z->no_telepon; ?>/"> WhatsApp </a>
                    </div>
                    <div class="footer-center">
                        <h3>INFORMASI TAMBAHAN</h3>
                        <a href="<?php echo base_url('blog/tampil_tentangkami_frontend') ?>">Tentang Kami</a>
                        <a href="<?php echo base_url('Page/privasikebijakan') ?>">Privasi Dan Kebijakan</a>
                        <a href="<?php echo base_url('Page/manualbook') ?>">Manual Book</a>
                        <a href="<?php echo base_url('Page/blog') ?>">Blog</a>
                        <!-- <a href="#">blogletter</a>
                    <a href="#">Returns</a> -->
                    </div>
                    <div class="footer-center">
                        <h3>ALAMAT</h3>
                        <a href="https://www.google.com/maps/place/Amalia+collection/@-8.2732573,113.3688685,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd663703403958d:0xc691acd0f91f4677!8m2!3d-8.2732573!4d113.3710625">
                            <p> <?php echo $z->Alamat; ?> </p>
                        </a>
                    </div>

                    <div class="footer-center">
                        <h3 class="text-center"></h3>
                        <div class="col-6 col-md-6 ">
                            <div class="google-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.2965708227107!2d113.36887381433182!3d-8.27325198544883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd663703403958d%3A0xc691acd0f91f4677!2sAmalia%20collection!5e0!3m2!1sen!2sid!4v1603956166325!5m2!1sen!2sid" frameborder="0" style="border:0;" allowfullscreen="" width="400px" height="250px"></iframe>
                            </div>
                        </div>

                        <!-- <div>
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                        Jalan Sama Aku Nikah Sama DIA
                    </div> -->
                        <!-- <div>
                        <span>
                            <i class="far fa-envelope"></i>
                        </span>
                        Amalia@gmail.com
                    </div>
                    <div>
                        <span>
                            <i class="fas fa-phone"></i>
                        </span>
                        081111555444
                    </div>
                    <div>
                        <span>
                            <i class="far fa-paper-plane"></i>
                        </span>
                        Umbulsari, Jember
                    </div> -->
                    </div>
                <?php } ?>
            </div>
        </div>
        </div>
    </footer>
    <!-- End Footer -->

    <script>
        // Material Select
        $('.mdb-select').materialSelect({});
    </script>


    <!-- Glide JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
    <!-- Script -->
    <script src="<?php echo base_url() ?>assets/Frontend/js/index.js"></script>
    <script src="<?php echo base_url() ?>assets/Frontend/js/product.js"></script>
    <script src="<?php echo base_url() ?>assets/Frontend/js/slider.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>