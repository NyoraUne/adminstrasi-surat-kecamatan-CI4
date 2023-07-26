<?= $this->include('nav/head'); ?>
<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-body">
            <h4>
                Detail permintaan
            </h4>
            <hr>

            <div class="row">
                <div class="col-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <b>
                                        Nik <br>
                                        Nama <br>
                                        Permintaan <br>
                                        Deskripsi <br>
                                        Status <br>
                                    </b>

                                </div>
                                <div class="col">
                                    : <?= $permintaan['nik_penduduk']; ?> <br>
                                    : <?= $permintaan['nama_penduduk']; ?> <br>
                                    : <?= $permintaan['pelayanan']; ?> <br>
                                    : <?= $permintaan['deskripsi']; ?> <br>
                                    : <?= $permintaan['status']; ?> <br>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <form action="<?= base_url('Pengajuan/proses/' . $permintaan['id_permintaan']); ?>" method="post">
                        <!-- input data -->
                        Status :
                        <div class="input-group mb-2 input-group-sm">
                            <input name="status" type="text" class="form-control" placeholder="Data Selesai Di buat dan dapat di ambil di kantor..">
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <a href="<?= base_url('Pengajuan/index'); ?>" class="btn btn-primary" type="submit">Kembali</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<?= $this->include('nav/foot'); ?>