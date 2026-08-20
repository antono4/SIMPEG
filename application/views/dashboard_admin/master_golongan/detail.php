<?php $this->load->view('dashboard_admin/layout/iframe_header'); ?>
<div class="x_panel"><div class="x_content">
		<?php echo form_open('master_status_pegawai/simpan',''); ?>
		<div class="mb-3">
		 <legend>Master Golongan</legend>
			<label class="form-label fw-semibold" for="golongan">Golongan</label>
			<div>
			  <input type="text" class="form-control" name="golongan" id="golongan" value="<?php echo $golongan; ?>" placeholder="Golongan" disabled>
			</div>
		  </div>
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="uraian">Uraian</label>
			<div>
			  <textarea class="form-control" name="uraian" id="uraian" style="resize:none; outline:none; height:100px;" placeholder="Uraian" disabled><?php echo $uraian; ?></textarea>
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
