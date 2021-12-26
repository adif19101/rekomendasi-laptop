<?= $this->extend('layout/laptop_layout') ?>

<?= $this->section('content') ?>



<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2 class="h2">Tambah Data</h2>
            <div class="container">
                <h5 class="h5">Spesifikasi</h5>
                <form action="" method="post">
                <?= csrf_field() ?>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="kode">Kode</label> 
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <input type="text" name="kode">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="laptop">Model</label> 
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <input type="text" name="laptop">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="harga">Harga</label> 
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <input type="number" name="harga">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="panel">Panel</label> 
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <input type="text" name="panel">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="ukuran">Ukuran Layar</label> 
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <input type="number" name="ukuran"> Inch
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="resolusi">Resolusi Layar</label> 
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <input type="text" name="resolusi">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="cpu">CPU</label> 
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <input type="text" name="cpu">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="gpu">GPU</label> 
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <input type="text" name="gpu">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="ram">RAM</label> 
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <input type="number" name="ram"> GB
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="kapasitas">Penyimpanan</label> 
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <input type="number" name="kapasitas"> GB
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="tipe">Tipe Penyimpanan</label> 
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <input type="text" name="tipe">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="os">Sistem Operasi</label> 
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <input type="text" name="os">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="port">Port</label> 
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <input type="textarea" name="port">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="konektivitas">Konektivitas</label> 
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <input type="text" name="konektivitas">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="berat">Berat</label> 
                    </div>
                    <div class="col-sm-1">
                        :
                    </div>
                    <div class="col-sm-8">
                        <input type="number" name="berat"> Kg <br><br>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" name="" value="" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
            
        </div>

        <div class="col-md-4">
        Foto
        </div>
    </div>

<?= $this->endSection() ?>