<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<div>
    <style>
    body {
        background-image: url(/assets/images/bg_gym2.jpg);
        font-family: 'Arial', sans-serif;
    }
    </style>
</div>

<!--Tempat nyari latihan berdasarkan tipe latihan-->
<div class=" p-3 d-flex justify-content-end">
    <form action="#" method="#">
        <input type="text" id="search" name="search" placeholder="Cari Latihan">
        <button type="submit" class="rounded-circle"><i class="material-icons">search</i></button>
    </form>
</div>
<!--End-->



<?= $this->endSection(); ?>