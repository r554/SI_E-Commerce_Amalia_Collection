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
                                        <button>Ambil</button>
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
                            <h4><?= $data_produk->harga; ?></h4>
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
            <div class="row">
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

        <!-- Flash Sale -->
        <section class="section latest-products" id="new">
            <div class="title-container">
                <div class="section-titles">
                    <div class="section-title active" data-id="latest">
                        <!-- <span class="dot"></span> -->
                        <h1 class="primary-title">Flash Sale
                            <!-- <p id="demo"></p> -->
                        </h1>
                        <h1 class="primary-title" id="demo"> </h1>
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
                                <h4><span
                                        style="text-decoration: line-through red;"><?php echo "Rp. "   . number_format($data_produk->harga) . ",-" ?></span>
                                </h4>
                            </strong>
                            <h4><?php echo "Rp. "   . number_format($data_produk->hargadiskon) . ",-" ?></h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
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
                    <a href="<?= base_url('Homepage/semua_produk') ?>"><Button class="btn btn-primary btn-lg">Lihat
                            Semua Promo <i class="fa fa-chevron-circle-right"></i></Button></a>
                    <!-- <h3> <?php
                                //echo $this->pagination->create_links();
                                ?>
                    </h3> -->
                </div>
            </div>
        </div>
        <!-- Akhir Flash Sale -->

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
                    <a href="<?php echo base_url('Page/syarat_penggunaan') ?>">Privasi Dan Kebijakan</a>
                    <a href="<?php echo base_url('Page/manualbook') ?>">Manual Book</a>
                    <a href="<?php echo base_url('blog/tampil_tutorial') ?>">Blog</a>
                    <!-- <a href="#">blogletter</a>
                    <a href="#">Returns</a> -->
                </div>
                <div class="footer-center">
                    <h3>ALAMAT</h3>
                    <a
                        href="https://www.google.com/maps/place/Amalia+collection/@-8.2732573,113.3688685,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd663703403958d:0xc691acd0f91f4677!8m2!3d-8.2732573!4d113.3710625">
                        <p> <?php echo $z->Alamat; ?> </p>
                    </a>
                </div>

                <div class="footer-center">
                    <h3 class="text-center"></h3>
                    <div class="col-6 col-md-6 ">
                        <div class="google-map"><iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.2965708227107!2d113.36887381433182!3d-8.27325198544883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd663703403958d%3A0xc691acd0f91f4677!2sAmalia%20collection!5e0!3m2!1sen!2sid!4v1603956166325!5m2!1sen!2sid"
                                frameborder="0" style="border:0;" allowfullscreen="" width="400px"
                                height="250px"></iframe>
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


    <!-- Countdown -->
    <script>
    // Set the date we're counting down to
    var countDownDate = new Date("Dec 12, 2020 08:01:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "Telah Berakhir";

        }
    }, 1000);
    </script>
    <!-- end Countdown -->


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
</body>

</html>