<?php $this->load->view('dashboard_admin/layout/iframe_header'); ?>
<div class="card"><div class="card-body">
	<?php if(validation_errors()) { ?>
	<div class="alert alert-danger alert-dismissible fade show">
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
		<?php echo form_open('master_status_pegawai/simpan',''); ?>
		  <div class="mb-3">
		  	<legend>Master Status Pegawai</legend>
			<label class="form-label fw-semibold" for="inputEmail">Nama Status</label>
			<div>
			  <input type="text" class="form-control" name="nama_status" id="namaStatus" value="<?php echo $nama_status; ?>" placeholder="Nama Status">
			</div>
		  </div>
		  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
		  <input type="hidden" name="st" value="<?php echo $st; ?>">
		  <div class="mb-3">
			<div>
			  <button type="submit" class="btn btn-primary">Simpan Data</button>
			  <button type="reset" class="btn btn-secondary">Hapus Data</button>
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div></div>
<?php $this->load->view('dashboard_admin/layout/iframe_footer'); ?>
