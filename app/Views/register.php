<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>

<form action = "Login" method="post">
  <div class="container">
  <h2 class ="title">Register</h2>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
  <div class="form-group">
    <label for="no_telp">No Telpon</label>
    <input type="text" class="form-control" id="no_telp" name="no_telp">
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
<?= $this->endSection(); ?>