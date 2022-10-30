<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA JURUSAN</h3>

    <?php foreach($jurusan as $e) : ?>
<form method="post" action="<?php echo base_url().'admin/data_jurusan/update' ?>">

        

        <div class="for-group">
            <label>Nama jurusan</label>
            <Input type="hidden" name="kode_jurusan" class="form-control" value="<?php echo $e->kode_jurusan ?>">
            <Input type="text" name="nama_jurusan" class="form-control" value="<?php echo $e->nama_jurusan ?>">
        
        </div>

        

        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>

</form>
        <?php endforeach; ?>
</div>