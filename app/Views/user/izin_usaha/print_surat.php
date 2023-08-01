<?= $this->include('nav/head_c'); ?>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- head sub -->
<h3 class="text-center bold uline ">
    Surat Keterangan Izin Usaha
</h3>
<div class="text-center">Nomor : <?= $izin['no_surat']; ?></div>
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
        : <?= $izin['nama_penduduk']; ?><br>
        : <?= $izin['jenis_kelamin_penduduk']; ?><br>
        : <?= $izin['tempat_lahir_penduduk']; ?>, <?= $izin['tgl_lahir_penduduk']; ?><br>
        : <?= $izin['agama_penduduk']; ?><br>
        : <?= $izin['pekerjaan_penduduk']; ?><br>
        : <?= $izin['alamat_penduduk']; ?><br>
    </div>
</div>
<br>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<div style="text-indent: 50px;">
    Orang tersebut diatas benar-benar mempunyai usaha :

</div>
<div class="row">
    <div class="col-2"></div>
    <div class="col-4">
        Nama Usaha <br>
        Jenis Usaha <br>
        Alamat Usaha <br>
    </div>
    <div class="col">
        : <?= $izin['nama_usaha']; ?><br>
        : <?= $izin['jenis_usaha']; ?><br>
        : <?= $izin['alamat_usaha']; ?><br>
    </div>
</div>
<br>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<p style="text-indent: 50px;">
    Demikian surat pengantar ini di buat dengan sebenarnya untuk dapat di pergunakan sebagaimana mestinya. atas kerjasamanya di ucapkan terimakasih.
</p>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- ini tanda tangan !?.. -->
<?= $this->include('nav/foot_c'); ?>