<div class="container">

    <?php if ($this->session->flashdata('flash')): ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pasien <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row">
        <div class="col">
            <h3>Jadwal Berobat</h3>
            <a href="<?= base_url('jadwal/tambah');?>" class="btn btn-warning">Tambah Data Jadwal</a>
            <a href="<?= base_url('dokter/tambah');?>" class="btn btn-warning">Tambah Data Dokter</a>
            <a href="<?= base_url();?>dokter" class="btn btn-dark">Lihat List Dokter</a>
        </div>
    </div>

    <div class="row">
        <div class="col justify-content-center">
            <table class="table mt-3" style="width:800px">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Hari</th>
                        <th scope="col">Jam Masuk</th>
                        <th scope="col">Jam Keluar</th>
                        <th scope="col">Dokter</th> 
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($jadwal as $j) :?>
                    <tr>
                        <th><?= $i++ ?></th>
                            <td><?php echo $j['hari'];?></td>
                            <td><?php echo $j['jam_masuk']; ?></td>
                            <td><?php echo $j['jam_keluar']; ?></td>
                            <td> <?php echo $j['nama']; ?>
                                <a href="<? echo site_url('Jadwal/hapus/').$j['id_jadwal']?>" class="badge badge-danger float-right ml-2">hapus</a>
                                <a href="<? echo site_url('Jadwal/detailDokter/').$j['id_jadwal'];?>" class="badge badge-warning float-right ml-2">Detail Dokter</a> 
                                
                            </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>

</div>