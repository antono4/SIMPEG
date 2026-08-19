<?php $this->load->view('dashboard_admin/layout/iframe_header'); ?>
<div class="card"><div class="card-body">
		<?php echo form_open('master_ppk/simpan',''); ?>
		  <div class="mb-3">
		  	<legend>Master Status Jabatan</legend>
			<label class="form-label fw-semibold" for="nama_jabatan">Nama Status Jabatan</label>
			<div>
			  <input type="text" class="form-control" name="nama_jabatan" id="nama_jabatan" value="<?php echo $nama_jabatan; ?>" placeholder="Nama Status Jabatan" disabled>
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div></div>
<?php $this->load->view('dashboard_admin/layout/iframe_footer'); ?>
