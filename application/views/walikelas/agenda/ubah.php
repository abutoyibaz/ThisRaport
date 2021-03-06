<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap/bootstrap.css">

    <!-- Native CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/agenda/agenda.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dashboard/ubah.css">

    <!-- Icon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logo.jpg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Hover -->
    <link href="css/hover.css" rel="stylesheet" media="all">

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

    <!-- Form Ubah -->
    <section>
        <div class="container bg-light shadow">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <h1 class="marg-atas">Ubah Agenda <i class="fas fa-pen-square"></i></h1>
                        <form action="<?= site_url('walikelas/agenda/update/') . $agenda['id']; ?>" method="post" class="w-75">
                            <input type="hidden" name="id" value="<?= $agenda['id']; ?>">
                            <div class="form-group">
                                <label for="judul" class="float-left ml-3 weight-field">Judul Pertemuan</label>&nbsp;&nbsp;&nbsp;
                                <small class="form-text text-danger float-left"><?= form_error('judul'); ?></small>
                                <input type="text" name="judul" class="form-control" id="judul" value="<?= $agenda['judul_agenda']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="tanggal" class="float-left ml-3 weight-field">Tanggal Pertemuan</label>&nbsp;&nbsp;&nbsp;
                                <small class="form-text text-danger float-left"><?= form_error('tanggal'); ?></small>
                                <input type="date" name="tanggal" class="form-control" id="tanggal" value="<?= $agenda['tanggal_agenda']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="tanggal" class="float-left ml-3 weight-field">Hari Pertemuan</label>&nbsp;&nbsp;&nbsp;
                                <small class="form-text text-danger float-left"><?= form_error('hari'); ?></small>
                                <select name="hari" class="form-control">
                                    <?php foreach ($hari as $hr) : ?>
                                    <?php if ($hr == $agenda['hari_agenda']) : ?>
                                    <option value="<?= $hr; ?>" selected><?= $hr; ?></option>
                                    <?php else : ?>
                                    <option value="<?= $hr; ?>"><?= $hr; ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="mulai" class="float-left ml-3 weight-field">Jam Mulai</label>&nbsp;&nbsp;&nbsp;
                                <small class="form-text text-danger float-left"><?= form_error('mulai'); ?></small>
                                <input type="time" name="mulai" class="form-control" id="mulai" value="<?= $agenda['waktu_mulai']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="selesai" class="float-left ml-3 weight-field">Jam Selesai</label>&nbsp;&nbsp;&nbsp;
                                <small class="form-text text-danger float-left"><?= form_error('selesai'); ?></small>
                                <input type="time" name="selesai" class="form-control" id="selesai" value="<?= $agenda['waktu_selesai']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="lokasi" class="float-left weight-field">Lokasi Pertemuan</label>&nbsp;&nbsp;&nbsp;
                                <small class="form-text text-danger ml-3 float-left"><?= form_error('lokasi'); ?></small>
                                <input type="text" name="lokasi" class="form-control" id="lokasi" value="<?= $agenda['lokasi_agenda']; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-lg mt-4 mb-5">SIMPAN <i class="fas fa-pen-square"></i></button>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </section> 