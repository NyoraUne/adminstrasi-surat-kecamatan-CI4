<?= $this->include('nav/head'); ?>
<?php $session = session(); ?>

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
                    <div class="card mt-2">
                        <div class="card-body">
                            <form action="<?= base_url('Pengajuan/proses/' . $permintaan['id_permintaan']); ?>" method="post">
                                Pilih Status :
                                <div class="input-group mb-3">
                                    <select id="select" name="status" class="form-select" required>
                                        <option value="">Status Pnegajuan</option>
                                        <option value="Di Proses">Di Proses</option>
                                        <option value="Terkendala">Terkendala</option>
                                        <option value="ditolak">ditolak</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <a href="<?= base_url('Pengajuan/index'); ?>" class="btn btn-primary" type="submit">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">

                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">File Kebutuhan</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Comment</button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Data Selesai</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="card mt-2">
                                <div class="card-body">
                                    <?php foreach ($file as $file) : ?>
                                        <div class="mb-2">
                                            <b>
                                                <?= $file['data']; ?>
                                            </b><br>
                                            <a href="<?= base_url('Pengajuan/seepdf/' . $file['file']); ?>">
                                                <?= $file['file']; ?><br>
                                            </a>
                                            "<?= $file['deskripsi']; ?>"
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col">
                                    <div class="card mt-2">
                                        <div class="card-body">
                                            <form action="<?= base_url('Detail_permintaan/add_comment/' . $permintaan['id_permintaan']); ?>" method="post">
                                                Komentar Tambahan
                                                <hr>
                                                <!-- input data -->
                                                Nama :
                                                <input name="id_user" type="text" class="form-control" value="<?= $session->get('id_user'); ?>" hidden>
                                                <div class="input-group mb-2 input-group-sm">
                                                    <input name="username" type="text" class="form-control" value="<?= $session->get('nama_user'); ?>" readonly>
                                                </div>
                                                Komentar :
                                                <div class="form-floating">
                                                    <textarea name="koment" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                </div>
                                                <div class="float-end mt-2">
                                                    <button class="btn btn-primary" type="submit">Post</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card mt-2">
                                        <div class="card-body">
                                            <?php foreach ($komen as $komen) : ?>
                                                <div class="mt-2">
                                                    <i class="fa-regular fa-comment-dots"></i>
                                                    <b>
                                                        <?= $komen['nama_user']; ?>
                                                    </b>, Say
                                                    <div class="float-end"><?= $komen['created_at']; ?></div>
                                                    <br>
                                                    - <?= $komen['koment']; ?>

                                                </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col"></div> -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                        </div>
                    </div>



                </div>

            </div>
        </div>
    </div>
</div>

<?= $this->include('nav/foot'); ?>