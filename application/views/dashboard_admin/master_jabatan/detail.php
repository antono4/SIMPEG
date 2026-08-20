<?php $this->load->view('dashboard_admin/layout/iframe_header'); ?>
<div class="x_panel"><div class="x_content">
		<?php echo form_open('master_ppk/simpan',''); ?>
		  <div class="mb-3">
		  	<legend>Master Jabatan</legend>
			<label class="form-label fw-semibold" for="nama_jabatan">Nama Jabatan</label>
			<div>
			  <input type="text" class="form-control" name="nama_jabatan" id="nama_jabatan" value="<?php echo $nama_jabatan; ?>" placeholder="Nama Jabatan" disabled>
			</div>
		  </div>
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="level">Level</label>
			<div>
			  <input type="text" class="form-control" name="level" id="level" value="<?php echo $level; ?>" placeholder="Level" disabled>
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div></div>
<?php $this->load->view('dashboard_admin/layout/iframe_footer'); ?>
