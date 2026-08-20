<?php $this->load->view('dashboard_admin/layout/main_header', array('page_title' => 'Master Status Jabatan', 'active_menu' => 'master')); ?>
<div class="callout callout-info"><h5><?php echo $judul_lengkap.' '.$instansi; ?></h5><p class="mb-0"><?php echo $alamat; ?></p></div>

  <div class="x_panel">
	<div class="toolbar-navbar"><div class="container-fluid">
		<div class="d-flex flex-wrap align-items-center gap-3 w-100">
		  <a class="toolbar-brand" href="#">Master Status Jabatan</a>
		  <div class="toolbar-group">
			<ul class="list-inline toolbar-list">
			  <li><a class="btn btn-default btn-sm iframe-box-sm" href="<?php echo base_url(); ?>master_status_jabatan/tambah"><i class="fa fa-plus-circle "></i> Tambah Status Jabatan</a></li>
			</ul>
		  </div>
		<div class="pull-right d-flex align-items-center gap-2 flex-wrap">
		<?php echo form_open('master_status_jabatan/cari','class="d-flex align-items-center gap-2"'); ?>
		  <input type="text" class="form-control input-sm" name="cari" placeholder="Masukkan kata kunci pencarian">
		  <button type="submit" class="btn btn-primary text-nowrap"><i class="fa fa-search "></i> Cari Data</button>
		<?php echo form_close(); ?>
		</div>
		</div>
	  </div></div>
  
	  <section>
  <table class="table table-hover table-condensed ">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Status Jabatan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=$tot+1;
		foreach($status_pegawai->result_array() as $dp)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dp['nama_jabatan']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-sm btn-default iframe-box-sm" href="<?php echo base_url(); ?>master_status_jabatan/detail/<?php echo $dp['id_status_jabatan']; ?>"><i class="fa fa-check-circle"></i> Lihat Detail</a>
	          <a class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item iframe-box-sm" href="<?php echo base_url(); ?>master_status_jabatan/edit/<?php echo $dp['id_status_jabatan']; ?>"><i class="fa fa-pencil"></i> Edit Data</a></li>
	            <li><a class="dropdown-item" href="<?php echo base_url(); ?>master_status_jabatan/hapus/<?php echo $dp['id_status_jabatan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="fa fa-trash"></i> Hapus Data</a></li>
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
	<div class="simpeg-pagination d-flex justify-content-center mt-3"><?php
		echo $paginator;
		?></div>
	
  

</section>
  </div>
<?php $this->load->view('dashboard_admin/layout/main_footer'); ?>
