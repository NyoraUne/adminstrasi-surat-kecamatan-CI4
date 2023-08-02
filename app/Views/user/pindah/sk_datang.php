<div class="card">
    <!-- <div class="card-header"> Pembuatan Surat Keterangan Pindah</div> -->
    <div class="card-body">
        <form action="<?= base_url('Pindah/datang'); ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">

                    <!-- input data -->
                    No Surat :
                    <div class="input-group mb-2">
                        <input name="no_surat" type="text" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col">
                            <!-- Input Data Start -->
                            File Ktp (PDF) :
                            <div class="input-group mb-2">
                                <input type="file" name="ktp" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Input Data Start -->
                            Surat Pindah (PDF) :
                            <div class="input-group mb-2">
                                <input type="file" name="pindah" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <!-- input data -->
                    Alasan Pindah :
                    <div class="input-group mb-2 ">
                        <input name="alasan_pindah" type="text" class="form-control">
                    </div>

                </div>
                <div class="col">

                    <!-- Input Data Start -->
                    ID Penduduk :
                    <div class="input-group mb-2">
                        <select id="penduduk" name="id_penduduk" class="form-select" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right" required>
                            <option value=""></option>
                            <?php foreach ($penduduk as $pe) : ?>
                                <option value="<?= $pe['id_penduduk']; ?>"><?= $pe['id_penduduk']; ?> - <?= $pe['nama_penduduk']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <span class="input-group-text" id="basic-addon1" data-bs-toggle="tooltip" data-bs-placement="right" title="Jika data penduduk tidak di temukan, bisa di buat terlebih dahulu di bagian penambahan data penduduk"><i class="fa-solid fa-circle-info"></i></span>
                    </div>

                    <!-- input data -->
                    Alamat Asal :
                    <div class="input-group mb-2 ">
                        <input name="alamat_asal" type="text" class="form-control">
                    </div>

                    <br>
                    <div class="float-end">
                        <button type="reset" class="btn btn-primary"> Reset Form</button>
                        <button type="submit" class="btn btn-primary"> Simpan Data</button>
                    </div>
                </div>
            </div>
        </form>
        <hr>
        <!-- ---------------------------------- table --------------------------------- -->
        <table id="table2">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>No Surat</th>
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Alamat Asal</th>
                    <th>Alasan Pindah</th>
                    <th>Surat Pindah</th>
                    <th>Ktp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($pindah as $pin) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $pin['no_surat']; ?></td>
                        <td><?= $pin['nik_penduduk']; ?></td>
                        <td><?= $pin['nama_penduduk']; ?></td>
                        <td><?= $pin['alamat_asal']; ?></td>
                        <td><?= $pin['alasan_pindah']; ?></td>
                        <td><a href="<?= base_url('Pindah/showpdf/' . $pin['surat_datang']); ?>" target="_blank"><?= $pin['surat_datang']; ?></a></td>
                        <td><a href="<?= base_url('Pindah/showpdf/' . $pin['ktp_datang']); ?>" target="_blank"><?= $pin['ktp_datang']; ?></a></td>
                        <td>
                            <a href="<?= base_url('Pindah/hapus_datang/' . $pin['id_skdatang']); ?>" class="btn btn-outline-danger btn-ssm">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- ---------------------------------- table --------------------------------- -->
    </div>
</div>