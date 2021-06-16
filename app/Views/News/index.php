<?php $this->extend('/Templates/Default/index'); ?>

<?php $this->section('content'); ?>

<div class="w-100">
  <?php foreach ($berita as $k) : ?>
    <section class="card p-4 mb-4">
      <p class="mb-1" style="font-size: 14px;"><?= $k['tanggal_berita']; ?></p>
      <a href="/news/detail/<?= $k['id_berita']; ?>" class="text-dark">
        <h4><?= $k['judul_berita']; ?></h4>
      </a>
      <a href="/news/detail/<?= $k['id_berita']; ?>" class="text-dark text--max-4-line">
        <p><?= $k['isi_berita'] ? substr($k['isi_berita'], 0, 280) : ''; ?></p>
      </a>
      <div class="d-flex flex-row-reverse bd-highlight">
        <a href="/news/detail/<?= $k['id_berita']; ?>" class="btn btn-primary">
          Detail News
        </a>
      </div>
    </section>
  <?php endforeach ?>
</div>




<?php $this->endSection(); ?>