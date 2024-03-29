<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1 class="heading">Body Mass Index (BMI) Calculator</h1>
    Your Height (cm):
    <input type="number" class="input" id="height" value="180" placeholder="Enter your height in cm">
    Your Weight (kg):
    <input type="number" class="input" id="weight" value="80" placeholder="Enter your weight in kg">
    <button class="btn" id="btn">Compute BMI</button>
    <input disabled type="text" class="input" id="bmi-result">
    <h4 class="info-text">Weight Condition: <span id="weight-condition"></span></h4>
</div>

<?= $this->endSection(); ?>