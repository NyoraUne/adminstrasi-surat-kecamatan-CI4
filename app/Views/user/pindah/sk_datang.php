<div class="card">
    <!-- <div class="card-header"> Pembuatan Surat Keterangan Pindah</div> -->
    <div class="card-body">
        <form action="<?= base_url('Pindah/datang'); ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <!-- Input Data Start -->
                    ID Penduduk :
                    <div class="input-group mb-3">
                        <select id="penduduk" name="id_penduduk" class="form-select" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right" required>
                            <option value=""></option>
                            <?php foreach ($penduduk as $pe) : ?>
                                <option value="<?= $pe['id_penduduk']; ?>"><?= $pe['id_penduduk']; ?> - <?= $pe['nama_penduduk']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <span class="input-group-text" id="basic-addon1" data-bs-toggle="tooltip" data-bs-placement="right" title="Jika data penduduk tidak di temukan, bisa di buat terlebih dahulu di bagian penambahan data penduduk"><i class="fa-solid fa-circle-info"></i></span>
                    </div>
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
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Surat Pindah</th>
                    <th>Ktp</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pindah as $pin) : ?>
                    <tr>
                        <td><?= $pin['nik_penduduk']; ?></td>
                        <td><?= $pin['nama_penduduk']; ?></td>
                        <td><a href="<?= base_url('Pindah/showpdf/' . $pin['surat_datang']); ?>" target="_blank"><?= $pin['surat_datang']; ?></a></td>
                        <td><a href="<?= base_url('Pindah/showpdf/' . $pin['ktp_datang']); ?>" target="_blank"><?= $pin['ktp_datang']; ?></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- ---------------------------------- table --------------------------------- -->
    </div>
</div>