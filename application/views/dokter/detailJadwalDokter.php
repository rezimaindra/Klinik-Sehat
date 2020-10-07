<div class="container dokterDetail">
    <h3 style="margin-top:10px;">Data Dokter</h3>
    <div class="row">
        <div class="col" style="margin-top:10px">
            <div class="card" style="width: 500px;">
                <div class="card-header" style="font-size:25px"><?= $jadwal['nama'];?></div>
                <div class="body mt-3 ml-3">
                    <img src="<?php echo base_url().'upload/product/'.$jadwal['foto']; ?>" alt="..." class="rounded-circle">
                    <h6 class="card-subtitle mb-2 text-muted ">ID Dokter.<?= $jadwal['id_dokter'];?></h6>
                    <p class="card-text">No KTP/KK            :<?= $jadwal['ktp/kk'];?></p>
                    <p class="card-text">Spesialis             :<?= $jadwal['spesialis'];?></p>
                    <p class="card-text">Tempat, tanggal lahir :<?= $jadwal['ttl'];?></p>
                    <p class="card-text">Alamat                :<?= $jadwal['alamat'];?></p>
                    <p class="card-text">No Hp                 :<?= $jadwal['nohp'];?></p>                    
                    
                    <a href="<?= base_url('jadwal');?>" class="card-link float-right mr-4 btn btn-warning" style="margin-bottom:20px;">Kembali</a>
                </div>
                </div>
        </div>
        <div class="col vektor">
            <img src="<?php echo base_url().'assets/img/pasienDetail.svg' ?>" alt="..." class="img-thumbnail">
        </div>
        </div>
    </div>
</div>