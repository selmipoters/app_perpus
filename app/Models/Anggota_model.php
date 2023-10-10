<?php

namespace App\Models;

use CodeIgniter\Model;

class Anggota_model extends Model
{
    protected $table         = 'anggota';
    protected $allowedFields = ['id_anggota', 'nama', 'alamat','jk','agama','tmp_lahir','tgl_lahir','tgl_daftar','jenis'];

    // Listing
    public function listing()
    {
        $this->select('*');
        $query = $this->get();
        return $query->getResultArray();
    }
    public function listingakhir()
    {
        $this->select('tgl_daftar');
        // $this->db->order_by('kd_telur', 'desc');
        $this->orderBy('id_anggota','desc');
        $this->limit(1);
        $query = $this->get();
        return $query->getRowArray();
    }

    // Detail
    public function detail($id_anggota)
    {
        $this->select('*');
        $this->where(array('id_anggota'    => $id_anggota));
        $query = $this->get();
        return $query->getRowArray();
    }
    function cetakperiode($tglawal,$tglakhir) {
        $sql = "SELECT * FROM anggota
		WHERE tgl_daftar BETWEEN '$tglawal' and '$tglakhir'";
        $query = $this->db->query($sql);
        return $query->getResult();
	}	
    function listingweek($tglawal,$tglakhir) {
        $sql = "SELECT * FROM anggota
		WHERE tgl_daftar BETWEEN '$tglawal' and '$tglakhir'";
        $query = $this->db->query($sql);
        return $query->getResult();
	}	
    function listingday($tgl) {
        $sql = "SELECT * FROM anggota
		WHERE tgl_daftar = '$tgl'";
        $query = $this->db->query($sql);
        return $query->getResult();
	}	
    function listingmonth($tglawal,$tglakhir) {
        $sql = "SELECT * FROM anggota
		WHERE tgl_daftar BETWEEN '$tglawal' and '$tglakhir'";
        $query = $this->db->query($sql);
        return $query->getResult();
	}	
    function banyakanggota($tglawal,$tglakhir) {
        $sql = "SELECT id_anggota FROM anggota
		WHERE tgl_daftar BETWEEN '$tglawal' and '$tglakhir'";
        $query = $this->db->query($sql);
        return $query->getRowArray();
	}	
    // Insert
    public function tambah($data)
    {
        $this->save($data);
    }

    // public function newid_anggota()
    // {
    //     $query = $this->db->query("SELECT MAX(id_anggota) as id_anggota from anggota");
    //     $kode = $query->getRow()->id_anggota;
    //     $noUrut = (int) substr($kode, 3, 8);
    //     $noUrut++;
    //     $char = "PKN";
    //     $newID = $char . sprintf("%05s", $noUrut);
    //     return $newID;
    // }
    // Edit
    public function edit($data)
    {
        $this->where('id_anggota', $data['id_anggota']);
        $this->replace($data);
    }

    // Delete
    public function hapus($id_anggota)
    {
        $this->where('id_anggota', $id_anggota);
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
