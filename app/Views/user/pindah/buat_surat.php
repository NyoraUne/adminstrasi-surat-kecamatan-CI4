<?= $this->include('nav/head'); ?>
<main>
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header">Pembuatan Surat Pengantar Pindah</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">

                                <form action="<?= base_url('Pindah/tbsur/' . $penduduk['id_penduduk']) ?>" method="post">

                                    <!-- Input Data Start -->
                                    Nama
                                    <div class="input-group mb-2">
                                        <input type="text" name="nama" class="form-control" placeholder="No Surat" value="<?= $penduduk['nama_penduduk']; ?>" disabled>
                                    </div>
                                    <!-- Input Data End -->
                                    <!-- Input Data Start -->
                                    No Surat
                                    <div class="input-group mb-2">
                                        <input type="text" name="nos" class="form-control" placeholder="No Surat">
                                    </div>
                                    <!-- Input Data End -->
                                    <!-- Input Data Start -->
                                    Pengikut / Keluarga Yang Pindah
                                    <div class="input-group mb-2">
                                        <input type="number" name="pen" class="form-control" placeholder="Berapa Orang">
                                    </div>
                                    <!-- Input Data End -->
                                    <!-- Input Data Start -->
                                    Alasan Pindah
                                    <div class="input-group mb-2">
                                        <textarea class="form-control" name="alap"></textarea>
                                    </div>
                                    <!-- Input Data End -->
                                    <!-- Input Data Start -->
                                    Alamat Asal
                                    <div class="input-group mb-2">
                                        <textarea class="form-control" name="alaa"></textarea>
                                    </div>
                                    <!-- Input Data End -->
                                    <!-- Input Data Start -->
                                    Alamat Tujuan
                                    <div class="input-group mb-2">
                                        <textarea class="form-control" name="alat"></textarea>
                                    </div>
                                    <!-- Input Data End -->
                                    <div class="float-end mt-3">
                                        <button class="btn btn-primary" type="submit">Tambah</button>
                                        <a href="<?= base_url('Pindah/') ?>" class="btn btn-secondary" type="">Kembali</a>
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
                                    <th>Alasan Pindah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <?php $no = 1; ?>
                            <?php foreach ($pindah as $pi) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $pi['created_at']; ?></td>
                                    <td><?= $pi['no_surat']; ?></td>
                                    <td><?= $pi['alasan_pindah']; ?></td>
                                    <td>
                                        <a href="<?= base_url('Pindah/psr/' . $pi['id_skpindah']) ?>" class="btn btn-outline-info btn-ssm"><i class="fa-solid fa-print"></i> Print Data</a>
                                        <a href="<?= base_url('Pindah/delsur/' . $pi['id_skpindah']) ?>" class="btn btn-outline-danger btn-ssm"><i class="fa-solid fa-trash"></i> Hapus Data</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <tbody>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?= $this->include('nav/foot'); ?>