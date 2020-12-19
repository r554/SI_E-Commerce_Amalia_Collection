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
    <!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success') ?>"> -->
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
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                    </div>
                </div>
            </div>



            <!-- Main content Ini Bagian Content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Ini Bagian Konten -->
                    <?php
                    // Cek apakah terdapat session nama message
                    if ($this->session->flashdata('edit')) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Data Berhasil Di Ubah</h5>
                    </div>
                    <?php }
                    ?>
                    <?php
                    // Cek apakah terdapat session nama message
                    if ($this->session->flashdata('hapus')) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Data Berhasil Di Hapus</h5>
                    </div>
                    <?php }
                    ?>



                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
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
                                            <textarea class="form-control"
                                                name="deskripsi"><?php echo $edit[0]->deskripsi ?> </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Berat Produk</label>
                                            <input type="number" class="form-control" name="berat_produk"
                                                value="<?php echo $edit[0]->berat_produk ?>">
                                        </div>
                                        <label>Gambar Produk</label>
                                        <input name="gambar_produk" id="menu_images" type="file" multiple
                                            accept='image/*' value="<?php echo $edit['0']->gambar_produk ?>">
                                        <input name="gambar_produk" type="hidden"
                                            value="<?php echo $edit['0']->gambar_produk ?>">

                                        <img src="<?php echo base_url() ?>assets/Gambar/foto_produk/<?php echo $edit['0']->gambar_produk ?>"
                                            alt="" width="200px" height="200px">

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="<?= base_url('data_produk/tampil') ?>"><button type="button"
                                                    class="btn btn-success">Kembali</button></a>
                                        </div>
                                    </div>
                                    <!--/.col (right) -->
                                </form>
                                <!-- /.row -->
                            </div><!-- /.container-fluid -->
                        </div>
                        <!-- Kolom Kanan -->
                        <div class="col-md-6">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Warna dan Stok</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <div class="card-body table-responsive p-0">

                                    <input type="hidden" required>
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Warna</th>
                                                <th>Stok</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($warnastok as $attribut) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $attribut->warna; ?></td>
                                                <td><?php echo $attribut->qty; ?></td>
                                                <td>

                                                    <a
                                                        href="<?= base_url('data_produk/edit_warna_stok/' . $attribut->id_attribut) ?>">
                                                        <button type="button" class="btn btn-success btn-xs"
                                                            type="button "><i class="far fa-edit">
                                                                Edit</i></button></a>
                                                    <a
                                                        href="<?= base_url('data_produk/hapus_warna/' . $attribut->id_attribut . '/' .  $attribut->id_produk) ?>"><button
                                                            class="btn btn-danger btn-xs" type="button "><i
                                                                class="fas fa-trash-alt">
                                                                Hapus</i></button></a>

                                                </td>


                                            </tr>
                                            <?php
                                            } ?>
                                        </tbody>

                                    </table>

                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" data-toggle="modal"
                                        data-target="#modal-stok">
                                        Tambah
                                    </button>

                                </div>
                                <!-- /.card-body -->

                            </div>
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
    <div class="modal fade" id="modal-stok">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Warna dan Stok</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url("data_produk/save_warna_edit") ?>" method="post" role="form"
                        enctype="multipart/form-data">
                        <input type="hidden" name="id_produk" value="<?php echo $edit[0]->id_produk ?>">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Warna</label>
                            <input type="text" class="form-control" name="warna">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Stok</label>
                            <input type="text" class="form-control" name="qty">
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>

                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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


    // const flashData = $('.flash-data').data('flashdata');

    // if (flashData) {
    //     Swal.fire(
    //         'Berhasil',
    //         'Berhasil Ubah Data Produk',
    //         'success'
    //     )
    // }
    </script>
</body>

</html>