<?php

namespace App\Controllers;
use App\Models\Anggota_model;
use App\Models\Pengunjung_model;
use App\Models\User_model;
use App\Models\Rfid_model;
use App\Models\Mode_model;
class Dashboard extends BaseController
{
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
            'nama_mode'        => 'Pengunjung'
        );
        $modelmode = new Mode_model();
        $modelmode->edit($datamode);
        $tampilmode = $modelmode->detail();
        $model = new Anggota_model();
        $pengunjungmodal = new Pengunjung_model();
        $modeluser = new User_model();
        $anggota = $model->listing();
        $user = $modeluser->listing();
        $banyakanggota = count($anggota);
        $banyakuser = count($user);
        date_default_timezone_set("Asia/Bangkok");
        $tgl1 = date('Y-m-d');// pendefinisian tanggal awal
        // dd($tgl1);die;
        $tgl2 = date('Y-m-d', strtotime('-7 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
        $bulan1 = date('Y-m-d');// pendefinisian tanggal awal
        $bulan2 = date('Y-m-d', strtotime('-1 month', strtotime($bulan1))); 
        // dd($tgl1,$tgl2,$bulan1,$bulan2);
        $pengunjungday = $pengunjungmodal->listingday($tgl1);
        $pengunjungweek = $pengunjungmodal->listingmonth($tgl2,$tgl1);
        $pengunjungmonth = $pengunjungmodal->listingmonth($bulan2,$bulan1);
        $pengunjungdidalam = $pengunjungmodal->listingmasuk();
        $pengunjungkeluar = $pengunjungmodal->listingkeluar();
        // dd($pengunjungdidalam);die;
        $banyakpengunjungday = count($pengunjungday);
        $banyakpengunjungweek = count($pengunjungweek);
        $banyakpengunjungmonth = count($pengunjungmonth);
        $banyakpengunjungdidalam = count($pengunjungdidalam);
        $banyakpengunjungkeluar = count($pengunjungkeluar);
        $grafik = $pengunjungmodal->listinggrafik();
        $grafiktgl = $pengunjungmodal->listinggrafik2();
        // $anggotaweek = $model->listingweek($tgl2,$tgl1);
        // $banyakanggotaweek = count($anggotaweek);
        // $anggotamonth = $model->listingmonth($bulan2,$bulan1);
        // $banyakanggotamonth = count($anggotamonth);
        $data = array(
            'title'        => 'Sistem Monitoring Pengunjung Perpustakaan | Dashboard',
            'bc' => 'Dashboard',
            'banyakanggota' => $banyakanggota,
            'banyakuser' => $banyakuser,
            'tampilmode' => $tampilmode,
            'datagrafik' => $grafik,
            'grafiktgl' => $grafiktgl,
            'banyakpengunjungday' => $banyakpengunjungday,
            'banyakpengunjungweek' => $banyakpengunjungweek,
            'banyakpengunjungmonth' => $banyakpengunjungmonth,
            'banyakpengunjungdidalam' => $banyakpengunjungdidalam,
            'banyakpengunjungkeluar' => $banyakpengunjungkeluar,
            // 'banyakanggotamonth' => $banyakanggotamonth,
            // 'banyakanggotaweek' => $banyakanggotaweek,
            'link' => '/dashboard/index',
            'content'    => 'dashboard/index'
        );
        return view('layout/wrapper', $data);
    }
    public function edit_mode()
    {
        $request = \Config\Services::request();
        $data = array(
            'id_mode'        => "1",
            'nama_mode'        => $request->getVar('nama_mode')
        );
        $model = new Mode_model();
        $model->edit($data);
    }
    public function tampilmode()
    {
        $request = \Config\Services::request();
        $model = new Mode_model();
        $cari = $model->detail();

        $json_result =  json_encode(array($cari));
        echo $json_result;
    }

    public function tampildata()
    {
        $request = \Config\Services::request();
        date_default_timezone_set("Asia/Bangkok");
        $tgl1 = date('Y-m-d');// pendefinisian tanggal awal
        $model = new Pengunjung_model();
        $masuk = $model->listingmasuk();
        $pengunjungday = $model->listingday($tgl1);
        $banyakpengunjungdidalam = count($masuk);
        $banyakpengunjungday = count($pengunjungday);
        $json_result =  json_encode(array(
                                    'masuk' => $banyakpengunjungdidalam,'day' => $banyakpengunjungday));
        echo $json_result;
    }

}
