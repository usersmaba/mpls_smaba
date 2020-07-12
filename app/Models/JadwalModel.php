<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table      = 'jadwal_kegiatan';
    protected $primaryKey = 'id_jadwal';

    protected $allowedFields = [];


    public function get_jadwal()
    {
        return $this->where(['id_jadwal' => 1])->first();
    }
}
