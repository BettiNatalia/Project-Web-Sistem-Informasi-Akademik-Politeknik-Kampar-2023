<?php $base_url = base_url() . 'assets/'; ?>
<!-- http://nama-domain/assets/ -->
<!-- $base_url -> nama variabel untuk menampung home dir assets -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIAKAD-POLKAM</title>

    <!-- ini merupakan sintaks Custom fonts for this template untuk menggunakan icons-->
    <link href="<?= $base_url ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> 

    <!-- Custom styles for this template-->
    <link href="<?= $base_url ?>css/sb-admin-2.min.css" rel="stylesheet">
    
    <!--Boostrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

    <!-- untuk mengubah logo pencarian di google menjadi logo polkam -->
    <link rel="icon" href="logopolkam.png"
        type="jpg/png">

    <style>
        .bg-login-image {
            background: url(<?= $base_url ?>img/logo.jpg);
            background-position: center;
            background-size: cover;
        }
    </style>

</head>

<body class="bg-gradient-warning">
    <!-- membuat warna body menjadi kuning -->


<!-- perintah untuk menampilkan logo dan kalimat sistem informasi polkam 2023 baris 46-67-->
<center class="fixed-top">
        <nav class="navbar bg-warn-tertiary">
            <!-- navbar bg-warn-tertiary merupakan sintaks wajib untuk menampilkan latar belakang logo dan kalimat -->

            <div class="container-fluid col-12 my-4 text-gray-900">
                <!-- untuk membuat satu baris terdapat 3 elemn menggunakan col-12 yang terdiri col-3 untuk Tempat logo polkam, col-6 untuk membuat kalimat selamat datang, col-3 untuk tempat logo kampus merdeka sehingga satu baris col-12 habis terbagi -->
                <!-- membuat my-4 untuk membuat jarak dari batas atas web -->
                <!-- untuk membagi col-12 kita harus menggunakan (div class) -->
        
    <!-- untuk menampilkan logo polkam dengan jumlah col-3 yang akan dibagi sesuai total kolom 12 -->
                <div class="col-3">
                    <img src="<?= base_url('assets/image/logopolkam.png') ?>" alt="" class="" style="width: 90px;">
                </div>

    <!-- untuk menampilkan kalimat sistem informasi dengan menggunakan sebanyak 6 kolom sesuai yang tersedia yaitu 12 kolom  -->
                <div class="col-6">
                    <h3 style="font-weight: bold;">
                        Sistem Informasi Akademik Politeknik Kampar 2023
                    </h3>

    <!-- untuk menampilkan logo yang menggunakan 3 kolom dan telah habis digunakan sebanya yang tersedia yaitu 12 kolom -->
                </div>
                <div class="col-3">
                <img src="<?= base_url('assets/image/logo-kampus-merdeka.png') ?>" alt="" class="" style="width: 100px; height: 90px">
                </div>
            </div>
        </nav>
    </center>
    <!-- membuat logo dan teks di tengah -->

<!-- untuk membuat container login -->
    <div class="container col-xxl-12 col-sm-12 mt-2 mb-2" style="padding-top: 120px;">
        <!-- Outer Row -->
        <!-- untuk membuat source code menjadi rata tengah dengan perintah justify-content -->
        <!-- untuk membuat rata kiri menggunakan align -->
        <div class="row justify-content-center">

            <div class="col-xl-7 col-lg-12 col-md-12">
                <!-- col xl untuk mengubah ukuran tampilan login yang bewarna putih -->

                <!-- ini posisi tampilan container putih di atur -->
                <div class="card o-hidden border-15 shadow-lg my-5">
                    <!-- my-5 mengatur jarak dari atas container -->
                    
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- untuk mengatur panjang kolom usernama dan password -->
                                
                                <div class="p-5">
                                    <!-- p-5 untuk mengatur jarak tulisann siakad-polkam dari tepi atas container -->
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"> LOGIN-SIAKAD-POLKAM</h1>

                        <!-- untuk membuat pesan salah password dan email dengan bewarna merah -->
                                        <?php if($this->session->flashdata('error')) :?>
                                            <div class="alert alert-danger" role="alert">
                                                <?= $this->session->flashdata('error')?>
                                            </div>
                                            <?php endif ?>
                                        </div>
                        <!-- baris perintah yang tersedia untuk membuat pesan eror dari baris 102-108 -->
                        
                        <!--1. untuk membuat form input username-->
                        <!-- form class= user akan membuat aksi dengan mencek username -->
                                    <form class="user" action="<?= base_url('auth/checklogin') ?>" method="POST">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                        </div>

                        <!--2. untuk membuat form input password -->
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                        </div>

                        <!--3. untuk membuat tampilan button LOGIN -->
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <!-- <a href="index.html" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a> -->
                                        <button class="btn btn-warning btn-user btn-block">Login</button>
                                        <hr>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= $base_url ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= $base_url ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= $base_url ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= $base_url ?>js/sb-admin-2.min.js"></script>

</body>

</html>