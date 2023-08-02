<?= $this->include('nav/head_c'); ?>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- head sub -->
<h3 class="text-center bold uline ">
    Surat pengantar Pindah
</h3>
<div class="text-center">Nomor : <?php echo $pi['no_surat'] ?></div>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- kalimat pertama -->
<br>
<p style="text-indent: 50px;">
    Yang bertanda tangan di bawah ini Kepala Kampung Bumi Abadi Jaya Kecamatan Paringin kabupaten Balangan Kalimantan Selatan
</p>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- bio data -->
<div class="row">
    <div class="col-1"></div>
    <div class="col-5">
        Nama <br>
        Nik <br>
        Jenis Kelamin <br>
        Tempat, Tgl Lahir <br>
        Agama <br>
        Pekerjaan <br>
        Status Pernikahan <br>
        Alamat Asal <br>
        No.Kartu Keluarga <br>
        Alamat Pindah <br>
        Alasan Pindah <br>
        Pengikut / Keluarga yang pindah
    </div>
    <div class="col">
        : <?php echo $pi['nama_penduduk'] ?> <br>
        : <?php echo $pi['nik_penduduk'] ?> <br>
        : <?php echo $pi['jenis_kelamin_penduduk'] ?> <br>
        : <?php echo $pi['tempat_lahir_penduduk'] ?>, <?= $pi['tgl_lahir_penduduk']; ?><br>
        : <?php echo $pi['agama_penduduk'] ?> <br>
        : <?php echo $pi['pekerjaan_penduduk'] ?> <br>
        : <?php echo $pi['status_perkawinan_penduduk'] ?> <br>
        : <?php echo $pi['pindah_dari'] ?> <br>
        : <?php echo $pi['no_kk'] ?> <br>
        : <?php echo $pi['alamat_baru'] ?> <br>
        : <?php echo $pi['alasan_pindah'] ?> <br>
        : <?php echo $pi['keluarga_ikut'] ?> Orang<br>
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