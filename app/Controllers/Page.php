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
        // $data['name'] = "Tes";
        // echo view("about page", $data);
        echo view("about");
    }
}