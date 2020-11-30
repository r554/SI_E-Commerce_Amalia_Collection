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


    <!-- Bagian Content -->
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-sm-9 col-md-8 mx-auto text-center">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="<?php echo base_url()?>assets/Gambar/foto_footer/gambar3.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="<?php echo base_url()?>assets/Gambar/foto_footer/gambar1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">TENTANG KAMI</h1>
                <br>
                <P align="justify">
                    Zoya adalah salah satu brand busana muslim di Indonesia yang menjadi pionir hijab dan pakaian muslim
                    sejak 2005. Dari tahun ke tahun Zoya selalu melakukan inovasi desain dan cerdas dalam memilih
                    teknologi baik untuk tekstil maupun desain. Setelah menjadi penggagas Hijab Halal, ZOYA menjadi
                    pionir brand hijab yang bekerjasama dengan HEIQ SWISS dalam inovasi produk apparel dan accessories
                    sebagai solusi kebutuhan perlindungan diri (ZOYA protect). ZOYA peduli dengan kenyamanan dan
                    keamanan konsumen dengan menghadirkan koleksi Smart Daily Wear hingga starterkit kebutuhan di era
                    new normal yang mengandung teknologi anti virus, ZOYA Viroblock Series.
                    Konsumen bukan hanya dapat manfaat dari teknologi tekstilnya saja, namun mendapat kepuasan dari
                    varian desain dan warna dengan fitur yang komplit. Inovasi yang ZOYA lakukan benar-benar membuat
                    kamu merasa terlindungi sepanjang hari.
                </P>
            </div>
        </div>


    </div>
    <!-- Akhir Bagian Content -->


    <main>
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
    <?php $this->load->view('Frontend/template/footer') ?>
    <!-- End Footer -->


    <!-- Java Script -->
    <?php $this->load->view('Frontend/template/js') ?>
    <!-- End Java Script -->


</body>

</html>