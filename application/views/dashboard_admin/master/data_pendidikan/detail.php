<?php $this->load->view('dashboard_admin/layout/iframe_header'); ?>
<div class="x_panel"><div class="x_content">
	<?php if(validation_errors()) { ?>
	<div class="alert alert-danger alert-dismissible fade in">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
		<?php echo form_open('data_keluarga/simpan',''); ?>
		  <div class="mb-3">
		  	<legend>Data Pendidikan - <?php echo $this->session->userdata("nama_pegawai"); ?></legend>
			<label class="form-label fw-semibold" for="tingkat_pendidikan">Tingkat Pendidikan</label>
			<div>
			  <input type="text" class="form-control" name="tingkat_pendidikan" id="tingkat_pendidikan" value="<?php echo $tingkat_pendidikan; ?>" 
			  placeholder="Tingkat Pendidikan" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="jurusan">Jurusan</label>
			<div>
			  <input type="text" class="form-control" name="jurusan" id="jurusan" value="<?php echo $jurusan; ?>" 
			  placeholder="Jurusan" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="uraian">Uraian</label>
			<div>
			  <textarea class="form-control" name="uraian" id="uraian"
			  placeholder="Uraian" disabled><?php echo $uraian; ?></textarea>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="teknik_non_teknik">Teknik / Non Teknik</label>
			<div>
			<?php
				$teknik = 'selected="selected"';
				$non_teknik = 'selected="selected"';
				if($teknik_non_teknik=="teknik")
				{
					$teknik = 'selected="selected"';
					$non_teknik = '';
				}
				else if($teknik_non_teknik=="non teknik")
				{
					$teknik = '';
					$non_teknik = 'selected="selected"';
				}
			?>
			<select name="teknik_non_teknik" disabled>
				<option value="teknik" <?php echo $teknik; ?>>Teknik</option>
				<option value="non teknik" <?php echo $non_teknik; ?>>Non Teknik</option>
			</select>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="sekolah">Sekolah</label>
			<div>
			  <input type="text" class="form-control" name="sekolah" id="sekolah" value="<?php echo $sekolah; ?>" 
			  placeholder="Sekolah" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="tempat_sekolah">Tempat Sekolah</label>
			<div>
			  <input type="text" class="form-control" name="tempat_sekolah" id="tempat_sekolah" value="<?php echo $tempat_sekolah; ?>" 
			  placeholder="Tempat Sekolah" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="nomor_sttb">Nomor STTB</label>
			<div>
			  <input type="text" class="form-control" name="nomor_sttb" id="nomor_sttb" value="<?php echo $nomor_sttb; ?>" 
			  placeholder="Nomor STTB" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="tanggal_sttb">Tanggal STTB</label>
			<div>
			  <input type="text" class="form-control" name="tanggal_sttb" id="tanggal_sttb" value="<?php echo $tanggal_sttb; ?>" 
			  placeholder="Tanggal STTB" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="tanggal_lulus">Tanggal Lulus</label>
			<div>
			  <input type="text" class="form-control" name="tanggal_lulus" id="tanggal_lulus" value="<?php echo $tanggal_lulus; ?>" 
			  placeholder="Tanggal Lulus" disabled>
			</div>
		  </div>
		  
		  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
		  <input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>">
		  <input type="hidden" name="st" value="<?php echo $st; ?>">
		<?php echo form_close(); ?>
	</div></div>
<?php $this->load->view('dashboard_admin/layout/iframe_footer'); ?>
