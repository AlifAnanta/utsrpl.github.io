<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA MAHASISWA</h3>

    <?php foreach($mahasiswa as $e) : ?>
<form method="post" action="<?php echo base_url().'admin/data_mahasiswa/update' ?>">

        
<div class="for-group">
            <label>Nama Mahasiswa</label>
            <Input type="hidden" name="nim" class="form-control" value="<?php echo $e->nim ?>">
            <Input type="text" name="kelas" class="form-control" value="<?php echo $e->kelas ?>">
        </div>
        <div class="for-group">
            <label>Nama Mahasiswa</label>
            
            <Input type="text" name="nmmahasiswa" class="form-control" value="<?php echo $e->nmmahasiswa ?>">
        </div>

        <div class="for-group">
            <label>Jenis Kelamin</label>
            <br>
            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki"> <span>Laki-laki</span>
      <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan"><span>Perempuan</span>
        </div>

        <div class="for-group">
            <label>Alamat</label>
            <Input type="text" name="alamat" class="form-control" value="<?php echo $e->alamat ?>">
        </div>

        <div class="for-group">
            <label>No Telepon</label>
            <Input type="text" name="notlp" class="form-control" value="<?php echo $e->notlp ?>">
        </div>

        <div class="for-group">
            <label>Tempat Lahir</label>
            <Input type="text" name="tmptlahir" class="form-control" value="<?php echo $e->tmptlahir ?>">
        </div>

        <div class="for-group">
            <label>Tanggal Lahir</label>
            <Input type="date" name="tgllahir" class="form-control" value="<?php echo $e->tgllahir ?>">
        </div>

        

        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>

</form>
        <?php endforeach; ?>
</div>