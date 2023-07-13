<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Halaman Cetak</title>
    <link href="<?= base_url('src/') ?>css/styles.css" rel="stylesheet" />

    <style>
        @page {
            size: auto;
            margin: 20px;
        }

        body {
            /* margin: 0; */
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        @media print {

            body {
                margin: 20px 40px;
                /* Atur nilai margin kanan dan kiri sesuai kebutuhan */
            }

            @page :first {
                margin-bottom: 0;
            }
        }

        img {
            width: 80px;
        }

        hr.pemisah {
            height: 5px;
            color: black;
            /* Atur tinggi garis sesuai kebutuhan */
            background-color: black;
            /* Atur warna lapisan atas */
            position: relative;
        }

        .bold {
            font-weight: bold;
            letter-spacing: 5px;
            text-transform: uppercase;
        }

        .uline {
            text-decoration: underline;
        }

        /* Tambahkan gaya lain yang dibutuhkan untuk halaman cetak */
    </style>
</head>

<body>
    <!-- // -------------------------------------------------------------------------------------------------------------- -->
    <!-- Head -->
    <div class="row">
        <div class="col-3">
            <div class="float-end">
                <img src="<?= base_url('src/') ?>img/logo.blob" alt="">

            </div>
        </div>
        <div class="col text-center">
            <h4 class="bold">
                PEMERINTAH KABUPATEN BALANGAN <br>
                KECAMATAN PARINGIN
            </h4>
            Jalan A. Yani Km. 4,4 Paringin Fax : 0526 - 2028485 email : diskominfo@gmail.com
        </div>
        <div class="col-2"></div>
    </div>
    <hr class="pemisah">
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
            <?php echo "Pemerintah kabupaten Balangan, $tgl - $bln - $thn" ?>
            <br>
            Kepala Pemerintah Kecamatan Paringin <br>
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