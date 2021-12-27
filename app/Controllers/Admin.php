<?php namespace App\Controllers;

use \App\Models\LaptopModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\Request;

class Admin extends BaseController
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $laptop = new LaptopModel();
        $data['laptops'] = $laptop->findAll();
        echo view('dashboard', $data);
    }
    
    public function detail($id)
    {
        $data['title'] = 'Detail Data';
        $laptop = new LaptopModel();
        $data['laptop'] = $laptop->where('id', $id)->first();

        if (!$data['laptop']) {
          $data['title'] = 'Dashboard';
          echo view('dashboard', $data);
        }
        echo view('laptop_detail', $data);
    }

    public function ubah($id)
    {
      $data['title'] = 'Ubah Data';
        $laptop = new LaptopModel();
        $data['laptop'] = $laptop->where('id', $id)->first();

        echo view('laptop_edit', $data);
    }

    public function ubahex($id)
    {
      $data['title'] = 'Ubah Data';
      $laptop = new LaptopModel();
      $laptop->update($id, [
        "laptop" => $this->request->getPost('laptop'),
        "harga" => $this->request->getPost('harga'),
        "panel" => $this->request->getPost('panel'),
        "ukuran" => $this->request->getPost('ukuran'),
        "resolusi" => $this->request->getPost('resolusi'),
        "cpu" => $this->request->getPost('cpu'),
        "ram" => $this->request->getPost('ram'),
        "kapasitas" => $this->request->getPost('kapasitas'),
        "tipe" => $this->request->getPost('tipe'),
        "gpu" => $this->request->getPost('gpu'),
        "os" => $this->request->getPost('os'),
        "port" => $this->request->getPost('port'),
        "konektivitas" => $this->request->getPost('konektivitas'),
        "berat" => $this->request->getPost('berat'),
      ]);
      return redirect('dashboard', $data);
    }

    public function hapus($id)
    {
      $data['title'] = 'Dashboard';
      $laptop = new LaptopModel();
      $laptop->delete($id);
      return redirect('dashboard', $data);
    }

    public function tambah()
    {
      $data['title'] = 'Tambah Data';
      $validation = \Config\Services::validation();
      $validation->setRules(['kode' => 'required']);
      $isDataValid = $validation->withRequest($this->request)->run();

      if ($isDataValid) {
        $laptop = new LaptopModel();
        $laptop->insert([
          'kode' => $this->request->getPost('kode'),
          'laptop' => $this->request->getPost('laptop'),
          'harga' => $this->request->getPost('harga'),
          'panel' => $this->request->getPost('panel'),
          'ukuran' => $this->request->getPost('ukuran'),
          'resolusi' => $this->request->getPost('resolusi'),
          'cpu' => $this->request->getPost('cpu'),
          'ram' => $this->request->getPost('ram'),
          'kapasitas' => $this->request->getPost('kapasitas'),
          'tipe' => $this->request->getPost('tipe'),
          'gpu' => $this->request->getPost('gpu'),
          'os' => $this->request->getPost('os'),
          'port' => $this->request->getPost('port'),
          'konektivitas' => $this->request->getPost('konektivitas'),
          'berat' => $this->request->getPost('berat'),
        ]);
        return redirect('dashboard', $data);
      }

      echo view('laptop_tambah', $data);
    }
}