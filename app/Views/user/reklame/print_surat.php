<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Halaman Cetak</title>
    <link href="<?= base_url('src/') ?>css/styles.css" rel="stylesheet" />

    <style>
        @page {
            size: auto;
            margin: 0px;
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