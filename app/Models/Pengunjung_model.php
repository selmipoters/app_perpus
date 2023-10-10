<?php

namespace App\Models;

use CodeIgniter\Model;

class Pengunjung_model extends Model
{
    protected $table         = 'daftar_hadir';
    protected $allowedFields = ['id_pengunjung', 'tgl_masuk', 'tgl_keluar','status','nama','jam_masuk','jam_keluar', 'id','id_rfid'];

    // Listing
    public function listing()
    {
        $this->select('*');
        $this->join('anggota', 'daftar_hadir.id_pengunjung = anggota.id_anggota', 'LEFT');
        $query = $this->get();
        return $query->getResultArray();
    }
    public function listinggrafik()
    {
        $query = $this->db->query("SELECT DISTINCT tgl_masuk,COUNT(*) 'total' from daftar_hadir  GROUP BY tgl_masuk,tgl_masuk");
        return $query->getResult();
    }
    public function listinggrafik2()
    {
        $query = $this->db->query("SELECT DISTINCT tgl_masuk from daftar_hadir  GROUP BY tgl_masuk");
        return $query->getResult();
    }
    public function listingakhir()
    {
        $this->select('tgl_masuk');
        // $this->db->order_by('kd_telur', 'desc');
        $this->orderBy('id_pengunjung','desc');
        $this->limit(1);
        $query = $this->get();
        return $query->getRowArray();
    }
    public function editrfid($data)
    {
        $this->where('id', $data['id']);
        $this->replace($data);
    }
    // Detail
    public function detail($id_pengunjung)
    {
        // $this->select('*');
        // $this->where(array('id_pengunjung'    => $id_pengunjung));
        // $query = $this->getRow();
        // return $query->nomor_p;

        $query = $this->db->query("SELECT * from daftar_hadir where id_pengunjung = '".$id_pengunjung."' AND status='Masuk'");
        return $query->getResult();
    }
    function cetakperiode($tglawal,$tglakhir) {
        $sql = "SELECT * FROM daftar_hadir
		WHERE tgl_daftar BETWEEN '$tglawal' and '$tglakhir'";
        $query = $this->db->query($sql);
        return $query->getResult();
	}	
    function listingweek($tglawal,$tglakhir) {
        $sql = "SELECT * FROM daftar_hadir
		WHERE tgl_masuk BETWEEN '$tglawal' and '$tglakhir'";
        $query = $this->db->query($sql);
        return $query->getResult();
	}	

    function listingmasuk() {
        $this->select('*');
        
        $this->where(array('status'    => 'Masuk'));
        $query = $this->get();
        return $query->getResult();
	}	
    function listingkeluar() {
        $sql = "SELECT * FROM daftar_hadir
		WHERE status = 'Keluar'";
        $query = $this->db->query($sql);
        return $query->getResult();
	}	
    function listingday($tgl) {
        $sql = "SELECT * FROM daftar_hadir
		WHERE tgl_masuk = '$tgl'";
        $query = $this->db->query($sql);
        return $query->getResult();
	}	
    function listingmonth($tglawal,$tglakhir) {
        $sql = "SELECT * FROM daftar_hadir
		WHERE tgl_masuk BETWEEN '$tglawal' and '$tglakhir'";
        $query = $this->db->query($sql);
        return $query->getResult();
	}	
    function banyakpengunjung($tglawal,$tglakhir) {
        $sql = "SELECT id_pengunjung FROM daftar_hadir
		WHERE tgl_daftar BETWEEN '$tglawal' and '$tglakhir'";
        $query = $this->db->query($sql);
        return $query->getRowArray();
	}	
    // Insert
    public function tambah($data)
    {
        $this->save($data);
    }

    // public function newid_pengunjung()
    // {
    //     $query = $this->db->query("SELECT MAX(id_pengunjung) as id_pengunjung from pengunjung");
    //     $kode = $query->getRow()->id_pengunjung;
    //     $noUrut = (int) substr($kode, 3, 8);
    //     $noUrut++;
    //     $char = "PKN";
    //     $newID = $char . sprintf("%05s", $noUrut);
    //     return $newID;
    // }
    // Edit
    public function edit($data)
    {
        $this->where('nomor_p', $data['nomor_p']);
        $this->replace($data);
    }

    // Delete
    public function hapus($id_pengunjung)
    {
        $this->where('id_pengunjung', $id_pengunjung);
        $this->delete();
    }
    public function getrfidactive()
    {
        // $this->db->select('*');
		// $this->db->from('rfid_active');
        // $query = $this->db->get();
        // return $query->result_array();
        $sql = "SELECT * FROM rfid_active";
        $query = $this->db->query($sql);
        return $query->getRowArray();
    }
}
