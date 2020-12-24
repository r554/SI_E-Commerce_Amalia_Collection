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

    <br>
    <br>
    <!-- Bagian Content -->
    <div class="container">

        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <img src="<?php echo base_url() ?>assets/Gambar/blog/<?php echo $indah[0]->gbr_tentangkami; ?>">
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <h1 class="text-center">TENTANG KAMI</h1>
                <br>
                <P align="justify">
                    <?php echo $indah[0]->text_tentangkami; ?>
                </P>
            </div>

        </div>


    </div>
    <!-- Akhir Bagian Content -->

    <br>
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