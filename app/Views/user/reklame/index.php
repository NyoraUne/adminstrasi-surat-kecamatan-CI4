<?= $this->include('nav/head'); ?>
<main>
    <div class="div container-fluid mt-3">
        <div class="card">
            <div class="card-header"> Pembuatan Surat Izin Usaha</div>
            <div class="card-body">

                <form action="<?= base_url('Reklame/simpan_data'); ?>" method="post">
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
                            No Surat :
                            <div class="input-group mb-2">
                                <input name="no_surat" type="text" class="form-control">
                            </div>

                            <!-- input data -->
                            Nama Perusahaan :
                            <div class="input-group mb-2">
                                <input name="nama_perusahaan" type="text" class="form-control">
                            </div>

                            <!-- input data -->
                            Alamat Perusahaan :
                            <div class="input-group mb-2">
                                <input name="alamat_perusahaan" type="text" class="form-control">
                            </div>

                            <!-- input data -->
                            No Telephone :
                            <div class="input-group mb-2">
                                <input name="no_telp" type="text" class="form-control">
                            </div>

                            <!-- input data -->
                            Naskah :
                            <div class="input-group mb-2">
                                <input name="naskah" type="text" class="form-control">
                            </div>
                            <!-- /* ---------------------- //ANCHOR - End Col Pertama ---------------------- */ -->
                        </div>
                        <div class="col">
                            <!-- /* ---------------------- //ANCHOR - Start Col Kedua ---------------------- */ -->
                            <!-- input data -->
                            Jenis Reklame :
                            <div class="input-group mb-2">
                                <input name="jenis" type="text" class="form-control" required>
                            </div>

                            <!-- input data -->
                            Ukuran :
                            <div class="input-group mb-2">
                                <input name="ukuran" type="text" class="form-control" placeholder="Jl. Utara.." required>
                            </div>

                            <!-- input data -->
                            Lokasi Pemasangan :
                            <div class="input-group mb-2">
                                <input name="lokasi" type="text" class="form-control" required>
                            </div>

                            <!-- input data -->
                            Masa Berlaku :
                            <div class="input-group mb-2">
                                <input name="masa_berlaku" type="number" class="form-control" required>
                            </div>

                            <!-- input data -->
                            Di Dirikan Di Atas Lahan Milik :
                            <div class="input-group mb-2">
                                <input name="lahan_milik" type="text" class="form-control" required>
                            </div>
                            <br>
                            <div class="float-end">

                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                            </div>
                            <!-- /* ---------------------- //ANCHOR - End Col Kedua ---------------------- */ -->
                        </div>
                    </div>
                </form>

                <hr>
                <table id="tb1">
                    <thead>
                        <tr>print_surat
                            <th>No</th>
                            <th>No Surat</th>
                            <th>Nama Pemilik</th>
                            <th>ukuran</th>
                            <th>masa_berlaku</th>
                            <th>Surat Di Buat Pada</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($reklame as $reklame) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $reklame['no_surat']; ?></td>
                                <td><?= $reklame['nama_penduduk']; ?></td>
                                <td><?= $reklame['ukuran']; ?></td>
                                <td><?= $reklame['masa_berlaku']; ?></td>
                                <td><?= $reklame['created_at']; ?></td>
                                <td>
                                    <a href="<?= base_url('Reklame/detail/' . $reklame['id_reklame']); ?>" class="btn btn-outline-info btn-ssm">Detail</a>
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

    window.addEventListener('DOMContentLoaded', event => {
        const datatablesSimple = document.getElementById('tb1');
        if (datatablesSimple) {
            new simpleDatatables.DataTable(datatablesSimple);
        }
    });
</script>