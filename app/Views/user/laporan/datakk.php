<?= $this->include('nav/head_c'); ?>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- head sub -->
<h3 class="text-center bold uline ">
    Laporan Data KK
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
                    <th>No KK</th>
                    <th>Alamat</th>
                    <th>Rt/Rw</th>
                    <th>Desa, Kecamatan, Kabupaten, Provinsi, Kode Pos </th>
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
                            <?= $pe['no_kk']; ?>
                        </td>
                        <td>
                            <?= $pe['alamat_kk']; ?>
                        </td>
                        <td>
                            <?= $pe['rtrw_kk']; ?>
                        </td>
                        <td>
                            <?= $pe['desa_kk']; ?>,
                            <?= $pe['kecamatan_kk']; ?>,
                            <?= $pe['kabupaten_kk']; ?>,
                            <?= $pe['provinsi_kk']; ?>,
                            <?= $pe['kdpos_kk']; ?>
                        </td>
                        <td>
                            <?= $pe['created_at_kk']; ?>
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