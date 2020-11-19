<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>

<form action = "Login/verif/" method="post">
  <div class="container">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <a href="<?= base_url('register'); ?>">Create New Account</a>
  <input type="submit" class="btn" value="Login">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
<?= $this->endSection(); ?>