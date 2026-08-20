<?php $this->load->view('dashboard_admin/layout/iframe_header'); ?>
<div class="x_panel"><div class="x_content">
		<?php echo form_open('master_ppk/simpan',''); ?>
		  <div class="mb-3">
		  	<legend>Master Hukuman</legend>
			<label class="form-label fw-semibold" for="nama_hukuman">Nama Hukuman</label>
			<div>
			  <input type="text" class="form-control" name="nama_hukuman" id="nama_hukuman" value="<?php echo $nama_hukuman; ?>" placeholder="Nama Hukuman" disabled>
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div></div>
<?php $this->load->view('dashboard_admin/layout/iframe_footer'); ?>
