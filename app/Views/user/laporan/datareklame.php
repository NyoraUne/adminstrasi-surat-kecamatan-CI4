<?= $this->include('nav/head_c'); ?>
<h4 class="text-center uline ">
    Laporan Surat Izin Reklame
</h4>
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
                    <th>Nama Pemilik</th>
                    <th>ukuran</th>
                    <th>masa_berlaku</th>
                    <th>Surat Di Buat Pada</th>
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
                            <?= $pe['ukuran']; ?>
                        </td>
                        <td>
                            <?= $pe['masa_berlaku']; ?>
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