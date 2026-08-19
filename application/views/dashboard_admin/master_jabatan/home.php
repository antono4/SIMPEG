<?php $this->load->view('dashboard_admin/layout/main_header', array('page_title' => 'Master Jabatan', 'active_menu' => 'master')); ?>
<div class="callout callout-info"><h5><?php echo $judul_lengkap.' '.$instansi; ?></h5><p class="mb-0"><?php echo $alamat; ?></p></div>

  <div class="card card-body mb-3">
	<div class="navbar navbar-expand-lg navbar-dark bg-primary toolbar-navbar px-3 py-2"><div class="container-fluid">
		<div class="d-flex flex-wrap align-items-center gap-3 w-100">
		  <a class="navbar-brand mb-0 fs-6 fw-bold" href="#">Master Jabatan</a>
		  <div class="navbar-nav flex-row">
			<ul class="navbar-nav gap-2">
			  <li class="nav-item"><a class="btn btn-light btn-sm iframe-box-sm" href="<?php echo base_url(); ?>master_jabatan/tambah"><i class="bi bi-plus-circle "></i> Tambah Data Jabatan</a></li>
			</ul>
		  </div>
		<div class="ms-auto d-flex align-items-center gap-2 flex-wrap">
		<?php echo form_open('master_jabatan/cari','class="d-flex align-items-center gap-2"'); ?>
		  <input type="text" class="form-control form-control-sm" name="cari" placeholder="Masukkan kata kunci pencarian">
		  <button type="submit" class="btn btn-primary text-nowrap"><i class="bi bi-search "></i> Cari Data</button>
		<?php echo form_close(); ?>
		</div>
		</div>
	  </div></div>
  
	  <section>
  <table class="table table-hover table-sm align-middle">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Jabatan</th>
        <th>Level</th>
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
        <td><?php echo $dp['level']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-sm btn-outline-secondary iframe-box-sm" href="<?php echo base_url(); ?>master_jabatan/detail/<?php echo $dp['id_jabatan']; ?>"><i class="bi bi-check-circle"></i> Lihat Detail</a>
	          <a class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" href="#"><span class="d-none"></span></a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item iframe-box-sm" href="<?php echo base_url(); ?>master_jabatan/edit/<?php echo $dp['id_jabatan']; ?>"><i class="bi bi-pencil"></i> Edit Data</a></li>
	            <li><a class="dropdown-item" href="<?php echo base_url(); ?>master_jabatan/hapus/<?php echo $dp['id_jabatan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="bi bi-trash"></i> Hapus Data</a></li>
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
