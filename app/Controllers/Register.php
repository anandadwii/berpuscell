<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;


class Register extends BaseController
{
    public function index()
    {
        // session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        echo view('register_view', $data);
    }

    public function submitRegister()
    {

        if (!$this->validate([
            'username' => 'required',
            'password' => 'required',
            'cpassword' => 'required',
            'nama' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('register'))->withInput()->with('validation', $validation);
        }



        // buat model untuk proses insert ke tabel user
        $model = new UsersModel();
        $password = $this->request->getVar('password');
        $cpassword = $this->request->getVar('cpassword');
        if (strcmp($password, $cpassword) == 0) {



            $data = [
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'nama' => $this->request->getVar('nama'),
                'namabelakang' => $this->request->getVar('namabelakang'),
            ];

            $model->insert($data);
            return redirect()->to(base_url('login'));

            // if ($model->insert($data)) {
            //     return redirect()->to('/login');
            // } else {
            //     echo "data tidak berhasil disimpan";
            // }
        } else {
            return redirect()->to(base_url('register'))->withInput();
        }
    }
}
