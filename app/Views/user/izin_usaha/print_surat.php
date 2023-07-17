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

        table,
        th,
        td {
            border: 1px solid black;
        }

        @media print {
            body {
                margin: 20px 40px;
                /* Atur nilai margin kanan dan kiri sesuai kebutuhan */
            }

            table,
            th,
            td {
                box-shadow: 1px 1px 1px 1px black;
                /* Atur ketebalan, warna, dan jenis garis batas sesuai kebutuhan */
            }
        }

        @media print {
            @page {
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