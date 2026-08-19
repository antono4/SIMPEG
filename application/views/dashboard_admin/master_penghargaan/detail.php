<?php $this->load->view('dashboard_admin/layout/iframe_header'); ?>
<div class="card"><div class="card-body">
		<?php echo form_open('master_ppk/simpan',''); ?>
		  <div class="mb-3">
		  	<legend>Master Penghargaan</legend>
			<label class="form-label fw-semibold" for="nama_penghargaan">Nama Penghargaan</label>
			<div>
			  <input type="text" class="form-control" name="nama_penghargaan" id="nama_penghargaan" value="<?php echo $nama_penghargaan; ?>" placeholder="Nama Penghargaan" disabled>
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div></div>
<?php $this->load->view('dashboard_admin/layout/iframe_footer'); ?>
