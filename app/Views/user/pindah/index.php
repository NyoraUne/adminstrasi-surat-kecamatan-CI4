<?= $this->include('nav/head'); ?>
<style>
    .nav-item {
        margin-right: 10px;
        /* Atur spasi kanan antara tombol */
    }

    .nav-item:last-child {
        margin-right: 0;
        /* Hapus margin kanan pada tombol terakhir */
    }

    hr {
        margin-top: 4px;
    }
</style>
<main>
    <div class="container-fluid mt-3">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                    Surat Keterangan Pindah
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                    Surat Keterangan Datang
                </button>
            </li>
        </ul>

        <div class="tab-content " id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <?= $this->include('user/pindah/sk_pindah'); ?>

            </div>
            <div class="tab-pane fade " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <?= $this->include('user/pindah/sk_datang'); ?>

            </div>
        </div>

    </div>
</main>
<?= $this->include('nav/foot'); ?>
<script>
    $(document).ready(function() {
        $("#penduduk").select2({
            theme: 'bootstrap-5',
            placeholder: "Silahkan Pilih KK"
        });

    });
</script>