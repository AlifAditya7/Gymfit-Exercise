<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<!-- <div>
    <style>
    body {
        background-image: url(/assets/images/bg_gym2.jpg);
        font-family: 'Arial', sans-serif;
    }
    </style>
</div> -->

<!--Tempat nyari latihan berdasarkan tipe latihan-->
<div class=" p-3 d-flex justify-content-end">
    <form action="#" method="#">
        <input type="text" id="search" name="search" placeholder="Cari Latihan">
        <button type="submit" class="rounded-circle"><i class="material-icons">search</i></button>
    </form>
</div>
<!--End-->

<?php
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://work-out-api1.p.rapidapi.com/search",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: work-out-api1.p.rapidapi.com",
		"X-RapidAPI-Key: 7751a25e47msh37dc07efd494236p1ec523jsnc41c94bbd637"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$decoded = json_decode($response, true);
    print_r($decoded[Muscles]);
}
curl_close($curl);
?>

<?= $this->endSection(); ?>