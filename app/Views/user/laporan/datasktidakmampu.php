<?= $this->include('nav/head_c'); ?>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- head sub -->
<h3 class="text-center bold uline ">
    Laporan Data Penduduk Tidak Mampu
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
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Keperluan</th>
                    <th>DI Buat Pada</th>
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
                            <?= $pe['nik_penduduk']; ?>
                        </td>
                        <td>
                            <?= $pe['nama_penduduk']; ?>
                        </td>
                        <td>
                            <?= $pe['alamat_penduduk']; ?>
                        </td>

                        <td>
                            <?= $pe['keperluan']; ?>
                        </td>

                        <td>
                            <?= $pe['created_at']; ?>
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