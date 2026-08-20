<?php $this->load->view('dashboard_admin/layout/iframe_header'); ?>
<div class="x_panel"><div class="x_content">
		<?php echo form_open('master_eselon/simpan',''); ?>
		  <div class="mb-3">
		  	<legend>Master Pelatihan</legend>
			<label class="form-label fw-semibold" for="nama_pelatihan">Nama Pelatihan</label>
			<div>
			  <input type="text" class="form-control" name="nama_pelatihan" id="nama_pelatihan" value="<?php echo $nama_pelatihan; ?>" disabled placeholder="Nama Pelatihan">
			</div>
		  </div>
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="level">Level</label>
			<div>
			  <input type="text" class="form-control" name="level" id="level" value="<?php echo $level; ?>" disabled placeholder="Level">
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div></div>
<?php $this->load->view('dashboard_admin/layout/iframe_footer'); ?>
