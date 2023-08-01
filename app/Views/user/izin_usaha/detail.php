<?= $this->include('nav/head'); ?>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col">
            <!-- /* ---------------------- //ANCHOR - Start Col Pertama ---------------------- */ -->
            <div class="card">
                <div class="card-header">Data Usaha</div>
                <div class="card-body">

                    <form action="<?= base_url('Izin_Usaha/simpan_update/' . $izin['id_skizin_usaha']); ?>" method="post">
                        <div class="row">
                            <div class="col">

                                <!-- input data -->
                                Nomor Susat :
                                <div class="input-group mb-2 input-group-sm">
                                    <input name="no_surat" type="text" class="form-control" value="<?= $izin['no_surat']; ?>" readonly>
                                </div>

                                <!-- input data -->
                                Alamat Usaha :
                                <div class="input-group mb-2 input-group-sm">
                                    <input name="alamat_usaha" type="text" class="form-control" value="<?= $izin['alamat_usaha']; ?>" required>
                                </div>

                                <!-- input data -->
                                Tanggal Di Ajukan :
                                <div class="input-group mb-2 input-group-sm">
                                    <input name="tanggal_ajuan" type="date" class="form-control" value="<?= $izin['tanggal_ajuan']; ?>" required>
                                </div>

                                <!-- input data -->
                                Status Izin :
                                <div class="input-group mb-2 input-group-sm">
                                    <select name="status_izin" class="form-select" required>
                                        <option value="Diajukan" <?= ($izin['status_izin'] == 'Diajukan') ? 'selected' : ''; ?>>Diajukan</option>
                                        <option value="Ditolak" <?= ($izin['status_izin'] == 'Ditolak') ? 'selected' : ''; ?>>Ditolak</option>
                                        <option value="Disetujui" <?= ($izin['status_izin'] == 'Disetujui') ? 'selected' : ''; ?>>Disetujui</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col">

                                <!-- input data -->
                                Nama Usaha :
                                <div class="input-group mb-2 input-group-sm">
                                    <input name="nama_usaha" type="text" class="form-control" value="<?= $izin['nama_usaha']; ?>" required>
                                </div>

                                <!-- input data -->
                                Jenis Usaha :
                                <div class="input-group mb-2 input-group-sm">
                                    <input name="jenis_usaha" type="text" class="form-control" value="<?= $izin['jenis_usaha']; ?>" required>
                                </div>

                                <!-- input data -->
                                Kontak Usaha :
                                <input name="id_penduduk" type="text" class="form-control" value="<?= $izin['id_penduduk']; ?>" hidden>
                                <div class="input-group mb-2 input-group-sm">
                                    <input name="kontak_usaha" type="text" class="form-control" value="<?= $izin['kontak_usaha']; ?>" required>
                                </div>
                                <br>
                                <div class="float-end">
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
                                    <a href="<?= previous_url(); ?>" class="btn btn-danger btn-sm">Kembali</a>
                                    <a href="<?= base_url('Izin_Usaha/print_surat/' . $izin['id_skizin_usaha']); ?>" class="btn btn-info btn-sm">Cetak Data</a>
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