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
                                    <img src="<?= base_url() ?>assets/Gambar/foto_banner/<?= $foto_banner->foto_banner ?>" class="special_01" alt="">
                            </li>
                        <?php } ?>
                    </ul>
                </div>

                <!-- Arrows -->
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-arrow-left"></i></button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-arrow-right"></i></button>
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
                            <img src="<?= base_url() ?>assets/Frontend/images/cat1.jpg" alt="">
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
                                <h4><?= $data_produk->harga; ?></h4>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="far fa-eye"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-heart"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-sync"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </section>
        <!-- Akhir Produk Amalia -->

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="<?= base_url('Homepage/semua_produk') ?>"><Button class="btn btn-primary btn-lg">Lihat Semua Produk <i class="fa fa-chevron-circle-right"></i></Button></a>
                    <!-- <h3> <?php
                                //echo $this->pagination->create_links();
                                ?>
                    </h3> -->
                </div>
            </div>
        </div>

        <!-- Flash Sale -->
        <!-- Latest Products -->
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
                <div class="product">
                    <div class="product-header">
                        <img src="<?= base_url() ?>assets/Frontend/images/pic95.jpg" alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Hijab Pasmina Red Fire</h3>
                        <div class="rating">
                            <!-- <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i> -->
                        </div>
                        <div class="product-price">
                            <strong>
                                <h4><span style="text-decoration: line-through red;">Rp. 20.000</span></h4>
                            </strong>
                            <h4>Rp. 15.000</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="product">
                    <div class="product-header">
                        <img src="<?= base_url() ?>assets/Frontend/images/pic96.jpg" alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Hijab Instans Formal</h3>
                        <div class="rating">
                            <!-- <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i> -->
                        </div>
                        <div class="product-price">
                            <strong>
                                <h4><span style="text-decoration: line-through red;">Rp. 20.000</span></h4>
                            </strong>
                            <h4>Rp. 15.000</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="product">
                    <div class="product-header">
                        <img src="<?= base_url() ?>assets/Frontend/images/pic97.jpg" alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Hijab Bergo</h3>
                        <div class="rating">
                            <!-- <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i> -->
                        </div>
                        <div class="product-price">
                            <strong>
                                <h4><span style="text-decoration: line-through red;">Rp. 20.000</span></h4>
                            </strong>
                            <h4>Rp. 5.000</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="product">
                    <div class="product-header">
                        <img src="<?= base_url() ?>assets/Frontend/images/pic91.jpg" alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Hijab Iner</h3>
                        <div class="rating">
                            <!-- <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i> -->
                        </div>
                        <div class="product-price">
                            <strong>
                                <h4><span style="text-decoration: line-through red;">Rp. 50.000</span></h4>
                            </strong>
                            <h4>Rp. 1.000</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </section>
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
    <footer id="footer" class="section footer">
        <div class="container2">
            <div class="footer-container">
                <div class="footer-center">
                    <h3>EXTRAS</h3>
                    <a href="#">Produk Terbaru</a>
                    <a href="#">Promo</a>
                    <a href="#">Flash Sale</a>
                </div>
                <div class="footer-center">
                    <h3>INFORMATION</h3>
                    <a href="#">About Us</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Site Map</a>
                </div>
                <div class="footer-center">
                    <h3>MY ACCOUNT</h3>
                    <a href="#">My Account</a>
                    <a href="#">Order History</a>
                    <a href="#">Keranjang</a>
                    <!-- <a href="#">blogletter</a>
                    <a href="#">Returns</a> -->
                </div>
                <div class="footer-center">
                    <h3>CONTACT US</h3>
                    <div>
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                        Jalan Sama Aku Nikah Sama DIA
                    </div>
                    <div>
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
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- End Footer -->



    <!-- Countdown -->
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Nov 28, 2020 15:37:25").getTime();

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
                document.getElementById("demo").innerHTML = "EXPIRED";
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>