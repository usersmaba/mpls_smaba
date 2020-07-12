<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'data_peserta';
    protected $primaryKey = 'id_peserta';
    protected $useSoftDeletes = true;
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $allowedFields = [
        'no_telpon',
        'jurusan_pilihan',
        'nilai_skhu',
        'merek_hp',
        'bisa_online',
        'alasan_tidak_bisa_online',
        'absen_h1',
        'respon_h1',
        'absen_h2',
        'respon_h2',
        'absen_h3',
        'respon_h3',
        'pesan_kesan'
    ];


    public function get_user($id_peserta)
    {
        return $this->where(['id_peserta' => $id_peserta])->first();
    }
    public function save_profile($data, $id)
    {
        $this->where('id_peserta', $id);
        return $this->update($id, $data);
    }
    public function import_siswa($data)
    {
        $this->insertBatch($data);
        return true;
    }
    public function save_absen($data, $no_pendaftaran)
    {
        $this->where('id_peserta', $no_pendaftaran);
        //  $this->set($data);
        $this->update($no_pendaftaran, $data);
        echo 1;
    }
}
