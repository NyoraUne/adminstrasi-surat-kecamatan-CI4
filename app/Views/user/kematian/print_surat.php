<?= $this->include('nav/head_c'); ?>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- head sub -->
<h3 class="text-center bold uline ">
    Surat Keterangan Kematian
</h3>
<div class="text-center">Nomor : <?= $detail['no_surat']; ?></div>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- kalimat pertama -->
<!-- <br> -->
<p style="text-indent: 50px;">
    Yang bertanda tangan dibawah ini, Kepala Desa Kecamatan Paringin menerangkan dengan sebenarnya bahwa :
</p>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- bio data -->
<div class="row">
    <div class="col-2"></div>
    <div class="col-4">
        Nama <br>
        Tempat/Tanggal Lahir <br>
        Jenis Kelamin <br>
        Status Perkawinan <br>
        Agama<br>
        Pekerjaan<br>
        Alamat<br>
    </div>
    <div class="col">
        : <?= $detail['nama_penduduk']; ?><br>
        : <?= $detail['tempat_lahir_penduduk']; ?>, <?= $detail['tgl_lahir_penduduk']; ?><br>
        : <?= $detail['jenis_kelamin_penduduk']; ?><br>
        : <?= $detail['status_perkawinan_penduduk']; ?><br>
        : <?= $detail['agama_penduduk']; ?><br>
        : <?= $detail['pekerjaan_penduduk']; ?><br>
        : <?= $detail['alamat_penduduk']; ?><br>
    </div>
</div>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- kata bawah? bodo amat -->
<br>
<p style="text-indent: 50px;">
    Orang yang namanya di sebut di atas adalah benar warga Kecamatan Paringin dan telah Meninggal Dunia, yaiut :
</p>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<div class="row">
    <div class="col-2"></div>
    <div class="col-4">
        Pada Hari <br>
        Tanggal <br>
        Meninggal Karena <br>
        Di <br>
    </div>
    <div class="col">
        : <?= $detail['hari']; ?><br>
        : <?= $detail['tanggal']; ?><br>
        : <?= $detail['sebab']; ?><br>
        : <?= $detail['tempat']; ?><br>
    </div>
</div>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<p style="text-indent: 50px;">
    Demikian Surat keterangan kematian ini di buat dengan sebenranya, untuk dapat di pergunakan keperluannya.
</p>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- ini tanda tangan !?.. -->
<?= $this->include('nav/foot_c'); ?>