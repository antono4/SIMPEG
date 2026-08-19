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
		  	<legend>Data Keluarga - <?php echo $this->session->userdata("nama_pegawai"); ?></legend>
			<label class="form-label fw-semibold" for="nama_anggota_keluarga">Nama Anggota Keluarga</label>
			<div>
			  <input type="text" class="form-control" name="nama_anggota_keluarga" id="nama_anggota_keluarga" value="<?php echo $nama_anggota_keluarga; ?>" 
			  placeholder="Nama Anggota Keluarga" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="tanggal_lahir">Tanggal Lahir</label>
			<div>
			  <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>" 
			  placeholder="Tanggal Lahir" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="status_kawin">Status Kawin</label>
			<div>
			  <input type="text" class="form-control" name="status_kawin" id="status_kawin" value="<?php echo $status_kawin; ?>" 
			  placeholder="Status Kawin" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="tanggal_nikah">Tanggal Menikah</label>
			<div>
			  <input type="text" class="form-control" name="tanggal_nikah" id="tanggal_nikah" value="<?php echo $tanggal_nikah; ?>" 
			  placeholder="Tanggal Menikah" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="uraian">Uraian</label>
			<div>
			  <textarea class="form-control" name="uraian" id="uraian" style="resize:none; outline:none; height:100px;" placeholder="Uraian" disabled><?php echo $uraian; ?></textarea>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="tanggal_cerai_meninggal">Tanggal Cerai/Meninggal</label>
			<div>
			  <input type="text" class="form-control" name="tanggal_cerai_meninggal" id="tanggal_cerai_meninggal" value="<?php echo $tanggal_cerai_meninggal; ?>" 
			  placeholder="Tanggal Cerai / Meninggal" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="pekerjaan">Pekerjaan</label>
			<div>
			  <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="<?php echo $pekerjaan; ?>" 
			  placeholder="Pekerjaan" disabled>
			</div>
		  </div>
		  
		  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
		  <input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>">
		  <input type="hidden" name="st" value="<?php echo $st; ?>">
		<?php echo form_close(); ?>
	</div></div>
<?php $this->load->view('dashboard_admin/layout/iframe_footer'); ?>
