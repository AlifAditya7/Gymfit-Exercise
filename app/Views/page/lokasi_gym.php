<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gym Exercise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow bg-black">
        <div class="container">
          <a class="navbar-brand" href="#">Gym Exercise</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="informasi_pengguna">Informasi Pengguna</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="program_latihan">Program Latihan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="panduan_nutrisi">Panduan Nutrisi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="lokasi_gym">Lokasi Gym</a>
              </li>
          </div>
        </div>
      </nav>
    <!-- end -->

    <div>
        <style>
          body {
            background-image: url(/public/frontend-gymfit/images/bg_gym3.jpg);
            font-family: 'Arial', sans-serif;
          }
        </style>
        </div>

    <!-- showcase -->
    <div class="mt-4 p-5 text-white rounded shadow" style="background-color: white;">
        <div class="d-sm-flex align-items-center justify-content-between">
          <!--Search-->
        <div class=" p-3 mx-auto">
        <form action="#" method="get">
            <input type="text" id="search" name="search" placeholder="Cari Gym Terdekat">
            <button type="submit" class="rounded-circle"><i class="material-icons">search</i></button>
        </form>
        </div>
        <!--End-->
        </div>
      </div>
    <!-- end showcase -->