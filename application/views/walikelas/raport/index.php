<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap/bootstrap.css">

    <!-- Native CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/raport/index.css">

    <!-- Icon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logo.jpg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <title><?= $judul; ?></title>
</head>

<body>
    <!-- Ini Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark biru fixed-top ini">
        <a class="navbar-brand ml-4" href="javascript:window.history.go(-1);">
            <i class="fas fa-arrow-left"></i>
        </a>
        <a class="navbar-brand ml-0" href="<?= site_url(''); ?>">
            <img src="<?= base_url(); ?>assets/img/logo.jpg" width="50" class="d-inline-block" alt="">
            DIGITAL RAPORT
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse putih" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto topnav">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= site_url('walikelas/dashboard') ?>">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= site_url('walikelas/raport') ?>">Raport</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= site_url('walikelas/siswa') ?>">Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= site_url('walikelas/agenda') ?>">Agenda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= site_url('walikelas/kontak') ?>">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= site_url('walikelas/service') ?>">Service</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="search">
        <div class="container pb-5 ">
            <div class="row ml-5">
                <div class="col-md-12 margen">
                    <center>
                        <h1 class="mb-3 mr-5">Daftar Raport Siswa</h1>
                    </center>
                    <form action="" method="post" class="form-inline mr-5">
                        <input type="text" class="form-control form-control-lg lebar-cari w-100 mr-5" name="cari" placeholder="Cari...">
                        <button type="submit" class="btn shadow btn-primary btn-lg float-right">Search <i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="pembungkus ml-4">
                <?php foreach ($siswa as $swa) : ?>
                <div class="rapots margin-raport">
                    <a href="<?= site_url('walikelas/data/raport/') . $swa['nis']; ?>"><img src="<?= base_url(); ?>assets/img/buku.png" width="90"></a>
                    <h3>Raport Penilaian<br>
                        Hasil Belajar</h3>
                    <p><?= $swa['kelas']; ?> <?= $swa['nama_siswa']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="pager">
                <center>
                    <?php if (!isset($_POST['cari'])) : ?>
                    <?= $pagination ?>
                    <?php endif; ?>
                </center>
            </div>
        </div>
    </div>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('berhasil_raport'); ?>"></div> 