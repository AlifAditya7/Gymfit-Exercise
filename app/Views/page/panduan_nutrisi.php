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
                <a class="nav-link" aria-current="page" href="program_latihan">Program Latihan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="panduan_nutrisi">Panduan Nutrisi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="lokasi_gym">Lokasi Gym</a>
              </li>
          </div>
        </div>
      </nav>
    <!-- end -->
        <style>
          body {
            background-image: url(<?= base_url('frontend-gymfit'); ?>/images/vegi_bg.jpg);
            font-family: 'Arial', sans-serif;
          }
        </style>
    
    <!-- showcase -->
    <div class="mt-4 p-5 text-white rounded shadow" style="background-color: white;">
      <div class="d-sm-flex align-items-center justify-content-between">
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pilih Kebutuhan nutrisi
          </button>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Kalori</a></li>
            <li><a class="dropdown-item" href="#">Lemak Total</a></li>
            <li><a class="dropdown-item" href="#">Protein</a></li>
            <li><a class="dropdown-item" href="#">Kolestrol</a></li>
            <li><a class="dropdown-item" href="#">Karbohidrat</a></li>
            <li><a class="dropdown-item" href="#">Gula</a></li>
          </ul>
        </div>
      </div>

      <div>
        <label for="MinNut" class="form-label" style="color: black;">Minimum Nutrisi: <span id="minNutValue">0</span></label>
        <input type="range" class="form-range" min="0" max="7000" id="MinNut" onchange="updateMinNutValue()">
    
        <label for="MaxNut" class="form-label" style="color: black;">Maximum Nutrisi: <span id="maxNutValue">0</span></label>
        <input type="range" class="form-range" min="0" max="7000" id="MaxNut" onchange="updateMaxNutValue()">
    </div>
    
    <script>
        function updateMinNutValue() {
            var minNutValue = document.getElementById("MinNut").value;
            document.getElementById("minNutValue").textContent = minNutValue;
        }
    
        function updateMaxNutValue() {
            var maxNutValue = document.getElementById("MaxNut").value;
            document.getElementById("maxNutValue").textContent = maxNutValue;
        }
    </script>
        

        <div>
            <button type="button" class="btn btn-secondary btn-lg">Cari Makanan</button>
        </div>
      </div>
      </body>
      </html>