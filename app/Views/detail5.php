<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
<div class="row">
<div class="col">
<h2 class="mt-2"> Detail Informasi </h2>
<div class="card" style="width: 18rem;">
  <img src="/img/sate.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sate Ayam</h5>
    <p class="card-text"><b>Berat : 100gr </b></p>
    <p class="card-text"><b>Karbohidat (gr) : 4,87 </b></p>
    <p class="card-text"><b>Lemak (gr) : 14,82 </b></p>
    <p class="card-text"><b>Protein : 19,54 </b></p>
    <td>Rincian Kalori: 58% lemak, 8% karb, 34% prot</td>
  </div>
</div>

<?= $this->endSection(); ?>