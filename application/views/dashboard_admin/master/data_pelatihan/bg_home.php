<section id="data-keluarga">
  <div class="x_panel">
	<div class="toolbar-navbar"><div class="container-fluid">
		<div class="d-flex flex-wrap align-items-center gap-3 w-100">
		  <a class="toolbar-brand" href="#">Data Pelatihan</a>
		  <div class="toolbar-group">
			<ul class="list-inline toolbar-list">
			  <li><a class="btn btn-default btn-sm iframe-box-lg" href="<?php echo base_url(); ?>data_pelatihan/tambah/<?php echo $this->session->userdata('kode_pegawai'); ?>"><i class="fa fa-plus-circle "></i> Tambah Data Pelatihan</a></li>
			</ul>
		  </div>
			<div class="pull-right d-flex align-items-center gap-2 flex-wrap">
				<div class="btn-group pull-right">
				  <button class="btn btn-primary"><i class="fa fa-user "></i> <?php echo $this->session->userdata('nama_pegawai'); ?></button>
				  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				  </button>
				</div>
			</div>
		</div>
	  </div></div>
  	<table class="table table-hover table-condensed ">
	<thead>
      <tr>
        <th>No.</th>
        <th>Nama Pelatihan</th>
		<th>Lokasi</th>
        <th>Tanggal Sertifikat</th>
        <th>Jam Pelatihan</th>
		<th>Negara</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data->result_array() as $dpl)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dpl['nama_pelatihan']; ?></td>
        <td><?php echo $dpl['nama_lokasi']; ?></td>
        <td><?php echo $dpl['tanggal_sertifikat']; ?></td>
        <td><?php echo $dpl['jam_pelatihan']; ?></td>
        <td><?php echo $dpl['negara']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-sm btn-default iframe-box-lg" href="<?php echo base_url(); ?>data_pelatihan/detail/<?php echo $dpl['id_pelatihan']; ?>"><i class="fa fa-check-circle"></i> Lihat Detail</a>
	          <a class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item iframe-box-lg" href="<?php echo base_url(); ?>data_pelatihan/edit/<?php echo $dpl['id_pelatihan']; ?>"><i class="fa fa-pencil"></i> Edit Data</a></li>
	            <li><a class="dropdown-item" href="<?php echo base_url(); ?>data_pelatihan/hapus/<?php echo $dpl['id_pelatihan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="fa fa-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
    </tbody>
  </table>
  </div>
</section>
<?php $this->load->view('dashboard_admin/layout/main_footer'); ?>
