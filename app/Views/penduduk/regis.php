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


    <div class="card">
        <div class="card-body">
            <h4>
                Silahakan Isi Data Profil Di Bawah Sebelum Melanjutkan Nya Ke Menu Selanjuatnya
            </h4>
            <hr>
            <div class="row">
                <div class="col">

                    <form action="<?= base_url('User/simpan/' . $session->get('id_user')); ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col">
                                <!-- input -->
                                Nik
                                <div class="input-group mb-2">
                                    <input name="nik" type="text" class="form-control" placeholder="Nik Penduduk" value="">
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
                </div>

            </div>
        </div>
    </div>


</div>

<?= $this->include('penduduk/nav/foot'); ?>