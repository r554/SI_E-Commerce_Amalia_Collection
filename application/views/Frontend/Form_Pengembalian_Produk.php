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
            <?php $this->load->view('Frontend/template/menu'); ?>

            <div class="col-sm-9 col-md-10 mx-auto ">
                <form action="<?= base_url('Pesanan_saya/simpan_pengembalian_produk'); ?>" method="post" enctype="multipart/form-data">
                    <h1 class="text-center mb-5">FORM PENGEMBALIAN</h1>
                    <!-- general form elements -->

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Silahkan Melengkapi Persyaratan Berikut</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <div class="alert alert-info alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h3><i class="icon fas fa-info"></i> Perhatian!</h3>
                                Pastikan Anda Sudah Memahami Syarat & Ketentuan Refund Produk
                            </div>
                            <b>
                                <h3 class="text-danger text-center mb-5 mt-5">Pengiriman Refund Akan Dikirim Dengan Alamat Yang Sama Pada Saat Order Pertama</h3>
                            </b>
                            <div class="form-group">
                                <label>Nomor Pemesan</label>
                                <input type="text" name="id_order" value="<?= $data_order[0]->id_order ?>" class="form-control" style="height: 40px; font-size: medium;" readonly>
                                <input type="hidden" name="id_refund" value="<?= $id_refund ?>" class="form-control" style="height: 40px; font-size: medium;">
                                <input type="hidden" name="tgl_order" value="<?= $data_order[0]->tanggal_order ?>" class="form-control" style="height: 40px; font-size: medium;">
                                <input type="hidden" name="status_refund" value="7" class="form-control" style="height: 40px; font-size: medium;">
                                <input type="hidden" name="id_pelanggan" value="<?= $this->session->userdata('id'); ?>" class="form-control" style="height: 40px; font-size: medium;">
                            </div>
                            <div class="form-group">
                                <label>Nama Penerima</label>
                                <input type="text" name="nama_penerima" value="<?= $data_order[0]->nama_penerima ?>" class="form-control" style="height: 40px; font-size: medium;" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input type="text" name="no_penerima" value="<?= $data_order[0]->no_penerima ?>" class="form-control" style="height: 40px; font-size: medium;" readonly>
                            </div>
                            <div class="form-group">
                                <label>Alamat Penerima</label>
                                <textarea id="" name="alamat_penerima" class="form-control" cols="30" rows="10" style="font-size: medium; height: 130px;" readonly><?php echo $data_order[0]->alamat_penerima ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Keterangan Refund</label>
                                <textarea name="keterangan_refund" class="form-control" cols="30" rows="10" style="font-size: medium; height: 130px;" placeholder="Kenapa Anda Ingin Refund Produk?"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Video Unboxing Anda</label>
                                <div class="input-group">
                                <input type='file' multiple accept='video/*' id="menu_images" name="video_bukti" required
                                    oninvalid="this.setCustomValidity('Video Tidak Boleh Kosong!')"
                                    oninput="setCustomValidity('')" />
                                    <img class="img-fluid" id="video" src="#" alt="Pilih Video" OnError=" $(this).hide();"
                                    height="500px" width="500px" />
                                </div>
                                <small><b>Perhatian!!! </b> Apabila Anda Tidak Memiliki Video Unboxing Anda Tidak Bisa Melakukan Refund</small>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <br>
                    <button type="submit" class="btn btn-primary btn-lg float-right">Saya Setuju dan lanjutkan</button>
                </form>
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
    <?php $this->load->view('Frontend/template/js2') ?>


    <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#video').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#menu_images").change(function() {
        $('#video').show();
        readURL(this);
    });
    </script>
    <!-- End Java Script -->


</body>

</html>