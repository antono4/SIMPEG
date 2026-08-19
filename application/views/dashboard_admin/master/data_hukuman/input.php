<?php $this->load->view('dashboard_admin/layout/iframe_header'); ?>
<div class="card"><div class="card-body">
	<?php if(validation_errors()) { ?>
	<div class="alert alert-danger alert-dismissible fade show">
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
		<?php echo form_open('data_hukuman/simpan',''); ?>
		  <div class="mb-3">
		  	<legend>Data Hukuman - <?php echo $this->session->userdata("nama_pegawai"); ?></legend>
			<label class="form-label fw-semibold" for="id_master_hukuman">Hukuman</label>
			<div>
			  <select name="id_master_hukuman" id="id_master_hukuman" data-placeholder="Hukuman" class="chzn-select" style="width:300px;" tabindex="2">
			<option value=""></option>
			  	<?php
			  		foreach($mst_hukuman->result_array() as $g)
			  		{
			  			if($id_master_hukuman==$g['id_hukuman'])
			  			{
			  	?>
			  		<option value="<?php echo $g['id_hukuman']; ?>" selected="selected"><?php echo $g['nama_hukuman']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $g['id_hukuman']; ?>"><?php echo $g['nama_hukuman']; ?></option>
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
			<label class="form-label fw-semibold" for="masa_berlaku">Masa Berlaku</label>
			<div>
			  <input type="text" class="form-control" name="masa_berlaku" id="masa_berlaku" value="<?php echo $masa_berlaku; ?>" 
			  placeholder="Masa Berlaku">
			</div>
		  </div>
		  
		  <div class="mb-3">
			<label class="form-label fw-semibold" for="pejabat_menetapkan">Pejabat Menetapkan</label>
			<div>
			  <input type="text" class="form-control" name="pejabat_menetapkan" id="pejabat_menetapkan" value="<?php echo $pejabat_menetapkan; ?>" 
			  placeholder="Pejabat Menetapkan">
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
		flatpickr('#tanggal_sk', {dateFormat: 'd F Y', locale: 'id', allowInput: true});
		flatpickr('#tanggal_mulai', {dateFormat: 'd F Y', locale: 'id', allowInput: true});
		flatpickr('#tanggal_selesai', {dateFormat: 'd F Y', locale: 'id', allowInput: true});
	});</script>
<?php $this->load->view('dashboard_admin/layout/iframe_footer'); ?>
