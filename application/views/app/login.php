<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <title><?php echo $judul_lengkap.' - '.$instansi; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" crossorigin="anonymous" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/adminlte/css/adminlte.min.css">
  </head>
  <body class="login-page bg-body-secondary">
    <main class="login-box">
      <h1 class="login-logo">
        <a href="<?php echo base_url(); ?>"><i class="bi bi-people-fill me-1"></i> <b><?php echo $judul_pendek; ?></b></a>
      </h1>
      <div class="card shadow">
        <div class="card-body login-card-body">
          <p class="login-box-msg"><?php echo $judul_lengkap.' '.$instansi; ?><br>Silakan masuk untuk memulai sesi Anda</p>

          <?php if(validation_errors()) { ?>
          <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <?php echo validation_errors(); ?>
          </div>
          <?php } ?>

          <?php if($this->session->flashdata('result_login')) { ?>
          <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <?php echo $this->session->flashdata('result_login'); ?>
          </div>
          <?php } ?>

          <?php echo form_open('app/index'); ?>
            <label class="visually-hidden" for="username">Username</label>
            <div class="input-group mb-3">
              <input id="username" type="text" name="username" class="form-control" placeholder="Username" value="<?php echo set_value('username'); ?>" autofocus>
              <div class="input-group-text"><span class="bi bi-person-fill"></span></div>
            </div>
            <label class="visually-hidden" for="password">Password</label>
            <div class="input-group mb-3">
              <input id="password" type="password" name="password" class="form-control" placeholder="Password">
              <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            </div>
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary"><i class="bi bi-box-arrow-in-right me-1"></i> Masuk</button>
            </div>
          <?php echo form_close(); ?>
        </div>
      </div>
      <p class="text-center text-secondary mt-3 mb-0"><small><?php echo $credit; ?></small></p>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>
