<?php $this->extend('/Templates/Admin/index'); ?>

<?php $this->section('content'); ?>

<section>
  <h1>List Berita</h1>
  <div class="container">
    <div class="row">
      <div class="col">
        <br />
        <a href="/admin/news/add" class="btn btn-primary">tambah berita</a>
        <br /><br />
        <table class="table table table-striped">
          <tr>
            <th>#</th>
            <th>judul berita</th>
            <th>isi berita</th>
            <th>aksi</th>
          </tr>
          <?php $i = 1 ?>
          <?php foreach ($berita as $k) : ?>
            <tr>
              <td><?= $i ?></td>
              <td><?= $k['judul_berita']; ?> </td>
              <td><?= $k['isi_berita'] ? substr($k['isi_berita'], 0, 280) : ''; ?> </td>
              <td>
                <div class="d-flex flex-row">
                  <a href="/admin/news/edit/<?= $k['id_berita'] ?> " class="btn btn-info">edit</a>
                  <div class="mx-1"></div>
                  <form action="/admin/news/delete/<?= $k['id_berita']; ?>" method="POST" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda benar benar yakin akan menghapus data ini?')">delete</button>
                  </form>
                </div>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach ?>
        </table>
      </div>
    </div>
  </div>

</section>

<?php $this->endSection(); ?>