<?php $this->load->view('dashboard_admin/layout/iframe_header'); ?>
<div class="card"><div class="card-body">
		<?php echo form_open('master_lokasi_kerja/simpan',''); ?>
		  <div class="mb-3">
		  	<legend>Master Lokasi Pelatihan</legend>
			<label class="form-label fw-semibold" for="nama_lokasi">Nama Lokasi Kerja</label>
			<div>
			  <input type="text" class="form-control" name="nama_lokasi" id="nama_lokasi" value="<?php echo $lokasi_kerja; ?>" placeholder="Nama Lokasi Kerja" disabled>
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div></div>
<?php $this->load->view('dashboard_admin/layout/iframe_footer'); ?>
