<?php

namespace App\Controllers;
use CodeIgniter\I18n\Time;
// Load model
use App\Models\Anggota_model;
use App\Models\Mode_model;
use App\Models\Rfid_model;
// End load model

use CodeIgniter\Controller;

class Anggota extends Controller
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

        // End proteksi
        $datamode = array(
            'id_mode'        => '1',
            'nama_mode'        => 'Pendaftaran'
        );
        $modelmode = new Mode_model();
        $modelmode->edit($datamode);
        $tampilmode = $modelmode->detail();
        $model = new Anggota_model();
        $anggota = $model->listing();
        $data = array(
            'title'        => 'Sistem Monitoring Anggota Perpustakaan | Data Anggota',
            'bc' => 'Data Anggota',
            'link' => '/anggota/index',
            'tampilmode' => $tampilmode,
            'anggota'        => $anggota,
            'content'    => 'anggota/index'
        );
        return view('layout/wrapper', $data);
    }

    // Tambah

    public function getidkartu()
    {
        $model = new Anggota_model();
        $getidkartu = $model->getrfidactive();
		// didapat dari ajax yang dimana data{nama:nama,alamat:alamat}
		
        $json_result =  json_encode(array($getidkartu));
        echo $json_result;
        // dd($getidkartu);die;
    }
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
        $modelmode = new Mode_model();
        $tampilmode = $modelmode->detail();
        $data = array(
            'title'        => 'Sistem Monitoring Anggota Perpustakaan | Tambah Data Anggota',
            'bc' => 'Tambah Data Anggota',
            'link' => '/anggota/tambah',
            'tampilmode' => 'tampilmode',
            'content'    => 'anggota/tambah',
        );
        return view('layout/wrapper', $data);
    }

    public function cari()
    {
        $request = \Config\Services::request();
        $model = new Anggota_model();
        $id_anggota = $request->getGet('id_anggota');
        // dd($kd_pasien);
        $cari = $model->detail($id_anggota);

        $json_result =  json_encode(array($cari));
        echo $json_result;
    }
    public function cekkartu()
    {
        helper('form');
        $session = \Config\Services::session();
        // Proteksi
        if ($session->get('username') == "") {
            $session->setFlashdata('pesan', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }
        // End proteksi
        $datamode = array(
            'id_mode'        => '1',
            'nama_mode'        => 'Cek Kartu'
        );
        $modelmode = new Mode_model();
        $modelmode->edit($datamode);
        $tampilmode = $modelmode->detail();
        $data = array(
            'title'        => 'Sistem Monitoring Anggota Perpustakaan | Cek Kartu',
            'bc' => 'Cek Kartu Anggota',
            'tampilmode' => $tampilmode,
            'link' => '/pengunjung/cek-kartu',
            'content'    => 'pengunjung/cek-kartu'
        );
        return view('layout/wrapper', $data);
    }

    // simpan
    public function simpan_data()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');
        $tgl_lahir = date("Y-m-d", strtotime($request->getVar('tgl_lahir')));
        $data = array(
            'id_anggota'        => $request->getVar('id_anggota'),
            'nama'        => $request->getVar('nama'),
            'alamat'        => $request->getVar('alamat'),
            'jk'        => $request->getVar('jk'),
            'agama'        => $request->getVar('agama'),
            'tmp_lahir'            => $request->getVar('tmp_lahir'),
            'tgl_lahir'        => $tgl_lahir,
            'tgl_daftar'        => $now,
            'jenis'        => $request->getVar('jenis')
        );
        $model = new anggota_model();
        $model->save($data);
        $data = array(
            'id'        => "1",
            'id_rfid'        => " "
        );
        
        $model = new Rfid_model();
        $model->edit($data);
        $session->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('anggota/index'));
    }

    // public function simpan_dataalat()
    // {
    //     $model = new anggota_model();

    //     $id_anggota = $model->id_anggota();
    //     $anggotaakhir = $model->listingakhir();
    //     // dd($anggotaakhir['waktu_anggota']);
        
    //     $request = \Config\Services::request();
    //     // $tinggitakaran = $request->getVar('liter');
        
    //     $tglsekarang =  date('Y-m-d H:i:s');
    //     $now1 = Time::now('Asia/Jakarta');
    //     $tglanggota    = Time::parse($anggotaakhir['waktu_anggota']);
    //     // $selisih = $now1 - $tglanggota;
    //     $diff = $tglanggota->difference($now1);
    //     // dd($diff->getHours());
    //     if ($diff->getHours() <= 2){
            
    //     }
    //     else{
    //         date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
    //     $now = date('Y-m-d H:i:s');
    //     $data = array(
    //         'id_anggota'        => $id_anggota,
    //         'liter'            => $request->getVar('liter'),
    //         'waktu_anggota'        => $now
    //     );
    //     $model = new anggota_model();
    //     $model->save($data);
    //     }
        
    // }

    // Edit
    public function edit($id_anggota)
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
        $model         = new anggota_model();
        $anggota         = $model->detail($id_anggota);
        $data = array(
            'title'        => 'Sistem Monitoring Anggota Perpustakaan | Edit Data Anggota',
            'bc' => 'Edit Data Anggota',
            'link' => '/anggota/edit',
            'anggota'        => $anggota,
            'content'    => 'anggota/edit'

        );
        return view('layout/wrapper', $data);
    }

    // edit simpan
    public function edit_simpan()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $data = array(
            'id_anggota'        => $request->getVar('id_anggota'),
            'nama'        => $request->getVar('nama'),
            'alamat'        => $request->getVar('alamat'),
            'jk'        => $request->getVar('jk'),
            'agama'        => $request->getVar('agama'),
            'tmp_lahir'            => $request->getVar('tmp_lahir'),
            'tgl_lahir'        => $request->getVar('tgl_lahir'),
            'jenis'        => $request->getVar('jenis')
        );
        $model = new anggota_model();
        $model->edit($data);
        $session->setFlashdata('pesan', 'Data telah diupdate');
        return redirect()->to(base_url('anggota/index'));
    }

    // Delete
    public function delete($id_anggota)
    {
        $session = \Config\Services::session();
        // Proteksi
        if ($session->get('username') == "") {
            $session->setFlashdata('pesan', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }
        // End proteksi
        $model     = new anggota_model();
        $model->hapus($id_anggota);
        $session->setFlashdata('pesan', 'Data telah dihapus');
        return redirect()->to(base_url('anggota/index'));
    }
}
