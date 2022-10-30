<div class="container-fluid">

    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_mahasiswa"><i class="fas fa-plus fa-sm"></i>Tambah Mahasiswa</button>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>KELAS</th>
            <th>NAMA MAHASISWA</th>
            
            <th>ALAMAT</th>
            <th colspan="3">AKSI</th>
</tr>

<?php 
$no=1;
$mahasiswa = $this->db->query("SELECT * FROM mahasiswa INNER JOIN jurusan ON mahasiswa.nim=jurusan.kode_jurusan ORDER BY nim ASC LIMIT 10;")->result();
foreach($mahasiswa as $e) : ?>  


<tr>
    <td><?php echo $no++ ?></td>
    <td>2022<?php echo $e->nim ?></td>
    <td><?php echo $e->kelas ?></td>
    <td><?php echo $e->nmmahasiswa ?></td>
    <td><?php echo $e->alamat ?></td>
    <td><?php echo anchor('admin/data_jurusan/edit/' .$e->nim, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
    <td><?php echo anchor('admin/data_jurusan/hapus/' .$e->nim, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
</tr>

<?php endforeach; ?>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_mahasiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT MAHASISWA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo base_url(). 'admin/data_mahasiswa/tambah_aksi'; ?>" method="post" enctype="multipart/form-data" >

      <div class="form-group">
      <input type="hidden" class="form-control form-control-user" name="nim"
      id="nim" aria-describedby="emailHelp" placeholder="Nim" required autocomplete="true">
      
      <input type="text" class="form-control form-control-user" name="kelas"
      id="kelas" aria-describedby="emailHelp" placeholder="Kelas" required autocomplete="true">
      </div>

      <div class="form-group">
      <input type="text" class="form-control form-control-user" name="nmmahasiswa"
      id="nmmahasiswa" aria-describedby="emailHelp" placeholder="Nama Mahasiswa" required autocomplete="true">
      </div>
      
      <div class="form-group">
      <label>Jenis kelamin</label>
      <br>
      <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki"> <span>Laki-laki</span>
      <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan"><span>Perempuan</span>
      
      </div>

      <div class="form-group">
      <input type="text" class="form-control form-control-user" name="alamat"
      id="alamat" aria-describedby="emailHelp" placeholder="Alamat" required autocomplete="true">
      </div>
      
      <div class="form-group">
      <input type="text" class="form-control form-control-user" name="notlp"
      id="notlp" aria-describedby="emailHelp" placeholder="No Telepon" required autocomplete="true">
      </div>

      <div class="form-group">
      <input type="text" class="form-control form-control-user" name="tmptlahir"
      id="tmptlahir" aria-describedby="emailHelp" placeholder="Tempat Lahir" required autocomplete="true">
      </div>
      
      <div class="form-group">
      <input type="date" class="form-control form-control-user" name="tgllahir"
      id="tgllahir" aria-describedby="emailHelp" placeholder="Tanggal Lahir" required autocomplete="true">
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

