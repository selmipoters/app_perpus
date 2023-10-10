<?php

namespace App\Models;

use CodeIgniter\Model;

class Mode_model extends Model
{
    protected $table         = 'mode_rfid';
    protected $allowedFields = ['id_mode','nama_mode'];

    // Listing
    
    public function edit($data)
    {
        $this->where('id_mode', $data['id_mode']);
        $this->replace($data);
    }
    public function detail()
    {

        $query = $this->db->query("SELECT * from mode_rfid where id_mode = '1'");
        $kode = $query->getRow()->nama_mode;
        return $kode;
        // $this->select('*');
        // $this->where(array('id_mode'    => '1'));
        // $query = $this->get();
        // return $query->getResult();
    }
   
}
