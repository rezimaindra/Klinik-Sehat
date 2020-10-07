<div class="container obat">
    <?php if ($this->session->flashdata('flash')): ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Obat <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            </div>
        </div>
    <?php endif; ?> 
    
    <div class="row">
        <div class="col mt-2">
            <h3>List Obat</h3>
            <a href="<?= base_url();?>obat/tambah" class="btn btn-warning">Tambah Data Obat</a>
            <form class="form-inline" action="" method="post">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" placeholder="Cari data obat.." aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword" size="50px">
                        <div class="input-group-append">
                            <button class="btn btn-warning" type="Submit">Cari</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>


    
    <?php foreach($obat as $o) :?>
        <div class="row mt-2">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <?= $o['nama'];?>
                    </div>
                    <div class="card-body">
                        <div class="media position-relative">
                            <img src="<?php echo base_url().'upload/product/'.$o['foto']; ?>" class="mr-3" alt="...">
                            <div class="media-body">
                                <h5 class="mt-0">Kode. <?= $o['kode'];?></h5>
                                <p><?= $o['keterangan'];?></p>
                                <a href="<?= base_url();?>obat/detail/<?= $o['kode'];?>" class="badge badge-warning">detail</a>
                                <a href="<?= base_url();?>obat/editData/<?= $o['kode'];?>" class="badge badge-warning">ubah</a>
                                <a href="<?= base_url();?>obat/hapus/<?= $o['kode'];?>" class="badge badge-dark">hapus</a>
                            </div>
                        </div>
                        <span class="align-middle float-right" >
                            <strong>Jumlah</strong>
                            <?= $o['jumlah']?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach;?>
</div>