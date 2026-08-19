<?php $this->load->view('dashboard_admin/layout/iframe_header'); ?>
<div class="card"><div class="card-body">
	<?php echo $this->session->flashdata('pass'); ?>
	<?php if(validation_errors()) { ?>
	<div class="alert alert-danger alert-dismissible fade show">
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
		<?php echo form_open('manage_user/simpan',''); ?>
		  <div class="mb-3">
		  	<legend>Manajemen User</legend>
			<label class="form-label fw-semibold" for="nama_unit_kerja">Nama Pengguna</label>
			<div>
			  <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="<?php echo $nama_lengkap; ?>" readonly="true" placeholder="Nama Pengguna">
			</div>
		  </div>
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="eselon">Username</label>
			<div>
			  <input type="text" class="form-control" name="username" id="username" value="<?php echo $username; ?>" readonly="true" placeholder="Username">
			</div>
		  </div>
		  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
		  <input type="hidden" name="default_username" value="<?php echo $username; ?>">
		  <input type="hidden" name="st" value="<?php echo $st; ?>">
		<?php echo form_close(); ?>
	</div></div>
<?php $this->load->view('dashboard_admin/layout/iframe_footer'); ?>
