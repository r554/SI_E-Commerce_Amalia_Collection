<?php

if (!$this->session->userdata('nama')) {
    redirect(base_url("Auth_Admin"));
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amalia Collection</title>

    <script type="text/javascript">
    setInterval("auto_refresh_function();", 500);

    function auto_refresh_function() {
        $('#load_content').load('data_produk/save_warna');
    }
    </script>

    <?php $this->load->view('Backend/template/head'); ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php $this->load->view('Backend/template/navbar'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="<?= base_url() ?>assets/Frontend_mobi/assets/images/amalialogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><b>Amalia</b> Collection</span>
            </a>

            <!-- Sidebar -->
            <?php $this->load->view('Backend/template/sidebar'); ?>
            <!-- /.sidebar -->
        </aside>


        <!-- Content Wrapper. Contains page content ini Bagian Breadcom -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Edit Produk</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Edit Produk</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->



            <!-- Main content Ini Bagian Content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Ini Bagian Konten -->


                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Produk</h3>
                                </div>
                                <!-- /.card-header -->
                                <?php


                                ?>
                                <!-- form start -->
                                <form action="<?php echo base_url('data_produk/edit'); ?>" method="post" role="form"
                                    enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="id_produk"
                                                value="<?php echo $edit[0]->id_produk ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Pilih Kategori</label>
                                            <select class="form-control" id="id_kategori" name="id_kategori"
                                                style="height: 40px; font-size: medium;">
                                                <option value="" selected disabled>
                                                    <?php echo $edit[0]->nama_kategori ?>
                                                </option>
                                                <?php foreach ($kategori->result() as $row) : ?>
                                                <option value="<?php echo $row->id_kategori; ?>">
                                                    <?php echo $row->nama_kategori; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label>Pilih Jenis</label>
                                            <input name="id_jenis" type="hidden"
                                                value="<?php echo $edit[0]->id_jenis ?>">
                                            <select class="form-control" id="id_jenis" name="id_jenis"
                                                style="height: 40px; font-size: medium;">
                                                <option value="" selected disabled>
                                                    <?php echo $edit[0]->nama_jenis ?>
                                                </option>
                                                <option value=""></option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Produk</label>
                                            <input type="text" class="form-control" name="nama_produk"
                                                value="<?php echo $edit[0]->nama_produk ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="text" class="form-control" name="harga"
                                                value="<?php echo $edit[0]->harga ?>"
                                                onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" required
                                                oninvalid="this.setCustomValidity('Harga Tidak Boleh Kosong!')"
                                                oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <input type="text" class="form-control" name="deskripsi"
                                                value="<?php echo $edit[0]->deskripsi ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Berat Produk</label>
                                            <input type="text" class="form-control" name="berat_produk"
                                                value="<?php echo $edit[0]->berat_produk ?>">
                                        </div>
                                        <!-- <div class="form-group">
                                            <input name="gambar_produk" type="file"
                                                value="<?php echo $edit[0]->gambar_produk ?>">
                                            <img width="350px"
                                                src="<?php echo base_url() ?>assets/Gambar/foto_produk/<?php echo $edit[0]->gambar_produk; ?>"
                                                alt="">
                                        </div> -->
                                        <label>Gambar Produk</label>
                                        <input name="gambar_produk" type="file" multiple accept='image/*'
                                            id="menu_images" value="<?php echo $edit['0']->gambar_produk ?>">
                                        <input name="gambar_produk" type="hidden"
                                            value="<?php echo $edit['0']->gambar_produk ?>">

                                        <img src="<?php echo base_url() ?>assets/Gambar/foto_produk/<?php echo $edit['0']->gambar_produk ?>"
                                            alt="" width="200px" hight="200px">

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="<?= base_url('data_produk/tampil') ?>"><button type="button"
                                                    class="btn btn-success">Kembali</button></a>
                                        </div>


                                        <!--/.col (right) -->
                                </form>
                                <!-- /.row -->
                            </div><!-- /.container-fluid -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Ini Akhir Konten -->




            <!-- Main Footer -->
            <?php $this->load->view('Backend/template/footer'); ?>

        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->
        <?php $this->load->view('Backend/template/js'); ?>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {

        $('#id_kategori').change(function() {
            var id = $(this).val();
            $.ajax({
                url: "<?php echo site_url('data_produk/jenis'); ?>",
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
                        html += '<option value=' + data[i].id_jenis + '>' + data[i]
                            .nama_jenis +
                            '</option>';
                    }
                    $('#id_jenis').html(html);

                }
            });
            return false;
        });

    });
    </script>
</body>

</html>