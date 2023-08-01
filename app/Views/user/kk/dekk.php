<?= $this->include('nav/head'); ?>
<main>
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header">Data KK : <?php echo $id; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        Alamat KK
                        <br>
                        Rt/Rw
                        <br>
                        Desa/Keluarahan
                        <br>
                        Kecamatan
                        <br>
                        Kabupaten/Kota
                        <br>
                        Kodepos
                        <br>
                        Provinsi
                    </div>
                    <div class="col-3">
                        : <?= $var['alamat_kk']; ?><br>
                        : <?= $var['rtrw_kk']; ?><br>
                        : <?= $var['desa_kk']; ?><br>
                        : <?= $var['kecamatan_kk']; ?><br>
                        : <?= $var['kabupaten_kk']; ?><br>
                        : <?= $var['kdpos_kk']; ?><br>
                        : <?= $var['provinsi_kk']; ?><br>
                    </div>
                    <div class="col-7">
                        <div class="card">
                            <div class="card-body">
                                <table id="table">
                                    <thead>
                                        <tr>
                                            <th>Nik</th>
                                            <th>Nama</th>
                                            <th>Status</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tgl Lahir</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $ii = 1; ?>
                                        <?php foreach ($kk as $k) : ?>
                                            <tr>
                                                <td><?= $k['nik_penduduk']; ?></td>
                                                <td><?= $k['nama_penduduk']; ?></td>
                                                <td><?= $k['status']; ?></td>
                                                <td><?= $k['tempat_lahir_penduduk']; ?></td>
                                                <td><?= $k['tgl_lahir_penduduk']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('Kk/happenkk/' . $k['id_de_kk']) ?>" class="btn btn-danger btn-ssm">Hapus Dari KK</a>
                                                </td>
                                            </tr>
                                            <?php $ii++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-header">Data Penduduk</div>
            <div class="card-body">
                <table id="table2">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nik</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tgl Lahir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($penduduk as $pen) : ?>

                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $pen['nik_penduduk']; ?></td>
                                <td><?= $pen['nama_penduduk']; ?></td>
                                <td><?= $pen['tempat_lahir_penduduk']; ?></td>
                                <td><?= $pen['tgl_lahir_penduduk']; ?></td>
                                <td>
                                    <!-- <a href="<?= base_url('Kk/tbhpkk/' . $id) ?>?idpenduduk=<?= $pen['id_penduduk']; ?>?idkk=<?= $var['id_kk']; ?>" class="btn btn-outline-primary btn-ssm">Tambah Ke KK</a> -->
                                    <a href="<?= base_url('Kk/tbhpkk/' . $id) ?>?idpenduduk=<?= $pen['id_penduduk']; ?>&idkk=<?= $var['id_kk']; ?>" class="btn btn-outline-primary btn-ssm">Tambah Ke KK</a>

                                </td>
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?= $this->include('nav/foot'); ?>