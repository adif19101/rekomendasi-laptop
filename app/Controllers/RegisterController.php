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
            'title' => 'Register | Seri Tutorial CodeIgniter 4: Login dan Register @ qadrlabs.com'
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
            return redirect()->to(base_url('login'));
        } else {
            session()->setFlashdata('error', $this->model->errors());
            return redirect()->back();
        }
    }
}