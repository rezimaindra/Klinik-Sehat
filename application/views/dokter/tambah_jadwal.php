<div class="container waktuDokter">
    <h3> Tambah Waktu Kerja Dokter</h3>
    <div class="row">
        <div class="col">
            <form action="" method="post">
            <div class="form-group">
                <label for="hari">Hari</label>
                <input type="text" name="hari" class="form-control" id="hari">
            </div>
            <div class="form-group">
                <label for="jam_masuk">Jam Masuk</label>
                <input type="text" name="jam_masuk" class="form-control" id="jam_masuk">
            </div>  
            <div class="form-group">
                <label for="jam_keluar">Jam Keluar</label>
                <input type="text" name="jam_keluar" class="form-control" id="jam_keluar">
            </div>  
            <div class="form-group">
                <label for="id_dokter">ID Dokter</label>
                <input type="text" name="id_dokter" class="form-control" id="id_dokter">
            </div>  
            <div class="tombol">
                <button type="submit" name="tambah" class="btn btn-warning float-right" >Tambah Data</button>
                <a href="<?= base_url('jadwal');?>" class="btn btn-outline-warning float-right mr-2">Kembali</a>
            </div>
            </form>
        </div>
        <div class="col vektor">
            <img src="<?php echo base_url().'assets/img/waktu.svg' ?>" alt="..." class="img-thumbnail">
        </div>
    </div>
</div>