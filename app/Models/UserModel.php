<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'admin';
    protected $allowedFields = ['nama_ad', 'email_ad', 'password_ad'];

    protected $validationRules = [
        'nama_ad' => 'required',
        'email_ad' => 'required|valid_email|is_unique[admin.email_ad]',
        'password_ad' => 'required|min_length[8]'
    ];

    protected $validationMessages = [
        'email_ad' => [
            'is_unique' => 'Sorry, That email has already been taken. Please choose another.'
        ]
    ];

    protected $skipValidation = false;
    protected $beforeInsert = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (! isset($data['data']['password_ad'])) {
            return $data;
        }

        $data['data']['password_ad'] = password_hash($data['data']['password_ad'], PASSWORD_DEFAULT);
        return $data;
    }

}