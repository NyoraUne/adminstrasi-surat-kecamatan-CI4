<?= $this->include('nav/head_c'); ?>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- head sub -->
<h3 class="text-center bold uline ">
    Surat Keterangan Kelahiran
</h3>
<div class="text-center">Nomor : <?= $detail['no_surat']; ?></div>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- kalimat pertama -->
<!-- <br> -->
<!-- <p style="text-indent: 50px;">
    </p> -->
dengan ini menerangkan bahwa :
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- bio data -->
<div class="row">
    <div class="col-2"></div>
    <div class="col-4">
        Nama Lengkap Anak <br>
        Anak Ke <br>
        Jenis Kelamin <br>
        Di Lahirkan Di <br>
        Alamat Anak<br>
    </div>
    <div class="col">
        : <?= $detail['nama_anak']; ?><br>
        : <?= $detail['anak_ke']; ?><br>
        : <?= $detail['jenis_kelamin']; ?><br>
        : <?= $detail['tempat']; ?><br>
        : <?= $detail['alamat']; ?><br>
    </div>
</div>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
Adalah anak kandung dari suami istri tersebut dibawah ini :
<br>
<div class="row">
    <div class="col-2"></div>
    <div class="col-4">
        <div style="font-weight: bold;">Ayah</div>
        Nik <br>
        Nama <br>
        Tempat/Tanggal Lahir <br>
        Alamat <br>
    </div>
    <div class="col">
        <br>
        : <?= $ayah['nik_penduduk']; ?><br>
        : <?= $ayah['nama_penduduk']; ?><br>
        : <?= $ayah['tempat_lahir_penduduk']; ?>, <?= $ayah['tgl_lahir_penduduk']; ?><br>
        : <?= $ayah['alamat_penduduk']; ?><br>
    </div>
</div>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<div class="row">
    <div class="col-2"></div>
    <div class="col-4">
        <div style="font-weight: bold;">Ibu</div>
        Nik <br>
        Nama <br>
        Tempat/Tanggal Lahir <br>
        Alamat <br>
    </div>
    <div class="col">
        <br>
        : <?= $ibu['nik_penduduk']; ?><br>
        : <?= $ibu['nama_penduduk']; ?><br>
        : <?= $ibu['tempat_lahir_penduduk']; ?>, <?= $ibu['tgl_lahir_penduduk']; ?><br>
        : <?= $ibu['alamat_penduduk']; ?><br>
    </div>
</div>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- kata bawah? bodo amat -->
<br>
<p style="text-indent: 50px;">
    Demikian surat pengantar ini di buat dengan sebenarnya untuk dapat di pergunakan sebagaimana mestinya. atas kerjasamanya di ucapkan terimakasih.
</p>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- ini tanda tangan !?.. -->
<?= $this->include('nav/foot_c'); ?>