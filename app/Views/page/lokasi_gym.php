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

          #map{
            height: 100;
          }
        </style>
        </div>

    <!-- showcase -->
<div class="mt-4 p-5 text-white rounded shadow" style="background-color: white;">
    <div class="d-sm-flex align-items-center justify-content-between">
        <!-- Search -->
        <div class="p-3 mx-auto">
            <!-- Menggunakan event.preventDefault() untuk menghentikan pengambilan ulang halaman -->
            <form onsubmit="searchGym(event); return false;">
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
    let map;
    let gymLocations = []; // Pindahkan definisi variabel ke luar fungsi setupMap agar dapat diakses di fungsi searchGym
    let markers = []; // Tambahkan array untuk menyimpan marker hasil pencarian

    navigator.geolocation.getCurrentPosition(successLocation, errorLocation, {
        enableHighAccuracy: true
    });

    function successLocation(position) {
        setupMap([position.coords.longitude, position.coords.latitude]);
    }

    function errorLocation() {
        setupMap([0, 0]); // Lokasi default jika tidak dapat mendapatkan lokasi pengguna
    }

    function setupMap(center) {
        map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: center,
            zoom: 12
        });

        // Tambahkan marker untuk lokasi pengguna
        new mapboxgl.Marker().setLngLat(center).addTo(map);

        // Contoh lokasi gym (ganti dengan data yang sesuai)
        gymLocations = [
            { name: 'Rebel Gym', coordinates: [-6.896578808546613, 107.61427040434066] },
            { name: 'Curves Ciumbuleuit', coordinates: [-6.880043487967223, 107.60406475839994] },
            // Tambahkan lebih banyak lokasi gym jika diperlukan
        ];

        // Tambahkan marker untuk setiap lokasi gym
        gymLocations.forEach(location => {
            markers.push(
                new mapboxgl.Marker()
                    .setLngLat(location.coordinates)
                    .setPopup(new mapboxgl.Popup().setHTML(`<h3>${location.name}</h3>`))
                    .addTo(map)
            );
        });
    }

    var marker; // Variabel untuk menyimpan marker saat ini

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

    function findNearestGym(userCoordinates) {
        // Hitung jarak antara pengguna dan setiap lokasi gym
        var distances = gymLocations.map(location => {
            var gymCoordinates = location.coordinates;
            var distance = mapboxgl.MercatorCoordinate.distance(
                new mapboxgl.MercatorCoordinate(userCoordinates[0], userCoordinates[1]),
                new mapboxgl.MercatorCoordinate(gymCoordinates[0], gymCoordinates[1])
            );
            return { name: location.name, coordinates: gymCoordinates, distance: distance };
        });

        // Urutkan berdasarkan jarak
        distances.sort((a, b) => a.distance - b.distance);

        // Ambil gym terdekat (yang pertama setelah diurutkan)
        var nearestGym = distances[0];

        return nearestGym;
    }
</script>



    <!-- end showcase -->
  </body>
</html>