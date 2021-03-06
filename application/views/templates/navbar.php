<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap/bootstrap.css">
    <link href="<?= base_url(); ?>assets/css/aos.css" rel="stylesheet">
    
    <!-- Native CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dashboard/dashboard.css">

    <!-- Icon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logo.jpg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <title>Simanis | Raport Digital</title>
</head>
<body>
    <!-- Ini Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark biru fixed-top">
        <a class="navbar-brand" href="<?= site_url(''); ?>">
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