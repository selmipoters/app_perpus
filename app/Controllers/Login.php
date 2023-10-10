<?php

namespace App\Controllers;

// Load model
use App\Models\User_model;
// End load model

class Login extends BaseController
{
    public function index()
    {
        helper('form');
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $model = new User_model();
        if ($this->validate([
            'username'         => 'required',
            'password'        => 'required'
        ])) {
            $username = $request->getVar('username');
            $password = $request->getVar('password');
            // Check user
            $check_user = $model->login($username, $password);
            if ($check_user) {
                $session->set('username', $username);
                $session->set('kd_user', $check_user['kd_user']);
                $session->set('email', $check_user['email']);
                $session->set('nama', $check_user['nama']);
                // Login success
                $session->setFlashdata('pesan', 'Hai! Selamat datang');
                return redirect()->to(base_url('dashboard'));
            } else {
                $data = array(
                    'title'    => 'Login',
                    'error'    => 'Username/password salah'
                );
                return view('login/index', $data);
            }
        }

        $data = array('title'    => 'Login');
        return view('login/index', $data);
    }

    // Logout
    public function logout()
    {
        $session = \Config\Services::session();
        $session->remove('username');
        $session->remove('email');
        $session->remove('nama');
        $session->setFlashdata('pesan', 'Sampai jumpa!');
        return redirect()->to(base_url('login'));
    }
}
