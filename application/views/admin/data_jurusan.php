<div class="container-fluid">

    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_jurusan"><i class="fas fa-plus fa-sm"></i>Tambah Jurusan</button>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>KODE JURUSAN</th>
            <th>NAMA JURUSAN</th>
            <th colspan="3">AKSI</th>
</tr>
<?php 
$no=1;
foreach($jurusan as $e) : ?>  

<tr>
    <td><?php echo $no++ ?></td>
    <td>2022<?php echo $e->kode_jurusan ?></td>
    <td><?php echo $e->nama_jurusan ?></td>
    <td><?php echo anchor('admin/data_jurusan/edit/' .$e->kode_jurusan, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
    <td><?php echo anchor('admin/data_jurusan/hapus/' .$e->kode_jurusan, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
</tr>
<?php endforeach; ?>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_jurusan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT JURUSAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo base_url(). 'admin/data_jurusan/tambah_aksi'; ?>" method="post" enctype="multipart/form-data" >

      
      <div class="form-group">
      <input type="text" class="form-control form-control-user" name="nama_jurusan"
      id="nama_jurusan" aria-describedby="emailHelp" placeholder="Nama Jurusan" required autocomplete="true">
      </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

