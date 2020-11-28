<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
<div class="row">
<div class="col">
<h2 class="mt-2"> Detail Informasi </h2>
<div class="card" style="width: 18rem;">
  <img src="/img/martabak.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Martabak Manis</h5>
    <p class="card-text"><b>Berat : 100gr </b></p>
    <p class="card-text"><b>Karbohidat (gr) : 41,52 </b></p>
    <p class="card-text"><b>Lemak (gr) : 12,57 </b></p>
    <p class="card-text"><b>Protein : 7,78 </b></p>
    <td>Rincian Kalori: 36% lemak, 54% karb, 10% prot.</td>
  </div>
</div>

<?= $this->endSection(); ?>