<?php

if (!$data_produk) {
    redirect(base_url("Homepage"));
}

?>

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

        <form action="<?php echo base_url('keranjang/save_buat_pesanan') ?>" method="POST" role="form">
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
                                    <input type="text" name="nama_penerima" class="form-control" style="height: 40px; font-size: medium;" placeholder="Nama Penerima" required>
                                    <input type="hidden" name="status" value="1">
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="9" maxlength="14" name="no_penerima" class="form-control" style="height: 40px; font-size: medium;" placeholder="No Handphone Penerima | Contoh: 081333999222" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" required>
                                    <small>Pastikan Nomor Handphone Anda Teraktifasi Dengan Aplikasi Whatsapp</small>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email_penerima" class="form-control" style="height: 40px; font-size: medium;" placeholder="Email Penerima" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="alamat_penerima" class="form-control" id="" cols="30" rows="10" style="font-size: medium; height: 130px;" placeholder="Alamat Lengkap" required></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- <select class="form-control" id="provinsi_penerima" name="provinsi_penerima" style="height: 40px; font-size: medium;" required>
                                                <option value="" selected disabled>Provinsi</option>
                                                <?php foreach ($data_provinsi->result() as $row) : ?>
                                                    <option value="<?php echo $row->id; ?>"><?php echo $row->nama; ?></option>
                                                <?php endforeach; ?>
                                            </select> -->
                                            <input type="hidden" id="provinsi_nama" name="provinsi_penerima" value="">
                                        </div>
                                        <div class="col-md-6">
                                            <!-- <select class="form-control" id="kabupaten_penerima" name="kabupaten_penerima" style="height: 40px; font-size: medium;" required>
                                                <option value="" selected disabled>Kabupaten</option>
                                                <option value=""></option>
                                            </select> -->
                                            <input type="hidden" id="kota_nama" name="kabupaten_penerima" value="">
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6 mt-3">
                                            <select class="form-control" id="kecamatan_penerima" name="kecamatan_penerima" style="height: 40px; font-size: medium;" required>
                                                <option value="" selected disabled>Kecamatan</option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <select class="form-control" id="kelurahan_penerima" name="kelurahan_penerima" style="height: 40px; font-size: medium;" required>
                                                <option value="" selected disabled>Kelurahan</option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="form-group">
                                    <input type="text" minlength="5" maxlength="7" name="kode_pos" class="form-control" style="height: 40px; font-size: medium;" placeholder="Kode POS" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" required>
                                </div>

                                <div class="form-group mt-5">
                                    <div class="row">
                                        <div class="col-md-6 mb-2 mt-2">
                                            <b><label for="">Provinsi</label></b>
                                            <select class="form-control" id="provinsi" name="provinsi" style="height: 40px; font-size: medium;" required></select>

                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <b><label for="">Kabupaten/Kota</label></b>
                                            <select class="form-control" id="kota" name="kota" style="height: 40px; font-size: medium;" required></select>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="exampleInputEmail1"><strong>Kurir Pengiriman</strong></label>
                                    <div class="row">
                                        <div class="col-md-6 mb-2 mt-2">
                                            <b><label for="">Expedisi</label></b>
                                            <select class="form-control" id="expedisi" name="expedisi" style="height: 40px; font-size: medium;" required></select>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <b><label for="">Paket Layanan</label></b>
                                            <select class="form-control" id="paket_layanan" name="paket_layanan" style="height: 40px; font-size: medium;" required></select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p style="font-variant: initial;"><b>Keterangan:</b> Total Berat Belanja Akan Dihitung Berat Minimum Expedisi</p>
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
                            <div class="col-md-8">
                                <?php
                                $total2 = 0;
                                $qty2 = 0;
                                $berat = 0;
                                ?>
                                <?php
                                foreach ($data_produk as $data_produk2) {
                                ?>
                                    <input type="hidden" value="<?php echo $data_produk2->harga ?>">
                                    <input type="hidden" value="<?php echo $data_produk2->jumlah ?>">
                                    <input type="hidden" value="<?php echo $sub_total = $data_produk2->harga * $data_produk2->jumlah ?>">
                                    <!-- Untuk Menyimpan Data Total -->
                                    <?php if ($data_produk2->status_promo == 0) { ?>
                                        <input type="hidden" name="" value="<?php echo $total2 = $total2 + ($data_produk2->harga * $data_produk2->jumlah) ?>">
                                    <?php } else { ?>
                                        <input type="hidden" name="" value="<?php echo $total2 = $total2 + ($data_produk2->hargadiskon * $data_produk2->jumlah) ?>">
                                    <?php } ?>

                                    <!-- Untuk Menyimpan Data Total QTY -->
                                    <input type="hidden" name="grand_qty" value="<?php echo $qty2 = $qty2 + ($data_produk2->jumlah) ?>">
                                    <!-- Untuk Menyimpan Data Total Berat -->
                                    <input type="hidden" name="berat" value="<?php echo $berat = $berat + ($data_produk2->berat * $data_produk2->jumlah)  ?>">

                                    <input type="hidden" name="sub_qty[]" value="<?php echo $data_produk2->jumlah ?>">
                                    <input type="hidden" name="id_produk[]" value="<?php echo $data_produk2->id_produk ?>">
                                    <input type="hidden" name="nama_produk[]" value="<?php echo $data_produk2->nama_produk ?>">
                                    <input type="hidden" name="warna[]" value="<?php echo $data_produk2->warna ?>">

                                    <?php if ($data_produk2->status_promo == 0) { ?>
                                        <input type="hidden" name="harga_final[]" value="<?php echo $data_produk2->harga; ?>">
                                    <?php } else { ?>
                                        <input type="hidden" name="harga_final[]" value="<?php echo $data_produk2->hargadiskon; ?>">
                                    <?php } ?>

                                    <input type="hidden" name="id_attribut[]" value="<?php echo $data_produk2->id_attribut ?>">

                                <?php
                                } ?>
                            </div>

                            <input type="hidden" name="grand_total" value="<?php echo $total2; ?>">
                            <input type="hidden" name="id_pelanggan" value="<?php echo $this->session->userdata('id') ?>">
                            <input type="hidden" name="id_order" value="<?php echo $this->uri->segment(3); ?>">
                            <input type="hidden" name="biaya_ongkir" id="biaya_ongkir" value="">
                            <input type="hidden" name="total" id="total" value="">
                            <input type="hidden" name="jasa_pengiriman" id="jasa_pengiriman" value="">
                            <input type="hidden" name="jenis_layanan" id="jenis_layanan" value="">
                            <input type="hidden" name="biaya_pengiriman" id="biaya_pengiriman" value="">



                            <hr>
                            <h3>Total Item</h3>
                            <p><?php echo $qty2; ?></p>
                            </hr>
                            <hr>
                            <h3>Subtotal</h3>
                            <p><?php echo "Rp. "   . number_format($total2) . ",-" ?></p> <!-- Mencetak Jumlah pembelian -->
                            </hr>
                            <hr>
                            <h3>Berat</h3>
                            <p><?= $berat; ?> <b>Gram</b></p>
                            </hr>
                            <hr>
                            <h3>Biaya Pengiriman</h3>
                            <p><label id="ongkir"></label></p>
                            </hr>
                            <hr>
                            <h3><b>Total</b></h3>
                            <p><label id="total_bayar"></label></p>
                            </hr>
                            <hr>
                            <button type="submit" class="btn btn-lg " style="color: white;background: linear-gradient(to right, #ff99cc 0%, #ff6699 100%); font-size: 15px; margin: auto; position: relative; width: 100%;">Selesaikan Pesanan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

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
                            <div class="col-md-5">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $data_produk->nama_produk ?></h5>
                                    <?php if ($data_produk2->status_promo == 0) { ?>
                                        <p><?php echo "Rp. "   . number_format($data_produk->harga) . ",-" ?> </p>
                                    <?php } else { ?>
                                        <p><?php echo "Rp. "   . number_format($data_produk->hargadiskon) . ",-" ?> </p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-2 mt-2 text-center">
                                <div class="card-body">
                                    <h5 class="card-title">Warna</h5>
                                    <p><?php echo $data_produk->warna; ?></p>
                                </div>
                            </div>
                            <div class="col-md-2 mt-2 text-center">
                                <div class="card-body">
                                    <h5 class="card-title">Kuantitas</h5>
                                    <p><?php echo $data_produk->jumlah; ?> pcs</p>
                                </div>
                            </div>
                            <form action="<?php echo base_url('keranjang/delete_produk_keranjang/' . $data_produk->id_keranjang) ?>" method="POST">
                                <div class="col-md-1 mt-4 text-center">
                                    <div class="card-body">
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

    <script type="text/javascript" src="<?php echo base_url() . 'assets/Bootstrap/js/jquery-3.4.1.min.js' ?>"></script>

    <!-- ajax Menampilkan Data Kabupaten -->
    <script type="text/javascript">
        $(document).ready(function() {

            $('#provinsi_penerima').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo site_url('keranjang/wilayah_kabupaten'); ?>",
                    method: "POST",
                    data: {
                        id: id
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {

                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<option value=' + data[i].id + '>' + data[i].nama + '</option>';
                        }
                        $('#kabupaten_penerima').html(html);

                    }
                });
                return false;
            });

        });
    </script>

    <!-- ajax Menampilkan Data Kecamatan -->
    <script type="text/javascript">
        $(document).ready(function() {

            $('#kabupaten_penerima').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo site_url('keranjang/wilayah_kecamatan'); ?>",
                    method: "POST",
                    data: {
                        id: id
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {

                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<option value=' + data[i].id + '>' + data[i].nama + '</option>';
                        }
                        $('#kecamatan_penerima').html(html);

                    }
                });
                return false;
            });

        });
    </script>

    <!-- ajax Menampilkan Data kelurahan -->
    <script type="text/javascript">
        $(document).ready(function() {

            $('#kecamatan_penerima').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo site_url('keranjang/wilayah_desa'); ?>",
                    method: "POST",
                    data: {
                        id: id
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {

                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<option value=' + data[i].id + '>' + data[i].nama + '</option>';
                        }
                        $('#kelurahan_penerima').html(html);

                    }
                });
                return false;
            });

        });
    </script>

    <!-- ajax Data kota dan provinsi dari API Raja ongkir -->
    <script>
        $(document).ready(function() {
            // Masukan Data Ke Select Provinsi
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Rajaongkir/provinsi'); ?>",
                success: function(hasil_provinsi) {
                    // console.log(hasil_provinsi);
                    $("select[name=provinsi]").html(hasil_provinsi);
                }
            });

            // Masukan Data Ke Select Kota
            $("select[name=provinsi]").on("change", function() {
                var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('Rajaongkir/kota') ?>",
                    data: 'id_provinsi=' + id_provinsi_terpilih,
                    success: function(hasil_kota) {
                        // console.log(hasil_kota);
                        $("select[name=kota]").html(hasil_kota);
                    }
                });

            });

            // Masukan Data Ke Select Expedisi
            $("select[name=kota]").on("change", function() {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('Rajaongkir/expedisi') ?>",
                    success: function(hasil_expedisi) {
                        // console.log(hasil_expedisi);
                        $("select[name=expedisi]").html(hasil_expedisi);
                    }
                });
            });

            // Masukan Data Ke Select Paket Layanan
            $("select[name=expedisi]").on("change", function() {
                // Untuk Mendapatkan Expedisi yang terpilih
                var expedisi_terpilih = $("select[name=expedisi]").val()
                // Untuk Mendapatkan Kota Terpilih
                var id_kota_tujuan_terpilih = $("option:selected", "select[name=kota]").attr('id_kota');
                //untuk Mendapatkan Berat
                var total_berat = 2300;
                //alert(id_kota_tujuan_terpilih);
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('Rajaongkir/paket') ?>",
                    data: 'expedisi=' + expedisi_terpilih + '&id_kota=' + id_kota_tujuan_terpilih + '&berat=' + <?= $berat ?>,
                    success: function(hasil_paket) {
                        // console.log(hasil_expedisi);
                        $("select[name=paket_layanan]").html(hasil_paket);
                    }
                });
            });

            // Mengirimkan Biaya Ongkir ke Input Form
            $("select[name=paket_layanan]").on("change", function() {

                // UntuK Menampilkan Biaya Ongkir
                var dataongkir = $("option:selected", this).attr('ongkir');
                // UntuK Menampilkan Jenis Layanan
                var jenis_layanan = $("option:selected", this).attr('jenis_layanan');
                document.getElementById("jenis_layanan").value = jenis_layanan;
                // Untuk Mendapatkan Expedisi yang terpilih
                var expedisi_final = $("select[name=expedisi]").val()
                document.getElementById("jasa_pengiriman").value = expedisi_final;

                // Untuk Mendapatkan Nama Provinsi yang terpilih
                var nama_prov = $("option:selected", "select[name=provinsi]").attr('nama_provinsi');
                document.getElementById("provinsi_nama").value = nama_prov;

                // Untuk Mendapatkan Nama Kabupaten yang terpilih
                var nama_kab = $("option:selected", "select[name=kota]").attr('nama_kota');
                document.getElementById("kota_nama").value = nama_kab;

                // Untuk input ke attribut input Biaya Ongkir
                document.getElementById("biaya_ongkir").value = dataongkir;
                // Format Angka ke RUpiah
                var reverse = dataongkir.toString().split('').reverse().join(''),
                    ribuan_ongkir = reverse.match(/\d{1,3}/g);
                ribuan_ongkir = ribuan_ongkir.join(',').split('').reverse().join('');
                $("#ongkir").html("Rp. " + ribuan_ongkir); // Menampilkan Data Ke label


                // Untuk Menghitung Total Bayar
                var ongkir = $("option:selected", this).attr('ongkir');
                var total_bayar = parseInt(ongkir) + parseInt(<?= $total2 ?>);
                // Untuk input ke attribut input total
                document.getElementById("total").value = total_bayar;
                // Format Angka ke RUpiah
                var reverse = total_bayar.toString().split('').reverse().join(''),
                    ribuan_total = reverse.match(/\d{1,3}/g);
                ribuan_total = ribuan_total.join(',').split('').reverse().join('');
                $("#total_bayar").html("Rp. " + ribuan_total); // Menampilkan Data Ke label
            });


        });
    </script>



</body>

</html>