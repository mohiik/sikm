<?php

namespace App\Models;

use CodeIgniter\Model;

class SertifikatModel extends Model
{
    protected $table = 'sertifikat';
    protected $primaryKey = 'id_sertifikat';
    protected $allowedFields = [
        'id_sertifikat', 'nim', 'nama_kegiatan', 'kategori', 'jabatan', 'tingkat', 'poin_skm', 'status_sertifikat', 'gambar', 'periode_mulai', 'periode_selesai'
    ];

    public function getSertifikat($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_sertifikat' => $id])->first();
    }
    public function getSertifikatByNim($nim)
    {
        return $this->where(['nim' => $nim])->findAll();
    }
}
