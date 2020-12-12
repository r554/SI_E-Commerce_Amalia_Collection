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
            <div class="col-sm-9 col-md-8">
                <?php echo $this->session->flashdata('success'); ?>
                 <h2 class="title">Edit Profil</h2>
                        <hr>
                        <?php echo $this->session->flashdata('failed'); ?>                        
                        <form action="<?= base_url(); ?>profile/updateProfile/<?php echo $_SESSION["id"]; ?>" method="post" enctype="multipart/form-data">
                        <?php foreach($dataprofile->result_array() as $d): ?>
                            <div class="form-group">
                                <label for="Username">Username</label>
                                <input type="hidden"  name="id_pelanggan" value="<?= $d['id_pelanggan']; ?>" class="form-control" id="name" required autocomplete="off" disabled>
                                <input type="text" style="height: 40px; font-size: medium;"  name="username_pelanggan" value="<?= $d['username_pelanggan']; ?>" class="form-control" id="name" required autocomplete="off" disabled>                                
                            </div>
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="email" name="email_pelanggan" value="<?= $d['email_pelanggan']; ?>" class="form-control" id="name" required autocomplete="off" disabled>                                
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" name="nama_pelanggan" value="<?= $d['nama_pelanggan']; ?>" class="form-control" id="name" required autocomplete="off">                                
                            </div>
                            <div class="form-group">
                                <label for="nohp">No HP</label>
                                <input type="number" name="no_pelanggan" value="<?= $d['no_pelanggan']; ?>" class="form-control" id="name" required autocomplete="off">                                
                            </div>
                            <div class="form-group">
                                <label for="Alamat">Alamat Lengkap</label>
                                <input type="text" name="alamat_pelanggan" value="<?= $d['alamat_pelanggan']; ?>" class="form-control" id="name" required autocomplete="off">                                
                            </div>
                            <div class="form-group">
                                <label for="Kabupaten">Kabupaten</label>
                                <input type="text" name="kabupaten" value="<?= $d['kabupaten']; ?>" class="form-control" id="name" required autocomplete="off">                                
                            </div>
                            <div class="form-group">
                                <label for="Provinsi">Provinsi</label>
                                <input type="text" name="provinsi" value="<?= $d['provinsi']; ?>" class="form-control" id="name" required autocomplete="off">                                
                            </div>
                            <div class="form-group">
                                <label for="Kode Pos">Kode Pos</label>
                                <input type="number" name="kode_pos" value="<?= $d['kode_pos']; ?>" class="form-control" id="name" required autocomplete="off">                                
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" name="password_pelanggan" value="<?= $d['password_pelanggan']; ?>" class="form-control" id="name" required autocomplete="off">                                
                            </div>                            
                            <?php endforeach; ?>
                            <button class="btn btn-dark">Update</button>
                        </form>                         
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


</body>

</html>