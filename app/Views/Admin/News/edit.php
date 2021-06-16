<?php $this->extend('/Templates/Admin/index'); ?>

<?php $this->section('content'); ?>

<section class="mt-5 container">
  <form class="card p-4" action="/ListOfNews/update/<?= $berita['id_berita']; ?>" method="post">
    <section class="form-group">
      <input type="text" class="form-control" name="judul_berita" placeholder="Judul Berita" value="<?= $berita['judul_berita']; ?>">
    </section>
    <section class="form-group">
      <textarea name="isi_berita" class="form-control" rows="10" placeholder="Tulis berita..."><?= $berita['isi_berita']; ?></textarea>
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

<?php $this->endSection(); ?>