<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cari Laptop</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/favicon.ico') ?>" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" /> <!-- GANTI KE STYLE KL GABISA-->
    <link href="<?= base_url('css/stylenav.css') ?>" rel="stylesheet" /> <!-- GANTI KE STYLE KL GABISA-->
</head>

<body>

    <?= $this->include('layout/admin_navbar') ?>
    <?= $this->include('layout/admin_header') ?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?= $this->renderSection('content') ?>
            </div>
            <div class="col-md-4">
                <?= $this->include('layout/sidebar') ?>
            </div>
        </div>
    </div>

    <?= $this->include('layout/footer') ?>

	<!-- Jquery dan Bootsrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>