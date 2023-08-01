<?= $this->include('nav/head'); ?>
<main>
    <div class="div container-fluid mt-3">
        <div class="card">
            <div class="card-header"> Pembuatan Surat Izin Usaha</div>
            <div class="card-body">

                <form action="<?= base_url('Izin_Usaha/simpan_data'); ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <!-- /* ---------------------- //ANCHOR - Start Col Pertama ---------------------- */ -->
                            Nama Penduduk Pemilik Usaha :
                            <div class="input-group mb-2">
                                <select id="id_skkematian" name="id_penduduk" class="form-select" required>
                                    <option value="" selected></option>
                                    <?php foreach ($penduduk as $pe) : ?>
                                        <option value="<?= $pe['id_penduduk']; ?>"><?= $pe['id_penduduk']; ?> - <?= $pe['nama_penduduk']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- input data -->
                            Nama Usaha :
                            <div class="input-group mb-2 input-group-sm">
                                <input name="nama_usaha" type="text" class="form-control" placeholder="Bengkel.." required>
                            </div>

                            <!-- input data -->
                            Jenis Usaha :
                            <div class="input-group mb-2 input-group-sm">
                                <input name="jenis_usaha" type="text" class="form-control" placeholder="Retoran.." required>
                            </div>

                            <!-- input data -->
                            Kontak Terkait Dengan Usaha :
                            <div class="input-group mb-2 input-group-sm">
                                <input name="kontak_usaha" type="text" class="form-control" placeholder="0815239.." required>
                            </div>
                            <!-- /* ---------------------- //ANCHOR - End Col Pertama ---------------------- */ -->
                        </div>
                        <div class="col">
                            <!-- /* ---------------------- //ANCHOR - Start Col Kedua ---------------------- */ -->
                            <!-- input data -->
                            Nomor Surat :
                            <div class="input-group mb-2">
                                <input name="no_surat" type="text" class="form-control" placeholder="I.US/01/BJB/2023..." required>
                            </div>

                            <!-- input data -->
                            Alamat Usaha :
                            <div class="input-group mb-2 input-group-sm">
                                <input name="alamat_usaha" type="text" class="form-control" placeholder="Jl. Utara.." required>
                            </div>

                            <!-- input data -->
                            tanggal_ajuan :
                            <div class="input-group mb-2 input-group-sm">
                                <input name="tanggal_ajuan" type="date" class="form-control" required>
                            </div>

                            <!-- input data -->
                            Status Izin Usaha :
                            <div class="input-group mb-2 input-group-sm">
                                <select name="status_izin" class="form-select" required>
                                    <option value="Diajukan">Diajukan</option>
                                    <option value="Ditolak">Ditolak</option>
                                    <option value="Disetujui">Disetujui</option>
                                </select>
                            </div>

                            <div class="float-end">

                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                            </div>
                            <!-- /* ---------------------- //ANCHOR - End Col Kedua ---------------------- */ -->
                        </div>
                    </div>
                </form>

                <hr>
                <table id="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Surat</th>
                            <th>Nama</th>
                            <th>Nama Usaha</th>
                            <th>alamat_usaha</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $p = 1; ?>
                        <?php foreach ($izin as $iz) : ?>
                            <tr>
                                <td><?= $p++; ?></td>
                                <td><?= $iz['no_surat']; ?></td>
                                <td><?= $iz['nama_penduduk']; ?></td>
                                <td><?= $iz['nama_usaha']; ?></td>
                                <td><?= strlen($iz['alamat_usaha']) > 40 ? substr($iz['alamat_usaha'], 0, 40) . '...' : $iz['alamat_usaha']; ?></td>
                                <td>
                                    <a href="<?= base_url('Izin_Usaha/detail_data/' . $iz['id_skizin_usaha']); ?>" class="btn btn-outline-info btn-ssm">Detail Surat</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- ----------------------------------------------------------------------------------------------------------------------- -->
</main>
<?= $this->include('nav/foot'); ?>

<script>
    $(document).ready(function() {
        $("#id_skkematian").select2({
            theme: 'bootstrap-5',
            placeholder: "Silahkan Pilih Data"
        });
    });
</script>