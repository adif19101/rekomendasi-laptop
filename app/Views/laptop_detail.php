<?= $this->extend('layout/laptop_layout') ?>

<?= $this->section('content') ?>



<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2 class="h2"><?= $laptop['laptop'] ?></h2>
            <div class="container">
                <h5 class="h5">Spesifikasi</h5>
                <div class="row">
                    <div class="col-sm-3">
                        Kode
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <?= $laptop['kode'] ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        Harga
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        Rp.<?= number_format($laptop['harga'], 0, ',', '.') ?>,-
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
                        <?= $laptop['panel'] ?>
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
                        <?= $laptop['ukuran'] ?> Inch
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
                        <?= $laptop['resolusi'] ?>
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
                        <?= $laptop['cpu'] ?>
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
                        <?= $laptop['gpu'] ?>
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
                        <?= $laptop['ram'] ?>GB
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
                        <?= $laptop['kapasitas'] ?> GB
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
                        <?= $laptop['tipe'] ?>
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
                        <?= $laptop['os'] ?>
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
                        <?= $laptop['port'] ?>
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
                        <?= $laptop['konektivitas'] ?>
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
                        <?= $laptop['berat'] ?> Kg <br><br>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="col-md-4">
        Foto
        </div>
    </div>
    <div class="row">
        <div class="offset-2">
            <a href="<?= base_url('dashboard/laptop/'.$laptop['id'].'/ubah') ?>" class="btn btn-md btn-outline-secondary" target="_blank">Ubah</a>
        </div>
        <div class="col">
        <a href="#" data-href="<?= base_url('dashboard/laptop/'.$laptop['id'].'/hapus') ?>" onclick="confirmToDelete(this)" class="btn btn-md btn-outline-danger">Hapus</a>
        </div>
    </div>
</div>
<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="h2">Are you sure?</h2>
        <p>The data will be deleted and lost forever</p>
      </div>
      <div class="modal-footer">
        <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script>
function confirmToDelete(el){
    $("#delete-button").attr("href", el.dataset.href);
    $("#confirm-dialog").modal('show');
}
</script>

<?= $this->endSection() ?>