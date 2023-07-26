<?= $this->include('nav/head_c'); ?>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- bio data -->
<div class="row">
    <div class="col">
        <table class="table table-striped">
            <thead class="bg-dark text-white">
                <tr>
                    <th>No</th>
                    <th>No Surat</th>
                    <th>Nama Penduduk</th>
                    <th>Hari</th>
                    <th>Tanggal </th>
                    <th>Sebab</th>
                    <th>Tempat Meninggal</th>
                </tr>
            </thead>
            <tbody>
                <?php $n = 1; ?>
                <?php foreach ($variable as $pe) : ?>
                    <tr>
                        <td>
                            <?= $n++; ?>
                        </td>
                        <td>
                            <?= $pe['no_surat']; ?>
                        </td>
                        <td>
                            <?= $pe['nama_penduduk']; ?>
                        </td>
                        <td>
                            <?= $pe['hari']; ?>
                        </td>
                        <td>
                            <?= $pe['tanggal']; ?>
                        </td>
                        <td>
                            <?= $pe['sebab']; ?>
                        </td>
                        <td>
                            <?= $pe['tempat']; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- kata bawah? bodo amat -->
<br>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- ini tanda tangan !?.. -->
<?= $this->include('nav/foot_c'); ?>