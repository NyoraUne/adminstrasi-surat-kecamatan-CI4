    <?= $this->include('nav/head'); ?>
    <div class="container-fluid mt-3">

        <div class="card">
            <div class="card-header">
                Pembuatan Surat Ahliwaris
                <div class="float-end">
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="fw-bold">Data Diri Bersangkutan Yang Meninggal</h6>
                                <hr>
                                <div class="row">
                                    <div class="col-4">
                                        Nik <br>
                                        Nama <br>
                                        Jenis Kelamin <br>
                                        Tempat Tanggal Lahir <br>
                                        Agama <br>
                                        Pekerjaan <br>
                                        Alamat <br>
                                    </div>
                                    <div class="col">
                                        : <?= $kematian['nik_penduduk']; ?> <br>
                                        : <?= $kematian['nama_penduduk']; ?> <br>
                                        : <?= $kematian['jenis_kelamin_penduduk']; ?> <br>
                                        : <?= $kematian['tempat_lahir_penduduk']; ?>, <?= $kematian['tgl_lahir_penduduk']; ?> <br>
                                        : <?= $kematian['agama_penduduk']; ?> <br>
                                        : <?= $kematian['pekerjaan_penduduk']; ?> <br>
                                        : <?= $kematian['alamat_penduduk']; ?> <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="card">
                                <div class="card-body">

                                    <form action="<?= base_url('Ahliwaris/simpan_ahliwaris/' . $kematian['id_skahliwaris']); ?>" method="post">

                                        <h6 class="fw-bold">Input Data Keluarga Ahliwaris</h6>
                                        <hr>
                                        Nama Keluarga :
                                        <div class="input-group mb-2">
                                            <select id="id_penduduk" name="id_penduduk" class="form-select" required>
                                                <option value="" selected></option>
                                                <?php foreach ($penduduk as $pe) : ?>
                                                    <option value="<?= $pe['id_penduduk']; ?>"><?= $pe['nik_penduduk']; ?> - <?= $pe['nama_penduduk']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <!-- input data -->
                                        Hubungan Keluarga :
                                        <div class="input-group mb-2">
                                            <input name="hubungan" type="text" class="form-control" placeholder="anak..">
                                        </div>
                                        <div class="float-end">
                                            <button class="btn btn-primary">Tambah Data</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <table id="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tempat/Tanggal Lahir</th>
                                    <th>Nik</th>
                                    <th>Hubungan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($ahliwaris as $ah) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $ah['nama_penduduk']; ?></td>
                                        <td><?= $ah['tempat_lahir_penduduk']; ?>, <?= $ah['tgl_lahir_penduduk']; ?></td>
                                        <td><?= $ah['nik_penduduk']; ?></td>
                                        <td><?= $ah['hubungan']; ?></td>
                                        <td>
                                            <button class="btn btn-outline-danger btn-ssm">Hapus</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?= $this->include('nav/foot'); ?>

    <script>
        $(document).ready(function() {
            $("#id_penduduk").select2({
                theme: 'bootstrap-5',
                placeholder: "Silahkan Pilih Data"
            });
        });
    </script>