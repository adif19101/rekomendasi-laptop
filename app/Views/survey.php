<?= $this->extend('layout/post_layout') ?>

<?= $this->section('content') ?>

<?= \Config\Services::validation()->listErrors(); ?>

<p>Pilih Kriteria Laptop</p>

<form action="Laptop/cari" method="post">
    <?= csrf_field() ?>
    <div class="form-group">
        <label for="budget">Budget Maksimal</label>
        <select class="form-select" name="budget">
            <option selected>Pilih Budget Maksimal</option>
            <option value="5000000">Rp.5.000.000,-</option>
            <option value="6000000">Rp.6.000.000,-</option>
            <option value="7000000">Rp.7.000.000,-</option>
            <option value="8000000">Rp.8.000.000,-</option>
            <option value="9000000">Rp.9.000.000,-</option>
            <option value="10000000">Rp.10.000.000,-</option>
            <option value="15000000">Rp.15.000.000,-</option>
            <option value="500000000">Diatas Rp.15.000.000,-</option>
        </select>
    </div>

    <div class="form-group" aria-describedby="resolusiHelp">
        <label for="resolusi">Resolusi Layar</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="resolusi" id="resolusi1" value="hd">
            <label class="form-check-label" for="resolusi1">HD 720p</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="resolusi" id="resolusi2" value="fhd">
            <label class="form-check-label" for="resolusi2">FHD 1080p</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="resolusi" id="resolusi3" value="qhd">
            <label class="form-check-label" for="resolusi3">QHD 1440p</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="resolusi" id="resolusi4" value="4k">
            <label class="form-check-label" for="resolusi4">UHD 4K</label>
        </div>
        <small id="resolusiHelp" class="form-text text-muted">
            Resolusi layar menentukan ketajaman layar anda. Semakin tinggi resolusinya maka semakin tajam pula gambar yang dihasilkan
        </small>
    </div>

    <div class="form-group">
        <label for="layar">Ukuran Layar Maksimal</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layar" id="layar1" value="13">
            <label class="form-check-label" for="layar1">13"</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layar" id="layar2" value="15">
            <label class="form-check-label" for="layar2">15"</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layar" id="layar3" value="17">
            <label class="form-check-label" for="layar3">17"</label>
        </div>
    </div>

    <div class="form-group">
        <label for="ram">Ukuran RAM Minimal</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="ram" id="ram1" value="4">
            <label class="form-check-label" for="ram1">4GB</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="ram" id="ram2" value="8">
            <label class="form-check-label" for="ram2">8GB</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="ram" id="ram3" value="16">
            <label class="form-check-label" for="ram3">16GB</label>
        </div>
    </div>
    
    <div class="form-group">
        <label for="panel">Tipe Panel</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="panel" id="panel1" value="ips">
            <label class="form-check-label" for="panel1">IPS</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="panel" id="panel2" value="va">
            <label class="form-check-label" for="panel2">VA</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="panel" id="panel3" value="tn">
            <label class="form-check-label" for="panel3">TN</label>
        </div>
    </div>

    <div class="form-group">
        <label for="cpu">Tingkat CPU Minimum</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="cpu" id="cpu1" value="entry">
            <label class="form-check-label" for="cpu1">Entry</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="cpu" id="cpu2" value="rendah">
            <label class="form-check-label" for="cpu2">Rendah</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="cpu" id="cpu3" value="sedang">
            <label class="form-check-label" for="cpu3">Sedang</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="cpu" id="cpu4" value="tinggi">
            <label class="form-check-label" for="cpu4">Tinggi</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="cpu" id="cpu5" value="top">
            <label class="form-check-label" for="cpu5">Top</label>
        </div>
    </div>

    <div class="form-group">
        <label for="gpu">Tingkat GPU Minimum</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gpu" id="gpu1" value="integrated">
            <label class="form-check-label" for="gpu1">Integrated</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gpu" id="gpu2" value="rendah">
            <label class="form-check-label" for="gpu2">Rendah</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gpu" id="gpu3" value="sedang">
            <label class="form-check-label" for="gpu3">Sedang</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gpu" id="gpu4" value="tinggi">
            <label class="form-check-label" for="gpu4">Tinggi</label>
        </div>
    </div>

    <div class="form-group">
        <label for="kapasitas">Kapasitas Penyimpanan Minimum</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kapasitas" id="kapasitas1" value="128">
            <label class="form-check-label" for="kapasitas1">128GB</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kapasitas" id="kapasitas2" value="240">
            <label class="form-check-label" for="kapasitas2">240GB</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kapasitas" id="kapasitas3" value="500">
            <label class="form-check-label" for="kapasitas3">500GB</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kapasitas" id="kapasitas4" value="1000">
            <label class="form-check-label" for="kapasitas4">1000GB</label>
        </div>
    </div>

    <div class="form-group">
        <label for="tipe">Tipe Penyimpanan</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipe" id="tipe1" value="ssd">
            <label class="form-check-label" for="tipe1">SSD</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipe" id="tipe2" value="hdd">
            <label class="form-check-label" for="tipe2">HDD</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipe" id="tipe3" value="emmc">
            <label class="form-check-label" for="tipe3">eMMC</label>
        </div>
    </div>

    <div>
        <button type="submit" name="cari" value="cari" class="btn btn-primary">Cari</button>
    </div>
</form>

<?= $this->endSection() ?>