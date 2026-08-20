<?php $this->load->view('dashboard_admin/layout/iframe_header'); ?>
<div class="x_panel"><div class="x_content">
	<?php if(validation_errors()) { ?>
	<div class="alert alert-danger alert-dismissible fade in">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
		<?php echo form_open('data_riwayat_jabatan/simpan',''); ?>
		  
		  <div class="mb-3">
		  	<legend>Data Riwayat Jabatan - <?php echo $this->session->userdata("nama_pegawai"); ?></legend>
			<label class="form-label fw-semibold" for="status">Status</label>
			<div>
			  <select data-placeholder="Status Jabatan" class="chzn-select" style="width:500px;" tabindex="2" name="status" id="status">
			<option value=""></option>
			  	<?php
			  		foreach($mst_stts_jabatan->result_array() as $msj)
			  		{
			  			if($status==$msj['id_status_jabatan'])
			  			{
			  	?>
			  		<option value="<?php echo $msj['id_status_jabatan']; ?>" selected="selected"><?php echo $msj['nama_jabatan']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $msj['id_status_jabatan']; ?>"><?php echo $msj['nama_jabatan']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			</select>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="penempatan">Penempatan</label>
			<div>
			  <input type="text" class="form-control" name="penempatan" id="penempatan" value="<?php echo $penempatan; ?>" 
			  placeholder="Penempatan">
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="id_jabatan">Jabatan</label>
			<div>
			  <select name="id_jabatan" id="id_jabatan" data-placeholder="Jabatan" class="chzn-select" style="width:300px;" tabindex="2">
			<option value=""></option>
			  	<?php
			  		foreach($mst_jabatan->result_array() as $mj)
			  		{
			  			if($id_jabatan==$mj['id_jabatan'])
			  			{
			  	?>
			  		<option value="<?php echo $mj['id_jabatan']; ?>" selected="selected"><?php echo $mj['nama_jabatan']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $mj['id_jabatan']; ?>"><?php echo $mj['nama_jabatan']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			  </select>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="id_unit_kerja">Unit Kerja</label>
			<div>
			  <select name="id_unit_kerja" id="id_unit_kerja" data-placeholder="Unit Kerja" class="chzn-select" style="width:300px;" tabindex="2">
			<option value=""></option>
			  	<?php
			  		foreach($mst_unit_kerja->result_array() as $muk)
			  		{
			  			if($id_unit_kerja==$muk['id_unit_kerja'])
			  			{
			  	?>
			  		<option value="<?php echo $muk['id_unit_kerja']; ?>" selected="selected"><?php echo $muk['nama_unit_kerja']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $muk['id_unit_kerja']; ?>"><?php echo $muk['nama_unit_kerja']; ?></option>
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
			  <textarea class="form-control" name="uraian" id="uraian"
			  placeholder="Uraian"><?php echo $uraian; ?></textarea>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="id_eselon">Eselon</label>
			<div>
			  <select name="id_eselon" id="id_eselon" data-placeholder="Eselon" class="chzn-select" style="width:300px;" tabindex="2">
			<option value=""></option>
			  	<?php
			  		foreach($mst_eselon->result_array() as $me)
			  		{
			  			if($id_eselon==$me['id_eselon'])
			  			{
			  	?>
			  		<option value="<?php echo $me['id_eselon']; ?>" selected="selected"><?php echo $me['nama_eselon']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $me['id_eselon']; ?>"><?php echo $me['nama_eselon']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			  </select>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="tmt_eselon">TMT Eselon</label>
			<div>
			  <input type="text" class="form-control" name="tmt_eselon" id="tmt_eselon" value="<?php echo $tmt_eselon; ?>" 
			  placeholder="TMT Eselon">
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="nomor_sk">Nomor SK</label>
			<div>
			  <input type="text" class="form-control" name="nomor_sk" id="nomor_sk" value="<?php echo $nomor_sk; ?>" 
			  placeholder="Nomor SK">
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="tanggal_sk">Tanggal SK</label>
			<div>
			  <input type="text" class="form-control" name="tanggal_sk" id="tanggal_sk" value="<?php echo $tanggal_sk; ?>" 
			  placeholder="Tanggal SK">
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="tanggal_mulai">Tanggal Mulai</label>
			<div>
			  <input type="text" class="form-control" name="tanggal_mulai" id="tanggal_mulai" value="<?php echo $tanggal_mulai; ?>" 
			  placeholder="Tanggal Mulai">
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="tanggal_selesai">Tanggal Selesai</label>
			<div>
			  <input type="text" class="form-control" name="tanggal_selesai" id="tanggal_selesai" value="<?php echo $tanggal_selesai; ?>" 
			  placeholder="Tanggal Selesai">
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="lokasi">Lokasi</label>
			<div>
			  <input type="text" class="form-control" name="lokasi" id="lokasi" value="<?php echo $lokasi; ?>" 
			  placeholder="Lokasi">
			</div>
		  </div>
		  
		  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
		  <input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>">
		  <input type="hidden" name="st" value="<?php echo $st; ?>">
		  <div class="mb-3">
			<div>
			  <button type="submit" class="btn btn-primary">Simpan Data</button>
			  <button type="reset" class="btn btn-default">Hapus Data</button>
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
		flatpickr('#tanggal_sk', {dateFormat: 'd F Y', locale: 'id', allowInput: true});
		flatpickr('#tmt_eselon', {dateFormat: 'd F Y', locale: 'id', allowInput: true});
		flatpickr('#tanggal_mulai', {dateFormat: 'd F Y', locale: 'id', allowInput: true});
		flatpickr('#tanggal_selesai', {dateFormat: 'd F Y', locale: 'id', allowInput: true});
	});</script>
<?php $this->load->view('dashboard_admin/layout/iframe_footer'); ?>
