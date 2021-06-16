<?php $this->extend('/Templates/Default/index'); ?>

<?php $this->section('content'); ?>

<section class="card p-4 py-5 mb-4">
  <h3 class="text-center"><?= $berita['judul_berita']; ?></h3>
  <p class="mb-1 text-center" style="font-size: 14px;"><?= $berita['tanggal_berita']; ?></p>
  <br>
  <br>
  <p><?= $berita['isi_berita']; ?></p>
</section>

<?php $this->endSection(); ?>