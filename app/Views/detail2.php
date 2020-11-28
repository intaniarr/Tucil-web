<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
<div class="row">
<div class="col">
<h2 class="mt-2"> Detail Informasi </h2>
<div class="card" style="width: 18rem;">
  <img src="/img/rice.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Nasi Putih</h5>
    <p class="card-text"><b>Berat : 100gr </b></p>
    <p class="card-text"><b>Karbohidat (gr) : 27,9 </b></p>
    <p class="card-text"><b>Lemak (gr) : 0,28 </b></p>
    <p class="card-text"><b>Protein : 2,66 </b></p>
    <td>Rincian Kalori: 2% lemak, 89% karb, 9% prot.</td>
  </div>
</div>

<?= $this->endSection(); ?>