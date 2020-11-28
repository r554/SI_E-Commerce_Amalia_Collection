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
                <h1>Area Content</h1>
                <div class="wrapper">
                    <div class="core">
                <h2 class="title">Pesanan Anda</h2>
                <?php echo $_SESSION["nama"]; ?><p>
            <?php echo $_SESSION["no_hp"]; ?><p>            
            <?php echo $_SESSION["alamat"]; ?><p>
            <?php echo $_SESSION["id"]; ?><p>
                <hr>
                <?php if($order->num_rows() > 0){ ?>
                <table class="table table-bordered">
                <tr>
                    <th>Order ID</th>
                    <th>Tanggal Pesan</th>
                    <th>Total Pembayaran</th>
                    <th>Status</th>
                    <th>#</th>
                </tr>
                <?php foreach($order->result_array() as $d): ?>
                      <tr>
                        <td><?= $d['id_order']; ?></td>
                        <td><?= $d['tanggal_order']; ?></td>
                        <td><?= $d['grand_total']; ?></td>
                        <td><?= $d['status']; ?></td>
                       <td><small><a href="pesanan_saya/detail_order/<?= $d['id_order']; ?>" class="text-info">Detail</a></small></td>
                    </tr>
                    <?php endforeach; ?>
                    </table>
                    <?php }else{ ?>
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


</body>

</html>