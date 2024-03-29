<?= $this->extend('layout/login_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center" style="font-weight: bold;">Tambahkan ADMIN</h4>
                    <hr>
                    <?php if (session()->getFlashdata('success')) { ?>
                        <div class="alert alert-success">
                            <?php echo session()->getFlashdata('success'); ?>
                        </div>
                    <?php } ?>

                    <?php if (session()->getFlashdata('error')) { ?>
                        <div class="alert alert-danger">
                            <p>error</p>
                        </div>
                    <?php } ?>

                    <?= form_open(base_url().'/register'); ?>
                    <div class="form-group">
                        <label for="nama_ad">Nama</label>
                        <input type="text" name="nama_ad" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email_ad">Email</label>
                        <input type="email" name="email_ad" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password_ad">Password</label>
                        <input type="password" name="password_ad" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Register</button>
                    </div>
                    <?= form_close(); ?>
                </div>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>