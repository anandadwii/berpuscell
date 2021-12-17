<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Login extends BaseController
{
    public function index()
    {

        echo view("login");
    }

    public function logout()
    {
        session()->destroy();
        session()->setFlashdata("error", "ada berhasil logout");
        return redirect()->to(base_url('login'));
    }

    public function submitLogin()
    {



        $model = new UsersModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = $model->where('username', $username)->first();

        if ($data) {
            if (password_verify($password, $data['password'])) {
                session()->set([
                    'nama' => $data['nama'],
                    'username'  => $data['username'],
                    'logged_in' => true,
                ]);
                return redirect()->to(base_url('/admin'));
            } else {
                session()->setFlashdata("error", "Username dan password salah");
                return redirect()->back();
            }
        } else {
            session()->setFlashdata("error", "Username dan password salah");
            return redirect()->back();
        }
    }
}
