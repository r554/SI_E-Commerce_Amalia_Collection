<body>

    <!-- Data Logic Hidden Promo -->
    <?php
    $setting = $this->db->get('tbl_promo')->row_array(); // Mengecek Data Promo Di Database
    ini_set('date.timezone', 'Asia/Jakarta'); // Sinkron Zona Waktu Indonesia
    $dateNow = date('Y-m-d H:i'); // Ambil Waktu Saat Ini
    $dateDB = $setting['durasi_promo'];
    $dateDBNew = str_replace("T", " ", $dateDB);
    if ($dateNow >= $dateDBNew) {
        $this->db->set('status_promo', 0);
        $this->db->update('tbl_promo');
        $this->db->get('tbl_produk')->row_array();
        $this->db->set('status_promo', 0);
        $this->db->update('tbl_produk');
    }
    ?>
    <!-- End Data Logic Hidden Promo -->

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

    <!-- Main -->
    <main>
        <!-- Herro -->
        <section class="hero">
            <div class="glide glide1" id="glide1">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides glide__hero">
                        <?php
                        $no = $this->uri->segment('3') + 1;
                        foreach ($foto_banner as $foto_banner) {
                        ?>
                        <li class="glide__slide">
                            <div class="banner">
                                <div class="banner-content">
                                    <span><?= $foto_banner->sub_tittle ?></span>
                                    <h1><?= $foto_banner->tittle_banner ?></h1>
                                    <h3><?= $foto_banner->deskripsi_banner ?></h3>
                                    <div class="buttons-group">
                                        <a href="<?= $foto_banner->link_banner ?>"> <button>Ambil</button></a>
                                    </div>
                                </div>
                                <img src="<?= base_url() ?>assets/Gambar/foto_banner/<?= $foto_banner->foto_banner ?>"
                                    class="special_01" alt="">
                        </li>
                        <?php } ?>
                    </ul>
                </div>

                <!-- Arrows -->
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i
                            class="fas fa-arrow-left"></i></button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i
                            class="fas fa-arrow-right"></i></button>
                </div>
            </div>
        </section>

        <!-- Category -->
        <section class="section category">
            <h2 class="title">Lengkapi Gayamu Dengan Produk Kami!</h2>
            <div class="category-center container2">
                <?php
                foreach ($data_kategori as $data_kategori) {
                ?>
                <form action="<?php echo base_url('Homepage/kategori_hijab') ?>" method="POST">
                    <div class="category-box">
                        <img src="<?= base_url() ?>assets/Frontend/images/<?= $data_kategori->gambar_kategori  ?>"
                            alt="">
                        <div class="content">
                            <h2><?= $data_kategori->nama_kategori  ?></h2>
                            <span>#Amaliahijab</span>
                            <!-- <a><input type="submit" value="asd">Ambil kuy</a> -->
                            <input type="submit" class="btn btn-block btn-dark btn-lg" value="Kunjungin" name="submit">
                            <input type="hidden" name="keyword" value="<?php echo $data_kategori->id_kategori ?>">
                        </div>
                    </div>
                </form>
                <?php } ?>
            </div>
        </section>

        <!-- Produk Amalia -->
        <section class="section sort-category">
            <div class="title-container ">
                <div class="section-titles">
                    <div class="section-title active filter-btn" data-id="trend">
                        <!-- <span class="dot"></span> -->
                        <h1 class="primary-title">Produk Amalia Collection</h1>
                    </div>
                </div>
            </div>

            <div class="product-center container2">
                <?php
                $no = $this->uri->segment('3') + 1;
                foreach ($data_produk as $data_produk) {
                ?>
                <div class="product">
                    <div class="product-header">
                        <img src="<?= base_url() ?>assets/Gambar/foto_produk/<?= $data_produk->gambar_produk; ?>"
                            alt="product">
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
                            <h4>
                                Rp
                                <?= str_replace(",", ".", number_format($data_produk->harga)); ?></h4>
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
                    <a href="<?= base_url('Homepage/semua_produk') ?>"><Button class="btn btn-primary btn-lg">Lihat
                            Semua Produk <i class="fa fa-chevron-circle-right"></i></Button></a>
                    <!-- <h3> <?php
                                //echo $this->pagination->create_links();
                                ?>
                    </h3> -->
                </div>
            </div>
        </div>

        <?php
        $data_promo = $this->db->get('tbl_promo')->row_array();
        $status_promo = $data_promo['status_promo'];
        if ($status_promo == 1) {
        ?>
        <!-- Flash Sale -->
        <section class="section latest-products" id="new">
            <div class="title-container">
                <div class="section-titles">
                    <div class="section-title active" data-id="latest">
                        <!-- <span class="dot"></span> -->
                        <h1 class="primary-title">Flash Sale
                            <!-- <p id="demo"></p> -->
                        </h1>
                        <h1 class="primary-title"><span id="countdownPromo"></span></h1>
                    </div>
                </div>
            </div>
            <div class="latest-center product-center container2">
                <?php
                    $no = $this->uri->segment('3') + 1;
                    foreach ($produk_flash_sale as $data_produk) {
                    ?>
                <div class="product">
                    <div class="product-header">
                        <img src="<?= base_url() ?>assets/Gambar/foto_produk/<?= $data_produk->gambar_produk; ?>"
                            alt="product">
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
                                <h4><span style="text-decoration: line-through red;"> Rp
                                        <?= str_replace(",", ".", number_format($data_produk->harga)); ?></span>
                                </h4>
                            </strong>
                            <h4> Rp
                                <?= str_replace(",", ".", number_format($data_produk->hargadiskon)); ?></h4>

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
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <a href="<?= base_url('Homepage/semua_promo') ?>"><Button class="btn btn-primary btn-lg">Lihat
                            Semua Promo <i class="fa fa-chevron-circle-right"></i></Button></a>
                    <!-- <h3> <?php
                                    //echo $this->pagination->create_links();
                                    ?>
                    </h3> -->
                </div>
            </div>
        </div>
        <!-- Akhir Flash Sale -->
        <?php } ?>


        <!-- Facility -->
        <section class="facility section" id="facility">
            <div class="facility-contianer container2">
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
    <?php $this->load->view('Frontend/template/footer') ?>
    <!-- End Footer -->


    <!-- Glide JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
    <!-- Script -->
    <script src="<?= base_url() ?>assets/Frontend/js/index.js"></script>
    <script src="<?= base_url() ?>assets/Frontend/js/product.js"></script>
    <script src="<?= base_url() ?>assets/Frontend/js/slider.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <!-- CountDown FlashSale -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/countdown/dest/jquery.countdown.js"></script>
    <script type="text/javascript">
    $('#countdownPromo').countdown({
        // IMPORTANT: YOU MUST UPDATE CONTEST DATE END = Month Day, Year
        date: "<?= $setting['durasi_promo']; ?>", // Ambil Durasi Promo Dari Database
        render: function(data) {
            var el = $(this.el);
            el.empty()
                // UPDATE THE "d, hrs, mins, s" TEXT IF NEEDED
                .append(this.leadingZeros(data.days, 2) + " Hari  ")
                .append(this.leadingZeros(data.hours, 2) + " Jam  ")
                .append(this.leadingZeros(data.min, 2) + " Menit  ")
                .append(this.leadingZeros(data.sec, 2) + " Detik  ");
        }
    });
    </script>
    <!-- end Countdown -->

</body>

</html>