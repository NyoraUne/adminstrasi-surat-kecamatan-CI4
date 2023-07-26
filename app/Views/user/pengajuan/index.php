<?= $this->include('nav/head'); ?>
<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-body">
            <h4>Pengajuan Dari Masyarakat</h4>
            <hr>
            <div class="row">
                <table id="polos">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nik</th>
                            <th>Nama</th>
                            <th>Pengajuan</th>
                            <th>Status</th>
                            <th>Tanggal Ajuan</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($pengajuan as $pengajuan) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $pengajuan['nik_penduduk']; ?></td>
                                <td><?= $pengajuan['nama_penduduk']; ?></td>
                                <td><?= $pengajuan['pelayanan']; ?></td>
                                <td><?= $pengajuan['status']; ?></td>
                                <td><?= $pengajuan['created_at']; ?></td>
                                <td>
                                    <a class="btn btn-outline-info btn-ssm" href="<?= base_url('Pengajuan/detail/' . $pengajuan['id_permintaan']); ?>">Proses Data</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->include('nav/foot'); ?>

<script>
    window.addEventListener('DOMContentLoaded', event => {
        const datatablesSimple = document.getElementById('polos');
        if (datatablesSimple) {
            new simpleDatatables.DataTable(datatablesSimple, {


            });
        }
    });
</script>