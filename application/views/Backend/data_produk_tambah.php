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

    <?php $this->load->view('Backend/template/head'); ?>
    <!-- DataTables -->
    <link rel="stylesheet"
        href="<?php echo base_url() ?>assets/Admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url() ?>assets/Admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url() ?>assets/Admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php $this->load->view('Backend/template/navbar'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url('Homepage') ?>" class="brand-link">
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
                            <h1 class="m-0">Data Produk</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Produk</li>
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
                        <!-- Kolom Kiri -->
                        <div class="col-md-6">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Tambah Data Produk</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="<?php echo base_url("data_produk/save") ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="card-body">
                                        <!-- <label>ID Produk</label> -->
                                        <input name="id_produk" type="hidden" class="form-control"
                                            value="<?php echo $invoice ?>">
                                        <input name="status_produk" type="hidden" class="form-control" value="1">
                                        <input name="status_promo" type="hidden" class="form-control" value="0">

                                        <div class="form-group">
                                            <label>Pilih Kategori</label>
                                            <select class="form-control" id="id_kategori" name="id_kategori"
                                                style="height: 40px; font-size: medium;" required>
                                                <option value="" selected disabled>Kategori</option>
                                                <?php foreach ($kategori->result() as $row) :
                                                ?>
                                                <option value="<?php echo $row->id_kategori;
                                                                    ?>">
                                                    <?php echo $row->nama_kategori;
                                                        ?></option>
                                                <?php endforeach;
                                                ?>
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
                                            <input name="nama_produk" type="teks" class="form-control"
                                                placeholder="Masukkan Nama Produk" required
                                                oninvalid="this.setCustomValidity('Nama Produk Tidak Boleh Kosong!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input name="harga" min="1" type="number" class="form-control"
                                                placeholder="Masukkan Harga (Harus Angka)"
                                                onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" required
                                                oninvalid="this.setCustomValidity('Harga Tidak Boleh Kosong!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <input name="deskripsi" type="teks" class="form-control"
                                                placeholder="Masukkan Deskripsi" required
                                                oninvalid="this.setCustomValidity('Deskripsi Tidak Boleh Kosong!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="form-group">
                                            <label>Berat Produk</label>
                                            <input name="berat_produk" min="1" type="number" class="form-control"
                                                placeholder="Masukkan Berat Produk (Harus Angka)"
                                                onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" required
                                                oninvalid="this.setCustomValidity('Harga Tidak Boleh Kosong!')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="form-group">
                                            <input type='file' multiple accept='image/*' id="menu_images"
                                                name="gambar_produk" required
                                                oninvalid="this.setCustomValidity('Gambar Tidak Boleh Kosong!')"
                                                oninput="setCustomValidity('')" />
                                            <img class="img-fluid" id="gambar" src="#" alt="Pilih Gambar"
                                                OnError=" $(this).hide();" height="500px" width="500px" />
                                        </div>

                                        <?php
                                        if (!$attribut) {
                                            echo "Anda Belum Menambahkan Warna Produk";
                                        } else { ?>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                        <?php }
                                        ?>

                                        <!-- /.card-footer -->
                                    </div>
                                </form>
                            </div>
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
                                            foreach ($attribut as $attribut) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $attribut->warna; ?></td>
                                                <td><?php echo $attribut->qty; ?></td>
                                                <td>
                                                    <a
                                                        href="<?php echo base_url("data_produk/hapus_warna_tambah/" . $attribut->id_attribut . "/" . $attribut->id_produk) ?>"><button
                                                            type="button" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Warna Pada Produk Ini?')">Hapus</button></a>
                                                </td>

                                            </tr>
                                            <?php
                                            } ?>
                                        </tbody>

                                    </table>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" data-toggle="modal"
                                        data-target="#modal-stok">
                                        Tambah
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Ini Akhir Konten -->



                    <!-- Main Footer -->
                    <?php $this->load->view("Backend/template/footer"); ?>
                </div>
                <!-- ./wrapper -->

                <!-- REQUIRED SCRIPTS -->
                <?php $this->load->view('Backend/template/js'); ?>
                <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
            </section>
        </div>
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
                    <form action="<?php echo base_url("data_produk/save_warna") ?>" method="post" role="form"
                        enctype="multipart/form-data">
                        <input type="hidden" name="id_produk" value="<?php echo $invoice ?>">
                        <div class="form-group">
                            <label for="exampleInputWarna">Warna</label>
                            <input type="text" class="form-control" name="warna">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputStok">Stok</label>
                            <input type="number" class="form-control" name="qty"
                                onkeyup="this.value=this.value.replace(/[^0-9]/g,'')">
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
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#gambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#menu_images").change(function() {
        $('#gambar').show();
        readURL(this);
    });
    </script>
    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view('Backend/template/js'); ?>
</body>

</html>