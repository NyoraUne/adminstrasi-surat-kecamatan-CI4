<div class="card">
    <!-- <div class="card-header"> Pembuatan Surat Keterangan Pindah</div> -->
    <div class="card-body">

        <table id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>No Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- <?php $p = 1; ?> -->
                <?php foreach ($penduduk as $pe) : ?>
                    <tr>
                        <td><?= $p; ?></td>
                        <td><?= $pe['nik_penduduk']; ?></td>
                        <td><?= $pe['nama_penduduk']; ?></td>
                        <td><?= $pe['jenis_kelamin_penduduk']; ?></td>
                        <td><?= $pe['no_telp_penduduk']; ?></td>
                        <td>
                            <a href="<?= base_url('Pindah/busur/' . $pe['slug']) ?>" class="btn btn-ssm btn-outline-info">Buat Surat</a>
                        </td>
                    </tr>
                    <?php $p++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>