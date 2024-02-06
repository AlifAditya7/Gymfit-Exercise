<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
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
        

        <div>
            <button type="button" class="btn btn-secondary btn-lg">Cari Makanan</button>
        </div>
      </div>
<?= $this->endSection(); ?>
