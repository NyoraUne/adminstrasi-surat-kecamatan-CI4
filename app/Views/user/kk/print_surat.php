<?= $this->include('nav/head_c'); ?>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- head sub -->
<h3 class="text-center bold uline ">
    Surat pengantar KK
</h3>
<div class="text-center">Nomor : <?php echo $ktp['no_surat_skk'] ?></div>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- kalimat pertama -->
<br>
<p style="text-indent: 50px;">
    Yang bertanda tangan di bawah ini Kepala Kampung Bumi Abadi Jaya Kecamatan Paringin kabupaten Balangan Kalimantan Selatan
</p>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- bio data -->
<div class="row">
    <div class="col-2"></div>
    <div class="col-4">
        Nama <br>
        Nik <br>
        Tempat, Tgl Lahir <br>
        Jenis Kelamin <br>
        Pekerjaan <br>
        Agama <br>
        Alamat Sekarang <br>
        Keperluan
    </div>
    <div class="col">
        : <?php echo $ktp['nama_penduduk'] ?> <br>
        : <?php echo $ktp['nik_penduduk'] ?> <br>
        : <?php echo $ktp['tempat_lahir_penduduk'] ?>, <?php echo $ktp['tgl_lahir_penduduk'] ?><br>
        : <?php echo $ktp['jenis_kelamin_penduduk'] ?> <br>
        : <?php echo $ktp['pekerjaan_penduduk'] ?> <br>
        : <?php echo $ktp['agama_penduduk'] ?> <br>
        : <?php echo $ktp['alamat_penduduk'] ?> <br>
        : <?php echo $ktp['keperluan_skk'] ?>
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