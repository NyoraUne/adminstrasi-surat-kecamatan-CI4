<?= $this->include('nav/head'); ?>
<div class="container-fluid mt-2">
    <div class="card">
        <div class="card-body">
            <table id="tb1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Penduduk</th>
                        <th>Kategori</th>
                        <th>Isi</th>
                        <th>Disampaikan Pada</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($feedback as $feedback) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $feedback['nama_penduduk']; ?></td>
                            <td><?= $feedback['kategori']; ?></td>
                            <td><?= $feedback['isi']; ?></td>
                            <td><?= $feedback['created_at']; ?></td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?= $this->include('nav/foot'); ?>
<script>
    window.addEventListener('DOMContentLoaded', event => {
        const datatablesSimple = document.getElementById('tb1');
        if (datatablesSimple) {
            new simpleDatatables.DataTable(datatablesSimple);
        }
    });
</script>