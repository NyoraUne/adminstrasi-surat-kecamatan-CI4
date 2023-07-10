<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Halaman Cetak</title>
    <link href="<?= base_url('src/') ?>css/styles.css" rel="stylesheet" />

    <style>
        @page {
            size: auto;
            margin: 10px;
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

            @page {
                margin-bottom: 0;
                orientation: landscape;
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
        Laporan Data KK
    </h3>
    <div class="text-center">
        <?php echo $msg; ?>
    </div>
    <!-- // -------------------------------------------------------------------------------------------------------------- -->
    <!-- bio data -->
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>No</th>
                        <th>No KK</th>
                        <th>Alamat</th>
                        <th>Rt/Rw</th>
                        <th>Desa, Kecamatan, Kabupaten, Provinsi, Kode Pos </th>
                        <th>DI Buat Pada</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n = 1; ?>
                    <?php foreach ($variable as $pe) : ?>
                        <tr>
                            <td>
                                <?= $n++; ?>
                            </td>
                            <td>
                                <?= $pe['no_kk']; ?>
                            </td>
                            <td>
                                <?= $pe['alamat_kk']; ?>
                            </td>
                            <td>
                                <?= $pe['rtrw_kk']; ?>
                            </td>
                            <td>
                                <?= $pe['desa_kk']; ?>,
                                <?= $pe['kecamatan_kk']; ?>,
                                <?= $pe['kabupaten_kk']; ?>,
                                <?= $pe['provinsi_kk']; ?>,
                                <?= $pe['kdpos_kk']; ?>
                            </td>
                            <td>
                                <?= $pe['created_at_kk']; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- // -------------------------------------------------------------------------------------------------------------- -->
    <!-- kata bawah? bodo amat -->
    <br>
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