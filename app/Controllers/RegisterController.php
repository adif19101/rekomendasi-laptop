<?php namespace App\Controllers;

use App\Models\UserModel;

class RegisterController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {
        $data = [
            'title' => 'Tambah Admin'
        ];

        return view('auth/register', $data);
    }

    public function store()
    {
        $nama_ad = $this->request->getPost('nama_ad');
        $email_ad = $this->request->getPost('email_ad');
        $password_ad = $this->request->getPost('password_ad');

        $user = [
            'nama_ad' => $nama_ad,
            'email_ad' => $email_ad,
            'password_ad' => $password_ad
        ];

        $save = $this->model->insert($user);

        if ($save) {
            session()->setFlashdata('success', 'Register Berhasil!');
            return view(base_url('dashboard'));
        } else {
            session()->setFlashdata('error', $this->model->errors());
            return redirect()->back();
        }
    }
}