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
		  	<legend>Data DP3 - <?php echo $this->session->userdata("nama_pegawai"); ?></legend>
			<label class="form-label fw-semibold" for="tahun">Tahun</label>
			<div>
			  <input type="text" class="form-control" name="tahun" id="tahun" value="<?php echo $tahun; ?>" 
			  placeholder="Tahun" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="kesetiaan">Kesetiaan</label>
			<div>
			  <input type="text" class="form-control" name="kesetiaan" id="kesetiaan" value="<?php echo $kesetiaan; ?>" 
			  placeholder="Kesetiaan" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="prestasi">Prestasi</label>
			<div>
			  <input type="text" class="form-control" name="prestasi" id="prestasi" value="<?php echo $prestasi; ?>" 
			  placeholder="Prestasi" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="tanggung_jawab">Tanggung Jawab</label>
			<div>
			  <input type="text" class="form-control" name="tanggung_jawab" id="tanggung_jawab" value="<?php echo $tanggung_jawab; ?>" 
			  placeholder="Tanggung Jawab" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="ketaatan">Ketaatan</label>
			<div>
			  <input type="text" class="form-control" name="ketaatan" id="ketaatan" value="<?php echo $ketaatan; ?>" 
			  placeholder="Ketaatan" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="kejujuran">Kejujuran</label>
			<div>
			  <input type="text" class="form-control" name="kejujuran" id="kejujuran" value="<?php echo $kejujuran; ?>" 
			  placeholder="Kejujuran" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="kerjasama">Kerja Sama</label>
			<div>
			  <input type="text" class="form-control" name="kerjasama" id="kerjasama" value="<?php echo $kerjasama; ?>" 
			  placeholder="Kerja Sama" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="prakarsa">Prakarsa</label>
			<div>
			  <input type="text" class="form-control" name="prakarsa" id="prakarsa" value="<?php echo $prakarsa; ?>" 
			  placeholder="Prakarsa" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="kepemimpinan">Kepemimpinan</label>
			<div>
			  <input type="text" class="form-control" name="kepemimpinan" id="kepemimpinan" value="<?php echo $kepemimpinan; ?>" 
			  placeholder="Kepemimpinan" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="rata-rata">Rata-Rata</label>
			<div>
			  <input type="text" class="form-control" name="rata-rata" id="rata-rata" value="<?php echo $rata_rata; ?>" 
			  placeholder="Kepemimpinan" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="atasan">Atasan</label>
			<div>
			  <input type="text" class="form-control" name="atasan" id="atasan" value="<?php echo $atasan; ?>" 
			  placeholder="Atasan" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="penilai">Penilai</label>
			<div>
			  <input type="text" class="form-control" name="penilai" id="penilai" value="<?php echo $penilai; ?>" 
			  placeholder="Penilai" disabled>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="mengetahui">Mengetahui</label>
			<div>
			  <input type="text" class="form-control" name="mengetahui" id="mengetahui" value="<?php echo $mengetahui; ?>" 
			  placeholder="Mengetahui" disabled>
			</div>
		  </div>
		  
		  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
		  <input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>">
		  <input type="hidden" name="st" value="<?php echo $st; ?>">
		<?php echo form_close(); ?>
	</div></div>
<?php $this->load->view('dashboard_admin/layout/iframe_footer'); ?>
