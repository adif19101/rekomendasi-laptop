<?php namespace App\Controllers;

class LogoutController extends BaseController
{
    public function index()
    {

        $userData = [
            'nama_ad',
            'email_ad',
            'logged_in'
        ];

        session()->remove($userData);

        return redirect()->to(base_url('login'));

    }

    //--------------------------------------------------------------------

}