    <?= $this->include('nav/head'); ?>
    <style>
        img {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 100%;
            height: 200px;
            filter: drop-shadow(8px 8px 10px #000);
            object-fit: cover;
            object-position: 20% 60%;
            display: block;
        }

        @keyframes example {
            0% {
                width: 100%;
                height: 200px;
            }

            100% {
                background-color: black;
                width: 100%;
                height: 85vh;
            }
        }

        img:hover {
            animation-name: example;
            animation-duration: 4s;
            /* animation-iteration-count: infinite; */
            animation-fill-mode: forwards;
            position: relative;
        }
    </style>
    <main>
        <div class="container-fluid mt-3">
            <!-- // -------------------------------------------------------------------------------------------------------------- -->
            <div>
                <img src="<?= base_url('src/') ?>img/dash.jpeg">
            </div>
            <!-- // -------------------------------------------------------------------------------------------------------------- -->
            <hr>
        </div>
    </main>
    <?= $this->include('nav/foot'); ?>