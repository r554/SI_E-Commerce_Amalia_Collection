<style>
    input[type=a] {
        border: none;
        background-color: none;
        outline: 0;
        font-size: 18px;
        width: 200px;
        height: 20px;

    }

    input[type=number] {
        border: none;
        background-color: none;
        outline: 0;
        font-size: 18px;
        width: 70px;
        height: 20px;
    }
</style>

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
        <div class="navigation">
            <a href="<?= base_url(); ?>">Home</a>
            <i class="fa fa-caret-right"></i>
            <a href="<?= base_url(); ?>homepage/detail_product/<?= $product['id_produk']; ?>"><?= $product['nama_produk']; ?></a>
            <i class="fa fa-caret-right"></i>
            <a><?= $product['nama_produk']; ?></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-4" style="background-color:lavenderblush;">
                    <div class="img">
                        <a href="<?= base_url(); ?>assets/Gambar/foto_produk/<?= $product['gambar_produk']; ?>" data-lightbox="img-1">
                            <img src="<?= base_url(); ?>assets/Gambar/foto_produk/<?= $product['gambar_produk']; ?>" alt="produk" class="jumbo-thumb">
                        </a>
                        <div class="img-slider">
                            <!-- <img src="<?= base_url(); ?>assets/Gambar/foto_produk/<?= $product['gambar_produk']; ?>" alt="gambar" class="thumb"> -->
                            <?php foreach ($img->result_array() as $d) : ?>
                                <img src="<?= base_url(); ?>assets/Gambar/foto_produk/<?= $d['foto']; ?>" alt="gambar" class="thumb">
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                <nav class="navbar sticky-top navbar-transparent bg-transparent">
                <div class="card border-white">
                    <form action="<?= base_url('keranjang/save_keranjang_beli') ?>" method="POST">
                        <div class="ket">
                            <h1 class="title"><?= $product['nama_produk']; ?></h1>
                            <!-- <p class="subtitle">Terjual <?= $product['transaction']; ?> Produk &bull; <?= $product['viewer']; ?>x Dilihat</p> -->
                            <hr>
                            <table class="table table-borderless">
                                <?php if ($product['status_promo'] == 0) { ?>
                                    <tr>
                                        <td>Harga</td>
                                        <input type="hidden" id="harga" name="harga" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" value="<?= $product['harga']; ?>" />
                                        <td style="text-align:center" class="price">Rp <?= str_replace(",", ".", number_format($product['harga'])); ?></td>
                                    </tr>
                                <?php } else { ?>
                                    <tr>
                                        <td>Harga</td>
                                        <td style="text-align:center" class="oldPrice">Rp <?= str_replace(",", ".", number_format($product['harga'])); ?></td>
                                    </tr>
                                    <tr class="newPrice">
                                        <td>Promo</td><input type="hidden" id="harga" name="harga" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" value="<?= $product['hargadiskon']; ?>" />
                                        <td style="text-align:center" class="price">Rp <?= str_replace(",", ".", number_format($product['hargadiskon'])); ?></td>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <td>Berat</td>
                                    <td style="text-align:center"><?= $product['berat_produk']; ?> gram</td>
                                </tr>
                                <tr>
                                    <td>Warna</td>
                                    <!-- <td style="text-align:center"><?= $product['warna']; ?></td> -->
                                    <td><select id="attribut" name="attribut" style="height: 40px; font-size: medium;" required>
                                            <option value="" selected disabled> - Pilih Warna -</option>
                                            <?php foreach ($attribut as $row) : ?>
                                                <?php if ($row->qty >= 1) { ?>
                                                    <option value="<?php echo $row->id_attribut; ?>" warna="<?php echo $row->warna; ?>" stok="<?php echo $row->qty; ?>"><?php echo $row->warna; ?></option>
                                                <?php } else { ?>
                                                    <option value="<?php echo $row->id_attribut; ?>" disabled warna="<?php echo $row->warna; ?>" stok="<?php echo $row->qty; ?>"><?php echo $row->warna; ?> (STOK KOSONG)</option>
                                                <?php } ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Stok</td>
                                    <td style="text-align:center"><label id="stok"></label></td>
                                </tr>
                                <tr>
                                    <?php if ($product['status_promo'] == 0) { ?>
                                        <?php $priceP = $product['harga']; ?>
                                    <?php } else { ?>
                                        <?php $priceP = $product['hargadiskon']; ?>
                                    <?php } ?>
                                    <td>Jumlah</td>
                                    <td style="text-align:center">
                                        <input type="number" min="1" max="" placeholder="QTY" name="jumlah" id="jumlah" onchange="OnChange(this.value)" onfocusout="return isNumberKey(event)" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>
                                        <input type="text" name="totalharga" id="total" placeholder="<?php echo "Rp. "   . number_format($product['harga']) . ",-" ?>" disabled>
                                    </td>
                                </tr>

                                <hr>
                                <tr>
                                    <?php if ($product['qty'] == 0) { ?>
                                        <td>
                                            <input type="hidden" name="id_pelanggan" value="<?php echo $this->session->userdata('id') ?>"> <!-- id Pelanggan -->
                                            <input type="hidden" name="id_produk" value="<?php echo $product['id_produk'] ?>"> <!-- id Produk -->
                                            <input type="hidden" name="warna1" id="warna1" value=""> <!-- warna Produk -->
                                            <input type="hidden" name="berat_produk" value="<?php echo $product['berat_produk'] ?>"> <!-- berat Produk -->
                                            <input type="hidden" name="jumlah1" id="jumlah1" />
                                            <input type="hidden" name="jumlah2" id="jumlah2" />
                                            <button type="submit" disabled class="btn btn-warning pl-5 pr-5 btn-lg" style="font-size: 15px">Beli</button>
                                        </td>
                                        <td>
                                            <button type="submit" disabled class="btn btn-primary btn-lg" style="font-size: 15px" formaction="<?= base_url('keranjang/save_keranjang') ?>">Tambah ke Keranjang</button>
                    </form>
                    </td>
                <?php } else { ?>
                    <td>
                        <input type="hidden" name="id_pelanggan" value="<?php echo $this->session->userdata('id') ?>"> <!-- id Pelanggan -->
                        <input type="hidden" name="id_produk" value="<?php echo $product['id_produk'] ?>"> <!-- id Produk -->
                        <input type="hidden" name="warna" id="warna" value=""> <!-- warna Produk -->
                        <input type="hidden" name="berat_produk" value="<?php echo $product['berat_produk'] ?>"> <!-- berat Produk -->
                        <input type="hidden" name="jumlah1" id="jumlah1" />
                        <input type="hidden" name="jumlah2" id="jumlah2" />
                        <button type="submit" class="btn btn-warning pl-5 pr-5 btn-lg" style="font-size: 15px">Beli</button>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-primary btn-lg" style="font-size: 15px" formaction="<?= base_url('keranjang/save_keranjang') ?>">Tambah ke Keranjang</button>
                        </form>
                    </td>
                <?php } ?>
                </tr>
                </table>
                </div>
                </nav>
                </div>
            </div>
        </div>
        <hr>
        <div class="description">
            <h3>
                <p>Deskripsi Produk</p>
            </h3>
            <?= nl2br($product['deskripsi']); ?>
        </div>
        <hr>
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

            document.getElementById("jumlah1").value = jumlah; // Mengirim QTY Ke input form
            document.getElementById("jumlah2").value = jumlah; // Mengirim QTY Ke input form
            // Format Angka ke RUpiah
            var reverse = total.toString().split('').reverse().join(''),
                ribuan_ongkir = reverse.match(/\d{1,3}/g);
            ribuan_ongkir = ribuan_ongkir.join(',').split('').reverse().join('');
            $("#total").val("Rp. " + ribuan_ongkir); // Menampilkan Data Ke tag input
        }

        // SweetAlert
        const flashData = $('.flash-data').data('flashdata');

        if (flashData) {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Produk Ditambahkan ke Keranjang',

            })
        }


        $("select[name=attribut]").on("change", function() {

            // UntuK Menampilkan Biaya Ongkir
            var stok_warna = $("option:selected", this).attr('stok'); // Menangkap Inputan Dari Dropdown dari atribut stok
            var warna = $("option:selected", this).attr('warna'); // Menangkap Inputan Dari Dropdown dari atribut warna
            //alert(stok_warna);
            $("#stok").html(stok_warna);
            //$("#max").html(stok_warna);
            document.getElementById("jumlah").max = stok_warna; // Mengambil Inputan Dari Dropdown dan mengirimnya ke Tag Input Atribut max
            document.getElementById("warna").value = warna; // Mengambil Inputan Dari Dropdown
            document.getElementById("warna1").value = warna;
            // UntuK Menampilkan Jenis Layanan
            //var jenis_layanan = $("option:selected", this).attr('jenis_layanan');
            //document.getElementById("jenis_layanan").value = jenis_layanan;

        });
    </script>

</body>

</html>