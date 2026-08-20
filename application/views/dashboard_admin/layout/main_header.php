<?php
$page_title  = isset($page_title) ? $page_title : 'Beranda';
$active_menu = isset($active_menu) ? $active_menu : '';
$master_items = array(
        'master_status_pegawai'   => array('fa-tag', 'Status Pegawai'),
        'master_unit_kerja'       => array('fa-sitemap', 'Unit Kerja'),
        'master_satuan_kerja'     => array('fa-building', 'Satuan Kerja'),
        'master_ppk'              => array('fa-user', 'PPK'),
        'master_golongan'         => array('fa-signal', 'Golongan'),
        'master_eselon'           => array('fa-bars', 'Eselon'),
        'master_pelatihan'        => array('fa-book', 'Pelatihan'),
        'master_jabatan'          => array('fa-briefcase', 'Jabatan'),
        'master_status_jabatan'   => array('fa-tasks', 'Status Jabatan'),
        'master_penghargaan'      => array('fa-trophy', 'Penghargaan'),
        'master_hukuman'          => array('fa-warning', 'Hukuman'),
        'master_lokasi_pelatihan' => array('fa-map-marker', 'Lokasi Pelatihan'),
        'master_lokasi_kerja'     => array('fa-globe', 'Lokasi Kerja'),
);
$laporan_items = array(
        'laporan_pegawai_unit_satuan'           => 'Laporan Pegawai - Unit Kerja dan Satuan Kerja',
        'laporan_pegawai_penempatan_kerja'      => 'Laporan Pegawai - Penempatan Kerja',
        'laporan_pegawai_ikut_pelatihan'        => 'Laporan Pegawai - Mengikuti Pelatihan',
        'laporan_pegawai_status_golongan'       => 'Laporan Pegawai - Status Pegawai dan Golongan',
        'laporan_pegawai_struktural_fungsional' => 'Laporan Pegawai - Struktural dan Fungsional',
        'laporan_pegawai_urut_kepangkatan'      => 'Laporan Daftar Urut Kepangkatan',
);
$panduan_items = array(
        'panduan_administrator' => 'Administrator',
        'panduan_operator'      => 'Operator',
        'panduan_executive'     => 'Executive',
);
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $judul_lengkap.' - '.$instansi; ?></title>
    <link href="<?php echo base_url(); ?>asset/gentelella/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/gentelella/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/flatpickr.min.css" crossorigin="anonymous">
    <link href="<?php echo base_url(); ?>asset/colorbox/colorbox.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/gentelella/css/custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/simpeg.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/flatpickr.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/l10n/id.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>asset/colorbox/jquery.colorbox.js"></script>
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url(); ?>" class="site_title"><i class="fa fa-users"></i> <span><?php echo $judul_pendek; ?></span></a>
            </div>
            <div class="clearfix"></div>
            <div class="profile clearfix">
              <div class="profile_pic">
                <span class="profile_img profile_img_icon"><i class="fa fa-user"></i></span>
              </div>
              <div class="profile_info">
                <span>Selamat datang,</span>
                <h2><?php echo $this->session->userdata('nama'); ?></h2>
              </div>
            </div>
            <br />
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu Utama</h3>
                <ul class="nav side-menu">
                  <li<?php if($active_menu=='beranda') echo ' class="active"'; ?>><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Beranda</a></li>
                  <li<?php if($active_menu=='master') echo ' class="active"'; ?>><a><i class="fa fa-database"></i> Master <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <?php foreach($master_items as $url => $item) { ?>
                      <li><a href="<?php echo base_url().$url; ?>"><?php echo $item[1]; ?></a></li>
                      <?php } ?>
                    </ul>
                  </li>
                  <li<?php if($active_menu=='panduan') echo ' class="active"'; ?>><a><i class="fa fa-book"></i> Panduan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <?php foreach($panduan_items as $url => $label) { ?>
                      <li><a href="<?php echo base_url().$url; ?>"><?php echo $label; ?></a></li>
                      <?php } ?>
                    </ul>
                  </li>
                  <li<?php if($active_menu=='laporan') echo ' class="active"'; ?>><a><i class="fa fa-bar-chart-o"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <?php foreach($laporan_items as $url => $label) { ?>
                      <li><a href="<?php echo base_url().$url; ?>"><?php echo $label; ?></a></li>
                      <?php } ?>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user-circle-o"></i> <?php echo $this->session->userdata('nama'); ?>
                    <span class="fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo base_url(); ?>app/change_password"><i class="fa fa-cog pull-right"></i> Pengaturan Akun</a></li>
                    <li><a href="<?php echo base_url(); ?>manage_user"><i class="fa fa-users pull-right"></i> Manajemen User</a></li>
                    <li><a href="<?php echo base_url(); ?>app/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="page-title">
            <div class="title_left">
              <h3><?php echo $page_title; ?></h3>
            </div>
            <div class="title_right">
              <ol class="breadcrumb pull-right">
                <li><a href="<?php echo base_url(); ?>">Beranda</a></li>
                <li class="active"><?php echo $page_title; ?></li>
              </ol>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
