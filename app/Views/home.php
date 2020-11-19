<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="/css/style.css" type ="text/css">
<body>
     <h1 class="warna">HELLO</h1>
     <marquee scrolldelay="50">Hi!</marquee>

     <main role="main">

     <!-- Awal Jumbotron -->
  <div class="container text-right">
    <img src="/img/eat.png"width="150px"class="rounded">
    <h1 class="display-6">INFORMASI KALORI MAKANAN</h1>
     <p class="lead"> by Intania Rahmadhilla</p>
  </div>
    <!-- Akhir Jumbotron -->

</main>
  </body>
</html>
<?= $this->endSection(); ?>