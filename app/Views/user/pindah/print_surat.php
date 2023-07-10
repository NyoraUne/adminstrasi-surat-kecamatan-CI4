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