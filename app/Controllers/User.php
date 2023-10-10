<?php

namespace App\Controllers;

// Load model
use App\Models\User_model;
use App\Models\Mode_model;
// End load model

use CodeIgniter\Controller;

class User extends Controller
{
    // Listing all
    public function index()
    {
        $session = \Config\Services::session();
        // Proteksi
        if ($session->get('username') == "") {
            $session->setFlashdata('pesan', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }
        $datamode = array(
            'id_mode'        => '1',
            'nama_mode'        => 'Pengunjung'
        );
        $modelmode = new Mode_model();
        $modelmode->edit($datamode);
        $tampilmode = $modelmode->detail();
        // End proteksi
        $model = new User_model();
        $user = $model->listing();
        $data = array(
            'title'        => 'Sistem Pakan Hewan | Data User',
            'bc' => 'Data User',
            'link' => '/user/index',
            'tampilmode' => $tampilmode,
            'user'        => $user,
            'content'    => 'user/index'
        );
        return view('layout/wrapper', $data);
    }

    // Tambah
    public function tambah()
    {
        helper('form');
        $session = \Config\Services::session();
        // Proteksi
        if ($session->get('username') == "") {
            $session->setFlashdata('pesan', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }
        // End proteksi
        $model = new User_model();
        $newkd_user = $model->newkd_user();

        $data = array(
            'title'        => 'Sistem Pakan Hewan | Tambah Data User',
            'bc' => 'Tambah Data User',
            'link' => '/user/tambah',
            'content'    => 'user/tambah',
            'newkd_user' => $newkd_user
        );
        return view('layout/wrapper', $data);
    }

    // simpan
    public function simpan_data()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $data = array(
            'kd_user'        => $request->getVar('kd_user'),
            'nama'            => $request->getVar('nama'),
            'username'        => $request->getVar('username'),
            'password'        => sha1($request->getVar('password')),
            'email'    => $request->getVar('email'),
            'tentang' => $request->getVar('tentang')
        );
        $model = new User_model();
        $model->save($data);
        $session->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('user/index'));
    }

    // Edit
    public function edit($kd_user)
    {
        helper('form');
        $session    = \Config\Services::session();
        $request = \Config\Services::request();
        // Proteksi
        if ($session->get('username') == "") {
            $session->setFlashdata('pesan', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }
        // End proteksi
        $model         = new User_model();
        $user         = $model->detail($kd_user);
        $data = array(
            'title'        => 'Sistem Pakan Hewan | Edit Data User',
            'bc' => 'Edit Data User',
            'link' => '/user/edit',
            'user'        => $user,
            'content'    => 'user/edit'

        );
        return view('layout/wrapper', $data);
    }

    // edit simpan
    public function edit_simpan()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $data = array(
            'kd_user'        => $request->getVar('kd_user'),
            'nama'            => $request->getVar('nama'),
            'username'        => $request->getVar('username'),
            'password'        => sha1($request->getVar('password')),
            'email'    => $request->getVar('email'),
            'tentang' => $request->getVar('tentang')
        );
        $model = new User_model();
        $model->edit($data);
        $session->setFlashdata('pesan', 'Data telah diupdate');
        return redirect()->to(base_url('user/index'));
    }

    // Delete
    public function delete($kd_user)
    {
        $session = \Config\Services::session();
        // Proteksi
        if ($session->get('username') == "") {
            $session->setFlashdata('pesan', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }
        // End proteksi
        $model     = new User_model();
        $model->hapus($kd_user);
        $session->setFlashdata('pesan', 'Data telah dihapus');
        return redirect()->to(base_url('user/index'));
    }
}
