<div class="container-fluid pasienTambah">
    <div class="row">
        <div class="col vektor">
            <img src="<?php echo base_url().'assets/img/pasienRegis.svg' ?>" alt="..." class="img-thumbnail">
        </div>

        <div class="col daftar">
            <h3>Tambah Data Pasien</h3>
            <form action="" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" >
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small> 
                </div>
                <div class="form-group">
                    <label for="ktp">No KTP/KK</label>
                    <input type="text" name="ktp"class="form-control" id="ktp" autocomplete="off">
                    <small class="form-text text-danger"><?= form_error('ktp'); ?></small> 
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" >
                    <small class="form-text text-danger"><?= form_error('alamat'); ?></small> 
                </div>
                <div class="form-group">
                    <label for="ttl">Tempat,Tanggal Lahir</label>
                    <input type="text" name="ttl" class="form-control" id="lahir" >
                    <small class="form-text text-danger"><?= form_error('ttl'); ?></small> 
                </div>
                <div class="form-group">
                    <label for="nohp">No Hp</label>
                    <input type="text" name="nohp" class="form-control" id="nohp" >
                    <small class="form-text text-danger"><?= form_error('nohp'); ?></small> 
                </div>
                <div class="form-group">
                    <label for="sosmed">Social Media</label>
                    <input type="text" name="sosmed"class="form-control" id="sosmed" >
                    <small class="form-text text-danger"><?= form_error('sosmed'); ?></small> 
                </div>
                <div class="form-group">
                    <label for="tinggi">Tinggi Badan</label>
                    <input type="tinggi" name="tinggi"class="form-control" id="tinggi" >
                    <small class="form-text text-danger"><?= form_error('tinggi'); ?></small> 
                </div>
                <div class="form-group">
                    <label for="berat">Berat Badan</label>
                    <input type="berat" name="berat" class="form-control" id="berat" >
                    <small class="form-text text-danger"><?= form_error('berat'); ?></small> 
                </div>
                <div class="tombol">
                    <button type="submit" name="tambah" class="btn btn-warning float-right " style="width: 150px">Tambahkan</button>
                    <a href="<?= base_url('pasien');?>" class="btn btn-outline-warning float-right mr-2">Kembali</a>
                </div>
            </form>
        </div>

    </div>
</div>