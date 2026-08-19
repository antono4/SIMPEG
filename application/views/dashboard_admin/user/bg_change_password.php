<?php
        if($this->session->userdata("tab_a")=="" && $this->session->userdata("tab_b")=="")
        {
                $set['tab_a'] = "active";
                $this->session->set_userdata($set);
        }
        $a = $this->session->userdata("tab_a");
        $b = $this->session->userdata("tab_b");
?>
<section id="pengaturan-akun">
  <div class="card">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item"><a class="nav-link <?php echo $a; ?>" href="#lA" data-bs-toggle="tab"><i class="bi bi-key me-1"></i> Pengaturan Password</a></li>
        <li class="nav-item"><a class="nav-link <?php echo $b; ?>" href="#lB" data-bs-toggle="tab"><i class="bi bi-person me-1"></i> Pengaturan Nama Pengguna</a></li>
        <li class="nav-item ms-auto"><a class="nav-link text-danger" href="<?php echo base_url(); ?>app/logout"><i class="bi bi-box-arrow-right me-1"></i> Log Out</a></li>
      </ul>
    </div>
    <div class="card-body">
      <?php echo $this->session->flashdata('pass'); ?>
      <?php if(validation_errors()) { ?>
      <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <h5 class="alert-heading">Terjadi Kesalahan!</h5>
        <?php echo validation_errors(); ?>
      </div>
      <?php } ?>
      <div class="tab-content">
        <div class="tab-pane fade <?php if($a) echo 'show active'; ?>" id="lA">
          <h5 class="mb-3">Pengaturan Password</h5>
          <?php echo form_open('app/save_pass'); ?>
            <div class="mb-3">
              <label class="form-label fw-semibold" for="username">Username</label>
              <input type="text" value="<?php echo $this->session->userdata('username'); ?>"
              class="form-control" name="username" id="username" placeholder="Username" readonly="true">
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold" for="pass_lama">Password Lama</label>
              <input type="password" class="form-control" name="pass_lama" id="pass_lama" placeholder="Password Lama">
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold" for="pass_baru">Password Baru</label>
              <input type="password" class="form-control" name="pass_baru" id="pass_baru" placeholder="Password Baru">
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold" for="ulangi_pass_baru">Ulangi Password Baru</label>
              <input type="password" class="form-control" name="ulangi_pass_baru" id="ulangi_pass_baru" placeholder="Ulangi Password Baru">
            </div>
            <button type="submit" class="btn btn-primary"><i class="bi bi-save me-1"></i> Simpan Data</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
          <?php echo form_close(); ?>
        </div>
        <div class="tab-pane fade <?php if($b) echo 'show active'; ?>" id="lB">
          <h5 class="mb-3">Pengaturan Nama Pengguna</h5>
          <?php echo form_open('app/save_name'); ?>
            <div class="mb-3">
              <label class="form-label fw-semibold" for="nama_lengkap">Nama Pengguna</label>
              <input type="text" value="<?php echo $this->session->userdata('nama'); ?>"
              class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Pengguna">
            </div>
            <button type="submit" class="btn btn-primary"><i class="bi bi-save me-1"></i> Simpan Data</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $this->load->view('dashboard_admin/layout/main_footer'); ?>
