<?php $this->extend('/Templates/Admin/index'); ?>

<?php $this->section('content'); ?>

<section class="container">
  <section class="card p-4 mx-auto" style="max-width: 480px">
    <div class="d-flex justify-content-center">
      <img src="<?= base_url('/assets/img/undraw_profile.svg'); ?>" class="rounded img-fluid" style="max-width: 100px">
    </div>
    <br>
    <br>
    <section class="mb-2">
      <p class="mb-2">Full Name</p>
      <p><b><?= $user['nama_user']; ?></b></p>
    </section>
    <section class="mb-2">
      <p class="mb-2">Email</p>
      <p><b><?= $user['email']; ?></b></p>
    </section>

    <a href="/admin/profile/edit" class="btn btn-primary w-100">
      Edit Profile
    </a>
  </section>
</section>

<?php $this->endSection(); ?>