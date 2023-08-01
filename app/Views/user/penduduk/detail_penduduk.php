<?= $this->include('nav/head'); ?>
<?php foreach ($penduduk as $pe) : ?>
    <style>
        .image-container {
            width: 150px;
            /* Sesuaikan dengan lebar yang diinginkan */
            height: 204px;
            /* Sesuaikan dengan tinggi yang diinginkan */
            overflow: hidden;
            border: 2px solid gray;
        }

        .image-container img {
            object-fit: cover;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .col1 {
            position: relative;
            overflow: hidden;
        }

        .mid {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            /* padding-top: 50px; */
        }

        .col1::after {
            content: "";
            position: absolute;
            top: 0;
            right: 15px;
            /* Ubah nilai right sesuai dengan kebutuhan Anda */
            width: 4px;
            /* Ubah nilai width sesuai dengan kebutuhan Anda */
            height: 100%;
            background: linear-gradient(to bottom, transparent, grey, transparent);
            background-clip: padding-box;
        }
    </style>
    <main>
        <div class="container-fluid mt-3">

            <div class="row">
                <div class="col">
                    <form action="<?= base_url('/Penduduk/simup') ?>" method="post" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                ID Penduduk : <?= $pe['id_penduduk']; ?>
                                <div class="float-end">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input editdata" name="edit" type="checkbox" id="editdata">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            Edit Data
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-4 mid">
                                                <div class="image-container img-thumbnail rounded">
                                                    <img class="" src="<?= base_url('src/') ?>profil/<?= $pe['foto_penduduk']; ?>" data-bs-toggle="modal" data-bs-target="#myModal">
                                                </div>
                                                <!-- modal foto -->
                                                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img style="width: 465px;" src="<?= base_url('src/') ?>profil/<?= $pe['foto_penduduk']; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- modal foto end -->
                                            </div>
                                            <div class="col">
                                                <!-- input -->
                                                Nik
                                                <input name="id" type="text" id="id" class="form-control" placeholder="ID Penduduk" value="<?= $pe['id_penduduk']; ?>" hidden>
                                                <input name="nik" type="text" id="nik" class="form-control" placeholder="Nik Penduduk" value="<?= $pe['nik_penduduk']; ?>" hidden>
                                                <div class="input-group mb-2">
                                                    <input name="niks" type="text" id="nik" class="form-control" placeholder="Nik Penduduk" value="<?= $pe['nik_penduduk']; ?>" disabled required>
                                                </div>
                                                <!-- input end -->
                                                <!-- input -->
                                                Tempat Lahir
                                                <div class="input-group mb-2">
                                                    <input name="ttl" id="ttl" type="text" class="form-control edit" placeholder="Tempat Lahir " value="<?= $pe['tempat_lahir_penduduk']; ?>" disabled required>
                                                </div>
                                                <!-- input end -->
                                                <!-- input -->
                                                Jenis Kelamin
                                                <div class="input-group mb-2">
                                                    <select name="jk" id="jk" class="form-select edit" disabled required>
                                                        <option value="<?= $pe['jenis_kelamin_penduduk']; ?>" selected><?= $pe['jenis_kelamin_penduduk']; ?></option>
                                                        <option value="Laki-Laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                                <!-- input end -->

                                            </div>
                                        </div>
                                        <!-- input -->
                                        Pekerjaan
                                        <div class="input-group mb-2">
                                            <input name="pekerjaan" id="pekerjaan" type="text" class="form-control edit" placeholder="Pekerjaan " value="<?= $pe['pekerjaan_penduduk']; ?>" disabled required>
                                        </div>
                                        <!-- input end -->
                                        <!-- input -->
                                        Status Perkawinan
                                        <div class="input-group mb-2">
                                            <select name="stkawin" id="stkawin" class="form-select edit" disabled required>
                                                <option value="<?= $pe['status_perkawinan_penduduk']; ?>" selected><?= $pe['status_perkawinan_penduduk']; ?></option>
                                                <option value="Lajang">Lajang</option>
                                                <option value="Sudah Menikah">Sudah Menikah</option>
                                                <option value="Sudah Cerai">Sudah Cerai</option>
                                            </select>
                                        </div>
                                        <!-- input end -->
                                        <!-- input -->
                                        Nomor Telephone
                                        <div class="input-group mb-2">
                                            <input name="notelp" id="notelp" type="text" class="form-control edit" placeholder="No Telephone " value="<?= $pe['no_telp_penduduk']; ?>" disabled required>
                                        </div>
                                        <!-- input end -->

                                    </div>
                                    <div class="col">
                                        <!-- input -->
                                        Nama
                                        <div class="input-group mb-2">
                                            <input name="nama" id="nama" type="text" class="form-control edit" placeholder="Nama" value="<?= $pe['nama_penduduk']; ?>" disabled required>
                                        </div>
                                        <!-- input end -->
                                        <!-- input -->
                                        Tanggal Lahir
                                        <div class="input-group mb-2">
                                            <input name="tgll" id="tgll" type="date" class="form-control edit" value="<?= $pe['tgl_lahir_penduduk']; ?>" disabled required>
                                        </div>
                                        <!-- input end -->
                                        <!-- input -->
                                        Agama
                                        <div class="input-group mb-2">
                                            <select name="agama" id="agama" class="form-select edit" disabled required>
                                                <option value="<?= $pe['agama_penduduk']; ?>" selected><?= $pe['agama_penduduk']; ?></option>
                                                <option value="Islam">Islam</option>
                                                <option value="Protestan">Protestan</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            </select>
                                        </div>
                                        <!-- input end -->
                                        <!-- input -->
                                        Alamat
                                        <div class="input-group mb-2">
                                            <input name="alamat" id="alamat" type="text" class="form-control edit" placeholder="Alamat" value="<?= $pe['alamat_penduduk']; ?>" disabled required>
                                        </div>
                                        <!-- input end -->
                                        <!-- input -->
                                        Email
                                        <div class="input-group mb-2">
                                            <input name="email" id="email" type="text" class="form-control edit" placeholder="Email " value="<?= $pe['email_penduduk']; ?>" disabled required>
                                        </div>
                                        <!-- input end -->
                                        <!-- input -->
                                        Foto
                                        <div class="input-group mb-2">
                                            <input name="foto" id="foto" type="file" class="form-control edit" value="<?= $pe['foto_penduduk']; ?>" placeholder="Foto" disabled>
                                        </div>
                                        <!-- input end -->
                                        <div class="float-end">
                                            <button class="btn btn-primary btn-sm edit" type="submit" disabled>Simpan</button>
                                            <a href="<?= base_url('/Penduduk/delpen/' . $pe['id_penduduk']) ?>" class="btn btn-primary btn-sm">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                    </form>
                </div>

            </div>
        </div>
        </div>
        </div>
    </main>
<?php endforeach; ?>
<?= $this->include('nav/foot'); ?>
<script>
    document.getElementById("editdata").addEventListener("change", function() {
        var editInputs = document.getElementsByClassName("edit");
        for (var i = 0; i < editInputs.length; i++) {
            if (this.checked) {
                editInputs[i].disabled = false;
            } else {
                editInputs[i].disabled = true;
            }
        }
    });
</script>