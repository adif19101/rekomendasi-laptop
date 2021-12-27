<?php namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {
        if ($this->isLoggedIn()) {
            $data['title'] = 'Dashboard';
            return view('dashboard', $data);
        }

        $data = [
            'title' => 'Login'
        ];

        return view('auth/login', $data);
    }

    private function isLoggedIn(): bool
    {
        if (session()->get('logged_in')) {
            return true;
        }

        return false;
    }

    public function login()
    {
        $email_ad = $this->request->getPost('email_ad');
        $password_ad = $this->request->getPost('password_ad');

        $credentials = ['email_ad' => $email_ad];

        $user = $this->model->where($credentials)
            ->first();

        if (! $user) {
            session()->setFlashdata('error', 'Email atau password anda salah.');
            return redirect()->back();
        }

        $password_adCheck = password_verify($password_ad, $user['password_ad']);

        if (! $password_adCheck) {
            session()->setFlashdata('error', 'Email atau password anda salah.');
            return redirect()->back();
        }

        $userData = [
            'nama_ad' => $user['nama_ad'],
            'email_ad' => $user['email_ad'],
            'logged_in' => TRUE
        ];

        session()->set($userData);
        return redirect()->to(base_url('dashboard'));
    }
}