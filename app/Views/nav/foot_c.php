<!-- ini tanda tangan !?.. -->
<?php
$tgl = date('d');
$bln = date('F');
$thn = date('Y');
?>
<br>
<div class="row">
    <div class="col-4">

    </div>
    <div class="col text-center">
        <?php echo "Kabupaten Balangan, $tgl $bln $thn" ?>
        <br>
        <!-- Kepala Pemerintah Kecamat?an Paringin <br> -->
        KEPALA KECAMATAN PARINGIN <br>
        <img id="barcode" style="height: 100px; width: 100px;" /> <br>
        H. Abdul Hadi S.Ag., M.I.Kom.
    </div>
</div>
<script>
    var currentLink = window.location.href;
    // Ambil data dari halaman web Anda, misalnya dengan menggunakan JavaScript
    var barcodeData = "A_Barcode";
    // Atur atribut src dari elemen gambar untuk menampilkan barcode
    document.getElementById("barcode").src = "https://barcodeapi.org/api/qr/" + currentLink;
</script>
</body>

</html>