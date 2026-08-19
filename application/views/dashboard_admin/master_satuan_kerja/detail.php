<?php $this->load->view('dashboard_admin/layout/iframe_header'); ?>
<div class="card"><div class="card-body">
		<?php echo form_open('master_status_pegawai/simpan',''); ?>
		  <div class="mb-3">
		  	<legend>Master Unit Kerja</legend>
			<label class="form-label fw-semibold" for="nama_unit_kerja">Nama Unit Kerja</label>
			<div>
			  <input type="text" class="form-control" name="nama_unit_kerja" id="nama_unit_kerja" disabled  value="<?php echo $nama_unit_kerja; ?>" placeholder="Nama Unit Kerja">
			</div>
		  </div>
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="parent_unit">Parent Unit</label>
			<div>
			  <input type="text" class="form-control" name="parent_unit" id="parent_unit" disabled  value="<?php echo $parent_unit; ?>" placeholder="Parent Unit">
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div></div>
<?php $this->load->view('dashboard_admin/layout/iframe_footer'); ?>
