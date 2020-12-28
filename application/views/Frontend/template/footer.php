<footer id="" class="section footer">
    <div class="container2">
        <div class="footer-container">
            <?php
            $no = 1;
            foreach ($footer as $z) {
            ?>
            <div class="footer-center">
                <h3>MEDIA SOSIAL</h3>
                <a href="https://www.instagram.com/<?php echo $z->instagram; ?>/ "> Instagram</a>

                <a href="https://web.facebook.com/<?php echo $z->facebok; ?>/"> Facebook</a>

                <a href="https://twitter.com/<?php echo $z->twiter; ?>/"> Twitter</a>

                <a href="https://www.youtube.com/<?php echo $z->youtube; ?>/"> Youtube</a>

                <a href="https://line.me/id/<?php echo $z->fax; ?>/"> Line</a>
                <a href="https://mail.google.com/<?php echo $z->email; ?>/">
                    Email</a>
                <a href="https://api.whatsapp.com/send/?phone=<?php echo $z->no_telepon; ?>">
                    WhatsApp </a>

            </div>
            <div class="footer-center">
                <h3>INFORMASI TAMBAHAN</h3>
                <a href="<?php echo base_url('blog/tampil_tentangkami_frontend') ?>">Tentang Kami</a>
                <a href="<?php echo base_url('Page/syarat_penggunaan') ?>">Privasi Dan Kebijakan</a>
                <a href="<?php echo base_url('blog/tampil_tutorial') ?>">Blog</a>
                <!-- <a href="#">blogletter</a>
                    <a href="#">Returns</a> -->
            </div>
            <div class="footer-center">
                <h3>ALAMAT</h3>
                <a
                    href="https://www.google.com/maps/place/Amalia+collection/@-8.2732573,113.3688685,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd663703403958d:0xc691acd0f91f4677!8m2!3d-8.2732573!4d113.3710625">
                    <p> <?php echo $z->Alamat; ?> </p>
                </a>
            </div>

            <div class="footer-center">
                <h3 class="text-center"></h3>
                <div class="col-6 col-md-6 ">
                    <div class="google-map"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.2965708227107!2d113.36887381433182!3d-8.27325198544883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd663703403958d%3A0xc691acd0f91f4677!2sAmalia%20collection!5e0!3m2!1sen!2sid!4v1603956166325!5m2!1sen!2sid"
                            frameborder="0" style="border:0;" allowfullscreen="" width="400px" height="250px"></iframe>
                    </div>
                </div>

                <!-- <div>
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                        Jalan Sama Aku Nikah Sama DIA
                    </div> -->
                <!-- <div>
                        <span>
                            <i class="far fa-envelope"></i>
                        </span>
                        Amalia@gmail.com
                    </div>
                    <div>
                        <span>
                            <i class="fas fa-phone"></i>
                        </span>
                        081111555444
                    </div>
                    <div>
                        <span>
                            <i class="far fa-paper-plane"></i>
                        </span>
                        Umbulsari, Jember
                    </div> -->
            </div>
            <?php } ?>
        </div>
    </div>
    </div>
</footer>