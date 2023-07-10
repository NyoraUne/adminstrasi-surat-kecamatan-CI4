<?= $this->include('nav/head'); ?>
<main>
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header">
                Tambah Penduduk
                <div class="float-end">
                    <a href="<?= base_url('/Penduduk/tbl_penduduk') ?>" class="btn btn-outline-info btn-sm">Table Penduduk</a>
                </div>
            </div>
            <div class="card-body">

                <!-- input penduduk -->
                <form action="Penduduk/simpen" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <!-- input -->
                            Nik
                            <div class="input-group mb-2">
                                <input name="nik" type="text" class="form-control" placeholder="Nik Penduduk">
                            </div>
                            <!-- input end -->

                            <!-- input -->
                            Jenis Kelamin
                            <div class="input-group mb-2">
                                <select name="jk" class="form-select">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <!-- input end -->

                            <!-- input -->
                            Status Perkawinan
                            <div class="input-group mb-2">
                                <select name="stkawin" class="form-select">
                                    <option selected>Pilih Status Pernikahan</option>
                                    <option value="Lajang">Lajang</option>
                                    <option value="Sudah Menikah">Sudah Menikah</option>
                                    <option value="Sudah Cerai">Sudah Cerai</option>
                                </select>
                            </div>
                            <!-- input end -->
                            <!-- input -->
                            Nomor Telephone
                            <div class="input-group mb-2">
                                <input name="notelp" type="text" class="form-control" placeholder="No Telephone ">
                            </div>
                            <!-- input end -->
                            <!-- input  -->
                            Pilih KK
                            <div class="input-group mb-3">
                                <select id="kk" name="id_kk" class="form-select">
                                    <option value=""></option>
                                    <?php foreach ($data_kk as $kk) : ?>
                                        <option value="<?= $kk['id_kk']; ?>"><?= $kk['no_kk']; ?> - <?= $kk['rtrw_kk']; ?> - <?= $kk['desa_kk']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <!-- input end -->

                        </div>
                        <div class="col">
                            <!-- input -->
                            Nama
                            <div class="input-group mb-2">
                                <input name="nama" type="text" class="form-control" placeholder="Nama">
                            </div>
                            <!-- input end -->
                            <!-- input -->
                            Tanggal Lahir
                            <div class="input-group mb-2">
                                <input name="tgll" type="date" class="form-control">
                            </div>
                            <!-- input end -->
                            <!-- input -->
                            Agama
                            <div class="input-group mb-2">
                                <select name="agama" class="form-select">
                                    <option selected>Pilih Agama</option>
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
                                <input name="ttl" type="text" class="form-control" placeholder="Tempat Lahir ">
                            </div>
                            <!-- input end -->
                            <!-- input -->
                            Pekerjaan
                            <div class="input-group mb-2">
                                <input name="pekerjaan" type="text" class="form-control" placeholder="Pekerjaan ">
                            </div>
                            <!-- input end -->
                            <!-- input -->
                            Alamat
                            <div class="input-group mb-2">
                                <input name="alamat" type="text" class="form-control" placeholder="Alamat ">
                            </div>
                            <!-- input end -->
                            <!-- input -->
                            Email
                            <div class="input-group mb-2">
                                <input name="email" type="text" class="form-control" placeholder="Email ">
                            </div>
                            <!-- input end -->
                            <!-- Button -->
                            <br>
                            <div class="float-end">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <button class="btn btn-primary" type="reset">Reset</button>
                            </div>
                            <!-- Button End-->
                        </div>
                    </div>
                </form>
                <!-- input penduduk end -->

            </div>
        </div>
    </div>
</main>
<?= $this->include('nav/foot'); ?>

<script>
    function validateImageFile(input) {
        const file = input.files[0];
        const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;

        if (!allowedExtensions.exec(file.name)) {
            alert('File yang diunggah harus berupa gambar (JPG, JPEG, PNG, GIF)');
            input.value = '';
            return false;
        }
    }
    $(document).ready(function() {
        $("#kk").select2({
            theme: 'bootstrap-5',
            placeholder: "Silahkan Pilih KK"
        });

    });
</script>