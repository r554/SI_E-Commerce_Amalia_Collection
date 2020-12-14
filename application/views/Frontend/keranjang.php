<body>

    <?php
    if ($this->session->flashdata('success')) { ?>
        <!-- swetalert -->
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success') ?>"> </div>
        <!-- End swetalert -->
    <?php } else { ?>
        <!-- Pre Loader -->
        <div class="preloader" id="preloader">
            <div class="loader"></div>
        </div>
        <!-- End Pre Loader -->
    <?php } ?>

    <!-- Adverts -->
    <div class="adverts">
        <span>This website was built by Indanah Group</span>
    </div>
    <!-- End Adverts -->


    <!-- Bagian Content -->
    <div class="container">
        <div class="row mb-5 mt-5">
            <div class="col-md-12 text-center">
                <h1>KERANJANG BELANJA</h1>
            </div>
        </div>

        <!-- Cek Kondisi apakah ada data di tabel keranjang -->
        <?php
        if ($data_produk == null) { ?>
            <div class="row">
                <div class="col-md-8 mt-5 mb-5 alert alert-danger">
                    <h3><b>Kamu Belum Menambahkan Produk Ke keranjang!!!</b> <a href="<?= base_url('Homepage') ?>">Yuk Belanja Sekarang</a></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mt-5 mb-5 mx-auto">
                    <img src="<?php echo base_url() ?>assets/Frontend/images/shop.svg" alt="">
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="row mb-5">
                <div class="col-md-8">
                    <?php
                    $total = 0;
                    $qty = 0;
                    $berat = 0;
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

                                <div class="col-md-1 mt-4 text-center">
                                    <div class="card-body">
                                        <a href="<?= base_url(); ?>keranjang/delete_produk_keranjang/<?= $data_produk->id_keranjang; ?>" class="btn btn-danger btn-lg tombol-hapus"><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Untuk Menyimpan Data Total -->
                        <input type="hidden" name="" value="<?php echo $total = $total + ($data_produk->harga * $data_produk->jumlah) ?>">
                        <!-- Untuk Menyimpan Data Total QTY -->
                        <input type="hidden" name="" value="<?php echo $qty = $qty + ($data_produk->jumlah) ?>">
                        <!-- Untuk Menyimpan Data Total Berat -->
                        <input type="hidden" name="" value="<?php echo $berat = $berat + ($data_produk->berat * $data_produk->jumlah) ?>">

                    <?php
                    } ?>
                </div>


                <div class="col-md-4">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="card-header text-center">
                            <h3>Pembayaran</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url('keranjang/save_order/' . $id_order) ?>" method="post" role="form">
                                <input type="hidden" name="grand_qty" value="<?php echo $qty; ?>">
                                <input type="hidden" name="grand_total" value="<?php echo $total; ?>">
                                <input type="hidden" name="id_pelanggan" value="<?php echo $this->session->userdata('id') ?>">
                                <input type="hidden" name="id_order" value="<?php echo $id_order ?>">
                                <hr>
                                <h3>Total Item</h3>
                                <p> <?php echo $qty ?></p> <!-- Mencetak Jumlah item pembelian -->
                                </hr>
                                <hr>
                                <h3>Total Harga</h3>
                                <p><?php echo "Rp. "   . number_format($total) . ",-" ?></p> <!-- Mencetak Jumlah pembelian -->
                                </hr>
                                <hr>
                                <h3>Berat</h3>
                                <p> <?php echo $berat ?> <b>Gram</b></p>
                                <button type="submit" class="btn btn-lg" style="color: white;background: linear-gradient(to right, #ff99cc 0%, #ff6699 100%); font-size: 15px; margin: auto; position: relative; width: 100%;">Buat Pesanan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

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

    <!-- SweetAlert JS -->
    <script src="<?= base_url() ?>assets/sweetalert/sweetalert2.min.js"></script>
    <!-- SweetAlert JS -->


    <!-- Java Script -->
    <?php $this->load->view('Frontend/template/js') ?>
    <!-- End Java Script -->

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


    <script type="text/javascript" language="Javascript">
        function OnChange(value) {
            var harga = $("#harga").val();
            var jumlah = $("#jumlah").val();

            var total = parseInt(harga) * parseInt(jumlah);
            $("#total").val(total);
        }

        // Tombol Hapus Keranjang
        $('.tombol-hapus').on('click', function(e) {

            e.preventDefault();

            const href = $(this).attr('href'); // Ambil data dari tombol yang sedang di klik dimana attributnya adalah href

            Swal.fire({
                title: 'Apa Anda Yakin?',
                text: "Menghapus Produk Dari Keranjang",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus Produk'
            }).then((result) => {
                if (result.value) {

                    document.location.href = href; // Aksi Untuk Melakukan Hyperlink
                    // Swal.fire(
                    //     'Deleted!',
                    //     'Your file has been deleted.',
                    //     'success'
                    // )
                }
            })

        })

        const flashData = $('.flash-data').data('flashdata');

        if (flashData) {
            Swal.fire(
                'Berhasil',
                'Produk Dihapus Dari Keranjang',
                'success'
            )
        }
    </script>




</body>

</html>