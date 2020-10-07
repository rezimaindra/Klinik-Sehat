<div class="container dokter">

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
        <div class="col">
            <h3>List Dokter</h3>
            <form class="form-inline" action="" method="post">
                    <div class="input-group ">
                        <input type="text" class="form-control" placeholder="Cari data pasien.." aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword" size="50px">
                        <div class="input-group-append">
                            <button class="btn btn-warning" type="Submit">Cari</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>

    

    <div class="row mt-3">
        <div class="d-flex align-content-around flex-wrap">
            <?php foreach($dokter as $d): ?>
            <div class="card-deck ml-3">
                <div class="card" >
                    <img src="<?php echo base_url().'upload/product/'.$d['foto']; ?>" alt="..." class="rounded-circle mt-4">
                    <div class="card-body">
                        <h5 class="card-title"><?= $d['nama'];?></h5>
                        <p class="card-text">ID: <?= $d['id_dokter'];?></p>
                        <p class="card-text">Spesialis <?= $d['spesialis'];?></p>
                        <a href="<?= base_url();?>dokter/hapus/<?= $d['id_dokter'];?>" class="badge badge-danger float-right ml-2">hapus</a>
                        <a href="<?= base_url();?>dokter/editData/<?= $d['id_dokter'];?>" class="badge badge-warning float-right ml-2">ubah</a>
                        <a href="<?= base_url();?>dokter/detail/<?= $d['id_dokter'];?>" class="badge badge-warning float-right ml-2">detail</a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>