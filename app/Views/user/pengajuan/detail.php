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
                                        <option value="">Status Pengajuan</option>
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
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Dokumen Persyaratan</button>
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
                            <div class="card mt-2">
                                <div class="card-body">
                                    <form action="<?= base_url('Pengajuan/simpan/' . $permintaan['id_permintaan']); ?>" method="post" enctype="multipart/form-data">


                                        Jenis Data :
                                        <div class="input-group mb-2 input-group-sm">
                                            <select id="select" name="data" class="form-select" required>
                                                <option value=""></option>
                                                <option value="Data Prmintaan">Data Permintaan</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                        <!-- input data -->
                                        File Kebutuhan (PDF) :
                                        <div class="input-group mb-2 input-group-sm">
                                            <input name="file" type="file" class="form-control" required>
                                        </div>

                                        Deskripsi :
                                        <div class="form-floating">
                                            <textarea name="deskripsi" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" required></textarea>
                                            <label for="floatingTextarea">Isi deskripsi</label>
                                        </div>
                                        <div class="float-end mt-2">
                                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card mt-2">
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr class="table-dark">
                                                <th scope="col">No</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">File</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col">Data Di Tambah</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($files as $fike) : ?>
                                                <tr>
                                                    <th scope="row"><?= $no++; ?></th>
                                                    <td><?= $fike['data']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('Detail_permintaan/seepdf/' . $fike['file']); ?>" target="_blank">
                                                            <?= $fike['file']; ?>
                                                    </td>
                                                    </a>
                                                    <td><?= $fike['deskripsi']; ?></td>
                                                    <td><?= $fike['created_at']; ?></td>
                                                    <td><a href="<?= base_url('Detail_permintaan/hapus_file/' . $fike['id_file']); ?>" class="btn btn-outline-danger btn-sm">Hapus Data</a></td>
                                                </tr>

                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                    </div>



                </div>

            </div>
        </div>
    </div>
</div>

<?= $this->include('nav/foot'); ?>