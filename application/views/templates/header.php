<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap/bootstrap.css">
    
    <!-- Navbar & Header CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/home/header.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/home/features.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/home/testimonial.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/home/join.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/home/footer.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/aos.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/slick/slick-theme.css"/>

    <!-- Icon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <title><?= $judul; ?></title>
</head>
<body>
    
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top navku">
            <a class="navbar-brand" href="<?= site_url(''); ?>">
                <img src="assets/img/logo.jpg" width="50" class="d-inline-block" alt="">
                DIGITAL RAPORT
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse putih" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto topnav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Raport</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Absensi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Ekskul</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Hubin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Komunitas</a>
                    </li>
                </ul>
            </div>
        </nav>