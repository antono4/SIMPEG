<?php $this->load->view('dashboard_admin/layout/iframe_header'); ?>
<div class="x_panel"><div class="x_content">
	<?php if(validation_errors()) { ?>
	<div class="alert alert-danger alert-dismissible fade in">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
		<?php echo form_open('master_ppk/simpan',''); ?>
		  <div class="mb-3">
		  	<legend>Master PPK</legend>
			<label class="form-label fw-semibold" for="nama_unit_kerja">Nama PPK</label>
			<div>
			  <input type="text" class="form-control" name="nama_unit_kerja" id="nama_unit_kerja" value="<?php echo $nama_unit_kerja; ?>" placeholder="Nama PPK">
			</div>
		  </div>
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="parent_unit">Parent Satuan Kerja</label>
			<div>
			  <input type="text" class="form-control" name="parent_unit" id="parent_unit" value="<?php echo $parent_unit; ?>" placeholder="Parent Satuan Kerja">
			</div>
		  </div>
		  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
		  <input type="hidden" name="st" value="<?php echo $st; ?>">
		  <div class="mb-3">
			<div>
			  <button type="submit" class="btn btn-primary">Simpan Data</button>
			  <button type="reset" class="btn btn-default">Hapus Data</button>
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div></div>
<?php $this->load->view('dashboard_admin/layout/iframe_footer'); ?>
