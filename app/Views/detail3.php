<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
<div class="row">
<div class="col">
<h2 class="mt-2"> Detail Informasi </h2>
<div class="card" style="width: 18rem;">
  <img src="/img/jagung.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Jagung Rebus</h5>
    <p class="card-text"><b>Berat : 100gr </b></p>
    <p class="card-text"><b>Karbohidat (gr) : 22,33 </b></p>
    <p class="card-text"><b>Lemak (gr) : 0,74 </b></p>
    <p class="card-text"><b>Protein : 3,11 </b></p>
    <td>Rincian Kalori: 6% lemak, 82% karb, 11% prot.</td>
  </div>
</div>

<?= $this->endSection(); ?>