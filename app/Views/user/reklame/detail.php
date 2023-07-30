<?= $this->include('nav/head'); ?>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col">
            <!-- /* ---------------------- //ANCHOR - Start Col Pertama ---------------------- */ -->
            <div class="card">
                <div class="card-header">Data Usaha</div>
                <div class="card-body">

                    <form action="<?= base_url('Reklame/simpan_update/' . $izin['id_reklame']); ?>" method="post">
                        <div class="row">
                            <div class="col">

                                <!-- input data -->
                                No Surat :
                                <input name="id_penduduk" type="text" class="form-control" value="<?= $izin['id_penduduk']; ?>" hidden>
                                <div class="input-group mb-2">
                                    <input name="no_surat" type="text" class="form-control" value="<?= $izin['no_surat']; ?>">
                                </div>

                                <!-- input data -->
                                Nama Perusahaan :
                                <div class="input-group mb-2">
                                    <input name="nama_perusahaan" type="text" class="form-control" value="<?= $izin['nama_perusahaan']; ?>">
                                </div>

                                <!-- input data -->
                                Alamat Perusahaan :
                                <div class="input-group mb-2">
                                    <input name="alamat_perusahaan" type="text" class="form-control" value="<?= $izin['alamat_perusahaan']; ?>">
                                </div>

                                <!-- input data -->
                                No Telephone :
                                <div class="input-group mb-2">
                                    <input name="no_telp" type="text" class="form-control" value="<?= $izin['no_telp']; ?>">
                                </div>

                                <!-- input data -->
                                Naskah :
                                <div class="input-group mb-2">
                                    <input name="naskah" type="text" class="form-control" value="<?= $izin['naskah']; ?>">
                                </div>

                            </div>
                            <div class="col">

                                <!-- input data -->
                                Jenis Reklame :
                                <div class="input-group mb-2">
                                    <input name="jenis" type="text" class="form-control" required value="<?= $izin['jenis']; ?>">
                                </div>

                                <!-- input data -->
                                Ukuran :
                                <div class="input-group mb-2">
                                    <input name="ukuran" type="text" class="form-control" value="<?= $izin['ukuran']; ?>" required>
                                </div>

                                <!-- input data -->
                                Lokasi Pemasangan :
                                <div class="input-group mb-2">
                                    <input name="lokasi" type="text" class="form-control" required value="<?= $izin['lokasi']; ?>">
                                </div>

                                <!-- input data -->
                                Masa Berlaku :
                                <div class="input-group mb-2">
                                    <input name="masa_berlaku" type="number" class="form-control" value="<?= $izin['masa_berlaku']; ?>" required>
                                </div>

                                <!-- input data -->
                                Di Dirikan Di Atas Lahan Milik :
                                <div class="input-group mb-2">
                                    <input name="lahan_milik" type="text" class="form-control" required value="<?= $izin['lahan_milik']; ?>">
                                </div>
                                <div class="float-end">
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
                                    <a href="<?= base_url('Reklame/index'); ?>" class="btn btn-danger btn-sm">Kembali</a>
                                    <a href="<?= base_url('Reklame/print_surat/' . $izin['id_reklame']); ?>" class="btn btn-info btn-sm">Cetak Data</a>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- /* ---------------------- //ANCHOR - End Col Pertama ---------------------- */ -->
        </div>
        <div class="col">
            <!-- /* ---------------------- //ANCHOR - Start Col Kedua ---------------------- */ -->
            <div class="card">
                <div class="card-header">Data Pemilik Usaha</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            Nik <br>
                            Nama <br>
                            Alamat <br>
                            Tempat & Tanggal Lahir <br>
                            Jenis Kelamin <br>
                            Agama <br>
                            Status Perkawinan <br>
                            No Telphone <br>
                        </div>
                        <div class="col">
                            : <?= $izin['nik_penduduk']; ?><br>
                            : <?= $izin['nama_penduduk']; ?><br>
                            : <?= $izin['alamat_penduduk']; ?><br>
                            : <?= $izin['tempat_lahir_penduduk']; ?>, <?= $izin['tgl_lahir_penduduk']; ?> <br>
                            : <?= $izin['jenis_kelamin_penduduk']; ?><br>
                            : <?= $izin['agama_penduduk']; ?><br>
                            : <?= $izin['status_perkawinan_penduduk']; ?><br>
                            : <?= $izin['no_telp_penduduk']; ?><br>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /* ---------------------- //ANCHOR - End Col Kedua ---------------------- */ -->
        </div>
    </div>
</div>
<?= $this->include('nav/foot'); ?>