<?= $this->include('nav/head'); ?>
<!-- // -------------------------------------------------------------------------------------------------------------- -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Bulan', 'Laporan Pindah', 'Laporan Datang', 'Laporang Tidak Mampu'],
            ['jan', 1000, 400, 121],
            ['feb', 1170, 460, 121],
            ['mar', 660, 1120, 131],
            ['apr', 1030, 540, 111],
            ['may', 800, 700, 444],
            ['jun', 1230, 820, 111],
            ['jul', 980, 500, 2],
            ['aug', 1200, 600, 3],
            ['sep', 950, 400, 1214],
            ['oct', 1100, 550, 21],
            ['nov', 880, 700, 112],
            ['dec', 1150, 900, 543],
        ]);

        var options = {
            title: 'Data Chart',
            hAxis: {
                title: 'Bulan',
                titleTextStyle: {
                    color: '#333'
                }
            },
            vAxis: {
                minValue: 0
            }
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>

<!-- // -------------------------------------------------------------------------------------------------------------- -->

<main>

    <div class="container-fluid mt-3">
        <!-- ------------------------------------------------------------- -->
        <div class="card">
            <div class="card-header">Filter Laporan</div>
            <div class="card-body">
                <form action="<?= base_url('Laporan/filter') ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <!-- Input Data Start -->
                            Masukan Jenis Laporan :
                            <div class="input-group mb-3">
                                <select class="form-select" name="laporan" required>
                                    <option value="" selected>~ Pilih Laporan ~</option>
                                    <option value="1">Data Penduduk</option>
                                    <option value="2">Laporan Pembuatan KTP</option>
                                    <option value="3">Data KK</option>
                                    <option value="4">Laporan Pembuatan KK</option>
                                    <option value="5">Laporan Kelahiran</option>
                                    <option value="6">Laporan Kematian</option>
                                    <option value="7">Laporan Pindah</option>
                                    <option value="8">Laporan Datang</option>
                                </select>
                            </div>
                            <!-- Input Data End -->
                        </div>
                        <div class="col">
                            <!-- Input Data Start -->
                            Masukan Filter tanggal :
                            <div class="input-group mb-3">
                                <input type="date" name="tgl1" class="form-control" placeholder="Tanggal pertama">
                                <span class="input-group-text" id="basic-addon1"> Sampai </span>
                                <input type="date" name="tgl2" class="form-control" placeholder="Tanggal kedua">
                            </div>
                            <!-- Input Data End -->
                        </div>
                        <div class="col">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary btn-sm" type="submit"><i class="fa-solid fa-print"></i> Cetak data</button>
                                <button class="btn btn-secondary btn-sm" type="reset"><i class="fa-solid fa-repeat"></i> Reset</button>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- ------------------------------------------------------------- -->
        <?= $this->include('user/laporan/dashboard'); ?>
    </div>

</main>
<!-- <div class="visually-hidden"> -->

<?= $this->include('nav/foot'); ?>
<!-- </div> -->