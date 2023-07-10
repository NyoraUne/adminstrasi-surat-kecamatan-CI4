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
        width: 160px;
        /* color: red; */
        /* font-weight: bold; */
    }
</style>
<main>
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header">Pembuatan Surat Kelahiran</div>
            <div class="card-body">
                <form action="<?= base_url('Kelahiran/tbhkel') ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <!-- Input Data Start -->
                            Masukan No Surat :
                            <div class="input-group mb-3">
                                <input type="text" name="surat" class="form-control" placeholder="No Surat">
                            </div>
                            <!-- Input Data End -->
                        </div>
                        <div class="col">
                            <!-- Input Data Start -->
                            Tanggal Kelahiran:
                            <div class="input-group mb-3">
                                <input type="date" name="date" class="form-control" placeholder="Tanggal Kelahiran">
                            </div>
                            <!-- Input Data End -->
                            <div class="float-end">

                                <button class="btn btn-primary" type="submit">Tambah Data</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- // -------------------------------------------------------------------------------------------------------------- -->
        <div class="card mt-3">
            <div class="card-header">Table Surat Kelahiran</div>
            <div class="card-body">
                <table id="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Surat</th>
                            <th>Tgl Lahir</th>
                            <th>Tgl Surat Di Buat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($suratlahir as $surl) : ?>
                            <tr>
                                <td width="10%"><?= $no; ?></td>
                                <td><?= $surl['no_surat']; ?></td>
                                <td><?= $surl['tanggal']; ?></td>
                                <td><?= $surl['created_at']; ?></td>
                                <td>
                                    <a href="<?= base_url('Kelahiran/detailk/' . $surl['id_skkelahiran']) ?>" class="btn btn-outline-info btn-ssm">Lihat Detail</a>
                                    <a href="<?= base_url('Kelahiran/hapla/' . $surl['id_skkelahiran']) ?>" class="btn btn-outline-danger btn-ssm">Hapus Data</a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</main>
<?= $this->include('nav/foot'); ?>