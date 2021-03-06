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
        <div class="row">
            <div class="col-md-7">
                <h3 class="title">Terima Kasih Telah Berbelanja di Amalia Collection</h3>
                <hr>
                <h4>Kode Pesanan Anda adalah <b><?php echo $this->session->userdata('id_order') ?></b> Simpan KODE
                    PESANAN Ini</h4>
                <p>Kami telah mengirimkan email kepada Anda yang berisi tagihan pesanan. Cek folder Inbox atau Spam
                    untuk
                    melihat email yang kami kirim.</p>
                <hr>
                <strong>Mohon Untuk Melakukan Pembayaran Sebesar
                    <h2 class="text-primary"><?php echo "Rp. "   . number_format($data_order['0']->total) . ",-" ?></h2>
                    <p> </p>
                    <p>ke rekening
                        dibawah
                        ini (pilih salah satu): </p>
                </strong>
                <p><strong>BRI</strong><br />
                    Atas Nama : Amalia<br />
                    No Rekening : 0372-04-876907-67-6</p>
                <p><strong>BCA</strong><br />
                    Atas Nama : Amalia<br />
                    No Rekening : 731 026 0977</p>
                <p>Jika sudah melakukan pembayaran, silakan melakukan konfirmasi pembayaran <a
                        href="<?= base_url('pesanan_saya'); ?>"><button type="button" class="btn btn-info btn-lg">klik
                            disini</button></a>
                    atau bisa melalui Whatsapp <?= $this->config->item('whatsapp') ?> atau <a
                        href="https://wa.me/08984050435<?= $this->config->item('whatsappv2') ?>" target="_blank">klik
                        disini</a>
                    dengan
                    format sebagai berikut:</p>
                <table>
                    <tr>
                        <td>1. Kode Pesanan : Kode Pesanan</strong></td>
                    </tr>
                    <tr>
                        <td>2. Transfer Dari Bank : </td>
                    </tr>
                    <tr>
                        <td>3. Transfer Ke Bank : </td>
                    </tr>
                    <tr>
                        <td>*Sertakan juga bukti transfer</td>
                    </tr>
                </table>
                </p>
            </div>
        </div>

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


</body>

</html>