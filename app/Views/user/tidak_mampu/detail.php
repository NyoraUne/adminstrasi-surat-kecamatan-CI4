<?= $this->include('nav/head'); ?>
<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header">Detail Data Penduduk Tidak Mampu</div>
        <div class="card-body">
            <form action="<?= base_url('Tidak_mampu/simpan_update/' . $tidak_mampu['id_sktidakmampu']); ?>" method="post">
                <div class="row">
                    <div class="col">
                        <!-- input data -->
                        Nomor Surat :
                        <input name="no_surat" type="text" class="form-control" value="<?= $tidak_mampu['no_surat']; ?>" hidden>
                        <div class="input-group mb-2 ">
                            <input name="no_surat" type="text" class="form-control" value="<?= $tidak_mampu['no_surat']; ?>" disabled>
                        </div>

                        <!-- input data -->
                        Keperluan :
                        <div class="input-group mb-2 ">
                            <input name="keperluan" type="text" value="<?= $tidak_mampu['keperluan']; ?>" class="form-control">
                        </div>

                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <!-- input data -->
                                Nik Penduduk :
                                <input name="id_penduduk" type="text" class="form-control" value="<?= $tidak_mampu['id_penduduk']; ?>" hidden>
                                <div class="input-group mb-2 ">
                                    <input name="nik_penduduk" type="text" class="form-control" value="<?= $tidak_mampu['nik_penduduk']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col">
                                <!-- input data -->
                                Nama Penduduk :
                                <div class="input-group mb-2 ">
                                    <input name="nama_penduduk" type="text" class="form-control" value="<?= $tidak_mampu['nama_penduduk']; ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <!-- input data -->
                                Data Di Buat Pada :
                                <div class="input-group mb-2 ">
                                    <input name="" type="text" class="form-control" value="<?= $tidak_mampu['created_at']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col">
                                <br>
                                <div class="float-end">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="<?= base_url('Tidak_mampu/index'); ?>" class="btn btn-warning">Kembali</a>
                                    <a href="<?= base_url('Tidak_mampu/print_data/' . $tidak_mampu['id_sktidakmampu']); ?>" class="btn btn-info">Cetak Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


        </div>
    </div>
</div>
<?= $this->include('nav/foot'); ?>