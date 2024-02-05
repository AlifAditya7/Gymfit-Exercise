<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<!-- showcase -->
<div class="mt-4 p-5 text-white rounded shadow" style="background-color: #808080;">
    <div class="d-sm-flex align-items-center justify-content-between">
        <div>
            <h1>Selamat datang di <b>Gym Exercise</b></h1>
            <p class="lead my-4">
                Aplikasi yang digunakan untuk kebutuhan gym dan nutrisi bagi orang orang yang ingin
                menurunkan berat badan maupun membuat masa otot
            </p>
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <button class="btn btn-light btn-lg shadow"><i class="material-icons"
                    style="vertical-align: bottom;">arrow_forward</i>Mulai Latihan</button>
        </div>
        <video width="320" height="240" controls>
            <source src="assets/images/gym_vid.mp4" type="video/mp4" />
            browsermu tidak mendukung untuk video ini!
        </video>
    </div>
</div>

<div>
    <style>
    body {
        background-image: url(assets/images/bg_gym.jpg);
        font-family: 'Arial', sans-serif;
    }
    </style>

</div>
<!-- roadmap -->
<section class="p-5">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-4">
                <div class="card text-dark bg-white">
                    <div class="card-body">
                        <img src="assets/images/otot.jpg" width="100px">
                        <h3 class="card-title mb-3">Program Latihan</h3>
                        <p class="card-text">
                            Berisi tentang program program latihan yang bisa dilakukan
                            oleh pengguna
                        </p>
                        <a href="#" class="btn btn-dark">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-dark bg-white">
                    <div class="card-body">
                        <img src="assets/images/otot2.jpg" width="100px">
                        <h3 class="card-title mb-3">Rekomendasi Latihan</h3>
                        <p class="card-text">
                            Berisi tentang Rekomendasi program program latihan yang bisa dilakukan
                            oleh pengguna
                        </p>
                        <a href="#" class="btn btn-dark">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-dark bg-white">
                    <div class="card-body">
                        <img src="assets/images/bel.jpg" width="100px">
                        <h3 class="card-title mb-3">Pengingat Personal</h3>
                        <p class="card-text">
                            pengingat bagi user untuk melakukan atau melanjutkan pelatihannya kembali
                        </p>
                        <a href="#" class="btn btn-dark">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- end showcase -->

<?= $this->endSection(); ?>