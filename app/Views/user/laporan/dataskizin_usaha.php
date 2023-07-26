<?= $this->include('nav/head_c'); ?>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- head sub -->
<h3 class="text-center bold uline ">
    Laporan Data Izin Usaha
</h3>
<div class="text-center">
    <?php echo $msg; ?>
</div>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- bio data -->
<div class="row">
    <div class="col">
        <table class="table table-striped">
            <thead class="bg-dark text-white">
                <tr>
                    <th>No</th>
                    <th>No Surat</th>
                    <th>Nik</th>
                    <th>Nama Pemilik</th>
                    <th>Nama Usaha</th>
                    <th>Jenis Usaha </th>
                    <th>Tanggal Ajuan</th>
                    <th>Status Izin</th>
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
                            <?= $pe['nik_penduduk']; ?>
                        </td>
                        <td>
                            <?= $pe['nama_penduduk']; ?>
                        </td>
                        <td>
                            <?= $pe['nama_usaha']; ?>,
                        </td>
                        <td>
                            <?= $pe['jenis_usaha']; ?>
                        </td>
                        <td>
                            <?= $pe['tanggal_ajuan']; ?>
                        </td>
                        <td>
                            <?= $pe['status_izin']; ?>
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