<?php $this->load->view('dashboard_admin/layout/iframe_header'); ?>
<div class="x_panel"><div class="x_content">
	<?php if(validation_errors()) { ?>
	<div class="alert alert-danger alert-dismissible fade in">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
		<?php echo form_open('data_riwayat_pangkat/simpan',''); ?>
		  <div class="mb-3">
		  	<legend>Data Riwayat Pangkat - <?php echo $this->session->userdata("nama_pegawai"); ?></legend>
			<label class="form-label fw-semibold" for="golongan">Golongan</label>
			<div>
			  <select name="id_golongan" id="id_golongan" data-placeholder="Golongan" class="chzn-select" style="width:300px;" tabindex="2">
			<option value=""></option>
			  	<?php
			  		foreach($golongan->result_array() as $g)
			  		{
			  			if($id_golongan==$g['id_golongan'])
			  			{
			  	?>
			  		<option value="<?php echo $g['id_golongan']; ?>" selected="selected"><?php echo $g['golongan']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $g['id_golongan']; ?>"><?php echo $g['golongan']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			  </select>
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="status">Status</label>
			<div>
			  <input type="text" class="form-control" name="status" id="status" value="<?php echo $status; ?>" 
			  placeholder="Status">
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
			<label class="form-label fw-semibold" for="masa_kerja">Masa Kerja</label>
			<div>
			  <input type="text" class="form-control" name="masa_kerja" id="masa_kerja" value="<?php echo $masa_kerja; ?>" 
			  placeholder="Masa Kerja">
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
		flatpickr('#tanggal_mulai', {dateFormat: 'd F Y', locale: 'id', allowInput: true});
		flatpickr('#tanggal_selesai', {dateFormat: 'd F Y', locale: 'id', allowInput: true});
	});</script>
<?php $this->load->view('dashboard_admin/layout/iframe_footer'); ?>
