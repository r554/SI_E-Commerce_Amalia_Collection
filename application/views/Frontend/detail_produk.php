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
    <div class="navigation">
        <a href="<?= base_url(); ?>">Home</a>
        <i class="fa fa-caret-right"></i>
        <a href="<?= base_url(); ?>data_produk/detail_product/<?= $product['id_produk']; ?>"><?= $product['nama_produk']; ?></a>
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
                    <!-- <div class="img-slider">
                        <img src="<?= base_url(); ?>assets/Gambar/foto_produk/<?= $product['gambar_produk']; ?>" alt="gambar" class="thumb">
                        <?php foreach($img->result_array() as $d): ?>
                            <img src="<?= base_url(); ?>assets/Gambar/foto_produk/<?= $d['gambar_produk']; ?>" alt="gambar" class="thumb">
                        <?php endforeach; ?>
                    </div> -->
                </div>
        </div>
    <div class="col-sm-4">
            <div class="ket">
                <h1 class="title"><?= $product['nama_produk']; ?></h1>
                <!-- <p class="subtitle">Terjual <?= $product['transaction']; ?> Produk &bull; <?= $product['viewer']; ?>x Dilihat</p> -->
                <hr>
                <table class="table table-borderless">
                    <?php if($product['status_promo'] == 1){ ?>
                        <tr>
                            <td >Harga</td>
                            <input type="hidden"  id="harga" name="harga"onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)"
                            value="<?= $product['harga']; ?>" />
                            <td style="text-align:center" class="price">Rp <?= str_replace(",",".",number_format($product['harga'])); ?></td>
                        </tr>
                    <?php }else{ ?>
                        <tr>
                            <td >Harga</td>
                            <td style="text-align:center" class="oldPrice">Rp <?= str_replace(",",".",number_format($product['harga'])); ?></td>
                        </tr>
                        <tr class="newPrice">
                            <td>Promo</td><input type="hidden"  id="harga" name="harga"onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)"
                            value="<?= $product['hargadiskon']; ?>" />
                            <td style="text-align:center" class="price">Rp <?= str_replace(",",".",number_format($product['hargadiskon'])); ?></td>
                        </tr>
                    <?php } ?>                    
                    <tr>
                        <td >Berat</td>
                        <td style="text-align:center"><?= $product['berat_produk']; ?> gram</td>
                    </tr>
                    <tr>
                        <td >Stok</td>
                        <td style="text-align:center"><?= $product['qty']; ?> produk</td>
                    </tr>
                    <tr>
                        <?php if($product['status_promo'] == 0){ ?>
                            <?php $priceP = $product['harga']; ?>
                        <?php }else{ ?>
                            <?php $priceP = $product['hargadiskon']; ?>
                        <?php } ?>
                        <td >Jumlah</td>
                        <td style="text-align:center">
                        <span><input type="number" min="1" max="<?= $product['qty']; ?>"  placeholder="QTY"name="jumlah" id="jumlah" onchange="OnChange(this.value)" onfocusout="return isNumberKey(event)"
                        /></span>
                        </td>
                    </tr>
                    <tr>
                        <td >Total</td>
                        
                        <td style="text-align:center">Rp.<input type="a" name="totalharga" id="total" placeholder="<?= $product['harga']; ?>" disabled /></span></td>
                    </tr>
                </table>
                <hr>
                <button class="btn btn-warning pl-5 pr-5 btn-lg" style="font-size: 18px" onclick="buy()">Beli</button>
                <button class="btn btn-primary btn-lg" style="font-size: 18px" onclick="addCart()">Tambah ke Keranjang</button>
            </div>
        </div>
    </div>
    <hr>
    <div class="description">
        <h3><p>Deskripsi Produk</p></h3>
        <?= nl2br($product['deskripsi']); ?>
    </div>
    <hr>
</div>
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
    

<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script type="text/javascript" language="Javascript">
    function OnChange(value) {
        var harga = $("#harga").val();
        var jumlah = $("#jumlah").val();

        var total = parseInt(harga) * parseInt(jumlah);
        $("#total").val(total);
    }
</script>

</body>
</html>