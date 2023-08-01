<?= $this->include('nav/head_c'); ?>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- head sub -->
<h5 class="text-center bold uline ">
    Surat Keterangan Izin Pemasangan Reklame
</h5>
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
        Alamat <br>
        Nama Perusahaan <br>
        Alamat Perusahaan<br>
        Tel/Fax/E-mail<br>
        Naskah<br>
        Jenis<br>
        Ukuran<br>
        Lokasi<br>
        Masa Berlaku<br>
    </div>
    <div class="col">
        : <?= $izin['nama_penduduk']; ?><br>
        : <?= $izin['alamat_penduduk']; ?><br>
        : <?= $izin['nama_perusahaan']; ?><br>
        : <?= $izin['alamat_perusahaan']; ?><br>
        : <?= $izin['no_telp']; ?><br>
        : <?= $izin['naskah']; ?><br>
        : <?= $izin['jenis']; ?><br>
        : <?= $izin['ukuran']; ?><br>
        : <?= $izin['lokasi']; ?><br>
        : <?= $izin['masa_berlaku']; ?> Hari
    </div>
</div>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<p style="text-indent: 50px;">
    Berhubungan dengan Permohonan tersebut diatas dengan ini saya menyatakan :
</p>
1. Data Administrasi yang di ajukan sesuai dengan data fisik yang akan di pasang. <br>
2. Pemasangan reklame sesuai dengan lokasi pemasangan yang telah di setujui. <br>
3. Siap membayar pajak atas Surat Ketetapan Pajak Daerah (SKPD) Reklame yan di ajukan untuk ditertibkan <br>
4. penempatan dan atau Pemasangan reklame data sbagaimana tersebut di atas menggunakan tempat/lahan milik <b><?= $izin['lahan_milik']; ?></b>. <br>
5. Seluruh dokumen yang di lampirkan untuk pengjuan permohonan penertiban izin di buat dan di isi dengan sebenar-benar nya. <br>
6. Mematuhi dan menjalanakan segala aturan serta ketentuan yang telah di tetapkan oleh pemerintah kota. <br>
<p style="text-indent: 50px;">
    Demikian Saya buat permohonan berikut Pernyataan ini dengan seungguhnya bila tidak seuai dan atau penbembalian poin 1 s.d. 6 kami bertanggung jawab terhadap akibat hukum yang di timbulkan.
</p>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<!-- ini tanda tangan !?.. -->
<?= $this->include('nav/foot_c'); ?>