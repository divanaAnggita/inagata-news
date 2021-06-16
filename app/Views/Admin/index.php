<?php $this->extend('/Templates/Admin/index'); ?>

<?php $this->section('content'); ?>

<div class="jumbotron">
  <h1 class="display-4">Halo, <?= $name; ?> </h1>
  <p class="lead">Selamat datang di Dashboard manajemen Berita milik Inagata News</p>
  <hr class="my-4">
  <a class="btn btn-primary btn-lg" href="/admin/news" role="button">See All News</a>
</div>

<?php $this->endSection(); ?>