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
    <div class="container mt-5 mb-5">
        <form action="<?php echo base_url("bukti_pembayaran/save") ?>" method="POST" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Konfirmasi Pembayaran</h1>
                </div>
                <div class="col xm-8 col-md-12">
                    <br></br>
                    <p>Masukkan ID Transaksi Anda :
                        <input type="text" name="id_order">
                    </p>
                    <p>Silahkan Upload Bukti Pembayaran :
                        <input type='file' id="file" name="foto_bukti" />
                        <img class="img-fluid" id="gambar" src="#" alt="Pilih Gambar" OnError=" $(this).hide();"
                            height="500px" width="500px" />
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 float-md-right">
                    <input type="submit" class="btn btn-success btn-lg" value="Kirim">
                </div>
            </div>
        </form>
    </div>
    <!-- Akhir Bagian Content -->

    <!-- Facility -->
    <main>
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

    <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#gambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#file").change(function() {
        $('#gambar').show();
        readURL(this);
    });
    </script>
</body>

</html>