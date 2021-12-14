<?= $this->extend('layout/rekomendasi_layout') ?>

<?= $this->section('content') ?>



<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php
            for ($i=0; $i < count($rekomendasi); $i++) {
            ?>
            <h2 class="h2"><?= $rekomendasi[$i]['laptop'] ?></h2>
            <div class="container">
                <h5 class="h5">Spesifikasi</h5>
                <div class="row">
                    <div class="col-sm-3">
                        Harga
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        Rp.<?= number_format($rekomendasi[$i]['harga'], 0, ',', '.') ?>,-
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        Panel
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <?= $rekomendasi[$i]['panel'] ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        Ukuran Layar
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <?= $rekomendasi[$i]['ukuran'] ?> Inch
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        Resolusi Layar
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <?= $rekomendasi[$i]['resolusi'] ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        CPU
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <?= $rekomendasi[$i]['cpu'] ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        GPU
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <?= $rekomendasi[$i]['gpu'] ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        RAM
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <?= $rekomendasi[$i]['ram'] ?>GB
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        Penyimpanan
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <?= $rekomendasi[$i]['kapasitas'] ?> GB
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        Tipe Penyimpanan
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <?= $rekomendasi[$i]['tipe'] ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        Sistem Operasi
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <?= $rekomendasi[$i]['os'] ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        Port
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <?= $rekomendasi[$i]['port'] ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        konektivitas
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <?= $rekomendasi[$i]['konektivitas'] ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        Berat
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <?= $rekomendasi[$i]['berat'] ?> Kg <br><br>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
            
        </div>

        <div class="col-md-4">
        Foto
        </div>
    </div>
</div>


<?= $this->endSection() ?>