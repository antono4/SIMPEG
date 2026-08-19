<?php $this->load->view('dashboard_admin/layout/main_header', array('page_title' => 'Beranda', 'active_menu' => 'beranda')); ?>

<div class="callout callout-info">
  <h5><?php echo $judul_lengkap.' '.$instansi; ?></h5>
  <p class="mb-0"><?php echo $alamat; ?></p>
</div>

<div class="card">
  <div class="card-header">
    <div class="d-flex flex-wrap align-items-center gap-2">
      <h3 class="card-title me-auto"><i class="bi bi-people-fill me-2"></i>Data Pegawai</h3>
      <a href="<?php echo base_url(); ?>pegawai/tambah" class="btn btn-primary btn-sm iframe-box-lg">
        <i class="bi bi-plus-circle me-1"></i> Tambah Data Pegawai
      </a>
      <?php echo form_open("dashboard_admin/cari", 'class="d-flex align-items-center gap-2"'); ?>
        <input type="text" class="form-control form-control-sm" name="cari" placeholder="Masukkan kata kunci pencarian">
        <button type="submit" class="btn btn-outline-primary btn-sm text-nowrap"><i class="bi bi-search me-1"></i> Cari</button>
      <?php echo form_close(); ?>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover align-middle mb-0">
      <thead>
        <tr>
          <th class="ps-3">No.</th>
          <th>NIP</th>
          <th>Nama Pegawai</th>
          <th>Golongan</th>
          <th>Status Pegawai</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
                $no=$tot+1;
                foreach($data_pegawai->result_array() as $dp)
                {
        ?>
        <tr>
          <td class="ps-3"><?php echo $no; ?></td>
          <td><?php echo $dp['nip']; ?></td>
          <td><?php echo $dp['nama_pegawai']; ?></td>
          <td><span class="badge text-bg-info"><?php echo $dp['golongan']; ?></span></td>
          <td><?php echo $dp['nama_status']; ?></td>
          <td>
            <div class="btn-group">
              <a class="btn btn-sm btn-outline-secondary" href="<?php echo base_url(); ?>pegawai/detail/<?php echo $dp['id_pegawai']; ?>"><i class="bi bi-eye"></i> Lihat Detail</a>
              <a class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" href="#"></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo base_url(); ?>pegawai/edit/<?php echo $dp['id_pegawai']; ?>"><i class="bi bi-pencil me-2"></i> Edit Data</a></li>
                <li><a class="dropdown-item text-danger" href="<?php echo base_url(); ?>pegawai/hapus/<?php echo $dp['id_pegawai']; ?>" onClick="return confirm('Anda yakin..???');"><i class="bi bi-trash me-2"></i> Hapus Data</a></li>
              </ul>
            </div>
          </td>
        </tr>
        <?php
                        $no++;
                }
        ?>
      </tbody>
    </table>
  </div>
  <div class="card-footer">
    <div class="simpeg-pagination d-flex justify-content-center mb-0"><?php echo $paginator; ?></div>
  </div>
</div>

<?php $this->load->view('dashboard_admin/layout/main_footer'); ?>
