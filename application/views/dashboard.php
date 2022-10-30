<div class="container-fluid">
  <div class="row text-center">

  
  <?php foreach ($guru as $e) : ?>  

    <div class="card ml-3" style="width: 16rem;">
  <img src="<?php echo base_url().'/uploads/'.$e->gambar ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title mb-1"><?php echo $e->nmguru?></h5>
    <span class="badge badge-pill badge-success mb-3">Rp. <?php echo $e->harga?></span><br>
    <?php echo anchor('dashboard/tambah_ke_keranjang/'.$e->nip,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
    <a href="#" class="btn btn-sm btn-success">Detail</a>
  </div>
</div>
    <?php endforeach; ?>
  </div>
</div>