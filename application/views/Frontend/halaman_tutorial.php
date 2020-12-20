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
                <h1>Blog Amalia Collection</h1>

            </div>
        </div>


        <div class="row">

            <?php
            $no = 1;
            foreach ($haris as $p) {
            ?>
            <div class="col-md-4 mt-5">
                <div class="card card shadow p-3 mb-5 bg-white rounded">
                    <img width="2000px" height="300px"
                        src="<?php echo base_url() ?>assets/Gambar/blog/<?php echo $p->gbr_tutorial; ?>">
                    <div class="card-body">
                        <h4 class="card-title"> <?php echo $p->judul_tutorial; ?></h4>
                        <a href="<?php echo base_url("blog/tampil_detail_tutorial/$p->id_tutorial") ?>"
                            class="btn btn-primary btn-lg" style="font-size: 15px">Selengkapnya</a>
                    </div>
                </div>
            </div>



            <?php
            } ?>
        </div>


        <br>
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