<div class="container pasienDetail">
    <h3 style="margin-top:10px;">Data Obat</h3>
    <div class="row">
        <div class="col" style="margin-top:10px">
            <div class="card" style="width: 500px;">
                <div class="card-header" style="font-size:25px"><?= $obat['nama'];?></div>
                <div class="body ml-3">
                    <img src="<?php echo base_url().'upload/product/'.$obat['foto']; ?>" alt="">
                    <h6 class="card-subtitle mb-2 text-muted ">Kode.<?= $obat['kode'];?></h6>
                    <p class="card-text"><?= $obat['keterangan']?></p>
                    <p class="card-text">jumlah: <?= $obat['jumlah'];?></p>
                    <a href="<?= base_url('obat');?>" class="card-link float-right mr-4 btn btn-warning" style="margin-bottom:20px;">Kembali</a>
                </div>
                </div>
        </div>
        <div class="col vektor">
            <img src="<?php echo base_url().'assets/img/pasienDetail.svg' ?>" alt="..." class="img-thumbnail">
        </div>
        </div>
    </div>
</div>