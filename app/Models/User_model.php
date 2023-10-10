<?php

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model
{
    protected $table         = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['kd_user', 'nama', 'username', 'email', 'tentang', 'password',];

    // Listing
    public function listing()
    {
        $this->select('*');
        $query = $this->get();
        return $query->getResultArray();
    }

    // Detail
    public function detail($kd_user)
    {
        $this->select('*');
        $this->where(array('kd_user'    => $kd_user));
        $query = $this->get();
        return $query->getRowArray();
    }

    // Detail
    public function login($username, $password)
    {
        $this->select('*');
        $this->where([
            'username'    => $username,
            'password'    => sha1($password)
        ]);
        $query = $this->get();
        return $query->getRowArray();
    }

    // Insert
    public function tambah($data)
    {
        $this->save($data);
    }

    public function newkd_user()
    {
        $query = $this->db->query("SELECT MAX(kd_user) as kd_user from users");
        $kode = $query->getRow()->kd_user;
        $noUrut = (int) substr($kode, 3, 4);
        $noUrut++;
        $char = "USR";
        $newID = $char . sprintf("%03s", $noUrut);
        return $newID;
    }
    // Edit
    public function edit($data)
    {
        $this->where('kd_user', $data['kd_user']);
        $this->replace($data);
    }

    // Delete
    public function hapus($kd_user)
    {
        $this->where('kd_user', $kd_user);
        $this->delete();
    }
}
