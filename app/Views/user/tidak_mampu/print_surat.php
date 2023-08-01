<?= $this->include('nav/head_c'); ?>

<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- head sub -->
<h3 class="text-center bold uline ">
    Surat Keterangan Tidak Mampu
</h3>
<div class="text-center">Nomor : <?= $tidak_mampu['no_surat']; ?></div>
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
        Nik <br>
        Jenis Kelamin <br>
        Tempat Tanggal Lahir <br>
        Agama<br>
        Pekerjaan<br>
        Alamat<br>
    </div>
    <div class="col">
        : <?= $tidak_mampu['nama_penduduk']; ?><br>
        : <?= $tidak_mampu['nik_penduduk']; ?><br>
        : <?= $tidak_mampu['jenis_kelamin_penduduk']; ?><br>
        : <?= $tidak_mampu['tempat_lahir_penduduk']; ?>, <?= $tidak_mampu['tgl_lahir_penduduk']; ?><br>
        : <?= $tidak_mampu['agama_penduduk']; ?><br>
        : <?= $tidak_mampu['pekerjaan_penduduk']; ?><br>
        : <?= $tidak_mampu['alamat_penduduk']; ?><br>
    </div>
</div>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<p style="text-indent: 50px;text-align: justify;">
    Nama tersebut adalah benar warga desa kecamatan paringin. Berdasarkan keterangan yang ada pada keluarga bersangkutan tergolong keluarga yang tidak mampu. <br>
    Surat Keterangan ini di buat untuk <b><?= $tidak_mampu['keperluan']; ?></b>.
</p>


<!-- // -------------------------------------------------------------------------------------------------------------- -->
<p style="text-indent: 50px;">
    Demikian surat pengantar ini di buat dengan sebenarnya untuk dapat di pergunakan sebagaimana mestinya. atas kerjasamanya di ucapkan terimakasih.
</p>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- ini tanda tangan !?.. -->
<?= $this->include('nav/foot_c'); ?>