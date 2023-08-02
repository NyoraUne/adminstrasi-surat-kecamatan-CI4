<?= $this->include('nav/head_c'); ?>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- head sub -->
<h4 class="text-center bold uline ">
    Surat Keterangan Ahliwaris
</h4>
<div class="text-center">Nomor : <?= $ahliwaris['no_surat']; ?></div>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- kalimat pertama -->
<!-- <br> -->
<!-- <p style="text-indent: 50px;">
    </p> -->
Menerangkan dengan ini bahwa :
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- bio data -->
<div class="row">
    <div class="col-2"></div>
    <div class="col-4">
        Nama Lengkap <br>
        Jenis Kelamin <br>
        Tempat Tanggal Lahir <br>
        Agama<br>
        Pekerjaan<br>
        Alamat<br>
    </div>
    <div class="col">
        : <?= $ahliwaris['nama_penduduk']; ?><br>
        : <?= $ahliwaris['jenis_kelamin_penduduk']; ?><br>
        : <?= $ahliwaris['tempat_lahir_penduduk']; ?>, <?= $ahliwaris['tgl_lahir_penduduk']; ?><br>
        : <?= $ahliwaris['agama_penduduk']; ?><br>
        : <?= $ahliwaris['pekerjaan_penduduk']; ?><br>
        : <?= $ahliwaris['alamat_penduduk']; ?><br>
    </div>
</div>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<p style="text-indent: 50px;text-align: justify;">
    Adalah benar penduduk desa pada Kecamatan Paringin dan sudah meninggal dunia pada (<?= $ahliwaris['hari']; ?>, <?= $ahliwaris['tanggal']; ?>) di (<?= $ahliwaris['tempat']; ?>) di sebabkan (<?= $ahliwaris['sebab']; ?>) telah di kebumikan di tempat. Selanjutnya, di terangkan bahwa daftar nama berikut merupakan ahli waris yang sah dari almarhum (<?= $ahliwaris['nama_penduduk']; ?>) dan kami bertanggungjawab atas pernyataan ini.
</p>

<table style="width:100%">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tempat Tanggal Lahir</th>
        <th>Nik</th>
        <th>Hubungan</th>
    </tr>
    <?php $no = 1; ?>
    <?php foreach ($penduduk as $pe) : ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $pe['nama_penduduk']; ?></td>
            <td><?= $pe['tempat_lahir_penduduk']; ?>, <?= $pe['tgl_lahir_penduduk']; ?></td>
            <td><?= $pe['nik_penduduk']; ?></td>
            <td><?= $pe['hubungan']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<!-- // -------------------------------------------------------------------------------------------------------------- -->
<p style="text-indent: 50px;">
    Demikian surat pengantar ini di buat dengan sebenarnya untuk dapat di pergunakan sebagaimana mestinya. atas kerjasamanya di ucapkan terimakasih.
</p>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- ini tanda tangan !?.. -->
<?= $this->include('nav/foot_c'); ?>