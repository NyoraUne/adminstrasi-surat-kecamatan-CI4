<?= $this->include('nav/head'); ?>
<main>

    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-body">
                <!--  -->
                <table class="" id="penduduk_table">
                    <thead>
                        <tr class="bg-dark">
                            <th>Nik</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Telephone</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($penduduk as $pen) : ?>
                            <script>
                                // Mengambil semua elemen input dengan class "edit"
                                var inputs = document.querySelectorAll('.edit');

                                // Mengambil elemen checkbox dengan class "editdata"
                                var checkbox = document.querySelector('.editdata');

                                // Menambahkan event listener pada perubahan status checkbox
                                checkbox.addEventListener('change', function() {
                                    // Jika checkbox dinyalakan
                                    if (this.checked) {
                                        // Mengaktifkan semua input
                                        inputs.forEach(function(input) {
                                            input.disabled = false;
                                        });
                                    } else {
                                        // Menonaktifkan semua input
                                        inputs.forEach(function(input) {
                                            input.disabled = true;
                                        });
                                    }
                                });
                            </script>
                            <tr>
                                <td><?= $pen['nik_penduduk']; ?></td>
                                <td><?= $pen['nama_penduduk']; ?></td>
                                <td><?= $pen['alamat_penduduk']; ?></td>
                                <td><?= $pen['no_telp_penduduk']; ?></td>
                                <td>
                                    <div class="text-center">
                                        <a href="<?= base_url('Penduduk/detailpen/' . $pen['slug']) ?>" class="btn btn-outline-dark btn-ssm">Full Detail</a>
                                    </div>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!--  -->
                <div class="float-end">
                    <a href="javascript:history.back()" class="btn btn-sm btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?= $this->include('nav/foot'); ?>