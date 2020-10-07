<div class="container pasienDetail">
    <h3 style="margin-top:10px;">Data Pasien</h3>
    <div class="row">
        <div class="col" style="margin-top:10px">
            <div class="card" style="width: 500px;">
                <div class="card-header" style="font-size:25px"><?= $pasien['nama']?></div>
                <div class="body mt-3 ml-3">
                    <h6 class="card-subtitle mb-2 text-muted ">No KTP.<?= $pasien['ktp/kk']?></h6>
                    <p class="card-text">Tempat,tanggal lahir: <?= $pasien['ttl']?></p>
                    <p class="card-text">No Hp               : <?= $pasien['nohp']?></p>
                    <p class="card-text">Sosial media        : <?= $pasien['sosmed']?></p>
                    <p class="card-text">Tinggi badan        : <?= $pasien['tinggi']?></p>
                    <p class="card-text">Berat badan         : <?= $pasien['berat']?></p>
                    <a href="<?= base_url('pasien');?>" class="card-link float-right mr-4 btn btn-warning" style="margin-bottom:20px;">Kembali</a>
                </div>
                </div>
        </div>
        <div class="col vektor">
            <img src="<?php echo base_url().'assets/img/pasienDetail.svg' ?>" alt="..." class="img-thumbnail">
        </div>
        </div>
    </div>
</div>