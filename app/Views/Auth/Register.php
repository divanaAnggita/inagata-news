<?php $this->extend('/Templates/Auth/index'); ?>

<?php $this->section('content'); ?>

<div class="text-center">
  <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
</div>
<div class="text-danger"><?= $validation->listErrors() ?></div>

<form class="user" action="/Auth/save" method="POST">
  <div class="form-group">
    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Full Name" name="nama_user">
  </div>
  <div class="form-group">
    <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="email">
  </div>
  <div class="form-group">
    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
  </div>
  <button class="btn btn-primary btn-user btn-block" type="submit">
    Register Account
  </button>
  <hr>
</form>
<div class="text-center">
  <a class="small" href="/Auth/login">Already have an account? Login!</a>
</div>

<?php $this->endSection(); ?>