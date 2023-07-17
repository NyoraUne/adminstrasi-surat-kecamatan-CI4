<?= $this->include('nav/head'); ?>
<main>
    <div class="div container-fluid mt-3">
        <div class="card">
            <div class="card-header"> Pembuatan Surat Ahliwaris</div>
            <div class="card-body">
                <form action="<?= base_url('Ahliwaris/buat_data'); ?>" method="post">
                    <div class="row">
                        <div class="col">
                            Nama Keluarga Yang Sudah Meninggal :
                            <div class="input-group mb-2">
                                <select id="id_skkematian" name="id_skkematian" class="form-select" required>
                                    <option value="" selected></option>
                                    <?php foreach ($kematian as $ke) : ?>
                                        <option value="<?= $ke['id_skkematian']; ?>"><?= $ke['id_skkematian']; ?> - <?= $ke['nama_penduduk']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <!-- input data -->
                            Nomor Surat :
                            <div class="input-group mb-2">
                                <input name="no_surat" type="text" class="form-control" placeholder="AW/01/BJB/2023..." required>
                            </div>
                            <div class="float-end">

                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                            </div>
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
                            <th>Tanggal Kematian</th>
                            <th>Sebab</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <?php $p = 1; ?> -->
                        <?php foreach ($ahliwaris as $pe) : ?>
                            <tr>
                                <td><?= $p; ?></td>
                                <td><?= $pe['no_surat']; ?></td>
                                <td><?= $pe['nama_penduduk']; ?></td>
                                <td><?= $pe['tanggal']; ?></td>
                                <td><?= $pe['sebab']; ?></td>
                                <td>
                                    <a href="<?= base_url('Ahliwaris/buat_surat/' . $pe['id_skahliwaris']) ?>" class="btn btn-ssm btn-outline-info">Buat Surat</a>
                                    <a href="<?= base_url('Ahliwaris/hapus_data/' . $pe['id_skahliwaris']) ?>" class="btn btn-ssm btn-outline-danger">Hapus Data</a>
                                </td>
                            </tr>
                            <?php $p++; ?>
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