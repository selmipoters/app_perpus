<?php

namespace App\Controllers;

// Load model
use App\Models\Pengunjung_model;
use App\Models\Rfid_model;
use App\Models\Mode_model;
// End load model

use CodeIgniter\Controller;

class Pengunjung extends Controller
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
        $model = new Pengunjung_model();
        $pengunjung = $model->listing();
        $datamode = array(
            'id_mode'        => '1',
            'nama_mode'        => 'Pengunjung'
        );
        $modelmode = new Mode_model();
        $modelmode->edit($datamode);
        $tampilmode = $modelmode->detail();
        $data = array(
            'title'        => 'Sistem Pakan Hewan | Data Pengunjung',
            'bc' => 'Data Pengunjung',
            'link' => '/pengunjung/index',
            'tampilmode' => $tampilmode,
            'pengunjung'        => $pengunjung,
            'content'    => 'pengunjung/index'
        );
        return view('layout/wrapper', $data);
    }

    // Tambah
    public function simpan_rfid()
    {
        $request = \Config\Services::request();
        $model = new Mode_model();
        $mode_rfid = $model->detail();
        // dd($mode_rfid);die;
        if ($mode_rfid == "Pengunjung"){

            $modelbaru = new Pengunjung_model();
            $cekpengunjung = $modelbaru->detail($request->getVar('id_rfid'));
            // dd($cekpengunjung[0]->nomor_p);die;
            
            // dd($cekpengunjung[0]->status);die;
            if ($cekpengunjung == TRUE){
                date_default_timezone_set("Asia/Bangkok");
                $tgl_keluar = date("Y-m-d");
                $jam_keluar = date("H:i:s");
                $data = array(
                    'nomor_p'        => $cekpengunjung[0]->nomor_p,
                    'id_pengunjung'        => $request->getVar('id_rfid'),
                    'tgl_keluar'        => $tgl_keluar,
                    'jam_keluar'        => $jam_keluar,
                    'tgl_masuk'        => $cekpengunjung[0]->tgl_masuk,
                    'jam_masuk'        => $cekpengunjung[0]->jam_masuk,
                    'status'            => 'Keluar'
                );
                $model = new Pengunjung_model();
                $model->edit($data);
                echo "Keluar";
                
            }
            else{
                date_default_timezone_set("Asia/Bangkok");
                $tgl_masuk = date("Y-m-d");
                $jam_masuk = date("H:i:s");
                $data = array(
                    'id_pengunjung'        => $request->getVar('id_rfid'),
                    'tgl_masuk'        => $tgl_masuk,
                    'jam_masuk'        => $jam_masuk,
                    'status'            => 'Masuk'
                );
                $model = new Pengunjung_model();
                $model->tambah($data);
                echo "Masuk";
            }
            
            
        }
        else{
        $request = \Config\Services::request();
        $data = array(
            'id'        => "1",
            'id_rfid'        => $request->getVar('id_rfid')
        );
        $model = new Rfid_model();
        $model->edit($data);
        }
    }

    // simpan
    public function simpan_data()
    {
        $session = \Config\Services::session();
        $request = \Config\Services::request();
        $data = array(
            'kd_pengunjung'        => $request->getVar('kd_pengunjung'),
            'nama'            => $request->getVar('nama'),
            'username'        => $request->getVar('username'),
            'password'        => sha1($request->getVar('password')),
            'email'    => $request->getVar('email'),
            'tentang' => $request->getVar('tentang')
        );
        $model = new pengunjung_model();
        $model->save($data);
        $session->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('pengunjung/index'));
    }

    public function getdatapengunjung()
    {
        $model = new Pengunjung_model();
        $getgrafik = $model->listinggrafik();
        // dd($getgrafik);die;
		// didapat dari ajax yang dimana data{nama:nama,alamat:alamat}
		// dd($getgrafik);die;
        $json_result =  json_encode(array($getgrafik));
        echo $json_result;
        // dd($getidkartu);die;
    }

    // Delete
    public function delete($kd_pengunjung)
    {
        $session = \Config\Services::session();
        // Proteksi
        if ($session->get('username') == "") {
            $session->setFlashdata('pesan', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }
        // End proteksi
        $model     = new Pengunjung_model();
        $model->hapus($id_pengunjung);
        $session->setFlashdata('pesan', 'Data telah dihapus');
        return redirect()->to(base_url('pengunjung/index'));
    }
}
