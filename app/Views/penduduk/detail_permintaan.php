<?= $this->include('penduduk/nav/head'); ?>
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
<div class="container-fluid mt-3">
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

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    Detail Permintaan
                    <hr>
                    <div class="mb-2">
                        <b>
                            Nama Yang Bersangkutan : <br>
                        </b>
                        <?= $permintaan['nama_penduduk']; ?>
                    </div>
                    <div class="mb-2">
                        <b>
                            Kebutuhan Pelayanan : <br>
                        </b>
                        <?= $permintaan['pelayanan']; ?>
                    </div>
                    <div class="mb-2">
                        <b>
                            Deskripsi Tambahan : <br>
                        </b>
                        <?= $permintaan['deskripsi']; ?>
                    </div>
                </div>
                <div class="col-3">
                    <form action="<?= base_url('Detail_permintaan/simpan/' . $permintaan['id_permintaan']); ?>" method="post" enctype="multipart/form-data">

                        Kebutuhan File
                        <hr>
                        Jenis Data :
                        <div class="input-group mb-2 input-group-sm">
                            <select id="select" name="data" class="form-select" required>
                                <option value=""></option>
                                <option value="Data KTP">Data KTP</option>
                                <option value="Data KK">Data KK</option>
                                <option value="Surat Dari RT">Surat Dari RT</option>
                                <option value="Surat Dari RW">Surat Dari RW</option>
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
                <div class="col">
                    FIle List
                    <hr>
                    <table class="table">
                        <thead>
                            <tr class="table-dark">
                                <th scope="col">No</th>
                                <th scope="col">Kebutuhan</th>
                                <th scope="col">File</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Data Di Tambah</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($file as $fike) : ?>
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
<?= $this->include('penduduk/nav/foot'); ?>