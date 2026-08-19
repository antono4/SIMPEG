<?php
$this->load->view('dashboard_admin/layout/main_header', array('page_title' => 'Data Kepegawaian', 'active_menu' => 'master'));
?>
<div class="callout callout-info">
  <h5><?php echo $judul_lengkap.' '.$instansi; ?></h5>
  <p class="mb-0"><?php echo $alamat; ?></p>
</div>

<div class="card card-body mb-3 py-2">
  <ul class="nav nav-pills flex-wrap gap-1">
    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>pegawai/edit/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="bi bi-person me-1"></i>Pegawai</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>data_keluarga/index/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="bi bi-people me-1"></i>Keluarga</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>data_riwayat_pangkat/index/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="bi bi-bar-chart-steps me-1"></i>Riwayat Pangkat</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>data_riwayat_jabatan/index/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="bi bi-briefcase me-1"></i>Riwayat Jabatan</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>data_pendidikan/index/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="bi bi-mortarboard me-1"></i>Pendidikan</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>data_pelatihan/index/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="bi bi-journal-bookmark me-1"></i>Pelatihan</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>data_penghargaan/index/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="bi bi-award me-1"></i>Penghargaan</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>data_seminar/index/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="bi bi-easel me-1"></i>Seminar</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>data_organisasi/index/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="bi bi-diagram-3 me-1"></i>Organisasi</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>data_gaji_pokok/index/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="bi bi-cash-stack me-1"></i>Gaji Pokok</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>data_hukuman/index/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="bi bi-exclamation-triangle me-1"></i>Hukuman</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>data_dp3/index/<?php echo $this->session->userdata("kode_pegawai"); ?>"><i class="bi bi-clipboard-check me-1"></i>DP3</a></li>
  </ul>
</div>
