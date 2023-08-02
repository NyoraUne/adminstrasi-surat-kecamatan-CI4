<?= $this->include('nav/head'); ?>
<?php foreach ($penduduk as $pe) : ?>
    <main>
        <div class="container-fluid mt-3">
            <div class="card">
                <div class="card-header">Pembuatan Surat Pengantar KK</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">

                                    <form action="<?= base_url('Kk/tbsur/' . $pe['id_penduduk']) ?>" method="post">

                                        <!-- Input Data Start -->
                                        Nama
                                        <div class="input-group mb-2">
                                            <input type="text" name="nama" class="form-control" placeholder="No Surat" value="<?= $pe['nama_penduduk']; ?>" disabled>
                                        </div>
                                        <!-- Input Data End -->
                                        <!-- Input Data Start -->
                                        No Surat
                                        <div class="input-group mb-2">
                                            <input type="text" name="nos" class="form-control" placeholder="No Surat">
                                        </div>
                                        <!-- Input Data End -->
                                        <!-- Input Data Start -->
                                        Keperluan
                                        <textarea class="form-control" name="kep"></textarea>
                                        <!-- Input Data End -->
                                        <div class="float-end mt-3">
                                            <button class="btn btn-primary" type="submit">Tambah</button>
                                            <a href="<?= base_url('kk/surkk') ?>" class="btn btn-secondary" type="">Kembali</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col">

                            <table id="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal DI Buat</th>
                                        <th>No Surat</th>
                                        <th>Keperluan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $n = 1; ?>
                                    <?php foreach ($ktp as $kt) : ?>

                                        <tr>
                                            <td><?= $n; ?></td>
                                            <td><?= $kt['created_at_skk']; ?></td>
                                            <td><?= $kt['no_surat_skk']; ?></td>
                                            <td><?= $kt['keperluan_skk']; ?></td>
                                            <td>
                                                <a href="<?= base_url('Kk/psr/' . $kt['id_skkk']) ?>" class="btn btn-outline-info btn-ssm"><i class="fa-solid fa-print"></i> Print Data</a>
                                                <a href="<?= base_url('Kk/delsur/' . $kt['id_skkk']) ?>" class="btn btn-outline-danger btn-ssm"><i class="fa-solid fa-trash"></i> Hapus Data</a>
                                            </td>
                                        </tr>
                                        <?php $n++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php endforeach; ?>
<?= $this->include('nav/foot'); ?>