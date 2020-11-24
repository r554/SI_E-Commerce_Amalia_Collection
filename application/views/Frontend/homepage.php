<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/Frontend/images/amalia.png" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;900&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <!-- Glidejs StyleSheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css" />

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- StyleSheet -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/Frontend/styles.css" />
    <title>Amalia</title>





</head>

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

    <!-- Header -->
    <header class="header" id="header">
        <nav class="navigation">
            <div class="nav-center container">
                <a href="#home" class="logo">
                    <h1>AM<span>A</span>LIA <span>COLLECTION</span></h1>
                </a>

                <div class="nav-menu">
                    <div class="nav-top">
                        <div class="logo">
                            <h1>AM<span>A</span>LIA <span>COLLECTION</span></h1>
                        </div>
                        <div class="close">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>

                    <ul class="nav-list">

                        <li class="nav-item">
                            <a href="#home" class="nav-link scroll-link">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="#shop" class="nav-link scroll-link">Products</a>
                        </li>

                        <li class="nav-item">
                            <a href="#new" class="nav-link scroll-link">New</a>
                        </li>

                        <li class="nav-item">
                            <a href="#recent" class="nav-link scroll-link">Recent</a>
                        </li>

                        <li class="nav-item">
                            <a href="#blog" class="nav-link scroll-link">Blog</a>
                        </li>
                    </ul>
                </div>

                <div class="nav-icons">
                    <span><i class="fas fa-user"></i></span>
                    <span><i class="fas fa-search"></i></span>
                    <span><i class="fas fa-shopping-basket"></i></span>
                </div>

                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>

            </div>
        </nav>
    </header>
    <!-- End Header -->

    <!-- Main -->
    <main>
        <!-- Herro -->
        <section class="hero">
            <div class="glide glide1" id="glide1">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides glide__hero">

                        <li class="glide__slide">
                            <div class="banner">
                                <div class="banner-content">
                                    <span>New Trend Hijab 2020</span>
                                    <h1>DISCOUNT CUAN SOB KECE ABIS</h1>
                                    <h3>Buy 1 GET 1 IN WEEKEND</h3>
                                    <div class="buttons-group">
                                        <button>Ambil</button>
                                    </div>
                                </div>
                                <img src="<?php base_url() ?>assets/Frontend/images/banner_1.png" class="special_01" alt="">
                        </li>

                        <li class="glide__slide">
                            <div class="banner banner1">
                                <div class="banner-content">
                                    <span>New Trend Hijab 2020</span>
                                    <h1>HIJAB SIMPLE NAMUN TETAP KECE</h1>
                                    <h3>Trending TREND HIjab 2020</h3>
                                    <div class="buttons-group">
                                        <button>Ambil</button>
                                    </div>
                                </div>
                                <img src="<?php base_url() ?>assets/Frontend/images/banner_2.png" class="special_02" alt="">
                            </div>
                        </li>

                        <li class="glide__slide">
                            <div class="banner">
                                <div class="banner-content">
                                    <span>#2021HIJABBARU</span>
                                    <h1>BOSEN DENGAN HIJABMU ITU AJA</h1>
                                    <h3>Tenang SOB Kami Punya Solusinya</h3>
                                    <div class="buttons-group">
                                        <button>Lihat SOB</button>
                                    </div>
                                </div>
                                <img src="<?php base_url() ?>assets/Frontend/images/banner_3.png" class="special_03" alt="">
                            </div>
                        </li>

                    </ul>
                </div>

                <!-- Arrows -->
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-arrow-left"></i></button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
        </section>

        <!-- Category -->
        <section class="section category">
            <h2 class="title">Lengkapi Gayamu Dengan Produk Kami!</h2>
            <div class="category-center container">

                <div class="category-box">
                    <img src="<?php base_url() ?>assets/Frontend/images/cat1.jpg" alt="">
                    <div class="content">
                        <h2>Trend Hijab</h2>
                        <span>#Amaliahijab</span>
                        <a href="#">Ambil kuy</a>
                    </div>
                </div>

                <div class="category-box">
                    <img src="<?php base_url() ?>assets/Frontend/images/cat2.jpg" alt="">
                    <div class="content">
                        <h2>Aksesoris Hijab</h2>
                        <span>#Amaliahijab</span>
                        <a href="#">Ambil Kuy</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Produk Amalia -->
        <section class="section sort-category">
            <div class="title-container ">
                <div class="section-titles">
                    <div class="section-title active filter-btn" data-id="trend">
                        <!-- <span class="dot"></span> -->
                        <h1 class="primary-title">Produk Amalia Collection</h1>
                    </div>
                </div>
            </div>

            <div class="product-center container">
                <div class="product">
                    <div class="product-header">
                        <img src="<?php base_url() ?>assets/Frontend/images/pic1.jpg" alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Hijab Pasmina</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-price">
                            <h4>Rp.20.000</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src="<?php base_url() ?>assets/Frontend/images/pic2.jpg" class='small' alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Men Casual Shoe</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-price">
                            <h4>$2500.99</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src="<?php base_url() ?>assets/Frontend/images/pic4.jpg" class='small' alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Men Casual Shoe</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-price">
                            <h4>$3000.99</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src="<?php base_url() ?>assets/Frontend/images/pic3.png" class='small' alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Men Casual Shoe</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-price">
                            <h4>$3000.99</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="product">
                    <div class="product-header">
                        <img src="<?php base_url() ?>assets/Frontend/images/pic1.jpg" alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Hijab Pasmina</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-price">
                            <h4>Rp.20.000</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src="<?php base_url() ?>assets/Frontend/images/pic2.jpg" class='small' alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Men Casual Shoe</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-price">
                            <h4>$2500.99</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src="<?php base_url() ?>assets/Frontend/images/pic4.jpg" class='small' alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Men Casual Shoe</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-price">
                            <h4>$3000.99</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src="<?php base_url() ?>assets/Frontend/images/pic3.png" class='small' alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Men Casual Shoe</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-price">
                            <h4>$3000.99</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="product">
                    <div class="product-header">
                        <img src="<?php base_url() ?>assets/Frontend/images/pic1.jpg" alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Hijab Pasmina</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-price">
                            <h4>Rp.20.000</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src="<?php base_url() ?>assets/Frontend/images/pic2.jpg" class='small' alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Men Casual Shoe</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-price">
                            <h4>$2500.99</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src="<?php base_url() ?>assets/Frontend/images/pic4.jpg" class='small' alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Men Casual Shoe</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-price">
                            <h4>$3000.99</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src="<?php base_url() ?>assets/Frontend/images/pic3.png" class='small' alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Men Casual Shoe</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-price">
                            <h4>$3000.99</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="product">
                    <div class="product-header">
                        <img src="<?php base_url() ?>assets/Frontend/images/pic1.jpg" alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Hijab Pasmina</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-price">
                            <h4>Rp.20.000</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src="<?php base_url() ?>assets/Frontend/images/pic2.jpg" class='small' alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Men Casual Shoe</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-price">
                            <h4>$2500.99</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src="<?php base_url() ?>assets/Frontend/images/pic4.jpg" class='small' alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Men Casual Shoe</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-price">
                            <h4>$3000.99</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="product">
                    <div class="product-header">
                        <img src="<?php base_url() ?>assets/Frontend/images/pic3.png" class='small' alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Men Casual Shoe</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-price">
                            <h4>$3000.99</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Akhir Produk Amalia -->

        <!-- Flash Sale -->
        <!-- Latest Products -->
        <section class="section latest-products" id="new">
            <div class="title-container">
                <div class="section-titles">
                    <div class="section-title active" data-id="latest">
                        <!-- <span class="dot"></span> -->
                        <h1 class="primary-title">Flash Sale
                            <!-- <p id="demo"></p> -->
                        </h1>
                        <h1 class="primary-title" id="demo"> </h1>
                    </div>
                </div>
            </div>
            <div class="latest-center product-center container">
                <div class="product">
                    <div class="product-header">
                        <img src="<?php base_url() ?>assets/Frontend/images/pic95.jpg" alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Hijab Pasmina Red Fire</h3>
                        <div class="rating">
                            <!-- <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i> -->
                        </div>
                        <div class="product-price">
                            <strong>
                                <h4><span style="text-decoration: line-through red;">Rp. 20.000</span></h4>
                            </strong>
                            <h4>Rp. 15.000</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="product">
                    <div class="product-header">
                        <img src="<?php base_url() ?>assets/Frontend/images/pic96.jpg" alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Hijab Instans Formal</h3>
                        <div class="rating">
                            <!-- <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i> -->
                        </div>
                        <div class="product-price">
                            <strong>
                                <h4><span style="text-decoration: line-through red;">Rp. 20.000</span></h4>
                            </strong>
                            <h4>Rp. 15.000</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="product">
                    <div class="product-header">
                        <img src="<?php base_url() ?>assets/Frontend/images/pic97.jpg" alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Hijab Bergo</h3>
                        <div class="rating">
                            <!-- <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i> -->
                        </div>
                        <div class="product-price">
                            <strong>
                                <h4><span style="text-decoration: line-through red;">Rp. 20.000</span></h4>
                            </strong>
                            <h4>Rp. 5.000</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="product">
                    <div class="product-header">
                        <img src="<?php base_url() ?>assets/Frontend/images/pic91.jpg" alt="product">
                    </div>
                    <div class="product-footer">
                        <h3>Hijab Iner</h3>
                        <div class="rating">
                            <!-- <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i> -->
                        </div>
                        <div class="product-price">
                            <strong>
                                <h4><span style="text-decoration: line-through red;">Rp. 50.000</span></h4>
                            </strong>
                            <h4>Rp. 1.000</h4>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sync"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </section>
        <!-- Akhir Flash Sale -->

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
    <footer id="footer" class="section footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-center">
                    <h3>EXTRAS</h3>
                    <a href="#">Produk Terbaru</a>
                    <a href="#">Promo</a>
                    <a href="#">Flash Sale</a>
                </div>
                <div class="footer-center">
                    <h3>INFORMATION</h3>
                    <a href="#">About Us</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Site Map</a>
                </div>
                <div class="footer-center">
                    <h3>MY ACCOUNT</h3>
                    <a href="#">My Account</a>
                    <a href="#">Order History</a>
                    <a href="#">Keranjang</a>
                    <!-- <a href="#">blogletter</a>
                    <a href="#">Returns</a> -->
                </div>
                <div class="footer-center">
                    <h3>CONTACT US</h3>
                    <div>
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                        Jalan Sama Aku Nikah Sama DIA
                    </div>
                    <div>
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
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- End Footer -->



    <!-- Countdown -->
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Nov 28, 2020 15:37:25").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
                minutes + "m " + seconds + "s ";

            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
    <!-- end Countdown -->


    <!-- Glide JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
    <!-- Script -->
    <script src="<?php base_url() ?>assets/Frontend/js/index.js"></script>
    <script src="<?php base_url() ?>assets/Frontend/js/product.js"></script>
    <script src="<?php base_url() ?>assets/Frontend/js/slider.js"></script>
</body>

</html>