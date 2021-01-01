<body>
    <!-- Pre Loader -->
    <!-- <div class="preloader" id="preloader">
        <div class="loader"></div>
    </div> -->
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
            <!-- <div class="col-sm-9 col-md-10 mx-auto ">
                <h1 class="text-center mb-5">FORM PENGEMBALIAN</h1>
            </div> -->
            <div class="col-md-5 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pilih Produk Yang Di Refund</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Nama Produk</th>
                                    <th>Jumlah</th>
                                    <th style="width: 40px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                ?>
                                <?php
                                foreach ($data_order as $data_produk) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data_produk->nama_produk ?></td>
                                        <td class="text-center"><?= $data_produk->sub_qty ?></td>
                                        <td>
                                            <form action="<?= base_url('Pesanan_saya/simpan_produk_refund') ?>" method="POST">
                                                <input type="hidden" name="id_order" value="<?php echo $this->uri->segment('3'); ?>">
                                                <input type="hidden" name="id_refund" value="<?php echo $this->uri->segment('4'); ?>">
                                                <input type="hidden" name="id_produk" value="<?= $data_produk->id_produk ?>">
                                                <input type="hidden" name="nama_produk" value="<?= $data_produk->nama_produk ?>">
                                                <input type="hidden" name="sub_qty" value="<?= $data_produk->sub_qty ?>">
                                                <input type="hidden" name="harga_final" value="<?= $data_produk->harga_final ?>">
                                                <input type="hidden" name="warna" value="<?= $data_produk->warna ?>">
                                                <button type="submit" class="btn btn-primary btn-lg">Pilih</button>
                                            </form>

                                        </td>
                                    </tr>
                                <?php
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>

            <div class="col-md-5 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Produk Yang Di Refund</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Nama Produk</th>
                                    <th>Jumlah</th>
                                    <th style="width: 40px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                ?>
                                <?php
                                foreach ($data_detail_refund as $data_produk) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data_produk->nama_produk ?></td>
                                        <td class="text-center"><?= $data_produk->sub_qty ?></td>
                                        <td>
                                            <form action="<?= base_url('Pesanan_saya/hapus_produk_refund') ?>" method="POST">
                                                <input type="hidden" name="id_order" value="<?php echo $this->uri->segment('3'); ?>">
                                                <input type="hidden" name="id_refund" value="<?php echo $this->uri->segment('4'); ?>">
                                                <input type="hidden" name="id_detail_refund" value="<?= $data_produk->id_detail_refund; ?>">
                                                <input type="hidden" name="id_produk" value="<?= $data_produk->id_produk ?>">
                                                <input type="hidden" name="nama_produk" value="<?= $data_produk->nama_produk ?>">
                                                <input type="hidden" name="sub_qty" value="<?= $data_produk->sub_qty ?>">
                                                <input type="hidden" name="harga_final" value="<?= $data_produk->harga_final ?>">
                                                <input type="hidden" name="warna" value="<?= $data_produk->warna ?>">
                                                <button type="submit" class="btn btn-danger btn-md">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                } ?>
                            </tbody>
                        </table>
                        <a href="<?= base_url('Pesanan_saya') ?>"><button type="button" class="btn btn-success btn-lg float-right">Ajukan Refund Produk</button></a>
                    </div>
                    <!-- /.card-body -->
                    <!-- <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div> -->
                </div>
                <!-- /.card -->
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