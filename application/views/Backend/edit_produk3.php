<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amalia Collection</title>

    <?php $this->load->view('Backend/template/head'); ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('Backend/template/navbar'); ?>
        <!-- /.navbar -->

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                <img src="assets/Frontend_mobi/assets/images/amalialogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><b>Amalia</b> Collection</span>
            </a>

            <!-- Sidebar -->
            <?php $this->load->view('Backend/template/sidebar'); ?>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Edit Produk</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Data Produk</a></li>
                                <li class="breadcrumb-item active">Edit Produk</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>


            <!-- Main content -->
            <section class="content">

                <div class="container-fluid">

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
                                        <input type="text" class="form-control" name="id_produk"
                                            value="<?php echo $edit[0]->id_produk ?>">

                                        <div class="form-group">
                                            <label>Pilih Kategori</label>
                                            <select class="form-control" id="id_kategori" name="id_kategori"
                                                style="height: 40px; font-size: medium;" required>
                                                <option value="" selected disabled>Kategori</option>
                                                <?php foreach ($kategori->result() as $row) : ?>
                                                <option value="<?php echo $row->id_kategori; ?>">
                                                    <?php echo $row->nama_kategori; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pilih Jenis</label>
                                            <select class="form-control" id="id_jenis" name="id_jenis"
                                                style="height: 40px; font-size: medium;" required>
                                                <option value="" selected disabled>Jenis</option>
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
                                            <input type="Number" class="form-control" name="harga"
                                                value="<?php echo $edit[0]->harga ?>">
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
                                        <div class="form-group">
                                            <input name="gambar_produk" type="file"
                                                value="<?php echo $edit[0]->gambar_produk ?>">
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="<?= base_url('data_produk/tampil') ?>"><button type="button"
                                                    class="btn btn-success">Kembali</button></a>




                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!--/.col (right) -->
                                </form>
                                <!-- /.row -->
                            </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php $this->load->view('Backend/template/footer'); ?>
        <!-- Control Sidebar -->

        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    </div>
    </div>
    </section>



    <!-- jQuery -->
    <?php $this->load->view('Backend/template/js'); ?>

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