<div class="container-fluid pasienTambah">
    <div class="row">
        <div class="col vektor">
            <img src="<?php echo base_url().'assets/img/pasienRegis.svg' ?>" alt="..." class="img-thumbnail">
        </div>

        <div class="col daftar">
            <h3>Ubah Data Dokter</h3>
            <?php echo form_open_multipart('dokter/ubah'); ?>
                <div class="form-group">
                    <input type="hidden" name="id_dokter" value="<?= $dokter['id_dokter'];?>">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama"class="form-control" id="nama" value="<?= $dokter['nama'];?>">
                </div>
                <div class="form-group">
                    <label for="spesialis">Spesialis</label>
                    <input type="text" name="spesialis" class="form-control" id="spesialis" value="<?= $dokter['spesialis'];?>">
                </div>
                <div class="form-group">
                    <label for="ktp/kk">No KTP/KK</label>
                    <input type="text" name="ktp/kk" class="form-control" id="ktp/kk" value="<?= $dokter['ktp/kk'];?>">
                </div>
                <div class="form-group">
                    <label for="ttl">Tempat,Tanggal Lahir</label>
                    <input type="text" name="ttl" class="form-control" id="ttl" value="<?= $dokter['id_dokter'];?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $dokter['alamat'];?>">
                </div>
                <div class="form-group">
                    <label for="nohp">No Hp</label>
                    <input type="text" name="nohp" class="form-control" id="nohp" value="<?= $dokter['nohp'];?>">
                </div>
                <div class="form-group">
                    <label for="foto">Upload Foto</label>
                    <input type="file" name="foto" class="form-control-file" id="Foto" value="<?= $dokter['foto'];?>">
                    <?php if (isset($error)) :?>
                        </div>
                            <div class="alert alert-warning" role="alert">
                                <?= $error?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="tombol">
                    <button type="submit" class="btn btn-warning float-right" style="width: 150px">Tambahkan</button>
                    <a href="<?= base_url('dokter');?>" class="btn btn-outline-warning float-right mr-2">Kembali</a>
                </div>
            <?php echo form_close(); ?>
        </div>

    </div>
</div>