<?= $this->include('nav/head'); ?>
<div class="container-fluid mt-2">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    Detail Feedback
                    <hr>
                    <div class="mb-2">
                        <b>
                            Nama Pengirim :
                        </b><br>
                        <?= $feedback['nama_penduduk']; ?>
                    </div>
                    <div class="mb-2">
                        <b>
                            Kategori :
                        </b><br>
                        <?= $feedback['kategori']; ?>
                    </div>
                    <div class="mb-2">
                        <b>
                            Isi Feedback :
                        </b><br>
                        <?= $feedback['isi']; ?>
                    </div>
                    <div class="mb-2">
                        <b>
                            Di Sampaikan Pada :
                        </b><br>
                        <?= $feedback['created_at']; ?>
                    </div>
                    <div class="mb-2">
                        <b>
                            Status Feedback :
                        </b><br>
                        <?= $feedback['status']; ?>
                    </div>
                    <form action="<?= base_url('Feedback/update/' . $feedback['id_feedback']); ?>" method="post">
                        Status :
                        <div class="input-group mb-3">
                            <select id="select" name="status" class="form-select" required>
                                <option value="Di Terima">Di Terima</option>
                                <option value="Tidak Di Terima">Tidak Di Terima</option>
                                <option value="Di Proses">Di Proses</option>
                                <option value="Selesai">Selesai</option>
                            </select>
                            <button class="btn btn-primary" type="submit">Update Data</button>
                        </div>
                    </form>
                </div>
                <div class="col">
                    Log Feedback
                    <hr>
                    <form action="<?= base_url('Feedback/update_s/' . $feedback['id_feedback']); ?>" method="post">
                        <!-- input data -->
                        Status Log :
                        <div class="input-group mb-2 input-group-sm">
                            <input name="isi" type="text" class="form-control">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                    <hr>
                    <?php foreach ($status as $status) : ?>
                        <div class="mb-2">
                            <b>- <?= $status['created_at']; ?></b><br>
                            <?= $status['isi']; ?>.
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->include('nav/foot'); ?>