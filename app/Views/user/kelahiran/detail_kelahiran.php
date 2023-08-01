<?= $this->include('nav/head'); ?>
<main>
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header">
                Detail No Surat : <?php echo $detail['no_surat']; ?>
                <div class="float-end">
                    <a href="<?= base_url('Kelahiran/print/' . $detail['id_skkelahiran']) ?>" class="btn btn-outline-info btn-ssm" style="width: 200px;"><i class="fa-solid fa-print"></i> Cetak</a>
                </div>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                        <!-- Input Data Start -->
                        Tanggal Anak Di Lahirkan :
                        <?= $detail['tanggal']; ?>
                        <!-- Input Data End -->
                    </div>
                </div>
                <div class="text-center">
                    <h4>
                        Telah Lahir Seorang Anak Dengan Detail
                    </h4>
                </div>
                <hr>
                <!-- // -------------------------------------------------------------------------------------------------------------- -->
                <form action="<?= base_url('Kelahiran/simkel/' . $detail['id_skkelahiran']) ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <!-- Input Data Start -->
                            Nama Anak
                            <div class="input-group mb-3">
                                <input type="text" name="nama_anak" id="nama" class="form-control" placeholder="Nama Anak" value="<?= $detail['nama_anak']; ?>" required>
                            </div>
                            <!-- Input Data End -->
                            <div class="row">
                                <div class="col-3">
                                    <!-- Input Data Start -->
                                    Anak Ke
                                    <div class="input-group mb-3">
                                        <input type="number" name="anak_ke" class="form-control" placeholder="Anak Ke" value="<?= $detail['anak_ke']; ?>" required>
                                    </div>
                                    <!-- Input Data End -->
                                </div>
                                <div class="col">
                                    <!-- Input Data Start -->
                                    Jenis Kelamin Anak
                                    <div class="input-group mb-3">
                                        <select name="jenis_kelamin" class="form-select" required>
                                            <option value="<?= $detail['jenis_kelamin']; ?>"><?= $detail['jenis_kelamin']; ?></option>
                                            <option value="Laki-laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <!-- Input Data End -->

                                </div>
                            </div>

                        </div>
                        <div class="col">
                            <!-- Input Data Start -->
                            Nama Ibu
                            <div class="input-group mb-3">
                                <select id="nib" name="id_ibu" class="form-select" required>
                                    <option value=""></option>
                                    <?php foreach ($ibu as $ib) : ?>
                                        <option value="<?= $ib['id_penduduk']; ?>"><?= $ib['nik_penduduk']; ?> - <?= $ib['nama_penduduk']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <!-- Input Data End -->
                            <!-- Input Data Start -->
                            Tempat Anak Di Lahirkan
                            <div class="input-group mb-3">
                                <input type="text" name="tempat" id="nama" class="form-control" placeholder="Tempat Anak Di Lahirkan" value="<?= $detail['tempat']; ?>" required>
                            </div>
                            <!-- Input Data End -->

                        </div>
                        <div class="col">


                            <!-- Input Data Start -->
                            Nama Ayah
                            <div class="input-group mb-3">
                                <select id="nay" name="id_ayah" class="form-select" required>
                                    <option value=""></option>
                                    <?php foreach ($ayah as $ay) : ?>
                                        <option value="<?= $ay['id_penduduk']; ?>"><?= $ay['nik_penduduk']; ?> - <?= $ay['nama_penduduk']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <!-- Input Data End -->
                            <!-- Input Data Start -->
                            Alamat
                            <div class="input-group mb-3">
                                <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?= $detail['alamat']; ?>" required>
                            </div>
                            <!-- Input Data End -->
                            <div class="float-end">
                                <button type="submit" class="btn btn-primary btn-block" style="width: 150px;">Simpan Data</button>
                                <a href="<?= base_url('Kelahiran') ?>" class="btn btn-primary btn-block" style="width: 150px;">Kembali</a>
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
<?= $this->include('nav/foot'); ?>
<script>
    $(document).ready(function() {
        $("#nay").select2({
            theme: 'bootstrap-5',
            placeholder: "<?= $ayahh; ?>"
        });

        $("#nib").select2({
            theme: 'bootstrap-5',
            placeholder: "<?= $ibuh; ?>"
        });


    });
</script>