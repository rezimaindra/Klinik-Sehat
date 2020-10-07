<div class="container-fluid pasienTambah">
    <div class="row">
        <div class="col vektor">
            <img src="<?php echo base_url().'assets/img/pasienRegis.svg' ?>" alt="..." class="img-thumbnail">
        </div>

        <div class="col daftar">
            <h3>Ubah Data Pasien</h3>
            <form action="" method="post">
            <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="<?= $pasien['nama'];?>">
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small> 
                </div>
                <div class="form-group">
                    <label for="ktp">No KTP/KK</label>
                    <input type="text" name="ktp"class="form-control" id="ktp" autocomplete="off" value="<?= $pasien['ktp/kk'];?>">
                    <small class="form-text text-danger"><?= form_error('ktp'); ?></small> 
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $pasien['alamat'];?>">
                    <small class="form-text text-danger"><?= form_error('alamat'); ?></small> 
                </div>
                <div class="form-group">
                    <label for="ttl">Tempat,Tanggal Lahir</label>
                    <input type="text" name="ttl" class="form-control" id="lahir"  value="<?= $pasien['ttl'];?>">
                    <small class="form-text text-danger"><?= form_error('ttl'); ?></small> 
                </div>
                <div class="form-group">
                    <label for="nohp">No Hp</label>
                    <input type="text" name="nohp" class="form-control" id="nohp"  value="<?= $pasien['nohp'];?>">
                    <small class="form-text text-danger"><?= form_error('nohp'); ?></small> 
                </div>
                <div class="form-group">
                    <label for="sosmed">Social Media</label>
                    <input type="text" name="sosmed"class="form-control" id="sosmed" value="<?= $pasien['sosmed'];?>">
                    <small class="form-text text-danger"><?= form_error('sosmed'); ?></small> 
                </div>
                <div class="form-group">
                    <label for="tinggi">Tinggi Badan</label>
                    <input type="tinggi" name="tinggi"class="form-control" id="tinggi" value="<?= $pasien['tinggi'];?>">
                    <small class="form-text text-danger"><?= form_error('tinggi'); ?></small> 
                </div>
                <div class="form-group">
                    <label for="berat">Berat Badan</label>
                    <input type="berat" name="berat" class="form-control" id="berat" value="<?= $pasien['berat'];?>">
                    <small class="form-text text-danger"><?= form_error('berat'); ?></small> 
                </div>
                <div class="tombol">
                    <button type="submit" class="btn btn-warning float-right " style="width: 150px">Tambahkan</button>
                    <a href="" class="btn btn-outline-warning float-right mr-2">Kembali</a>
                </div>
            </form>
        </div>

    </div>
</div>