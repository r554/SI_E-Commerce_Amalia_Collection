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
                <h1 class="text-center">KETENTUAN PENGEMBALIAN</h1>

                <br>
                <p>1. Anda dapat melakukan pengembalian barang dalam jangka waktu 14 hari (termasuk hari libur) terhitung sejak barang Anda terima. Saat Anda menerima barang sudah terhitung sebagai 1 hari.<br>
                    2. Produk harus dikirimkan dalam kondisi asli dan berada dalam kotak kemasan lengkap dengan aksesoris terkait dan "hang tags".<br>
                    3. Produk tidak dalam keadaan rusak, kotor, telah dipakai, dan tercelup/terkena air.<br>
                    4. Kemasan utuh dan tidak rusak, penyok, pecah, sobek, terlipat atau tergores.<br>
                    5. Harap tidak mengisolasi kotak secara berlebihan tetapi cukup membungkusnya untuk mencegah kerusakan. Barang tersebut tetap menjadi tanggung jawab Anda sampai Hijabneka menerimanya.<br>
                    6. Mohon bantuan Anda untuk mengembalikan paket dengan hati-hati.<br>
                    7. Pihak Amalia akan melakukan pengecekan kembali akan kualitas produk yang dikembalikan. Apabila ada persyaratan yang tidak dipenuhi, Amalia berhak menolak pengembalian produk tersebut.<br>
                    8. 1 nomor pesanan hanya dapat memilih 1 jenis metode pengembalian (tukar barang/refund)<br>
                    9. Dalam Membuka Paket Wajib Untuk Merekam video hingga Selesai, kemudian hasil rekaman video dikirimkan pada kami. <b>Jika Anda Mengabaikan ini Anda Tidak Dapat Melakukan Refund.</b><br>
                </p>
                <br>
                <?php $id_order = $this->uri->segment('3'); ?>
                <a href="<?= base_url('Pesanan_saya/form_pengembalian_produk/' . $id_order) ?>"><button class="btn btn-primary btn-lg float-right">Saya Setuju dan lanjutkan</button></a>
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