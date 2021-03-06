        <div class="face" data-av-animation="slideInRight">
            <h2 data-aos="fade-right" data-aos-duration="1500">DIGITAL RAPORT</h2><br>
            <p data-aos="fade-left" data-aos-duration="1500" data-aos-delay="200">Aplikasi yang mempermudah Orang Tua dan Guru dalam
                pembagian hasil evaluasi belajar siswa dan berkonsultasi
                secara online/digital</p>
            <button data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400" class="hijau" data-toggle="modal" data-target="#ModalWalikelas">WALI KELAS</button>
            <button data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400" class="merah" data-toggle="modal" data-target="#ModalWalimurid">WALI MURID</button>
        </div>
        <!-- Modal Walimurid -->
        <div class="modal fade" id="ModalWalikelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="assets/img/logo.jpg" class="mt-1" width="50">
                        <h4 class="text-center modal-title text-primary" id="exampleModalLabel">DIGITAL RAPORT</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h2 class="h1 text-center mt-4">Welcome, <p class="h1 text-success d-inline">Teacher</p>
                        </h2>
                        <a href="<?= site_url('signup'); ?>" class="noline"><button type="button" class="btn btn-success btn-lg btn-block tombol text-white margix">SIGN UP</button></a>
                        <a href="<?= site_url('signin/walikelas') ?>" class="noline"><button type="button" class="btn btn-success btn-lg btn-block tombol text-white mt-3">SIGN IN</button></a>
                    </div>
                    <div class="modal-body">
                        <h5 class="h5 text-center">Copyright © 2019 Simanis Production</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Walikelas -->
        <div class="modal fade" id="ModalWalimurid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="assets/img/logo.jpg" class="mt-1" width="50">
                        <h4 class="text-center modal-title text-primary" id="exampleModalLabel">DIGITAL RAPORT</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h2 class="h1 text-center mt-4">Welcome, <p class="h1 text-danger d-inline">Parent</p>
                        </h2>
                        <a href="<?= site_url('signup'); ?>" class="noline"><button type="button" class="btn btn-danger btn-lg btn-block tombol text-white margix">SIGN UP</button></a>
                        <a href="<?= site_url('signin/walimurid'); ?>" class="noline"><button type="button" class="btn btn-danger    btn-lg btn-block tombol text-white mt-3">SIGN IN</button></a>
                    </div>
                    <div class="modal-body">
                        <h5 class="h5 text-center">Copyright © 2019 Simanis Production</h5>
                    </div>
                </div>
            </div>
        </div>
        </header>
        <!-- Ini Section Our Features -->
        <section id="features">
            <div class="judul">
                <h2>Our Features</h2>
            </div>
            <div class="container-features">
                <div class="fitur" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
                    <center>
                        <img src="assets/img/buku.png" width="180">
                        <h2>Raport Digital</h2>
                        <p>Mempermudah Guru dan Walimurid
                            dalam pembagian raport siswa</p>
                    </center>
                </div>
                <div class="fitur" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="400">
                    <center>
                        <img src="assets/img/kalendar.png" width="180">
                        <h2>Agenda Pertemuan</h2>
                        <p>Mempermudah Guru dan Walimurid
                            untuk menjadwalkan pertemuan </p>
                    </center>
                </div>
                <div class="fitur" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="600">
                    <center>
                        <img src="assets/img/cetak.png" width="180" class="mb-2">
                        <h2>Cetak Raport</h2>
                        <p>Cetak raport anak anda untuk<br>
                            dijadikan bukti yang formal</p>
                    </center>
                </div>
                <div class="fitur" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="800">
                    <center>
                        <img src="assets/img/chat.png" width="180">
                        <h2>Contact Person</h2>
                        <p>Menghubungkan Walimurid dan
                            Walikelas agar bias saling
                            berkomunikasi</p>
                    </center>
                </div>
            </div>
        </section>

        <!-- Ini section Testimonial -->
        <section id="testimonial">
            <div class="judul">
                <h2>Testimonial</h2>
            </div>
            <div class="container-testimonial rounded mx-auto d-block mt-4">
                <?php foreach ($testimonial as $testi) : ?>
                <div class="testi ml-3 mr-3" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="200">
                    <p>
                        <img class="float-left mr-2" src="<?= base_url(); ?>assets/img/profile.png" width="70">
                        <b>"</b><?= $testi['isi_pesan']; ?><b>"&nbsp;<?= $testi['nama_pengirim']; ?></b>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Ini Section Join -->
        <section id="join">
            <div class="judul">
                <h2>How To Join</h2>
            </div>
            <div class="container-join">
                <div class="step" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="400">
                    <center>
                        <img src="assets/img/step1.png">
                        <h3>1. Pilih Status Anda</h3>
                    </center>
                </div>
                <div class="step" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                    <center>
                        <img src="assets/img/step2.png">
                        <h3>2. Pilih Sign In/Sign Up</h3>
                    </center>
                </div>
                <div class="step" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="600">
                    <center>
                        <img src="assets/img/step3.png">
                        <h3>3. Silahkan Lakukan Registrasi</h3>
                    </center>
                </div>
            </div>
        </section> 