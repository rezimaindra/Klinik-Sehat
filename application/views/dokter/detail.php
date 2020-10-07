<div class="container dokterDetail">
    <h3 style="margin-top:10px;">Data Dokter</h3>
    <div class="row">
        <div class="col" style="margin-top:10px">
            <div class="card" style="width: 500px;">
                <div class="card-header" style="font-size:25px"><?= $dokter['nama'];?></div>
                <div class="body mt-3 ml-3">
                    <img src="<?php echo base_url().'upload/product/'.$dokter['foto']; ?>" alt="..." class="rounded-circle">
                    <h6 class="card-subtitle mb-2 text-muted ">ID Dokter.<?= $dokter['id_dokter'];?></h6>
                    <p class="card-text">No KTP/KK            :<?= $dokter['ktp/kk'];?></p>
                    <p class="card-text">Spesialis             :<?= $dokter['spesialis'];?></p>
                    <p class="card-text">Tempat, tanggal lahir :<?= $dokter['ttl'];?></p>
                    <p class="card-text">Alamat                :<?= $dokter['alamat'];?></p>
                    <p class="card-text">No Hp                 :<?= $dokter['nohp'];?></p>                    
                    
                    <a href="<?= base_url('dokter');?>" class="card-link float-right mr-4 btn btn-warning" style="margin-bottom:20px;">Kembali</a>
                </div>
                </div>
        </div>
        <div class="col vektor">
            <img src="<?php echo base_url().'assets/img/pasienDetail.svg' ?>" alt="..." class="img-thumbnail">
        </div>
        </div>
    </div>
</div>