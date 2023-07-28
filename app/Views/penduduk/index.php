<?= $this->include('penduduk/nav/head'); ?>
<?php $session = session(); ?>
<style>
    .text-top {
        font-family: Arial, Helvetica, sans-serif;
        color: #000000;
        font-weight: 700;
        text-decoration: none;
        font-style: normal;
        font-variant: normal;
        text-transform: uppercase;
        color: #FFFFFF;
        text-shadow: #FFF 0px 0px 5px, 2px 2px 2px rgba(206, 206, 206, 0);
    }
</style>
<div class="container-fluid mt-2">
    <div class="text-center">

        <div class="card bg-dark text-white">
            <img src="<?= base_url('src/'); ?>img/dash.jpeg" class="card-img" style="height: 200px; object-fit: cover; opacity: 20%;">
            <div class="card-img-overlay">
                <div class="text-top">
                    <h3>Selamat Datag Pada Menu Pelayanan Penduduk Kantor
                        Kecamat Paringin Kabupaten Balangan</h3>
                    <b> Jl.Jend A.yani Telp/Fax. (0526) 2894137 Kode Pos 71611 Email : e-camat.paringin@gmail.com</b><br>
                    <img src="<?= base_url('src/') ?>img/logo.blob" style="width: 100px;">
                </div>
            </div>
        </div>

    </div>
    <br>
    <hr>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Profil</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Layanan</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Feedback</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <!-- //ANCHOR - Tab 1 -->
            <div class="card">
                <div class="card-body">
                    <h4>
                        Menu Profil
                    </h4>
                    <hr>
                    <div class="row">
                        <div class="col">

                            <form action="<?= base_url('User/update/' . $session->get('id_user')); ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col">
                                        <!-- input -->
                                        Nik
                                        <div class="input-group mb-2">
                                            <input name="nik" type="text" class="form-control" placeholder="Nik Penduduk" value="<?= $data_user['nik_penduduk']; ?>" required>
                                        </div>
                                        <!-- input end -->

                                        <!-- input -->
                                        Jenis Kelamin
                                        <div class="input-group mb-2">
                                            <select name="jk" class="form-select">
                                                <option selected>Pilih Jenis Kelamin</option>
                                                <option value="Laki-Laki" <?php if ($data_user['jenis_kelamin_penduduk'] == 'Laki-Laki') echo 'selected'; ?>>Laki-Laki</option>
                                                <option value="Perempuan" <?php if ($data_user['jenis_kelamin_penduduk'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                                            </select>
                                        </div>
                                        <!-- input end -->

                                        <!-- input -->
                                        Status Perkawinan
                                        <div class="input-group mb-2">
                                            <select name="stkawin" class="form-select">
                                                <option selected>Pilih Status Pernikahan</option>
                                                <option value="Lajang" <?php if ($data_user['status_perkawinan_penduduk'] == 'Lajang') echo 'selected'; ?>>Lajang</option>
                                                <option value="Sudah Menikah" <?php if ($data_user['status_perkawinan_penduduk'] == 'Sudah Menikah') echo 'selected'; ?>>Sudah Menikah</option>
                                                <option value="Sudah Cerai" <?php if ($data_user['status_perkawinan_penduduk'] == 'Sudah Cerai') echo 'selected'; ?>>Sudah Cerai</option>
                                            </select>
                                        </div>
                                        <!-- input end -->
                                        <!-- input -->
                                        Nomor Telephone
                                        <div class="input-group mb-2">
                                            <input name="notelp" type="text" class="form-control" placeholder="No Telephone " value="<?= $data_user['no_telp_penduduk']; ?>" required>
                                        </div>
                                        <!-- input end -->


                                    </div>
                                    <div class="col">
                                        <!-- input -->
                                        Nama
                                        <div class="input-group mb-2">
                                            <input name="nama" type="text" class="form-control" placeholder="Nama" value="<?= $data_user['nama_penduduk']; ?>" required>
                                        </div>
                                        <!-- input end -->
                                        <!-- input -->
                                        Tanggal Lahir
                                        <div class="input-group mb-2">
                                            <input name="tgll" type="date" class="form-control" value="<?= $data_user['tgl_lahir_penduduk']; ?>" required>
                                        </div>
                                        <!-- input end -->
                                        <!-- input -->
                                        Agama
                                        <div class="input-group mb-2">
                                            <select name="agama" class="form-select">
                                                <option selected>Pilih Agama</option>
                                                <option value="Islam" <?php if ($data_user['agama_penduduk'] == 'Islam') echo 'selected'; ?>>Islam</option>
                                                <option value="Protestan" <?php if ($data_user['agama_penduduk'] == 'Protestan') echo 'selected'; ?>>Protestan</option>
                                                <option value="Katolik" <?php if ($data_user['agama_penduduk'] == 'Katolik') echo 'selected'; ?>>Katolik</option>
                                                <option value="Hindu" <?php if ($data_user['agama_penduduk'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
                                                <option value="Budha" <?php if ($data_user['agama_penduduk'] == 'Budha') echo 'selected'; ?>>Budha</option>
                                                <option value="Konghucu" <?php if ($data_user['agama_penduduk'] == 'Konghucu') echo 'selected'; ?>>Konghucu</option>
                                            </select>
                                        </div>
                                        <!-- input end -->

                                        <!-- input -->
                                        Foto
                                        <div class="input-group mb-2">
                                            <input name="foto" type="file" class="form-control" placeholder="Foto" onchange="validateImageFile(this)">
                                        </div>
                                        <!-- input end -->
                                    </div>
                                    <div class="col">
                                        <!-- input -->
                                        Tempat Lahir
                                        <div class="input-group mb-2">
                                            <input name="ttl" type="text" class="form-control" placeholder="Tempat Lahir " value="<?= $data_user['tempat_lahir_penduduk']; ?>" required>
                                        </div>
                                        <!-- input end -->
                                        <!-- input -->
                                        Pekerjaan
                                        <div class="input-group mb-2">
                                            <input name="pekerjaan" type="text" class="form-control" placeholder="Pekerjaan " value="<?= $data_user['pekerjaan_penduduk']; ?>" required>
                                        </div>
                                        <!-- input end -->
                                        <!-- input -->
                                        Alamat
                                        <div class="input-group mb-2">
                                            <input name="alamat" type="text" class="form-control" placeholder="Alamat " value="<?= $data_user['alamat_penduduk']; ?>" required>
                                        </div>
                                        <!-- input end -->
                                        <!-- input -->
                                        Email
                                        <div class="input-group mb-2">
                                            <input name="email" type="text" class="form-control" placeholder="Email " value="<?= $data_user['email_penduduk']; ?>" required>
                                        </div>
                                        <!-- input end -->
                                        <!-- Button -->
                                        <br>
                                        <div class="float-end">
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                        </div>
                                        <!-- Button End-->
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <!-- //ANCHOR - Tab 2 -->
            <div class="card" style="height: 500px;">
                <div class="card-body">
                    <h4>
                        Menu Pelayanan
                    </h4>
                    <hr>

                    <div class="row">
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <form action="<?= base_url('User/proses/' . $data_user['id_penduduk']); ?>" method="post" enctype="multipart/form-data">
                                        Silahkan Pilih Pelayanan :
                                        <div class="input-group mb-3">
                                            <select id="select" name="pelayanan" class="form-select" required>
                                                <option value="" selected>Silahkan Pilih Kebutuhan </option>
                                                <option value="Pembuatan Ktp">Pembuatan Ktp</option>
                                                <option value="Pembuatan KK">Pembuatan KK</option>
                                                <option value="Pembuatan Surat Kelahiran">Pembuatan Surat Kelahiran</option>
                                                <option value="Pembuatan Surat Kematian">Pembuatan Surat Kematian</option>
                                                <option value="Pembuatan Surat Pindah">Pembuatan Surat Pindah</option>
                                                <option value="Pembuatan Surat Datang">Pembuatan Surat Datang</option>
                                                <option value="Pembuatan Surat Ahliwari">Pembuatan Surat Ahliwari</option>
                                                <option value="Pembuatan Surat Izin Usaha">Pembuatan Surat Izin Usaha</option>
                                                <option value="Pembuatan Surat Tidak Mampu">Pembuatan Surat Tidak Mampu</option>
                                            </select>
                                        </div>
                                        Deskripsi Tambahan :
                                        <div class="form-floating mb-2">
                                            <textarea name="deskripsi" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" required></textarea>
                                            <label for="floatingTextarea">Comments</label>
                                        </div>

                                        <!-- <div class="row">
                                          <div class="col">
                                              Masukan KTP (PDF) :
                                              <div class="input-group mb-2 ">
                                                  <input name="" type="file" class="form-control">
                                              </div>
                                          </div>
                                          <div class="col">
                                              Masukan KK (KK) :
                                              <div class="input-group mb-2 ">
                                                  <input name="" type="file" class="form-control">
                                              </div>
                                          </div>
                                      </div> -->

                                        <div class="float-end">
                                            <button class="btn btn-primary" type="submit"> Simpan</button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 20px;">No</th>
                                                <th scope="col">Pelayanan</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Tanggal Permintaan</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($permintaan as $permintaan) : ?>
                                                <tr>
                                                    <th scope="row"><?= $no++; ?></th>
                                                    <td><?= $permintaan['pelayanan']; ?></td>
                                                    <td><?= $permintaan['deskripsi']; ?></td>
                                                    <td><?= $permintaan['status']; ?></td>
                                                    <td><?= $permintaan['created_at']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('Detail_permintaan/index/' . $permintaan['id_permintaan']); ?>" class="btn btn-outline-info btn-sm">Detail</a>
                                                        <a href="<?= base_url('User/hapus_perminataan/' . $permintaan['id_permintaan']); ?>" class="btn btn-outline-danger btn-sm">Hapus</a>
                                                    </td>
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


        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="card">
                <div class="card-body">
                    <h4>Feedback</h4>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <form action="<?= base_url('User/feedback/' . $data_user['id_penduduk']); ?>" method="post">
                                <!-- input data -->
                                Kategori Feedback :
                                <div class="input-group mb-2 ">
                                    <input name="kategori" type="text" class="form-control">
                                </div>
                                Isi Feedback
                                <div class="form-floating">
                                    <textarea name="isi" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Isi Feedback..</label>
                                </div>
                                <div class="float-end mt-3">
                                    <button type="submit" class="btn btn-primary">Tambah Feedback</button>
                                </div>
                            </form>
                        </div>
                        <div class="col">

                            <div class="card">
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 20px;">No</th>
                                                <th scope="col">Feedback</th>
                                                <th scope="col">Isi</th>
                                                <th scope="col">Tanggal Feedback</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($feedback as $feedback) : ?>
                                                <tr>
                                                    <th scope="row"><?= $no++; ?></th>
                                                    <td><?= $feedback['kategori']; ?></td>
                                                    <td><?= $feedback['isi']; ?></td>
                                                    <td><?= $feedback['created_at']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('User/hapus_feed/' . $feedback['id_feedback']); ?>" class="btn btn-outline-danger  btn-sm">Hapus</a>
                                                    </td>
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

<?= $this->include('penduduk/nav/foot'); ?>