<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gym Exercise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.css' rel='stylesheet' />

  </head>

  <!-- JS -->
  
<!-- end -->

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
            background-image: url(<?= base_url('frontend-gymfit'); ?>/images/bg_gym3.jpg);
            font-family: 'Arial', sans-serif;
          }
        </style>
        </div>

    <!-- showcase -->
<div class="mt-4 p-5 text-white rounded shadow" style="background-color: white;">
    <div class="d-sm-flex align-items-center justify-content-between">
        <!-- Search -->
        <div class="p-3 mx-auto">
            <form onsubmit="searchGym(); return false;">
                <input type="text" id="search" name="search" placeholder="Cari Gym Terdekat">
                <button type="submit" class="rounded-circle"><i class="material-icons">search</i></button>
            </form>
        </div>
        <!-- End Search -->
    </div>
</div>

<!-- Map container -->
<div id='map' style='width: 100%; height: 400px;'></div>

<script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoia2lyaW5vc3VraSIsImEiOiJjbHM4cTMwcmcwMGxlMnZvNnZ4bnRvaGVuIn0.wU3Ys-FyJfGRx-HPy2kBPw';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [0, 0],
        zoom: 2
    });

    // Tambahkan kontrol pencarian
    var geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        mapboxgl: mapboxgl
    });

    document.querySelector('.mapboxgl-ctrl-geocoder').appendChild(geocoder.onAdd(map));

    var marker; // Variabel untuk menyimpan marker saat ini

    // Dapatkan dan perbarui posisi pengguna secara real-time
    function updatePosition(position) {
        var coordinates = [position.coords.longitude, position.coords.latitude];

        // Pindahkan peta ke posisi pengguna
        map.flyTo({
            center: coordinates,
            zoom: 12
        });

        // Hapus marker saat ini jika ada
        if (marker) {
            marker.remove();
        }

        // Tambahkan marker untuk posisi pengguna
        marker = new mapboxgl.Marker()
            .setLngLat(coordinates)
            .addTo(map);
    }

    // Handle jika posisi pengguna berubah
    function handlePositionChange() {
        navigator.geolocation.watchPosition(updatePosition, error => console.error('Error:', error));
    }

    // Panggil fungsi handlePositionChange untuk memulai pemantauan posisi
    handlePositionChange();

    function searchGym() {
        var searchValue = document.getElementById('search').value;

        // Hapus marker saat ini jika ada
        if (marker) {
            marker.remove();
        }

        // Gunakan Mapbox API untuk mencari koordinat
        fetch(`https://api.mapbox.com/geocoding/v5/mapbox.places/${searchValue}.json?access_token=${mapboxgl.accessToken}`)
            .then(response => response.json())
            .then(data => {
                // Ambil koordinat hasil pencarian
                var coordinates = data.features[0].center;

                // Pindahkan peta ke lokasi hasil pencarian
                map.flyTo({
                    center: coordinates,
                    zoom: 12
                });

                // Tambahkan marker baru
                marker = new mapboxgl.Marker()
                    .setLngLat(coordinates)
                    .addTo(map);
            })
            .catch(error => console.error('Error:', error));
    }
</script>

    <!-- end showcase -->
  </body>
</html>