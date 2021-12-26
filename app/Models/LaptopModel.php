<?php

namespace App\Models;

use CodeIgniter\Model;

class LaptopModel extends Model
{
    protected $table        = 'laptop';
    // protected $harga        = 'harga';

    // protected $allowedFields = ['budget', 'resolusi', 'layar', 'ram', 'panel', 'cpu', 'gpu', 'kapasitas', 'tipe'];
    protected $allowedFields = ['id', 'kode', 'laptop', 'harga', 'panel', 'ukuran', 'resolusi', 'cpu', 'ram', 'kapasitas', 'tipe', 'gpu', 'os', 'port', 'konektivitas', 'berat'];

}