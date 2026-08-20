<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $judul_lengkap.' - '.$instansi; ?></title>
    <link href="<?php echo base_url(); ?>asset/gentelella/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/gentelella/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/gentelella/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php echo form_open('app/index'); ?>
              <h1><i class="fa fa-users"></i> <?php echo $judul_pendek; ?></h1>
              <p><?php echo $judul_lengkap.' '.$instansi; ?><br>Silakan masuk untuk memulai sesi Anda</p>

              <?php if(validation_errors()) { ?>
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo validation_errors(); ?>
              </div>
              <?php } ?>

              <?php if($this->session->flashdata('result_login')) { ?>
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo $this->session->flashdata('result_login'); ?>
              </div>
              <?php } ?>

              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo set_value('username'); ?>" autofocus>
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>
              <div>
                <button type="submit" class="btn btn-dark btn-lg btn-block"><i class="fa fa-sign-in"></i> Masuk</button>
              </div>
              <div class="clearfix"></div>
              <div class="separator">
                <div class="clearfix"></div>
                <br />
                <div>
                  <p><?php echo $credit; ?></p>
                </div>
              </div>
            <?php echo form_close(); ?>
          </section>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>asset/gentelella/js/bootstrap.min.js"></script>
  </body>
</html>
