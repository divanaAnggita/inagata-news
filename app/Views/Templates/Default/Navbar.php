<?php $session = \Config\Services::session() ?>

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
  <section class="container">
    <section class="w-100 d-flex flex-row justify-content-between">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-rss-square"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Inagata News</div>
      </a>
      <?php if ($session->get('id_user')) : ?>
        <a class="btn btn-primary" href="/Admin">
          Go to Dashboard
        </a>
      <?php else : ?>
        <a class="btn btn-primary" href="/Auth/Login">
          Login to Dashboard
        </a>
      <?php endif; ?>

    </section>
  </section>
</nav>