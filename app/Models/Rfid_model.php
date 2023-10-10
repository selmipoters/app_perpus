<?php

namespace App\Models;

use CodeIgniter\Model;

class Rfid_model extends Model
{
    protected $table         = 'rfid_active';
    protected $allowedFields = ['id','id_rfid'];

    // Listing
    
    public function edit($data)
    {
        $this->where('id', $data['id']);
        $this->replace($data);
    }
   
}
