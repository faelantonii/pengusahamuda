<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DietinAja - Receipe Food Nutrition</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/dietinaja.png">

    <!-- All CSS is here
	============================================ -->

    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/vandella.css">
    <link rel="stylesheet" href="assets/css/vendor/jellybelly.css">
    <link rel="stylesheet" href="assets/css/vendor/icofont.min.css">
    <link rel="stylesheet" href="assets/css/vendor/fontello.css">
    <link rel="stylesheet" href="assets/css/plugins/easyzoom.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <div class="main-wrapper main-wrapper-3">
        <header class="header-area section-padding-1 transparent-bar">
            <div class="header-large-device">
                <div class="header-bottom sticky-bar">
                    <div class="container-fluid">
                        <div class="header-bottom-flex">
                            <div class="logo-menu-wrap">
                                <div class="logo">
                                    <a href="index.php">
                                        <h3>DietinAja</h3>
                                        <!--                                        <img src="assets/images/logo/logo-9.png" alt="logo">-->
                                    </a>
                                </div>
                                <div class="main-menu menu-lh-1 main-menu-padding-1 menu-mrg-1">
                                    <nav>
                                        <ul>
                                            <li><a href="index.php">Home</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="header-small-device header-small-ptb sticky-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="mobile-logo mobile-logo-width">
                                <a href="index.php">
                                    <img alt="" src="assets/images/logo/logo-9.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="header-action-wrap header-action-flex header-action-mrg-1">
                                <div class="same-style header-cart">
                                    <a class="cart-active" href="#"><i class="icofont-shopping-cart"></i></a>
                                </div>
                                <div class="same-style header-info">
                                    <button class="mobile-menu-button-active">
                                        <span class="info-width-1"></span>
                                        <span class="info-width-2"></span>
                                        <span class="info-width-3"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- mini cart start -->
        <!-- Mobile menu start -->
        <div class="blog-area pt-160 pb-160">
            <div class="container">
                <?php
                include "admin/koneksi.php";
                $query = mysqli_query($koneksi, "SELECT * FROM jadwal_makanan");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <div class="deal-content-2 text-center">
                        <h4><?= $data['rentang_kalori'] ?></h4>
                    </div>
                    <div class="section-title-5 mb-50 mt-10 text-center">
                        <span><?= $data['deskripsi'] ?></span>
                    </div>
                    <div class="product-tab-list-3 tab-list-1-left nav mb-65" style="margin-left: 130px">
                        <a class="active" href="#product-1" data-toggle="tab">
                            Senin
                        </a>
                        <a href="#product-2" data-toggle="tab">
                            Selasa
                        </a>
                        <a href="#product-3" data-toggle="tab">
                            Rabu
                        </a>
                        <a href="#product-4" data-toggle="tab">
                            Kamis
                        </a>
                        <a href="#product-5" data-toggle="tab">
                            Jumat
                        </a>
                        <a href="#product-6" data-toggle="tab">
                            Sabtu
                        </a>
                        <a href="#product-7" data-toggle="tab">
                            Minggu
                        </a>
                    </div>

                    <div class="tab-content jump">
                        <div id="product-1" class="tab-pane active">
                            <div class="row">
                                <?php
                                include "admin/koneksi.php";
                                $query = mysqli_query($koneksi, "SELECT
                                                                jadwal_makanan.id,
                                                                jadwal_makanan.jadwal_makanan,
                                                                makanan.judul_makanan, 
                                                                makanan.deskripsi, 
                                                                jadwal_makanan.gambar
                                                                FROM
                                                                    makanan
                                                                INNER JOIN
                                                                    jadwal_makanan
                                                                ON 
                                                                    makanan.id = jadwal_makanan.makanan_id 
                                                                WHERE hari = 'senin' ");
                                $no = 1;
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <h3 class="text-center mb-2" style="font-weight: bold"><span style="color: #8ec038">0<?= $no++ ?>.</span> <?= $data['jadwal_makanan'] ?></h3>
                                        <div class="blog-wrap mb-50">
                                            <div class="blog-img mb-35">
                                                <a href="#"><img src="admin/gambar/<?= $data['gambar'] ?>" alt="" style="border-radius: 20px;"></a>
                                            </div>
                                            <div class="blog-content">
                                                <h3 class="text-center"><?= $data['judul_makanan'] ?></h3>
                                                <p class="text-center mb-4"><?= $data['deskripsi'] ?></p>
                                                <div class="card" style="background-color: #f3f5ed; border: none; height: 80px">
                                                    <div class="row" style="margin: 17px">
                                                        <div class="col-md-3">
                                                            <h4 style="color: #8ec038; font-weight: bold; font-size: 15px">26 g</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Protein</span>
                                                        </div>

                                                        <div class="col-md-3" style="">
                                                            <h4 style="color: #8ec038; font-weight: bold; font-size: 15px">8 g</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Fat</span>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <h4 style="color: #8ec038; font-weight: bold; font-size: 15px">49 g</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Karbo</span>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <h4 style="color: #cc4343; font-weight: bold; font-size: 15px">417 kal</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Energy</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div id="product-2" class="tab-pane">
                            <div class="row">
                                <?php
                                include "admin/koneksi.php";
                                $query = mysqli_query($koneksi, "SELECT
                                                                jadwal_makanan.id,
                                                                jadwal_makanan.jadwal_makanan,
                                                                makanan.judul_makanan, 
                                                                makanan.deskripsi, 
                                                                jadwal_makanan.gambar
                                                                FROM
                                                                    makanan
                                                                INNER JOIN
                                                                    jadwal_makanan
                                                                ON 
                                                                    makanan.id = jadwal_makanan.makanan_id 
                                                                WHERE hari = 'selasa' ");
                                $no = 1;
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <h3 class="text-center mb-2" style="font-weight: bold"><span style="color: #8ec038">0<?= $no++ ?>.</span> <?= $data['jadwal_makanan'] ?></h3>
                                        <div class="blog-wrap mb-50">
                                            <div class="blog-img mb-35">
                                                <a href="#"><img src="admin/gambar/<?= $data['gambar'] ?>" alt="" style="border-radius: 20px;"></a>
                                            </div>
                                            <div class="blog-content">
                                                <h3 class="text-center"><?= $data['jadwal_makanan'] ?></h3>
                                                <p class="text-center mb-4"><?= $data['deskripsi'] ?></p>
                                                <div class="card" style="background-color: #f3f5ed; border: none; height: 80px">
                                                    <div class="row" style="margin: 17px">
                                                        <div class="col-md-3">
                                                            <h4 style="color: #8ec038; font-weight: bold; font-size: 15px">26 g</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Protein</span>
                                                        </div>

                                                        <div class="col-md-3" style="">
                                                            <h4 style="color: #8ec038; font-weight: bold; font-size: 15px">8 g</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Fat</span>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <h4 style="color: #8ec038; font-weight: bold; font-size: 15px">49 g</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Karbo</span>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <h4 style="color: #cc4343; font-weight: bold; font-size: 15px">417 kal</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Energy</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div id="product-3" class="tab-pane">
                            <div class="row">
                                <?php
                                include "admin/koneksi.php";
                                $query = mysqli_query($koneksi, "SELECT
                                                                jadwal_makanan.id,
                                                                jadwal_makanan.jadwal_makanan,
                                                                makanan.judul_makanan, 
                                                                makanan.deskripsi, 
                                                                jadwal_makanan.gambar
                                                                FROM
                                                                    makanan
                                                                INNER JOIN
                                                                    jadwal_makanan
                                                                ON 
                                                                    makanan.id = jadwal_makanan.makanan_id 
                                                                WHERE hari = 'rabu' ");
                                $no = 1;
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <h3 class="text-center mb-2" style="font-weight: bold"><span style="color: #8ec038">0<?= $no++ ?>.</span> <?= $data['jadwal_makanan'] ?></h3>
                                        <div class="blog-wrap mb-50">
                                            <div class="blog-img mb-35">
                                                <a href="#"><img src="admin/gambar/<?= $data['gambar'] ?>" style="border-radius: 20px;" alt=""></a>
                                            </div>
                                            <div class="blog-content">
                                                <h3 class="text-center"><?= $data['jadwal_makanan'] ?></h3>
                                                <p class="text-center mb-4"><?= $data['deskripsi'] ?></p>
                                                <div class="card" style="background-color: #f3f5ed; border: none; height: 80px">
                                                    <div class="row" style="margin: 17px">
                                                        <div class="col-md-3">
                                                            <h4 style="color: #8ec038; font-weight: bold; font-size: 15px">26 g</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Protein</span>
                                                        </div>

                                                        <div class="col-md-3" style="">
                                                            <h4 style="color: #8ec038; font-weight: bold; font-size: 15px">8 g</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Fat</span>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <h4 style="color: #8ec038; font-weight: bold; font-size: 15px">49 g</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Karbo</span>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <h4 style="color: #cc4343; font-weight: bold; font-size: 15px">417 kal</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Energy</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>

                        <div id="product-4" class="tab-pane">
                            <div class="row">
                                <?php
                                include "admin/koneksi.php";
                                $query = mysqli_query($koneksi, "SELECT
                                                                jadwal_makanan.id,
                                                                jadwal_makanan.jadwal_makanan,
                                                                makanan.judul_makanan, 
                                                                makanan.deskripsi, 
                                                                jadwal_makanan.gambar
                                                                FROM
                                                                    makanan
                                                                INNER JOIN
                                                                    jadwal_makanan
                                                                ON 
                                                                    makanan.id = jadwal_makanan.makanan_id 
                                                                WHERE hari = 'kamis' ");
                                $no = 1;
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <h3 class="text-center mb-2" style="font-weight: bold"><span style="color: #8ec038">0<?= $no++ ?>.</span> <?= $data['jadwal_makanan'] ?></h3>
                                        <div class="blog-wrap mb-50">
                                            <div class="blog-img mb-35">
                                                <a href="#"><img src="admin/gambar/<?= $data['gambar'] ?>" style="border-radius: 20px;" alt=""></a>
                                            </div>
                                            <div class="blog-content">
                                                <h3 class="text-center"><?= $data['jadwal_makanan'] ?></h3>
                                                <p class="text-center mb-4"><?= $data['deskripsi'] ?></p>
                                                <div class="card" style="background-color: #f3f5ed; border: none; height: 80px">
                                                    <div class="row" style="margin: 17px">
                                                        <div class="col-md-3">
                                                            <h4 style="color: #8ec038; font-weight: bold; font-size: 15px">26 g</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Protein</span>
                                                        </div>

                                                        <div class="col-md-3" style="">
                                                            <h4 style="color: #8ec038; font-weight: bold; font-size: 15px">8 g</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Fat</span>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <h4 style="color: #8ec038; font-weight: bold; font-size: 15px">49 g</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Karbo</span>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <h4 style="color: #cc4343; font-weight: bold; font-size: 15px">417 kal</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Energy</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>

                        <div id="product-5" class="tab-pane">
                            <div class="row">
                                <?php
                                include "admin/koneksi.php";
                                $query = mysqli_query($koneksi, "SELECT
                                                                jadwal_makanan.id,
                                                                jadwal_makanan.jadwal_makanan,
                                                                makanan.judul_makanan, 
                                                                makanan.deskripsi, 
                                                                jadwal_makanan.gambar
                                                                FROM
                                                                    makanan
                                                                INNER JOIN
                                                                    jadwal_makanan
                                                                ON 
                                                                    makanan.id = jadwal_makanan.makanan_id 
                                                                WHERE hari = 'jumat' ");
                                $no = 1;
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <h3 class="text-center mb-2" style="font-weight: bold"><span style="color: #8ec038">0<?= $no++ ?>.</span> <?= $data['jadwal_makanan'] ?></h3>
                                        <div class="blog-wrap mb-50">
                                            <div class="blog-img mb-35">
                                                <a href="#"><img src="admin/gambar/<?= $data['gambar'] ?>" style="border-radius: 20px;" alt=""></a>
                                            </div>
                                            <div class="blog-content">
                                                <h3 class="text-center"><?= $data['jadwal_makanan'] ?></h3>
                                                <p class="text-center mb-4"><?= $data['deskripsi'] ?></p>
                                                <div class="card" style="background-color: #f3f5ed; border: none; height: 80px">
                                                    <div class="row" style="margin: 17px">
                                                        <div class="col-md-3">
                                                            <h4 style="color: #8ec038; font-weight: bold; font-size: 15px">26 g</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Protein</span>
                                                        </div>

                                                        <div class="col-md-3" style="">
                                                            <h4 style="color: #8ec038; font-weight: bold; font-size: 15px">8 g</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Fat</span>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <h4 style="color: #8ec038; font-weight: bold; font-size: 15px">49 g</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Karbo</span>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <h4 style="color: #cc4343; font-weight: bold; font-size: 15px">417 kal</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Energy</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>

                        <div id="product-6" class="tab-pane">
                            <div class="row">
                                <?php
                                include "admin/koneksi.php";
                                $query = mysqli_query($koneksi, "SELECT
                                                                jadwal_makanan.id,
                                                                jadwal_makanan.jadwal_makanan,
                                                                makanan.judul_makanan, 
                                                                makanan.deskripsi, 
                                                                jadwal_makanan.gambar
                                                                FROM
                                                                    makanan
                                                                INNER JOIN
                                                                    jadwal_makanan
                                                                ON 
                                                                    makanan.id = jadwal_makanan.makanan_id 
                                                                WHERE hari = 'sabtu' ");
                                $no = 1;
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <h3 class="text-center mb-2" style="font-weight: bold"><span style="color: #8ec038">0<?= $no++ ?>.</span> <?= $data['jadwal_makanan'] ?></h3>
                                        <div class="blog-wrap mb-50">
                                            <div class="blog-img mb-35">
                                                <a href="#"><img src="admin/gambar/<?= $data['gambar'] ?>" style="border-radius: 20px;" alt=""></a>
                                            </div>
                                            <div class="blog-content">
                                                <h3 class="text-center"><?= $data['jadwal_makanan'] ?></h3>
                                                <p class="text-center mb-4"><?= $data['deskripsi'] ?></p>
                                                <div class="card" style="background-color: #f3f5ed; border: none; height: 80px">
                                                    <div class="row" style="margin: 17px">
                                                        <div class="col-md-3">
                                                            <h4 style="color: #8ec038; font-weight: bold; font-size: 15px">26 g</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Protein</span>
                                                        </div>

                                                        <div class="col-md-3" style="">
                                                            <h4 style="color: #8ec038; font-weight: bold; font-size: 15px">8 g</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Fat</span>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <h4 style="color: #8ec038; font-weight: bold; font-size: 15px">49 g</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Karbo</span>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <h4 style="color: #cc4343; font-weight: bold; font-size: 15px">417 kal</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Energy</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>

                        <div id="product-7" class="tab-pane">
                            <div class="row">
                                <?php
                                include "admin/koneksi.php";
                                $query = mysqli_query($koneksi, "SELECT
                                                                jadwal_makanan.id,
                                                                jadwal_makanan.jadwal_makanan,
                                                                makanan.judul_makanan, 
                                                                makanan.deskripsi, 
                                                                jadwal_makanan.gambar
                                                                FROM
                                                                    makanan
                                                                INNER JOIN
                                                                    jadwal_makanan
                                                                ON 
                                                                    makanan.id = jadwal_makanan.makanan_id 
                                                                WHERE hari = 'minggu' ");
                                $no = 1;
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <h3 class="text-center mb-2" style="font-weight: bold"><span style="color: #8ec038">0<?= $no++ ?>.</span> <?= $data['jadwal_makanan'] ?></h3>
                                        <div class="blog-wrap mb-50">
                                            <div class="blog-img mb-35">
                                                <a href="#"><img src="admin/gambar/<?= $data['gambar'] ?>" style="border-radius: 20px;" alt=""></a>
                                            </div>
                                            <div class="blog-content">
                                                <h3 class="text-center"><?= $data['jadwal_makanan'] ?></h3>
                                                <p class="text-center mb-4"><?= $data['deskripsi'] ?></p>
                                                <div class="card" style="background-color: #f3f5ed; border: none; height: 80px">
                                                    <div class="row" style="margin: 17px">
                                                        <div class="col-md-3">
                                                            <h4 style="color: #8ec038; font-weight: bold; font-size: 15px">26 g</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Protein</span>
                                                        </div>

                                                        <div class="col-md-3" style="">
                                                            <h4 style="color: #8ec038; font-weight: bold; font-size: 15px">8 g</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Fat</span>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <h4 style="color: #8ec038; font-weight: bold; font-size: 15px">49 g</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Karbo</span>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <h4 style="color: #cc4343; font-weight: bold; font-size: 15px">417 kal</h4>
                                                            <span style="font-weight: bold; font-size: 10px">Energy</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>

                    </div>
            </div>
        <?php } ?>
        </div>
        <footer class="footer-area bg-gray pt-160">
            <div class="footer-top pb-120">
                <div class="container">
                    <div class="row">
                    </div>
                </div>
            </div>
            <div class="footer-bottom border-top-1">
                <div class="container">
                    <div class="copyright copyright-ptb text-center">
                        <p>Copyright © 2020 DietinAja - <a target="_blank" href="https://hasthemes.com/"> All Right Reserved</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- All JS is here
============================================ -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins/slick.js"></script>
    <script src="assets/js/plugins/countdown.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/instafeed.js"></script>
    <script src="assets/js/plugins/svg-injector.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/mouse-parallax.js"></script>
    <script src="assets/js/plugins/images-loaded.js"></script>
    <script src="assets/js/plugins/isotope.js"></script>
    <script src="assets/js/plugins/jquery-ui-touch-punch.js"></script>
    <script src="assets/js/plugins/jquery-ui.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/easyzoom.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above
<script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script> -->
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>