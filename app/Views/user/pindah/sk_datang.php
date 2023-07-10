<div class="card">
    <!-- <div class="card-header"> Pembuatan Surat Keterangan Pindah</div> -->
    <div class="card-body">
        <div class="row">
            <div class="col">
                <!-- Input Data Start -->
                ID Penduduk :
                <div class="input-group mb-3">
                    <select id="penduduk" name="id_pe" class="form-select" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
                        <option value=""></option>
                        <?php foreach ($penduduk as $pe) : ?>
                            <option value="<?= $pe['id_penduduk']; ?>"><?= $pe['id_penduduk']; ?> - <?= $pe['nama_penduduk']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <span class="input-group-text" id="basic-addon1" data-bs-toggle="tooltip" data-bs-placement="right" title="Jika data penduduk tidak di temukan, bisa di buat terlebih dahulu di bagian penambahan data penduduk"><i class="fa-solid fa-circle-info"></i></span>
                </div>
                <!-- Input Data End -->
                <!-- Input Data Start -->
                File Ktp :
                <div class="input-group mb-2">
                    <input type="file" class="form-control" placeholder="Username">
                </div>
                <!-- Input Data End -->
            </div>
            <div class="col">
                <!-- Input Data Start -->
                Surat Pindah :
                <div class="input-group mb-2">
                    <input type="file" class="form-control" placeholder="Username">
                </div>
                <!-- Input Data End -->
                <br>
                <div class="float-end">

                    <button class="btn btn-primary"> Simpan Data</button>
                </div>
            </div>
        </div>
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
                        <td><?= $pin['surat_datang']; ?></td>
                        <td><?= $pin['ktp_datang']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- ---------------------------------- table --------------------------------- -->
    </div>
</div>