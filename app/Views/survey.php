<?= $this->extend('layout/post_layout') ?>

<?= $this->section('content') ?>

<?= \Config\Services::validation()->listErrors(); ?>


<form action="<?= base_url('Laptop/cari') ?>" method="post">
    <?= csrf_field() ?>
    <div class="form-group" aria-describedby="budgetHelp">
    <div class="form-inline">
        <label class="" for="budget">Kisaran Budget</label>
        <select class="form-select col-auto offset-1" name="budget">
            <option selected>Pilih Budget</option>
            <option value="5000000">Dibawah Rp 5 Juta</option>
            <option value="6000000">Antara Rp 5-6 Juta</option>
            <option value="7000000">Antara Rp 6-7 Juta</option>
            <option value="8000000">Antara Rp 7-8 Juta</option>
            <option value="9000000">Antara Rp 8-9 Juta</option>
            <option value="10000000">Antara Rp 9-10 Juta</option>
            <option value="15000000">Antara Rp 10-15 Juta</option>
            <option value="500000000">Diatas Rp 15 Juta</option>
        </select>
    </div>
        <small id="budgetHelp" class="form-text text-muted">
            Mengetahui budget adalah hal terpenting dalam memilih laptop agar kita tidak membuang-buang uang membeli laptop yang terlalu mahal atau diluar budget
        </small>
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

    <div class="form-group" aria-describedby="layarHelp">
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
        <small id="layarHelp" class="form-text text-muted">
            Ukuran layar menentukan seberapa besar laptop anda. Semakin besar maka akan semakin berat dan sulit dibawa bepergian. Namun memiliki layar yang besar dapat memudahkan anda melihat konten pada layar
        </small>
    </div>

    <div class="form-group" aria-describedby="ramHelp">
        <label for="ram">Ukuran RAM</label><br>
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
        <small id="ramHelp" class="form-text text-muted">
            Ukuran RAM menentukan seberapa banyak software/aplikasi yang dapat anda gunakan secara bersamaan. Pilihlah ukuran ram sesuai penggunaan anda, jika hanya untuk membuat dokumen dan berselancar di internet 4GB RAM sudah cukup namun jika pemakaian anda lebih dari sekedar membuat dokumen dan berinternet kami rekomendasikan memiliki 8GB RAM atau lebih.
        </small>
    </div>
    
    <div class="form-group" aria-describedby="panelHelp">
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
        <small id="panelHelp" class="form-text text-muted">
            Tipe panel menentukan bagaimana karakteristik dari layar anda. IPS adalah tipe panel yang memiliki akurasi warna dan viewing angle(sudut pandang) yang paling baik sehingga cocok digunakan untuk pemakaian sehari-hari dan juga pemakaian yang memerlukan keakuratan warna. sedangkan TN memiliki akurasi warna dan viewing angle yang kurang baik namun memiliki respons time terbaik sehingga cocok digunakan untuk bermain game kompetitif. dan VA merupakan tipe panel yang memiliki kontras tinggi sehingga cocok digunakan pada tempat yang terang juga diluar ruangan.
        </small>
    </div>

    <div class="form-group" aria-describedby="cpuHelp">
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
        <small id="cpuHelp" class="form-text text-muted">
            Tingkat CPU menentukan performa komputasi laptop anda. Tingkat Entry merupakan CPU seri Celeron, Pentium, dan sekelasnya cocok untuk penggunaan ringan sehari-hari seperti browsing internet dan membuat dokumnen. Tingkat Rendah merupakan CPU seri I3 dan sekelasnya cocok untuk penggunaan ringan. Tingkat Sedang merupakan CPU seri I5 dan sekelasnya cocok untuk penggunaan komputasi sedang. Tingkat Tinggi merupakan CPU seri I7 dan sekelasnya cocok untuk penggunaan berat. Tingkat Top merupakan CPU Seri I9 dan sekelasnya cocok untuk penggunaan sangat berat.
        </small>
    </div>

    <div class="form-group" aria-describedby="gpuHelp">
        <label for="gpu">Tingkat GPU</label><br>
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
        <small id="gpuHelp" class="form-text text-muted">
            Tingkat GPU menentukan performa grafis laptop anda. Tingkat Integrated merupakan GPU bawaan dari CPU cocok jika anda hanya menggunakannya untuk menonton video dan pekerjaan sehari-hari lainnya. Tingkat Rendah merupakan GPU seri MX dan sekelasnya yang cocok untuk edit foto dan video ringan. Tingkat Sedang merupakan GPU seri GTX dan sekelasnya cocok untuk edit foto, video, desain 3D, dan bermain game sedang hingga berat. Tingkat Tinggi merupakan GPU seri RTX dan sekelasnya cocok untuk penggunaan berat.
        </small>
    </div>

    <div class="form-group" aria-describedby="kapasitasHelp">
        <label for="kapasitas">Kapasitas Penyimpanan</label><br>
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
        <small id="kapasitasHelp" class="form-text text-muted">
            Kapasitas penyimpanan menentukan seberapa besar anda bisa menyimpan data. Semakin besar maka semakin banyak data yang bisa disimpan.
        </small>
    </div>

    <div class="form-group" aria-describedby="tipeHelp">
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
        <small id="tipeHelp" class="form-text text-muted">
            Tipe penyimpanan menentukan bagaimana karakteristik dari penyimpanan anda. SSD unggul dengan kecepatan baca dan tulis yang sangat cepat namun cenderung lebih mahal membuat SSD sering digunakan untuk menyimpan sistem operasi dan aplikasi-aplikasi yang sering digunakan. HDD unggul pada kapasitas penyimpanan yang besar dan murah namun cenderung lebih lambat membuat HDD sering digunakan untuk penyimpanan data besar. eMMC unggul pada kecepatan membaca file-file kecil dan ukuran fisiknya yang juga kecil membuat eMMC sering digunakan sebagai penyimpanan pada perangkat kompak seperti 2-in-1. 
        </small>
    </div>

    <div>
        <button type="submit" name="cari" value="cari" class="btn btn-primary">Cari</button>
    </div>
</form>

<?= $this->endSection() ?>