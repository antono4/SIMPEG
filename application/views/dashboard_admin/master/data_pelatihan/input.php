<?php $this->load->view('dashboard_admin/layout/iframe_header'); ?>
<div class="card"><div class="card-body">
	<?php if(validation_errors()) { ?>
	<div class="alert alert-danger alert-dismissible fade show">
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
		<?php echo form_open('data_pelatihan/simpan',''); ?>
		  <div class="mb-3">
		  	<legend>Data Pelatihan - <?php echo $this->session->userdata("nama_pegawai"); ?></legend>
			<label class="form-label fw-semibold" for="id_master_pelatihan">Nama Pelatihan</label>
			<div>
			  <select name="id_master_pelatihan" id="id_master_pelatihan" data-placeholder="Nama Pelatihan" class="chzn-select" style="width:300px;" tabindex="2">
			<option value=""></option>
			  	<?php
			  		foreach($mst_pelatihan->result_array() as $mp)
			  		{
			  			if($id_master_pelatihan==$mp['id_pelatihan'])
			  			{
			  	?>
			  		<option value="<?php echo $mp['id_pelatihan']; ?>" selected="selected"><?php echo $mp['nama_pelatihan']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $mp['id_pelatihan']; ?>"><?php echo $mp['nama_pelatihan']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			  </select>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="uraian">Uraian</label>
			<div>
			  <textarea type="text" class="form-control" name="uraian" id="uraian"
			  placeholder="Uraian"><?php echo $uraian; ?></textarea>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="lokasi">Lokasi</label>
			<div>
			  <select name="lokasi" id="lokasi" data-placeholder="Lokasi Pelatihan" class="chzn-select" style="width:300px;" tabindex="2">
			<option value=""></option>
			  	<?php
			  		foreach($mst_lokasi->result_array() as $mp)
			  		{
			  			if($lokasi==$mp['id_lokasi_pelatihan'])
			  			{
			  	?>
			  		<option value="<?php echo $mp['id_lokasi_pelatihan']; ?>" selected="selected"><?php echo $mp['nama_lokasi']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $mp['id_lokasi_pelatihan']; ?>"><?php echo $mp['nama_lokasi']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			  </select>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="tanggal_sertifikat">Tanggal Sertifikat</label>
			<div>
			  <input type="text" class="form-control" name="tanggal_sertifikat" id="tanggal_sertifikat" value="<?php echo $tanggal_sertifikat; ?>" 
			  placeholder="Tanggal Sertifikat">
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="jam_pelatihan">Jam Pelatihan</label>
			<div>
			  <input type="text" class="form-control" name="jam_pelatihan" id="jam_pelatihan" value="<?php echo $jam_pelatihan; ?>" 
			  placeholder="Jam Pelatihan">
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="negara">Negara</label>
			<div>
			  <input type="text" class="form-control" name="negara" id="negara" value="<?php echo $negara; ?>" 
			  placeholder="Negara">
			</div>
		  </div>
		  
		  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
		  <input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>">
		  <input type="hidden" name="st" value="<?php echo $st; ?>">
		  <div class="mb-3">
			<div>
			  <button type="submit" class="btn btn-primary">Simpan Data</button>
			  <button type="reset" class="btn btn-secondary">Hapus Data</button>
			</div>
		  </div>
		  <script src="http://localhost/sgmc/asset/js/chosen.jquery.js" type="text/javascript"></script>
			<script type="text/javascript"> 
				$(".chzn-select").chosen();
			</script>
		<?php echo form_close(); ?>
	</div></div>
<script>$(function(){
		if(window.flatpickr){flatpickr.localize(flatpickr.l10ns.id);}
		flatpickr('#tanggal_sertifikat', {dateFormat: 'd F Y', locale: 'id', allowInput: true});
	});</script>
<?php $this->load->view('dashboard_admin/layout/iframe_footer'); ?>
