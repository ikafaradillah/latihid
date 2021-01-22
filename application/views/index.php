<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

    <title>Homepage | LatihID</title>
  </head>
  <body>    
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-light sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo base_url('assets/img/latihID_logo_horizontal.png')?>" width="120" height="35" class="d-inline-block align-top" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Program
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">LatihID Modul</a>
                                <a class="dropdown-item" href="#">LatihID Talks</a>
                                <a class="dropdown-item" href="#">LatihID PETA</a>
                                <a class="dropdown-item" href="#">LatihID MAJU</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Modul Saya
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Progress Modul</a>
                                <a class="dropdown-item" href="#">Pembelian</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ayo Kolaborasi</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Bantuan
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">FAQ</a>
                                <a class="dropdown-item" href="#">Kontak Kami</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?php echo base_url('assets/img/ika.jpeg')?>" class="rounded-circle" width="30" height="30" class="d-inline-block align-top" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Edit Profil</a>
                                <a class="dropdown-item" href="#">Kelola Pelanggan</a>
                                <a class="dropdown-item" href="#">Tambah/Ubah Kartu Kredit</a>
                                <a class="dropdown-item" href="#">Kontak</a>
                                <a class="dropdown-item" href="#">Keluar</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
    </header>

    <!-- Image Slider -->
    <section>
        <div id="carouselHomePage" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselHomePage" data-slide-to="0" class="active"></li>
                <li data-target="#carouselHomePage" data-slide-to="1"></li>
                <li data-target="#carouselHomePage" data-slide-to="2"></li>
                <li data-target="#carouselHomePage" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo base_url('assets/img/img_slider_1.png')?>" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo base_url('assets/img/img_slider_2.png')?>" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo base_url('assets/img/img_slider_3.png')?>" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo base_url('assets/img/img_slider_4.png')?>" alt="Fourth slide">
                </div>
            </div>
            <!-- Controls -->
            <a class="carousel-control-prev" href="#carouselHomePage" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselHomePage" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
       </div>
    </section>
    <!-- End Image Slider -->

    <!-- Services Section -->
    <section>
        <div class="container my-5 services">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Kenapa Memilih LatihID?</h2>
                </div>
            <div>
            <div class="row my-5">
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/img/icon_1.svg')?>" width="80" height="80">
                    <h5 class="my-1">Fokus Pada UMKM</h5>
                    <p>Konten berfokus untuk pengembangan bisnis UMKM Indonesia</p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/img/icon_2.svg')?>" width="80" height="80">
                    <h5 class="my-1">Bebas Akses Dimana Saja</h5>
                    <p>Modul pelatihan Ddpat diakses dari perangkat apa saja melihat website</p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/img/icon_3.svg')?>" width="80" height="80">
                    <h5 class="my-1">Akses Seumur Hidup</h5>
                    <p>Akses seumur hidup dan satu login untuk semua kursus pelatihan yang ada</p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/img/icon_4.svg')?>" width="80" height="80">
                    <h5 class="my-1">Akses Kapan Saja</h5>
                    <p>Akses 24/7 untuk semua modul pelatihan</p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/img/icon_5.svg')?>" width="80" height="80">
                    <h5 class="my-1">Akses Gratis</h5>
                    <p>Akses gratis untuk semua modul pelatihan</p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/img/icon_6.svg')?>" width="80" height="80">
                    <h5 class="my-1">Konten Yang Praktis</h5>
                    <p>Pelatihan praktis yang dapat langsung diterapkan</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- Popular Class Section -->
    <section>
        <div class="container p-4" style="background-color: #D7EFF4; border-radius: 10px;">
            <div class="row">
                <div class="col-md-3 mx-3">
                    <img src="<?php echo base_url('assets/img/icon_popular_class.svg')?>" width="80" height="80">
                    <h4 class="my-1">Kelas Gratis Populer</h4>
                    <p>Berikut adalah kelas-kelas gratis yang populer di LatihID</p>
                    <button class="btn btn-primary" style="background: #163F5B;">Lihat modul lainnya</button>
                </div>

                <div id="carouselProgram" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselProgram" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselProgram" data-slide-to="1"></li>
                    </ol>

                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="row">
                                <?php foreach($popular1 as $popular1): ?>
                                <div class="col-xs-3 mx-3">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/'.$popular1->foto_modul)?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $popular1->nama_modul ?></h5>
                                            <a href="#" class="btn btn-primary" style="background: #163F5B;"><?= $popular1->harga_modul ?></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <?php foreach($popular2 as $popular2): ?>
                                <div class="col-xs-3 mx-3">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/'.$popular2->foto_modul)?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $popular2->nama_modul ?></h5>
                                            <a href="#" class="btn btn-primary" style="background: #163F5B;"><?= $popular2->harga_modul ?></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#carouselProgram" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselProgram" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Popular Class Section -->

    <!-- Newest Class Section -->
    <section>
        <div class="container p-4 my-5" style="background-color: #d6d2c4; border-radius: 10px;">
            <div class="row">
                <div class="col-md-3 mx-3">
                    <img src="<?php echo base_url('assets/img/icon_new_class.svg')?>" width="80" height="80">
                    <h4 class="my-1">Kelas LatihID Terbaru</h4>
                    <p>LatihID selalu berkomitmen untuk memberikan pelatihan-pelatihan terbaru yang sesuai dengan trend, pasar, dan kondisi nyata di lapangan.</p>
                    <button class="btn btn-primary" style="background: #163F5B;">Lihat modul lainnya</button>
                </div>

                <div id="carouselProgram" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselProgram" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselProgram" data-slide-to="1"></li>
                    </ol>
                    
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="row">
                                <?php foreach($newest1 as $newest1): ?>
                                <div class="col-xs-3 mx-3">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/'.$newest1->foto_modul)?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $newest1->nama_modul ?></h5>
                                            <a href="#" class="btn btn-primary" style="background: #163F5B;"><?= $newest1->harga_modul ?></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <?php foreach($newest2 as $newest2): ?>
                                <div class="col-xs-3 mx-3">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/'.$newest2->foto_modul)?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $newest2->nama_modul ?></h5>
                                            <a href="#" class="btn btn-primary" style="background: #163F5B;"><?= $newest2->harga_modul ?></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#carouselProgram" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselProgram" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Newest Class Section -->

    <!-- Expert Class Section -->
    <section>
        <div class="container p-4 my-5" style="background-color: #ffe7dc; border-radius: 10px;">
            <div class="row">
                <div class="col-md-3 mx-3">
                    <img src="<?php echo base_url('assets/img/icon_expert_class.svg')?>" width="80" height="80">
                    <h4 class="my-1">Expert Class</h4>
                    <p>Ayo asah kemampuanmu dalam berwirausaha dengan mengikuti expert class di LatihID!</p>
                    <button class="btn btn-primary" style="background: #163F5B;">Lihat kelas lainnya</button>
                </div>

                <div id="carouselProgram" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselProgram" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselProgram" data-slide-to="1"></li>
                    </ol>
                    
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="row">
                                <?php foreach($expert1 as $expert1): ?>
                                <div class="col-xs-3 mx-3">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/'.$expert1->foto_modul)?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $expert1->nama_modul ?></h5>
                                            <a href="#" class="btn btn-primary" style="background: #163F5B;">Rp <?= $expert1->harga_modul ?></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <?php foreach($expert2 as $expert2): ?>
                                <div class="col-xs-3 mx-3">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/'.$expert2->foto_modul)?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $expert2->nama_modul ?></h5>
                                            <a href="#" class="btn btn-primary" style="background: #163F5B;">Rp <?= $expert1->harga_modul ?></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#carouselProgram" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselProgram" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Expert Class Section -->

    <!-- Program Section -->
    <section>
        <div class="container">
            <div class="row row-program">
                <div class="col p-4 mr-5" style="background-color: #D7EFF4;">
                    <h2 class="my-1 mx-3">LatihID <br></h2> <h2 class="mx-3">Modul</h2>
                    <button class="btn btn-primary my-3 mx-3" style="background: #163F5B;">Lihat modul lainnya</button>
                    <div class="card my-3 mx-3">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/img_modul_1.jpg')?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Strategic Tools Untuk Berbisnis</h5>
                            <a href="#" class="btn btn-primary" style="background: #163F5B;">Gratis</a>
                        </div>
                    </div>
                </div>
                <div class="col p-4 mr-5" style="background-color: #D7EFF4;">
                    <h2 class="my-1 mx-3">LatihID <br></h2> <h2 class="mx-3">Talks</h2>
                    <button class="btn btn-primary my-3 mx-3" style="background: #163F5B;">Lihat modul lainnya</button>
                    <div class="card my-3 mx-3">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/img_talks_1.png')?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Jurus Ampuh Memaksimalkan Marketplace</h5>
                            <a href="#" class="btn btn-primary" style="background: #163F5B;">Gratis</a>
                        </div>
                    </div>
                </div>
                <div class="col p-4" style="background-color: #D7EFF4;">
                    <h2 class="my-1 mx-3">LatihID <br></h2> <h2 class="mx-3">PETA</h2>
                    <button class="btn btn-primary my-3 mx-3" style="background: #163F5B;">Lihat modul lainnya</button>
                    <div class="card my-3 mx-3">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/img_peta_1.jpg')?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Memulai Bisnis, Siapa Takut? Bersama Valencia Gabriella</h5>
                            <a href="#" class="btn btn-primary" style="background: #163F5B;">Gratis</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-program">
                <div class="col p-4 mr-5" style="background-color: #D7EFF4;">
                    <div class="card mx-3">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/img_modul_2.jpg')?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Manajemen Produk: Mengubah Ide Kreatif Menjadi Produk Jadi</h5>
                            <a href="#" class="btn btn-primary" style="background: #163F5B;">Gratis</a>
                        </div>
                    </div>
                </div>
                <div class="col p-4 mr-5" style="background-color: #D7EFF4;">
                    <div class="card mx-3">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/img_talks_2.png')?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Membangung Mental Usaha - Cerita Konsistensi Memulai Usaha</h5>
                            <a href="#" class="btn btn-primary" style="background: #163F5B;">Pay as you wish</a>
                        </div>
                    </div>
                </div>
                <div class="col p-4" style="background-color: #D7EFF4;">
                    <div class="card mx-3">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/img_peta_2.jpg')?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Berbisnis Dengan Passion Bersama Aulia Rahman</h5>
                            <a href="#" class="btn btn-primary" style="background: #163F5B;"> Gratis</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-program">
                <div class="col p-4 mr-5" style="background-color: #D7EFF4;">
                    <div class="card mx-3">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/img_modul_3.jpg')?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Aspek Hukum Dalam Kacamata UMKM</h5>
                            <a href="#" class="btn btn-primary" style="background: #163F5B;">Gratis</a>
                        </div>
                    </div>
                </div>
                <div class="col p-4 mr-5" style="background-color: #D7EFF4;">
                    <div class="card mx-3">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/img_talks_3.png')?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Memulai Bisnis Sejak Kuliah? Mengapa Tidak?</h5>
                            <a href="#" class="btn btn-primary" style="background: #163F5B;">Pay as you wish</a>
                        </div>
                    </div>
                </div>
                <div class="col p-4" style="background-color: #D7EFF4;">
                    <div class="card mx-3">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/img_peta_3.jpg')?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Mengenal Social Enterprise Bersama Kitong Bisa Enterprise</h5>
                            <a href="#" class="btn btn-primary" style="background: #163F5B;">Gratis</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Program Section -->

    <!-- Business Class Section -->
    <section>
        <div class="container p-4 my-5" style="background-color: #d6d2c4; border-radius: 10px;">
            <div class="row">
                <div class="col-md-3 mx-3">
                    <img src="<?php echo base_url('assets/img/icon_sb_class.svg')?>" width="80" height="80">
                    <h4 class="my-1">Kelas Memulai Bisnis</h4>
                    <p>Bingung mau mulai bisnis? Sudah punya Ide tapi belum tahu cara implementasi bisnis nya? Gabung di kelas memulai bisnis sekarang!</p>
                    <button class="btn btn-primary" style="background: #163F5B;">Lihat modul lainnya</button>
                </div>

                <div id="carouselProgram" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselProgram" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselProgram" data-slide-to="1"></li>
                    </ol>
                    
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="row">
                                <?php foreach($business1 as $business1): ?>
                                <div class="col-xs-3 mx-3">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/'.$business1->foto_modul)?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $business1->nama_modul ?></h5>
                                            <a href="#" class="btn btn-primary" style="background: #163F5B;"><?= $business1->harga_modul ?></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <?php foreach($business2 as $business2): ?>
                                <div class="col-xs-3 mx-3">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/'.$business2->foto_modul)?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $business2->nama_modul ?></h5>
                                            <a href="#" class="btn btn-primary" style="background: #163F5B;"><?= $business2->harga_modul ?></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#carouselProgram" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselProgram" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Business Class Section -->

    <!-- Marketing Class Section -->
    <section>
        <div class="container p-4 my-5" style="background-color: #d6d2c4; border-radius: 10px;">
            <div class="row">
                <div class="col-md-3 mx-3">
                    <img src="<?php echo base_url('assets/img/icon_marketing_class.svg')?>" width="80" height="80">
                    <h4 class="my-1">Kelas Pemasaran</h4>
                    <p>Ingin bisnismu lebih dikenal oleh pasar ? Ikuti kelas tentang pemasaran dan dapatkan manfaatnya dalam bisnismu!</p>
                    <button class="btn btn-primary" style="background: #163F5B;">Lihat modul lainnya</button>
                </div>

                <div id="carouselProgram" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselProgram" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselProgram" data-slide-to="1"></li>
                    </ol>
                    
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="row">
                                <?php foreach($marketing1 as $marketing1): ?>
                                <div class="col-xs-3 mx-3">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/'.$marketing1->foto_modul)?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $marketing1->nama_modul ?></h5>
                                            <a href="#" class="btn btn-primary btn-custom" style="background: #163F5B;"><?= $marketing1->harga_modul ?></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <?php foreach($marketing2 as $marketing2): ?>
                                <div class="col-xs-3 mx-3">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/'.$marketing2->foto_modul)?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $marketing2->nama_modul ?></h5>
                                            <a href="#" class="btn btn-primary" style="background: #163F5B;"><?= $marketing2->harga_modul ?></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#carouselProgram" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselProgram" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Marketing Class Section -->

    <!-- Operational Management Class Section -->
    <section>
        <div class="container p-4 my-5" style="background-color: #d6d2c4; border-radius: 10px;">
            <div class="row">
                <div class="col-md-3 mx-3">
                    <img src="<?php echo base_url('assets/img/icon_om_class.svg')?>" width="80" height="80">
                    <h4 class="my-1">Kelas Manajemen Operasional</h4>
                    <p>Belajar manajemen operasional menjadi mudah dengan ikut kelas-kelas di sini! Bisa kamu praktekan langsung di usahamu.</p>
                    <button class="btn btn-primary" style="background: #163F5B;">Lihat modul lainnya</button>
                </div>

                <div id="carouselProgram" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselProgram" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselProgram" data-slide-to="1"></li>
                    </ol>
                    
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="row">
                                <?php foreach($operational_management1 as $operational_management1): ?>
                                <div class="col-xs-3 mx-3">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/'.$operational_management1->foto_modul)?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $operational_management1->nama_modul ?></h5>
                                            <a href="#" class="btn btn-primary" style="background: #163F5B;"><?= $operational_management1->harga_modul ?></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <?php foreach($operational_management2 as $operational_management2): ?>
                                <div class="col-xs-3 mx-3">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/'.$operational_management2->foto_modul)?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $operational_management2->nama_modul ?></h5>
                                            <a href="#" class="btn btn-primary" style="background: #163F5B;"><?= $operational_management2->harga_modul ?></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#carouselProgram" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselProgram" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Operational Management Class Section -->

    <!-- Jumbotron Section -->
    <section>
        <div class="container-fluid">
            <div class="row text-white">
                <div class="columns-speaker col-md-6 p-5" style="background-image: url(<?php echo base_url('assets/img/meeting.png')?>">
                    <h4>Menjadi Pembicara</h4>
                    <p>Kami membuka kesempatan untuk individu/lembaga yang ingin menjadi pemateri pada LatihID Modul, Talks, ataupun Pojok Cerita (PETA).</p>
                    <button class="btn btn-primary" style="background: #ff6a0e">Ayo Kolaborasi</button>
                </div>
                <div class="columns-mitra col-md-6 p-5" style="background-image: url(<?php echo base_url('assets/img/deal.png')?>">
                    <h4>Menjadi Mitra</h4>
                    <p>Kami menerima individu/lembaga yang ingin bekerja sama untuk jenis kemitraan lainnya, seperti media partner.</p>
                    <button class="btn btn-primary" style="background: #ff6a0e">Ayo Kolaborasi</button>
                </div>
            </div>
        </div>
    </section>
    <!-- End Jumbotron Section -->

    <!-- Footer -->
    <footer>
        <div class="container-fluid">
            <div class="row p-5" style="background-color: #D7EFF4;">
                <div class="col mr-5">
                    <img src="<?php echo base_url('assets/img/latihID_logo_vertical.png')?>" width="70" height="90"><br>      
                    <small class="text-left">LatihID adalah suatu platform<br>
                        penyedia pelatihan gratis dan berkualitas untuk UMKM di Indonesia <br>
                    </small>       
                </div>
                <div class="col">
                    <h6>Menu</h6>
                    <small>Beranda</small><br>
                    <small>Modul</small><br>
                    <small>Tentang Kami</small><br>
                    <small>Hubungi Kami</small>
                </div>
                <div class="col">
                    <h6>Info</h6>
                    <small>FAQ</small><br>
                    <small>Ayo Kolaborasi</small><br>
                    <small>Kebijakan Privasi</small><br>
                    <small>Syarat Penggunaan</small>    
                </div>
                <div class="col">
                    <h6>Ikuti Kami</h6>
                    <i class="fab fa-youtube"></i><small> LatihID Official</small><br>
                    <i class="fab fa-instagram"></i><small> @latihidofficial</small><br>
                    <i class="fab fa-facebook"></i><small> Latih ID</small>
                </div>
                <div class="col">
                    <h6 class="text-center">Jadi yang pertama  <br>
                    mengetahui update terbaru dari kami! </h6>   
                    <input class="form-control form-control-sm my-1" type="text" placeholder="Nama">
                    <input class="form-control form-control-sm my-1" type="text" placeholder="Email">
                    <button class="btn btn-primary w-100 my-1" style="background: #ff6a0e">Subscribe</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center" style="background-color:  #D7EFF4;">
                <h6> &copy; <?php echo Date('Y') ?> Copyright LatihID  </h6>
                </div>
            </div>
        </div>
    </footer>
    


    <!-- Calling Carousel -->
    <script>
        $('#carouselHomePage').carousel({
            interval: 500
        });

        $('#carouselProgram').carousel({
            interval: 500
        });
 
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('assets/js/jquery-3.2.1.slim.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  </body>
</html>