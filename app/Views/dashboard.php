<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

<table class="table">
<thead>
<tr>
    <th>Kode</th>
    <th>Model</th>
    <th>Harga</th>
    <!-- <th>Panel</th> -->
    <!-- <th>Ukuran</th> -->
    <!-- <th>Resolusi</th> -->
    <th>CPU</th>
    <th>RAM</th>
    <th>Kapasitas</th>
    <!-- <th>Tipe</th> -->
    <th>GPU</th>
    <!-- <th>OS</th> -->
    <!-- <th>Port</th> -->
    <!-- <th>Konektivitas</th> -->
    <!-- <th>Berat</th> -->
    <th>Aksi</th>
</tr>
</thead>
<tbody>
<?php foreach($laptops as $laptop): ?>
<tr>
    <td>
        <?= $laptop['kode'] ?>
    </td>
    <td>
        <?= $laptop['laptop'] ?>
    </td>
    <td>
        Rp.<?= number_format($laptop['harga'], 0, ',', '.') ?>
    </td>
    <td>
        <?= $laptop['cpu'] ?>
    </td>
    <td>
        <?= $laptop['ram'] ?>GB
    </td>
    <td>
        <?= $laptop['kapasitas'] ?>GB
    </td>
    <td>
        <?= $laptop['gpu'] ?>
    </td>
    <td>
        <a href="<?= base_url('dashboard/laptop/'.$laptop['id'].'/detail') ?>" class="btn btn-sm btn-outline-secondary" target="_blank">Detail</a>
        <a href="<?= base_url('dashboard/laptop/'.$laptop['id'].'/ubah') ?>" class="btn btn-sm btn-outline-secondary">Ubah</a>
        <a href="#" data-href="<?= base_url('dashboard/laptop/'.$laptop['id'].'/hapus') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Hapus</a>
    </td>
</tr>
<?php endforeach ?>
</tbody>
</table>

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