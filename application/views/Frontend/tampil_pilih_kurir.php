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
    <div class="container mt-4 mb-4">
        <div class="row mt-2">
            <a href="<?= base_url(); ?>" class="btn btn-danger ml-3">Kembali</a>
            <div class="col-12 mt-2">


                <div class="card">
                    <div class="card-body">
                        Pengiriman dari <h5>

                        </h5> dan Tujuan ke
                        <h5> </h5>
                        @ <h5>Kg</h5>

                    </div>
                </div>
                <hr>
                <div class="col-12 mt-2">
                    <div class="row">
                        <div class="col-3">
                            <h5>KURIR</h5>
                        </div>
                        <div class="col-3">
                            <h5>JENIS LAYANAN</h5>
                        </div>
                        <div class="col-2">
                            <h5>TARIF</h5>
                        </div>
                        <div class="col-2">
                            <h5>ESTIMASI</h5>
                        </div>
                        <div class="col-2">
                            <h5>PILIH</h5>
                        </div>
                    </div>
                    <hr>
                </div>
                <form action="<?= base_url('keranjang/update_ongkir') ?>" method="POST">
                    <input type="hidden" name="id_order" value="<?= $this->uri->segment(3) ?>">
                    <?php foreach ($hasil as $kurir) :
                        $semuakurir = $kurir->rajaongkir->results;
                        foreach ($semuakurir as $layanankurir) :
                            $kodekurir = strtoupper($layanankurir->code);
                            $namakurir = strtoupper($layanankurir->name);
                            $ambildatacosts = $layanankurir->costs;

                            foreach ($ambildatacosts as $costs) :
                                $biaya = $costs->cost;
                                foreach ($biaya as $ongkir) :

                    ?>
                                    <div class="card mt-2">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <h4><?= $kodekurir; ?></h4>
                                                    <p><?= $namakurir; ?></p>
                                                    <input type="hidden" name="jasa_pengiriman" value="<?= $namakurir; ?>">
                                                </div>
                                                <div class="col-3">
                                                    <h4><?= $costs->service; ?></h4>
                                                    <p><?= $costs->description; ?></p>
                                                    <input type="hidden" name="jenis_layanan" value="<?= $costs->service; ?>">
                                                </div>
                                                <div class="col-2">
                                                    <h3 class="text-primary">RP <?= $ongkir->value; ?></h3>
                                                    <input type="hidden" name="biaya_pengiriman" value="<?= $ongkir->value; ?>">
                                                </div>
                                                <div class="col-2">
                                                    <h3 class="text-danger"><?= $ongkir->etd; ?></h3>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <button type="submit" class="btn btn-info btn-lg">Pilih Kurir</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                    <!--jika diisi field -->
            </div>
            </form>
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