<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<section class="jumbotron text-center">
    <h1>Welcome, <?= session()->nama_ad ?></h1>
    <p>Untuk logout dari sistem silakan klik <a href="<?php echo base_url('logout');?>">Logout</a></p>
</section>

<?= $this->endSection() ?>