<?= $this->include('nav/head'); ?>
<style>
    #table th:first-child {
        /* Gaya CSS yang ingin Anda terapkan pada kolom pertama */
        width: 10px;
        /* color: red; */
        /* font-weight: bold; */
    }

    #table th:last-child {
        /* Gaya CSS yang ingin Anda terapkan pada kolom pertama */
        width: 210px;
        /* color: red; */
        /* font-weight: bold; */
    }
</style>
<main>
    <!-- // -------------------------------------------------------------------------------------------------------------- -->
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header">Pembuatan Surat Kematian</div>
            <div class="card-body">
                <form action="<?= base_url('Kematian/simkem') ?>" method="post">
                    <div class="row">
                        <div class="col">

                            <!-- Input Data Start -->
                            No Surat
                            <div class="input-group mb-3">
                                <input name="no_surat" type="text" class="form-control" placeholder="No Surat Kematian">
                            </div>
                            <!-- Input Data End -->

                            <!-- Input Data Start -->
                            Tempat Penduduk Meninggal
                            <div class="input-group mb-3">
                                <input name="tempat" type="text" class="form-control" placeholder="Tempat Penduduk Meninggal">
                            </div>
                            <!-- Input Data End -->
                        </div>
                        <div class="col">
                            <!-- Input Data Start -->
                            Penduduk Yang Meninggal
                            <div class="input-group mb-3">
                                <select name="id_penduduk" id="id_penduduk">
                                    <option value=""></option>
                                    <?php foreach ($penduduk as $pe) : ?>
                                        <option value="<?= $pe['id_penduduk']; ?>"><?= $pe['nik_penduduk']; ?> - <?= $pe['nama_penduduk']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <!-- Input Data End -->
                            <!-- Input Data Start -->
                            Sebab Penduduk Meninggal
                            <div class="input-group mb-3">
                                <input name="sebab" type="text" class="form-control" placeholder="Penyakit..">
                            </div>
                            <!-- Input Data End -->


                        </div>
                        <div class="col">
                            <!-- Input Data Start -->
                            Hari Penduduk Meninggal
                            <div class="input-group mb-3">
                                <select class="form-select" name="hari" id="hari">
                                    <option value="Senin">~ Silahkan Pilih Hari ~</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </div>
                            <!-- Input Data End -->
                            <!-- Input Data Start -->
                            Tanggal
                            <div class="input-group mb-3">
                                <input name="tanggal" type="date" class="form-control" placeholder="Username">
                            </div>
                            <!-- Input Data End -->
                            <div class="float-end">
                                <button class="btn btn-primary" style="width: 150px;">Simpan Data</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- // -------------------------------------------------------------------------------------------------------------- -->
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header">Table Surat Kematian</div>
            <div class="card-body">
                <table id="table">
                    <thead>
                        <tr>
                            <th class="first">No</th>
                            <th>Nama</th>
                            <th>Hari</th>
                            <th>Tanggal</th>
                            <th>Tempat Meninggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($kematian as $ke) : ?>
                            <tr>
                                <td class="first"><?= $no++; ?></td>
                                <td><?= $ke['nama_penduduk']; ?></td>
                                <td><?= $ke['hari']; ?></td>
                                <td><?= $ke['tanggal']; ?></td>
                                <td><?= $ke['tempat']; ?></td>
                                <td>
                                    <a href="<?= base_url('Kematian/print/' . $ke['id_skkematian']) ?>" class="btn btn-outline-info btn-ssm" style="width: 100px;">Print</a>
                                    <a href="<?= base_url('Kematian/hapkem/' . $ke['id_skkematian']) ?>" class="btn btn-outline-danger btn-ssm" style="width: 100px;">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- // -------------------------------------------------------------------------------------------------------------- -->
</main>
<?= $this->include('nav/foot'); ?>
<script>
    $(document).ready(function() {
        $("#id_penduduk").select2({
            theme: 'bootstrap-5',
            placeholder: "Masukan Nama Penduduk"
        });



    });
</script>