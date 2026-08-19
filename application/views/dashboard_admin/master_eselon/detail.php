<?php $this->load->view('dashboard_admin/layout/iframe_header'); ?>
<div class="card"><div class="card-body">
		<?php echo form_open('master_eselon/simpan',''); ?>
		  <div class="mb-3">
		  	<legend>Master Eselon</legend>
			<label class="form-label fw-semibold" for="nama_eselon">Nama Eselon</label>
			<div>
			  <input type="text" class="form-control" name="nama_eselon" id="nama_eselon" value="<?php echo $nama_eselon; ?>" placeholder="Nama Eselon" disabled>
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
