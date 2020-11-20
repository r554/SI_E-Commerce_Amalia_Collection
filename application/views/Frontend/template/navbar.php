<nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
    <div class="container">
        <div class="navbar-brand">
            <span class="navbar-logo">
                <a href="https://mobiri.se">
                    <img src="<?php echo base_url() ?>assets/Frontend_mobi/assets/images/amalialogo.png" alt="Mobirise"
                        style="height: 3rem;">
                </a>
            </span>
            <span class="navbar-caption-wrap"><a class="navbar-caption text-secondary display-7"
                    href="https://mobiri.se">Amalia Collection</a></span>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo base_url("Homepage/cari") ?>">
                <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                <button class="btn my-2 my-sm-0" type="submit">Search</button>
            </form>

            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item"><a class="nav-link link text-secondary display-4" href="https://mobiri.se">
                        Registrasi</a></li>
                <li class="nav-item"><a class="nav-link link text-secondary display-4" href="https://mobiri.se">
                        Sign In</a></li>
                <li class="nav-item"><a class="nav-link link text-secondary display-4" href="https://mobiri.se"> <img
                            src="<?php echo base_url() ?>assets/Frontend_mobi/assets/images/keranjang1.png"></a>
                    </a></li>

            </ul>
        </div>
    </div>
</nav>