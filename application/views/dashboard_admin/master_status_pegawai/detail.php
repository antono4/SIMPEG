<?php $this->load->view('dashboard_admin/layout/iframe_header'); ?>
<div class="card"><div class="card-body">
		<?php echo form_open('master_status_pegawai/simpan',''); ?>
		  <div class="mb-3">
		  	<legend>Master Status Pegawai</legend>
			<label class="form-label fw-semibold" for="inputEmail">Nama Status</label>
			<div>
			  <input type="text" id="disabledInput" class="form-control" name="nama_status" id="namaStatus" disabled value="<?php echo $nama_status; ?>" placeholder="Nama Status">
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div></div>
<?php $this->load->view('dashboard_admin/layout/iframe_footer'); ?>
