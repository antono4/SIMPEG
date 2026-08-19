<?php $this->load->view('dashboard_admin/layout/iframe_header'); ?>
<div class="card"><div class="card-body">
	<?php if(validation_errors()) { ?>
	<div class="alert alert-danger alert-dismissible fade show">
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
		<?php echo form_open('data_keluarga/simpan',''); ?>
		  <div class="mb-3">
		  	<legend>Data Seminar - <?php echo $this->session->userdata("nama_pegawai"); ?></legend>
			<label class="form-label fw-semibold" for="uraian">Uraian</label>
			<div>
			  <textarea type="text" class="form-control" name="uraian" id="uraian"
			  placeholder="Uraian" disabled><?php echo $uraian; ?></textarea>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="lokasi">Lokasi</label>
			<div>
			  <input type="text" class="form-control" name="lokasi" id="lokasi" value="<?php echo $lokasi; ?>" 
			  placeholder="Lokasi" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="tanggal">Tanggal</label>
			<div>
			  <input type="text" class="form-control" name="tanggal" id="tanggal" value="<?php echo $tanggal; ?>" 
			  placeholder="Tanggal" disabled>
			</div>
		  </div>
		  
		  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
		  <input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>">
		  <input type="hidden" name="st" value="<?php echo $st; ?>">
		<?php echo form_close(); ?>
	</div></div>
<?php $this->load->view('dashboard_admin/layout/iframe_footer'); ?>
