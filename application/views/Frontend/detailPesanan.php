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
            <div class="col-sm-9 col-md-8 mx-auto text-center">
                
                <div class="wrapper">
                        <div class="core"> 
                            <h2 class="title">Detail Pesanan</h2>
                            <hr>
                            <table class="table table-sm table-borderless">
                                <tr>
                                    <td>Order ID</td>
                                    <td><?= $ord['id_order']; ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Pesan</td>
                                    <td><?= $ord['tanggal_order']; ?></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <?php if($ord['status'] == 1){ ?>
                                        <td>Belum Dibayar</td>
                                    <?php }else if($ord['status'] == 2){ ?>
                                        <td>Menunggu konfirmasi</td>
                                    <?php }else if($ord['status'] == 3){ ?>
                                        <td>Sedang Diproses</td>
                                    <?php }else if($ord['status'] == 4){ ?>
                                        <td>Sedang Dikirim</td>
                                    <?php }else if($ord['status'] == 5){ ?>
                                        <td>Selesai</td>
                                    <?php }else if($ord['status'] == 6){ ?>
                                        <td>Dibatalkan</td>      
                                    
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <td>Total Pembayaran</td>
                                    <th class="text-primary">Rp<?= number_format($ord['total'],0,",","."); ?></th>
                                </tr>
                            </table>
                            <hr>
                            <hr>
                            <h2 class="title">Alamat Pengiriman</h2>
                            <hr>
                            <table class="table table-sm table-borderless">
                                <tr>
                                    <td>Nama Penerima</td>
                                    <td><?= $ord['nama_penerima']; ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td><?= $ord['alamat_penerima']; ?></td>
                                </tr>                                
                                <!-- <tr>
                                    <td></td>
                                    <td><?= $_SESSION["kabupaten"]; ?> <?= $_SESSION["provinsi"]; ?> - <?= $ord['kode_pos']; ?></td>
                                </tr> -->
                                <tr>
                                    <td></td>
                                    <td><?= $ord['kabupaten_penerima']; ?> - <?= $ord['provinsi_penerima']; ?> - <?= $ord['kode_pos']; ?></td>
                                </tr>
                                <tr>
                                    <td>Telepon</td>
                                    <td><?= $ord['no_penerima']; ?></td>
                                </tr>
                            </table>
                            <hr>
                            <hr>
                            <div class="row">
                                <div class="col-md-7">
                                    <h2 class="title mb-3">Produk Pesanan</h2>
                                    <?php foreach($product_order->result_array() as $p): ?>
                                        <div class="item-product">
                                            <!-- <img src="<?= base_url(); ?>assets/Gambar/foto_produk/<?= $p['gambar_produk']; ?>" alt="produk <?= $p['nama_produk']; ?>"> -->
                                            <a href="<?= base_url('homepage/detail_product/') ?><?= $p['id_produk']; ?>"><h3 class="product_name mb-0"><?= $p['nama_produk']; ?></h3></a>                                            
                                            <p class="mb-0">Jumlah: <?= $p['sub_qty']; ?></p>
                                            <p class="mb-0 price">Rp<?= number_format($p['harga_final'] * $p['sub_qty'],0,",","."); ?></p>
                                            <div class="clearfix"></div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="col-md-5">
                                    <h2 class="title">Ringkasan Pembayaran</h2>
                                    <table class="table table-sm table-borderless">
                                        <tr>
                                            <td>Jumlah Jenis Produk</td>
                                            <td>: <?= $product_order->num_rows(); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Harga Produk</td>
                                            <td>: Rp<?= number_format($ord['grand_total'],0,",","."); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jasa</td>
                                            <td><?= $ord['jasa_pengiriman']; ?> - <?= $ord['jenis_layanan']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Ongkis Kirim</td>
                                            <td>: Rp<?= number_format($ord['biaya_pengiriman'],0,",","."); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Total Belanja</td>
                                            <td>: Rp<?= number_format($ord['total'],0,",","."); ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <hr>
                            <?php if($ord['status'] != "cod"){ ?>
                            <hr>
                            <?php
                            if($ord['status'] == 3){
                                $sedpros = 100;
                                $dalpen = 0;
                                $satuj = 0;
                            }else if($ord['status'] == 4){
                                $sedpros = 100;
                                $dalpen = 100;
                                $satuj = 0;
                            }else if($ord['status'] == 5){
                                $sedpros = 100;
                                $dalpen = 100;
                                $satuj = 100;
                            }else if($ord['status'] == 6){
                                $batal = 100;                                
                            }else if($ord['status'] == 1){
                                $belumbayar = 100;                                
                            }else if($ord['status'] == 2){
                                $menunggukonfirmasi = 100;                                
                            }                            
                            ?>
                            <h2 class="title mb-3">Status Pesanan</h2>
                            <div class="row">
                            <?php if($ord['status'] == 1){ ?>
                                <div class="col-md-12">
                                    <p class="text-muted mb-1">Lakukan Pembayaran</p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="<?= $belumbayar; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $belumbayar; ?>%"></div>
                                    </div>                                  
                                </div>
                                <?php }else if($ord['status'] == 2){ ?>
                                <div class="col-md-12">
                                    <p class="text-muted mb-1">Menunggu Konfirmasi</p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="<?= $menunggukonfirmasi; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $menunggukonfirmasi; ?>%"></div>
                                    </div>                                  
                                </div>
                                <?php }else if($ord['status'] <= 5){ ?>
                                <div class="col-md-4">
                                    <p class="text-muted mb-1">Sedang diproses</p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="<?= $sedpros; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $sedpros; ?>%"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <p class="text-muted mb-1">Dalam pengiriman</p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="<?= $dalpen; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $dalpen; ?>%"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <p class="text-muted mb-1">Sampai Tujuan</p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="<?= $satuj; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $satuj; ?>%"></div>
                                    </div>
                                </div>                                
                                    <?php }else if($ord['status'] == 6){ ?>
                                <div class="col-md-12">
                                    <p class="text-muted mb-1">Dibatalkan</p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="<?= $batal; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $batal; ?>%"></div>
                                    </div>
                                </div>
                                <!-- <?php }else if($ord['status'] == 1) { ?>
                                <div class="col-md-12">
                                    <p class="text-muted mb-1">Lakukan Pembayaran</p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="<?= $belumbayar; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $belumbayar; ?>%"></div>
                                    </div>                                  
                                </div>
                                <?php }else if($ord['status'] == 2) { ?>
                                <div class="col-md-12">
                                    <p class="text-muted mb-1">Menunggu Konfirmasi</p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="<?= $menunggukonfirmasi; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $menunggukonfirmasi; ?>%"></div>
                                    </div>                                  
                                </div>        -->
                                    <?php } ?>
                                
                            </div>
                            
                        </div>
                    </div>
                    <?php } ?>
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