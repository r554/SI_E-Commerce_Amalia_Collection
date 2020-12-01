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
        <div class="row mb-5 mt-5">
            <div class="col-md-12 text-center">
                <h1>Detail Pemesanan</h1>
            </div>
        </div>


        <div class="row mb-1">
            <div class="col-md-8">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="card-header text-center">
                        Informasi Pengiriman
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1"><strong> Alamat Pengiriman</strong></label>
                                <input type="text" class="form-control" style="height: 40px; font-size: medium;" placeholder="Nama Penerima">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" style="height: 40px; font-size: medium;" placeholder="No Handphone Penerima">
                            </div>
                            <div class="form-group">
                                <textarea name="" class="form-control" id="" cols="30" rows="10" style="font-size: medium;" placeholder="Alamat Lengkap"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" style="height: 40px; font-size: medium;" placeholder="Provinsi">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" style="height: 40px; font-size: medium;" placeholder="Kabupaten">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" style="height: 40px; font-size: medium;" placeholder="Kecamatan">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" style="height: 40px; font-size: medium;" placeholder="Kode POS">
                            </div>
                            <div class="form-group mt-5">
                                <label for="exampleInputEmail1"><strong>Kurir Pengiriman</strong></label>
                                <div class="row">
                                    <div class="col-md-6 mb-2 mt-2">
                                        <select class="form-control" id="sel1" name="sellist1" style="height: 40px; font-size: medium;">
                                            <option value="" selected disabled>Pilih Ekspedisi</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <select class="form-control" id="sel1" name="sellist1" style="height: 40px; font-size: medium;">
                                            <option value="" selected disabled>Pilih Paket</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="card-header text-center">
                        <h3>Pembayaran</h3>
                    </div>
                    <div class="card-body">
                        <!-- Data Logic -->

                        <form action="<?php echo base_url('keranjang/save_buat_pesanan') ?>" method="POST" role="form">
                            <div class="col-md-8">
                                <?php
                                $total = 0;
                                $qty = 0;
                                ?>
                                <?php
                                foreach ($data_produk as $data_produk2) {
                                ?>
                                    <input type="hidden" value="<?php echo $data_produk2->harga ?>">
                                    <input type="hidden" value="<?php echo $data_produk2->jumlah ?>">
                                    <input type="hidden" value="<?php echo $sub_total = $data_produk2->harga * $data_produk2->jumlah ?>">
                                    <!-- Untuk Menyimpan Data Total -->
                                    <input type="hidden" name="" value="<?php echo $total2 = $total + ($data_produk2->harga * $data_produk2->jumlah) ?>">
                                    <!-- Untuk Menyimpan Data Total QTY -->
                                    <input type="hidden" name="" value="<?php echo $qty2 = $qty + ($data_produk2->jumlah) ?>">
                                    <input type="text" name="id_produk" value="<?php echo $data_produk2->id_produk ?>">
                                    <input type="text" name="nama_produk" value="<?php echo $data_produk2->nama_produk ?>">
                                    <input type="text" name="warna" value="<?php echo $data_produk2->warna ?>">
                                    <input type="text" name="harga_final" value="<?php echo $data_produk2->harga ?>">
                                <?php
                                } ?>
                            </div>
                            <input type="hidden" name="sub_qty" value="<?php echo $qty2; ?>">
                            <input type="hidden" name="grand_total" value="<?php echo $total2; ?>">
                            <input type="hidden" name="id_pelanggan" value="<?php echo $this->session->userdata('id') ?>">
                            <input type="hidden" name="id_order" value="<?php echo $this->uri->segment(3); ?>">




                            <hr>
                            <h3>Total Item</h3>
                            <p><?php echo $qty2; ?></p>
                            </hr>
                            <hr>
                            <h3>Subtotal</h3>
                            <p><?php echo "Rp. "   . number_format($total2) . ",-" ?></p> <!-- Mencetak Jumlah pembelian -->
                            </hr>
                            <hr>
                            <h3>Biaya Pengiriman</h3>
                            <p>Rp. 20.000</p>
                            </hr>
                            <hr>
                            <h3><b>Total</b></h3>
                            <p>Rp. 20.000</p>
                            </hr>
                            <hr>
                            <button type="submit" class="btn btn-lg float-right" style="color: white;background: linear-gradient(to right, #ff99cc 0%, #ff6699 100%); font-size: 18px;">Selesaikan Pesanan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5">

            <div class="col-md-8">
                <h2>Produk Pesanan</h2>
                <?php $total = 0;
                $qty = 0;

                ?>
                <?php
                foreach ($data_produk as $data_produk) {
                ?>
                    <div class="card mb-3 shadow-sm bg-white rounded" style="min-height: 95px;">
                        <input type="hidden" id="harga" value="<?php echo $data_produk->harga ?>">
                        <input type="hidden" id="jumlah" value="<?php echo $data_produk->jumlah ?>">
                        <input type="hidden" id="total" value="<?php echo $sub_total = $data_produk->harga * $data_produk->jumlah ?>">


                        <div class="row no-gutters">
                            <div class="col-md-2 text-center mt-2">
                                <img src="<?php echo base_url() ?>assets/Gambar/foto_produk/<?php echo $data_produk->gambar_produk ?>" alt="..." width="80px" height="80px">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $data_produk->nama_produk ?></h5>
                                    <p><?php echo "Rp. "   . number_format($data_produk->harga) . ",-" ?> </p>
                                </div>
                            </div>
                            <div class="col-md-2 mt-4 text-center">
                                <div class="card-body">
                                    <p><?php echo $data_produk->jumlah; ?></p>
                                </div>
                            </div>
                            <form action="<?php echo base_url('keranjang/delete_produk_keranjang/' . $data_produk->id_keranjang) ?>" method="POST">
                                <div class="col-md-1 mt-4 text-center">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-danger btn-lg"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Untuk Menyimpan Data Total -->
                    <input type="hidden" name="" value="<?php echo $total = $total + ($data_produk->harga * $data_produk->jumlah) ?>">
                    <!-- Untuk Menyimpan Data Total QTY -->
                    <input type="hidden" name="" value="<?php echo $qty = $qty + ($data_produk->jumlah) ?>">

                <?php
                } ?>
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