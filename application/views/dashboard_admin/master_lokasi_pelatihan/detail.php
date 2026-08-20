<?php $this->load->view('dashboard_admin/layout/iframe_header'); ?>
<div class="x_panel"><div class="x_content">
		<?php echo form_open('master_lokasi_pelatihan/simpan',''); ?>
		  <div class="mb-3">
		  	<legend>Master Lokasi Pelatihan</legend>
			<label class="form-label fw-semibold" for="nama_lokasi">Nama Lokasi Pelatihan</label>
			<div>
			  <input type="text" class="form-control" name="nama_lokasi" id="nama_lokasi" value="<?php echo $nama_lokasi; ?>" placeholder="Nama Lokasi Pelatihan" disabled>
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div></div>
<?php $this->load->view('dashboard_admin/layout/iframe_footer'); ?>
