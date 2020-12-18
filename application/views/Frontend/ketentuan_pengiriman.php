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
            <div class="col-sm-9 col-md-8 mx-auto text-center">
                <h1>KETENTUAN PENGEMBALIAN</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <h3><b>KETENTUAN PENGIRIMAN :</b></h3>
                <br>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">WAKTU PENGIRIMAN</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">CEK STATUS PENGIRIMAN</a>
                    </li>
                    <!-- <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                    </li> -->
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <br>
                        <P style=" text-align: justify;text-justify: inter-word;">
                            Terkait Peraturan Menteri Perhubungan Nomor PM 25 tahun 2020 tentang Pengendalian Transportasi Selama Masa Mudik Idul Fitri Tahun 2020 Dalam Rangka Pencegahan Penyebaran Covid 19, hal ini berdampak terhadap keterlambatan seluruh pengiriman barang via udara. Berikut area2 yang paling terdampak :
                            Kalimantan, Sulawesi, Maluku, Papua, NTT ( pengiriman menggunakan pesawat cargo charter).
                            Sumatera, Bali, Lombok
                            Selain kendala penerbangan, untuk area-area yang telah menerapkan Pembatasan Sosial Berskala Besar ( beberapa area akan ada keterlambatan pengiriman mengingat adanya penutupan ruas jalan yang dilakukan oleh pemerintah daerah setempat ).
                        </P>

                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <br>
                        <P style=" text-align: justify;text-justify: inter-word;">
                            Amalia Collection akan mengirimkan informasi pengiriman melalui email beserta tautan untuk cek status pesanan dan nomor resi kepada pelangan.
                            <br>
                            <br>
                            Pelanggan dapat cek ke website masing - masing jasa pengiriman : <br>
                            JNE : Http://Www.Jne.Co.Id/ <br>
                            TIKI : https://www.tiki.id/id/tracking <br>
                            POS INDONESIA : https://www.posindonesia.co.id/id/tracking <br>
                        </P>
                    </div>
                    <!-- <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div> -->
                </div>

                <br>
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