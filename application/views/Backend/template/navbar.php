<nav class="main-header navbar navbar-expand navbar-white navbar-light ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">

            <a class="nav-link" data-toggle="dropdown" href="#">
                <?php $foto_admin = $this->session->userdata('foto_admin') ?>
                <img src="<?php echo base_url() ?>assets/Gambar/foto_profil/<?php echo $foto_admin ?>"
                    class="img-circle elevation-20 " width="30px">
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="<?php echo base_url('Homepage') ?>">
                        <span class="dropdown-item dropdown-header">Amalia Collection</span>
                    </a>
                    <div class="dropdown-divider dropdown-menu dropdown-menu-lg dropdown-menu-right"></div>
                    <?php $id_user = $this->session->userdata('kd_pengguna') ?>

                    <a href="<?php echo base_url('Admin/profil/tampil/' . $id_user) ?>" class="dropdown-item">
                        Edit Profil
                        <span class="float-right text-muted text-sm"></span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo base_url('Admin/profil/ubah_password/' . $id_user) ?>"
                        class="dropdown-item">Ubah
                        Password
                        <span class="float-right text-muted text-sm"></span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo base_url('Auth_Admin/logout') ?>" class="dropdown-item">Log Out
                        <span class="float-right text-muted text-sm"></span>
                    </a>

                </div>


        </li>
    </ul>
</nav>
</a>