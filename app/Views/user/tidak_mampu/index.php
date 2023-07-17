<?= $this->include('nav/head'); ?>
<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header">Form Tambah Data Penduduk Tidak Mampu</div>
        <div class="card-body">
            <form action="<?= base_url('Tidak_mampu/simpan_data'); ?>" method="post">
                <div class="row">
                    <div class="col">
                        <!-- input data -->
                        No Surat :
                        <div class="input-group mb-2 ">
                            <input name="no_surat" type="text" class="form-control">
                        </div>

                        <!-- input data -->
                        keperluan :
                        <div class="input-group mb-2 ">
                            <input name="keperluan" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col">
                        <!-- input data -->
                        Nama Penduduk :
                        <div class="input-group mb-2 ">
                            <select id="id_penduduk" name="id_penduduk" class="form-select" required>
                                <option value="" selected></option>
                                <?php foreach ($penduduk as $ke) : ?>
                                    <option value="<?= $ke['id_penduduk']; ?>"><?= $ke['id_penduduk']; ?> - <?= $ke['nama_penduduk']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <br>
                        <div class="float-end">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                            <button type="reset" class="btn btn-warning">Reset Data</button>
                        </div>
                    </div>
                </div>
            </form>

            <hr>
            <table id="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nik</th>
                        <th>Nama</th>
                        <th>Keperluan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($tidak_mampu as $tm) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $tm['nik_penduduk']; ?></td>
                            <td><?= $tm['nama_penduduk']; ?></td>
                            <td><?= $tm['keperluan']; ?></td>
                            <td>
                                <a href="<?= base_url('Tidak_mampu/detail_data/' . $tm['id_sktidakmampu']); ?>" class="btn btn-outline-info btn-ssm">Detail Data</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

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