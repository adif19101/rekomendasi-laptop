<?php 

namespace App\Controllers;

use CodeIgniter\Controller;

class Page extends Controller
{
    public function index()
    {
        echo view("homepage");
    }
    public function about()
    {
        $data['judul'] = 'Project UAS Pengantar Kecerdasan Buatan';
        echo view("about", $data);
    }
}