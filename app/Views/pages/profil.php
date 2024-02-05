<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<!--FOTO PROFIL-->
<!-- Haruskah ada foto profil? kayanya engga, jadi dikomentari dulu -->
<!-- <div class="container rounded ">
    <div class="shadow-box rounded row-gap-3">
        <div class="text-center mt-5">
            <img id="gambarUtama" src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                class="img-thumbnail rounded-circle" alt="Gambar 1">
        </div>
        <div class="text-center mt-3">
            <button id="gantiGambar" class="btn btn-secondary">Ganti Gambar</button>
        </div>
    </div>
</div> -->

<!-- Script untuk ganti gambar profil -->
<!-- <script>
$(document).ready(function() {
    // Fungsi untuk mengganti gambar saat tombol diklik
    $("#gantiGambar").click(function() {
        // Ganti gambar dengan gambar yang baru
        $("#gambarUtama").attr("src", "gambar2.jpg");
    });
});
</script> -->

<!-- FORM -->
<div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <div class="card-title"><b>Profil Pengguna</b></div>
        </div>
    </div>

    <form action="">
        <div class="form-group mt-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
        </div>
        <div class="form-group mt-3">
            <label for="beratBadan">Berat Badan (kg)</label>
            <input type="number" min="1" max="200" class=" form-control" id="beratBadan"
                placeholder="Masukkan berat badan Anda">
        </div>
        <div class="form-group mt-3">
            <label for="tinggiBadan">Tinggi Badan (cm)</label>
            <input type="number" min="1" max="200" class=" form-control" id="tinggiBadan"
                placeholder="Masukkan tinggi badan Anda">
        </div>
        <div class="form-group mt-3">
            <label for="tipeLatihan">Tipe Latihan</label>
            <select name="tipeLatihan" id="tipeLatihan" class="form-control">
                <option value="biceps">Biceps</option>
                <option value="triceps">Triceps</option>
                <option value="chest">Dada</option>
                <option value="back">Punggung</option>
                <option value="legs">Kaki</option>
                <option value="abs">Abs</option>
                <option value="stretching">Peregangan</option>
                <option value="warm up">Pemanasan</option>
                <option value="lats">Lats</option>
                <option value="hamstring">Hamstring</option>
                <option value="calves">Betis</option>
                <option value="quadriceps">Quadriceps</option>
                <option value="trapezius">Trapezius</option>
                <option value="shoulders">Bahu</option>
                <option value="glutes">Bokong</option>
            </select>
            <div class="form-group mt-3">
                <label for="tingkatKesulitan">Tingkat Kesulitan</label>
                <select name="tingkatKesulitan" id="tingkatKesulitan" class="form-control">
                    <option value="beginner">Pemula</option>
                    <option value="intermediate">Menengah</option>
                    <option value="expert">Pakar</option>
                </select>
            </div>
        </div>
        <input class="btn btn-primary mt-3" type="submit" value="Simpan">
    </form>

</div>


<?= $this->endSection(); ?>