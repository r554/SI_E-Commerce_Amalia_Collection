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
                <h1>Riwayat Pesanan</h1>
                <div class="wrapper">
                    <div class="core">
                <!-- <h2 class="title">Pesanan Anda</h2> -->
                <!-- <?php echo $_SESSION["nama"]; ?><p>
            <?php echo $_SESSION["no_hp"]; ?><p>            
            <?php echo $_SESSION["alamat"]; ?><p>
            <?php echo $_SESSION["id"]; ?><p> -->
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
                        <td>Rp <?= str_replace(",",".",number_format($d['grand_total'])); ?></td>
                        <?php if($d['status'] == 1){ ?>
                            <td>Belum dibayar</td>
                        <?php }else if($d['status'] == 2){ ?>
                            <td>Menunggu konfirmasi</td>
                        <?php }else if($d['status'] == 3){ ?>
                            <td>Sedang diproses</td>
                        <?php }else if($d['status'] == 4){ ?>
                            <td>Sedang dikirim</td>
                        <?php }else if($d['status'] == 5){ ?>
                            <td>Selesai</td>
                        <?php }else if($d['status'] == 6){ ?>
                            <td>Dibatalkan</td>    
                        <?php } ?>
                        
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

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Konfirmasi Pembayaran</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>          
        </div>
        <div class="modal-body">
        <p><strong>BRI</strong><br />
                    Atas Nama : Amalia<br />
                    No Rekening : 7273829372</p>
                <p><strong>BCA</strong><br />
                    Atas Nama : Amalia<br />
                    No Rekening : 567828262819</p>
                <p><strong>OVO</strong><br />
                    Atas Nama : Amalia<br />
                    No Rekening : 081333768257</p>
                    <hr>
        <form action="<?php echo base_url("bukti_pembayaran/save") ?>" method="POST" enctype="multipart/form-data">
        <h4>Upload Bukti Pembayaran</h4>
            <div class="col xm-8 col-md-12">                    
                    <p>ID Transaksi Anda :
                        <input type="hidden" name="id_order" value="<?= $d['id_order']; ?>">
                        <input type="text" name="id" value="<?= $d['id_order']; ?>"disabled>
                    </p>
                    <p>Silahkan Upload Bukti Pembayaran :
                        <input type='file' id="file" name="foto_bukti" />
                        <img class="img-fluid" id="gambar" src="#" alt="Pilih Gambar" OnError=" $(this).hide();"
                            height="500px" width="500px" />
                    </p>
            </div>          
        </div>
        <div class="modal-footer">
        <input type="submit" class="btn btn-success btn-lg" value="Kirim">
        </div>        
      </div>
      </form>
    </div>
  </div>
    <!-- Footer -->
    <?php $this->load->view('Frontend/template/footer') ?>
    <!-- End Footer -->


    <!-- Java Script -->
    <?php $this->load->view('Frontend/template/js') ?>
    <!-- End Java Script -->
    <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#gambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#file").change(function() {
        $('#gambar').show();
        readURL(this);
    });
    </script>

</body>

</html>