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