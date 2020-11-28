<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container text-center">
<h1 class="display-6">TABEL KALORI MAKANAN</h1>
</div>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Makanan</th>
      <th scope="col">Kalori</th>
      <th scope="col"> </th>
      <th scope="col"> Rincian </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Nasi putih</td>
      <td>175</td>
      <td> <img src="/img/rice.png"width="50px">
      <td><a href = "/detail2/" class="btn btn-success">detail</a>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jagung rebus</td>
      <td>93</td>
      <td> <img src="/img/jagung.png"width="50px">
      <td><a href = "/detail3/" class="btn btn-success">detail</a>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Martabak manis</td>
      <td>300</td>
      <td> <img src="/img/martabak.png"width="50px">
      <td><a href = "/detail4/" class="btn btn-success">detail</a>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Sate ayam</td>
      <td>225</td>
      <td> <img src="/img/sate.png"width="50px">
      <td><a href = "/detail5/" class="btn btn-success">detail</a>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Kentang rebus</td>
      <td>87</td>
      <td> <img src="/img/kentang.png"width="50px">
      <td><a class="btn btn-success">detail</a>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Roti</td>
      <td>92</td>
      <td> <img src="/img/roti.png"width="50px">
      <td><a class="btn btn-success">detail</a>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Telur rebus</td>
      <td>154</td>
      <td> <img src="/img/telur.png"width="50px">
      <td><a class="btn btn-success">detail</a>
    </tr>
  </tbody>
</table>


<?= $this->endSection(); ?>