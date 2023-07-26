<?= $this->include('nav/head_c'); ?>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- head sub -->
<h3 class="text-center bold uline ">
    Laporan Data Penduduk
</h3>
<div class="text-center"><?php echo $msg; ?></div>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- bio data -->
<div class="row">
    <div class="col">
        <table class="table table-striped">
            <thead class="bg-dark text-white">
                <tr>
                    <th>No</th>
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>No Telp</th>
                    <th>Tgl Lahir</th>
                </tr>
            </thead>
            <tbody>
                <?php $n = 1; ?>
                <?php foreach ($penduduk as $pe) : ?>
                    <tr>
                        <td><?= $n; ?></td>
                        <td><?= $pe['nik_penduduk']; ?></td>
                        <td><?= $pe['nama_penduduk']; ?></td>
                        <td><?= $pe['no_telp_penduduk']; ?></td>
                        <td><?= $pe['tgl_lahir_penduduk']; ?></td>
                    </tr>
                    <?php $n++; ?>
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