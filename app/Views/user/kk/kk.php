<?= $this->include('nav/head'); ?>
<main>
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header">Input Data KK</div>
            <div class="card-body">
                <form action="<?= base_url('Kk/simkk') ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <!-- Input Data Start -->
                            Masukan No KK :
                            <div class="input-group mb-2">
                                <input name="kk" type="text" class="form-control" placeholder="No KK">
                            </div>
                            <!-- Input Data End -->
                            <!-- Input Data Start -->
                            Alamat :
                            <div class="input-group mb-2">
                                <input name="alamat" type="text" class="form-control" placeholder="Alamat">
                            </div>
                            <!-- Input Data End -->
                            <!-- Input Data Start -->
                            Rt/Rw :
                            <div class="input-group mb-2">
                                <input name="rt" type="text" class="form-control" placeholder="Rt/Rw">
                            </div>
                            <!-- Input Data End -->
                            <!-- Input Data Start -->
                            Desa/Kelurahan :
                            <div class="input-group mb-2">
                                <input name="desa" type="text" class="form-control" placeholder="Desa/Kelurahan">
                            </div>
                            <!-- Input Data End -->

                        </div>
                        <div class="col">
                            <!-- Input Data Start -->
                            Kecamatan :
                            <div class="input-group mb-2">
                                <input name="kec" type="text" class="form-control" placeholder="Kecamatan">
                            </div>
                            <!-- Input Data End -->
                            <!-- Input Data Start -->
                            Kabupaten/Kota :
                            <div class="input-group mb-2">
                                <input name="kota" type="text" class="form-control" placeholder="Kabupaten/Kota">
                            </div>
                            <!-- Input Data End -->
                            <!-- Input Data Start -->
                            Kode Pos :
                            <div class="input-group mb-2">
                                <input name="pos" type="text" class="form-control" placeholder="Kode Pos">
                            </div>
                            <!-- Input Data End -->
                            <!-- Input Data Start -->
                            Provinsi :
                            <div class="input-group mb-2">
                                <input name="pro" type="text" class="form-control" placeholder="Provinsi">
                            </div>
                            <!-- Input Data End -->
                            <div class="float-end">
                                <button class="btn btn-primary" type="submit">Buat Data</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- // -------------------------------------------------------------------------------------------------------------- -->
        <div class="card mt-3">
            <div class="card-header">Table KK</div>
            <div class="card-body">
                <table id="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No KK</th>
                            <th>Di Buat Pada</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($kartukk as $k) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $k['no_kk']; ?></td>
                                <td><?= $k['created_at_kk']; ?></td>
                                <td>
                                    <a href="<?= base_url('Kk/dekk/' . $k['no_kk']) ?>" class="btn btn-ssm btn-outline-info">Full Information</a>
                                    <a href="<?= base_url('Kk/delkk/' . $k['id_kk']) ?>" class="btn btn-ssm btn-outline-danger">Hapus Data</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?= $this->include('nav/foot'); ?>