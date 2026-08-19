<section id="data-keluarga">
  <div class="card card-body mb-3">
	<div class="navbar navbar-expand-lg navbar-dark bg-primary toolbar-navbar px-3 py-2"><div class="container-fluid">
		<div class="d-flex flex-wrap align-items-center gap-3 w-100">
		  <a class="navbar-brand mb-0 fs-6 fw-bold" href="#">Data Seminar</a>
		  <div class="navbar-nav flex-row">
			<ul class="navbar-nav gap-2">
			  <li class="nav-item"><a class="btn btn-light btn-sm iframe-box-lg" href="<?php echo base_url(); ?>data_seminar/tambah/<?php echo $this->session->userdata('kode_pegawai'); ?>"><i class="bi bi-plus-circle "></i> Tambah Data Seminar</a></li>
			</ul>
		  </div>
			<div class="ms-auto d-flex align-items-center gap-2 flex-wrap">
				<div class="btn-group float-end">
				  <button class="btn btn-primary"><i class="bi bi-person "></i> <?php echo $this->session->userdata('nama_pegawai'); ?></button>
				  <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
					<span class="d-none"></span>
				  </button>
				</div>
			</div>
		</div>
	  </div></div>
  	<table class="table table-hover table-sm align-middle">
    <thead>
      <tr>
        <th>No.</th>
        <th>Uraian</th>
		<th>Lokasi</th>
        <th>Tanggal</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$no=1;
		foreach($data->result_array() as $ds)
		{
	?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $ds['uraian']; ?></td>
        <td><?php echo $ds['lokasi']; ?></td>
        <td><?php echo $ds['tanggal']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-sm btn-outline-secondary iframe-box-lg" href="<?php echo base_url(); ?>data_seminar/detail/<?php echo $ds['id_seminar']; ?>"><i class="bi bi-check-circle"></i> Lihat Detail</a>
	          <a class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" href="#"><span class="d-none"></span></a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item iframe-box-lg" href="<?php echo base_url(); ?>data_seminar/edit/<?php echo $ds['id_seminar']; ?>"><i class="bi bi-pencil"></i> Edit Data</a></li>
	            <li><a class="dropdown-item" href="<?php echo base_url(); ?>data_seminar/hapus/<?php echo $ds['id_seminar']; ?>" onClick="return confirm('Anda yakin..???');"><i class="bi bi-trash"></i> Hapus Data</a></li>
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
