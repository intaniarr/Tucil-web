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
      <th scope="col">Berat (gr)</th>
      <th scope="col">Kalori</th>
      <th scope="col">Lemak (gr)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Nasi putih</td>
      <td>100</td>
      <td>175</td>
      <td>0,3</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jagung rebus</td>
      <td>250</td>
      <td>90,2</td>
      <td>1,5</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Martabak manis</td>
      <td>100</td>
      <td>300</td>
      <td>12,57</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Sate ayam</td>
      <td>100</td>
      <td>225</td>
      <td>14,82</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Kentang rebus</td>
      <td>100</td>
      <td>87</td>
      <td>0,1</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Roti</td>
      <td>35</td>
      <td>92</td>
      <td>0,46</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Telur rebus</td>
      <td>100</td>
      <td>154</td>
      <td>10,57</td>
    </tr>
  </tbody>
</table>


<?= $this->endSection(); ?>