<?php
$page_title  = isset($page_title) ? $page_title : 'Beranda';
$active_menu = isset($active_menu) ? $active_menu : '';
$master_items = array(
        'master_status_pegawai'   => array('bi-person-badge', 'Status Pegawai'),
        'master_unit_kerja'       => array('bi-diagram-3', 'Unit Kerja'),
        'master_satuan_kerja'     => array('bi-building', 'Satuan Kerja'),
        'master_ppk'              => array('bi-person-check', 'PPK'),
        'master_golongan'         => array('bi-bar-chart-steps', 'Golongan'),
        'master_eselon'           => array('bi-layers', 'Eselon'),
        'master_pelatihan'        => array('bi-journal-bookmark', 'Pelatihan'),
        'master_jabatan'          => array('bi-briefcase', 'Jabatan'),
        'master_status_jabatan'   => array('bi-list-check', 'Status Jabatan'),
        'master_penghargaan'      => array('bi-award', 'Penghargaan'),
        'master_hukuman'          => array('bi-exclamation-triangle', 'Hukuman'),
        'master_lokasi_pelatihan' => array('bi-geo-alt', 'Lokasi Pelatihan'),
        'master_lokasi_kerja'     => array('bi-pin-map', 'Lokasi Kerja'),
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
<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <title><?php echo $judul_lengkap.' - '.$instansi; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" crossorigin="anonymous" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/flatpickr.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/adminlte/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/colorbox/colorbox.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/simpeg.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/flatpickr.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/l10n/id.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>asset/colorbox/jquery.colorbox.js"></script>
  </head>
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
      <nav class="app-header navbar navbar-expand bg-body">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button" aria-label="Toggle sidebar">
                <i class="bi bi-list"></i>
              </a>
            </li>
            <li class="nav-item d-none d-md-block">
              <a href="<?php echo base_url(); ?>" class="nav-link">Beranda</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                <i class="bi bi-person-circle me-1"></i> <?php echo $this->session->userdata('nama'); ?>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="<?php echo base_url(); ?>app/change_password"><i class="bi bi-gear me-2"></i>Pengaturan Akun</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url(); ?>manage_user"><i class="bi bi-people me-2"></i>Manajemen User</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="<?php echo base_url(); ?>app/logout"><i class="bi bi-box-arrow-right me-2"></i>Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <div class="sidebar-brand">
          <a href="<?php echo base_url(); ?>" class="brand-link">
            <i class="bi bi-people-fill brand-image opacity-75"></i>
            <span class="brand-text fw-light"><?php echo $judul_pendek; ?></span>
          </a>
        </div>
        <div class="sidebar-wrapper">
          <nav class="mt-2" aria-label="Main navigation">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>" class="nav-link<?php if($active_menu=='beranda') echo ' active'; ?>">
                  <i class="nav-icon bi bi-house-door"></i>
                  <p>Beranda</p>
                </a>
              </li>
              <li class="nav-item<?php if($active_menu=='master') echo ' menu-open'; ?>">
                <a href="#" class="nav-link<?php if($active_menu=='master') echo ' active'; ?>">
                  <i class="nav-icon bi bi-database"></i>
                  <p>Master<i class="nav-arrow bi bi-chevron-right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <?php foreach($master_items as $url => $item) { ?>
                  <li class="nav-item">
                    <a href="<?php echo base_url().$url; ?>" class="nav-link">
                      <i class="nav-icon bi <?php echo $item[0]; ?>"></i>
                      <p><?php echo $item[1]; ?></p>
                    </a>
                  </li>
                  <?php } ?>
                </ul>
              </li>
              <li class="nav-item<?php if($active_menu=='panduan') echo ' menu-open'; ?>">
                <a href="#" class="nav-link<?php if($active_menu=='panduan') echo ' active'; ?>">
                  <i class="nav-icon bi bi-book"></i>
                  <p>Panduan<i class="nav-arrow bi bi-chevron-right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <?php foreach($panduan_items as $url => $label) { ?>
                  <li class="nav-item">
                    <a href="<?php echo base_url().$url; ?>" class="nav-link">
                      <i class="nav-icon bi bi-file-text"></i>
                      <p><?php echo $label; ?></p>
                    </a>
                  </li>
                  <?php } ?>
                </ul>
              </li>
              <li class="nav-item<?php if($active_menu=='laporan') echo ' menu-open'; ?>">
                <a href="#" class="nav-link<?php if($active_menu=='laporan') echo ' active'; ?>">
                  <i class="nav-icon bi bi-clipboard-data"></i>
                  <p>Laporan<i class="nav-arrow bi bi-chevron-right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <?php foreach($laporan_items as $url => $label) { ?>
                  <li class="nav-item">
                    <a href="<?php echo base_url().$url; ?>" class="nav-link">
                      <i class="nav-icon bi bi-file-earmark-bar-graph"></i>
                      <p><?php echo $label; ?></p>
                    </a>
                  </li>
                  <?php } ?>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </aside>
      <main class="app-main">
        <div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <h1 class="mb-0 fs-3"><?php echo $page_title; ?></h1>
              </div>
              <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $page_title; ?></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="app-content">
          <div class="container-fluid">
