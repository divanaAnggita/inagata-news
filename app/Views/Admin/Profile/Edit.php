<?php $this->extend('/Templates/Admin/index'); ?>

<?php $this->section('content'); ?>

<section class="container">
  <section class="card p-4 mx-auto" style="max-width: 480px">
    <div class="d-flex justify-content-center">
      <img src="<?= base_url('/assets/img/undraw_profile.svg'); ?>" class="rounded img-fluid" style="max-width: 100px">
    </div>
    <br>
    <br>
    <form action="/Profile/update" method="POST">
      <?= csrf_field(); ?>
      <section class="form-group">
        <input type="text" class="form-control" name="nama_user" placeholder="Full Name" value="<?= $user['nama_user']; ?>">
      </section>
      <section class="form-group">
        <input type="text" class="form-control" name="email" placeholder="Email" value="<?= $user['email']; ?>">
      </section>
      <section class="form-group">
        <input type="password" disabled class="form-control" name="password" placeholder="Password" value="<?= $user['password']; ?>">
      </section>
      <div class="text-danger">
        <?= $validation->listErrors(); ?>
      </div>
      <section class="d-flex flex-row flex-row-reverse mt-1">
        <button type="submit" class="btn btn-primary w-100">
          Save
        </button>
        <a href="/admin/news" class="btn btn-secondary w-100 mr-3">Cancel</a>
      </section>
    </form>
  </section>
</section>

<?php $this->endSection(); ?>