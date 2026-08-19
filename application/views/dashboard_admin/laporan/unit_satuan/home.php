<?php $this->load->view('dashboard_admin/layout/main_header', array('page_title' => 'Laporan Pegawai - Unit Kerja & Satuan Kerja', 'active_menu' => 'laporan')); ?>
<div class="callout callout-info"><h5><?php echo $judul_lengkap.' '.$instansi; ?></h5><p class="mb-0"><?php echo $alamat; ?></p></div>

  <div class="card card-body mb-3">
	<div class="navbar navbar-expand-lg navbar-dark bg-primary toolbar-navbar px-3 py-2"><div class="container-fluid">
		<div class="d-flex flex-wrap align-items-center gap-3 w-100">
		  <a class="navbar-brand mb-0 fs-6 fw-bold" href="#">Laporan Pegawai - Unit Kerja & Satuan Kerja</a>
		<div class="ms-auto d-flex align-items-center gap-2 flex-wrap">
		<?php
			echo form_open("laporan_pegawai_unit_satuan/set",'class="d-flex align-items-center gap-2"')
		?>
			<span class="text-white-50 small text-nowrap">Unit Kerja</span>
			
			<div class="col-md-3">
			 <select class="form-select form-select-sm w-auto" name="id_unit_kerja">
			<option value="">- Unit Kerja -</option>
			  	<?php
			  		foreach($mst_unit_kerja->result_array() as $muk)
			  		{
			  			if($this->session->userdata('id_unit_kerja')==$muk['id_unit_kerja'])
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
			<span class="text-white-50 small text-nowrap">Satuan Kerja</span>
			
			<div class="col-md-3">
			<select class="form-select form-select-sm w-auto" name="id_satuan_kerja">
			<option value="">- Satuan Kerja -</option>
			<?php
			if($this->session->userdata('id_satuan_kerja')=="Semua")
			{
			?>
				<option value="Semua" selected="selected">Semua Satuan Kerja</option>
			<?php
			}
			else
			{
			?>
				<option value="Semua">Semua Satuan Kerja</option>
			<?php
			}
			  		foreach($mst_satuan_kerja->result_array() as $msk)
			  		{
			  			if($this->session->userdata('id_satuan_kerja')==$msk['id_satuan_kerja'])
			  			{
			  	?>
			  		<option value="<?php echo $msk['id_satuan_kerja']; ?>" selected="selected"><?php echo $msk['nama_satuan_kerja']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $msk['id_satuan_kerja']; ?>"><?php echo $msk['nama_satuan_kerja']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			</select>
		</div>
		<div class="span4 float-end">
		<a class="btn btn-secondary" href="<?php echo base_url(); ?>laporan_pegawai_unit_satuan/export"><i class="bi bi-check-circle"></i> Export ke Excell</a>
		  <button type="submit" class="btn btn-primary text-nowrap"><i class="bi bi-search "></i> Cari Data Laporan</button>
		</div>
		<?php echo form_close(); ?>
		</div>
		</div>
	  </div></div>
	
	  <section>
  <table class="table table-hover table-sm align-middle">
    <thead>
      <tr>
        <th>No.</th>
        <th>NIP</th>
        <th>Nama Pegawai</th>
        <th>Tempat/Tanggal Lahir</th>
		<th>Gender</th>
		<th>Agama</th>
		<th>Usia</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data_pegawai->result_array() as $dp)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dp['nip']; ?></td>
        <td><?php echo $dp['nama_pegawai']; ?></td>
        <td><?php echo $dp['tempat_lahir'].' - '.$dp['tanggal_lahir']; ?></td>
        <td><?php echo $dp['jenis_kelamin']; ?></td>
        <td><?php echo $dp['agama']; ?></td>
        <td><?php echo $dp['usia']; ?></td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
	
  

</section>
  </div>
<?php $this->load->view('dashboard_admin/layout/main_footer'); ?>
