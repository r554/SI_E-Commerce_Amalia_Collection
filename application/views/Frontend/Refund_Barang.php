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
            <div class="col-sm-9 col-md-10 mx-auto text-center">
                <h1>Pesanan Anda</h1>
                <div class="wrapper">
                    <div class="core">
                        <hr>
                        <?php if ($refund->num_rows() > 0) { ?>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Order ID</th>
                                    <th>Tanggal Pemesanan</th>
                                    <th>Tanggal Pengajuan Refund</th>
                                    <th>Status</th>
                                    <th>Pilihan</th>
                                </tr>
                                <?php foreach ($refund->result_array() as $d) : ?>
                                    <tr>
                                        <td><?= $d['id_order']; ?></td>
                                        <td><?= $d['tgl_order']; ?></td>
                                        <td><?= $d['tanggal_refund']; ?></td>
                                        <?php if ($d['status_refund'] == 7) { ?>
                                            <td>Pengajuan Refund Produk</td>
                                        <?php } else if ($d['status_refund'] == 8) { ?>
                                            <td>Pengajuan Refund Diterima <br> Silahkan Kirim Produk <br> Dengan Menggunakan Jasa Pengiriman JNE / J&T Dengan Layanan DFOD <br> Kirim Pada Alamat Jl Semeru 14 Ponjen Lor, Kamaran, Kencong, Kabupaten Jember, Jawa Timur 68167 </td>
                                        <?php } else if ($d['status_refund'] == 9) { ?>
                                            <td>Anda Sudah Mengirim Produk</td>
                                        <?php } else if ($d['status_refund'] == 10) { ?>
                                            <td>Produk Sudah Diterima Amalia | Proses Refund</td>
                                        <?php } else if ($d['status_refund'] == 11) { ?>
                                            <td>Produk Telah Dikirim Kembali Oleh Amalia</td>
                                        <?php } else if ($d['status_refund'] == 12) { ?>
                                            <td>Produk Telah Diterima Oleh Penerima</td>
                                        <?php } else if ($d['status_refund'] == 13) { ?>
                                            <td>Refund Produk Ditolak Pastikan Sebelum Anda Melakukan Refund Produk Telah Membaca Syarat & Ketentuan Refund</td>
                                        <?php } ?>

                                        <td>
                                            <!-- <small><a href="<?php echo base_url("pesanan_saya/detail_order/") ?><?= $d['id_order']; ?>" class="text-info">Detail</a></small> -->
                                            <?php if ($d['status_refund'] == 8) { ?>
                                                <button class="btn btn-info btn-md" id='btn-edit' data-id='<?php echo $d['id_refund']; ?>'>Kirim Produk</button>
                                            <?php } elseif ($d['status_refund'] == 10) { ?>
                                                Nomor Resi Anda <?php echo $d['no_resi']  ?>
                                            <?php } ?>

                                            <?php if ($d['status_refund'] == 11) { ?>
                                                Berikut Nomor Resi Pengiriman <?php echo $d['nomor_resi_admin']  ?><br>
                                                <form action="<?= base_url('Pesanan_saya/konfirmasi_refund') ?>" method="POST">
                                                    <input type="text" name="id_order" value="<?= $d['id_order'] ?>">
                                                    <input type="text" name="id_refund" value="<?= $d['id_refund'] ?>">
                                                    <button type="submit" class="btn btn-success btn-lg">Konfirmasi Barang Sampai</button>
                                                </form>

                                            <?php } ?>

                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        <?php } else { ?>
                            <div class="alert alert-warning">Tidak ada pesanan. Yuk Belanja.</div>
                        <?php } ?>
                    </div>
                </div>
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

    <div class="modal fade" id="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Masukan Nomor Resi Pengiriman</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('Pesanan_saya/kirim_resi_pelanggan') ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="id_refund" id="warna">
                        <div class="form-group">
                            <label>Nomor Resi</label>
                            <input type="text" class="form-control" name="nomor_resi" required>
                            <small class="form-text text-muted">Pastikan Nomor Resi Benar</small>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Kirim Resi</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <script>
        $(function() {
            $('#btn-edit').click(function(e) {
                e.preventDefault();
                $('#modal').modal({
                    backdrop: 'static',
                    show: true
                });
                var id = $(this).data('id');
                document.getElementById("warna").value = id; // Mengambil id_refund dan mengirimnya ke Input Pada Modal 
                // mengambil nilai data - id yang di click
                // $.ajax({
                //     url: 'profile/edit/' + id,
                //     success: function(data) {
                //         $("input[name='id']").val(data.id);
                //         $("input[name='nama']").val(data.nama);
                //         $("textarea[name='alamat']").val(data.alamat);
                //     }
                // });
            });
        });
    </script>

</body>

</html>