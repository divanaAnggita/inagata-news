<?php $this->extend('/Templates/Auth/index'); ?>

<?php $this->section('content'); ?>

<div class="text-center">
  <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
</div>

<?php if (session()->getFlashdata('error')) : ?>
  <div class="alert alert-danger"><?= session()->getFlashdata('error'); ?></div>
<?php endif; ?>
<form class="user" action="/Auth/loginHandler" method="POST">
  <div class="form-group">
    <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email">
  </div>
  <div class="form-group">
    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
  </div>
  <button class="btn btn-primary btn-user btn-block" type="submit">
    Login
  </button>
  <hr>
</form>
<div class="text-center">
  <a class="small" href="/Auth/register">Create an Account!</a>
</div>

<?php $this->endSection(); ?>