<div class="container pasien">

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


    <div class="row ">
        <div class="col-12 col-sm-6 ">
            <h3>List of Pasien</h3>
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
    <br>
    
    <div class="row">
        <div class="col-md">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">KTP</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach($pasien as $p) :?>
                        <tr>
                            <th><?= $i++?></th>
                                <td><?= $p['nama'];?></td>
                                <td><?= $p['ktp/kk'];?></td>
                                <td>
                                    <a href="<?php base_url();?>pasien/detail/<?= $p['ktp/kk'];?>" class="badge badge-warning">detail</a>
                                    <a href="<?php base_url();?>pasien/ubah/<?= $p['ktp/kk']?>" class="badge badge-success">edit</a>
                                    <a href="<?php base_url();?>pasien/hapus/<?= $p['ktp/kk'];?>" class="badge badge-danger">hapus</a>
                                </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
        </div>
    </div>
        <div class="col-12 col-sm-6 col-md-8 vektor">
            <img src="<?php echo base_url().'assets/img/pasien.svg' ?>" alt="..." class="img-thumbnail">
        </div>
</div>