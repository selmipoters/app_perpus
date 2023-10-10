<?php

namespace App\Controllers;
// Load model
use App\Models\Mode_model;
// End load model
$dompdf = new \Dompdf\Dompdf();
class Laporan extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();
        $datamode = array(
            'id_mode'        => '1',
            'nama_mode'        => 'Pengunjung'
        );
        $modelmode = new Mode_model();
        $modelmode->edit($datamode);
        $tampilmode = $modelmode->detail();
        // Proteksi
        if ($session->get('username') == "") {
            $session->setFlashdata('pesan', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }
        $data = array(
            'title'        => 'Sistem Pakan Hewan | Laporan',
            'bc' => 'Laporan',
            'tampilmode' => $tampilmode,
            'link' => '/laporan/index',
            'content'    => 'laporan/index'
        );
        return view('layout/wrapper', $data);
    }
    public function cetakperiode() {
        $model = new Pakan_model();
        $laporan = new Pakan_model();
        $request = \Config\Services::request();
        
		$tglawal = date('Y-m-d',strtotime($request->getVar('start')));
		$tglakhir = date('Y-m-d',strtotime($request->getVar('end')));
		$pakan = $model->cetakperiode($tglawal,$tglakhir);
        $banyakpakan = $model->banyakpakan($tglawal,$tglakhir);
		
		$data = array(
			'pakan' 	=> $pakan,
			'banyakpakan' 	=> $banyakpakan,
			'tglawal' => $tglawal,
			'tglakhir' => $tglakhir
		);
        // dd($banyakpakan);
		// print_r($data);die;
        // return view('/laporan/laporanperiode', $data);
	    $dompdf = new \Dompdf\Dompdf(); 
        $dompdf->loadHtml(view('/laporan/laporanperiode', $data));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
	}


}
