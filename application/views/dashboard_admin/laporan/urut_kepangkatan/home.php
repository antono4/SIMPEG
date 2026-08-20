<?php $this->load->view('dashboard_admin/layout/main_header', array('page_title' => 'Laporan Pegawai - Urut Kepangkatan', 'active_menu' => 'laporan')); ?>
<div class="callout callout-info"><h5><?php echo $judul_lengkap.' '.$instansi; ?></h5><p class="mb-0"><?php echo $alamat; ?></p></div>
	
  <div class="x_panel">
	<div class="toolbar-navbar"><div class="container-fluid">
		<div class="d-flex flex-wrap align-items-center gap-3 w-100">
		  <a class="toolbar-brand" href="#">Laporan Pegawai - Urut Kepangkatan</a>
		<div class="pull-right d-flex align-items-center gap-2 flex-wrap">
		<?php
			echo form_open("laporan_pegawai_urut_kepangkatan/set",'class="d-flex align-items-center gap-2"');
		?>
			<span class="text-white-50 small text-nowrap">Status Pegawai</span>
			
			<div class="col-md-3">
			<select class="form-control input-sm w-auto" name="id_status_pegawai">
			<option value="">- Status Pegawai -</option>
			  	<?php
			  		foreach($mst_status_pegawai->result_array() as $msk)
			  		{
			  			if($this->session->userdata('id_status_pegawai')==$msk['id_status_pegawai'])
			  			{
			  	?>
			  		<option value="<?php echo $msk['id_status_pegawai']; ?>" selected="selected"><?php echo $msk['nama_status']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $msk['id_status_pegawai']; ?>"><?php echo $msk['nama_status']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			</select>
			</div>
			
			<span class="text-white-50 small text-nowrap">Satuan Kerja</span>
			
			<div class="col-md-3">
			<select class="form-control input-sm w-auto" name="id_satuan_kerja">
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
			
			<span class="text-white-50 small text-nowrap">Golongan</span>
			
			<div class="col-md-4">
			
			<select class="form-control input-sm w-auto" name="id_gol_awal">
			<option value="">- Golongan -</option>
			  	<?php
			  		foreach($mst_golongan->result_array() as $msk)
			  		{
			  			if($this->session->userdata('id_gol_awal')==$msk['id_golongan'])
			  			{
			  	?>
			  		<option value="<?php echo $msk['id_golongan']; ?>" selected="selected"><?php echo $msk['golongan']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $msk['id_golongan']; ?>"><?php echo $msk['golongan']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			</select>
			s/d
			<select class="form-control input-sm w-auto" name="id_gol_akhir">
			<option value="">- Golongan -</option>
			  	<?php
			  		foreach($mst_golongan->result_array() as $msk)
			  		{
			  			if($this->session->userdata('id_gol_akhir')==$msk['id_golongan'])
			  			{
			  	?>
			  		<option value="<?php echo $msk['id_golongan']; ?>" selected="selected"><?php echo $msk['golongan']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $msk['id_golongan']; ?>"><?php echo $msk['golongan']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			</select>
			</div>
		<div class="span4 pull-right">
  		<a class="btn btn-default" href="<?php echo base_url(); ?>laporan_pegawai_urut_kepangkatan/export"><i class="fa fa-check-circle"></i> Export ke Excell</a>
		  <button type="submit" class="btn btn-primary text-nowrap"><i class="fa fa-search "></i> Cari Data Laporan</button>
		  </div>
		<?php echo form_close(); ?>
		</div>
		</div>
	  </div></div>
	
	  <section>
  <table class="table table-hover table-condensed ">
    <thead>
      <tr>
        <th>No.</th>
        <th>NIP</th>
        <th>Nama Pegawai</th>
        <th>Tempat/Tanggal Lahir</th>
		<th>Gender</th>
		<th>Agama</th>
		<th>Usia</th>
		<th>Golongan</th>
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
        <td><?php echo $dp['golongan']; ?></td>
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
