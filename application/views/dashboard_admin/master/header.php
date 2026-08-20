<?php
$this->load->view('dashboard_admin/layout/main_header', array('page_title' => 'Data Kepegawaian', 'active_menu' => 'master'));
?>
<div class="callout callout-info">
  <h5><?php echo $judul_lengkap.' '.$instansi; ?></h5>
  <p class="mb-0"><?php echo $alamat; ?></p>
</div>

<div class="x_panel">
  <ul class="nav nav-pills flex-wrap gap-1">
    <li><a href="<?php echo base_url(); ?>pegawai/edit/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="fa fa-user me-1"></i>Pegawai</a></li>
    <li><a href="<?php echo base_url(); ?>data_keluarga/index/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="fa fa-users me-1"></i>Keluarga</a></li>
    <li><a href="<?php echo base_url(); ?>data_riwayat_pangkat/index/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="fa fa-signal me-1"></i>Riwayat Pangkat</a></li>
    <li><a href="<?php echo base_url(); ?>data_riwayat_jabatan/index/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="fa fa-briefcase me-1"></i>Riwayat Jabatan</a></li>
    <li><a href="<?php echo base_url(); ?>data_pendidikan/index/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="fa fa-graduation-cap me-1"></i>Pendidikan</a></li>
    <li><a href="<?php echo base_url(); ?>data_pelatihan/index/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="fa fa-bookmark me-1"></i>Pelatihan</a></li>
    <li><a href="<?php echo base_url(); ?>data_penghargaan/index/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="fa fa-trophy me-1"></i>Penghargaan</a></li>
    <li><a href="<?php echo base_url(); ?>data_seminar/index/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="fa fa-desktop me-1"></i>Seminar</a></li>
    <li><a href="<?php echo base_url(); ?>data_organisasi/index/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="fa fa-sitemap me-1"></i>Organisasi</a></li>
    <li><a href="<?php echo base_url(); ?>data_gaji_pokok/index/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="fa fa-money me-1"></i>Gaji Pokok</a></li>
    <li><a href="<?php echo base_url(); ?>data_hukuman/index/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="fa fa-warning me-1"></i>Hukuman</a></li>
    <li><a href="<?php echo base_url(); ?>data_dp3/index/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="fa fa-check-square-o me-1"></i>DP3</a></li>
  </ul>
</div>
