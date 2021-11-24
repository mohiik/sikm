<?php

namespace App\Models;

use CodeIgniter\Model;

class KegiatanModel extends Model
{
    protected $table = 'kegiatan';
    protected $primaryKey = 'id_kegiatan';
    protected $allowedFields = [
        'id_kegiatan', 'jenis', 'judul', 'deskripsi', 'gambar', 'tanggal_unggah'
    ];

    public function getKegiatan($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_kegiatan' => $id])->first();
    }
    public function getKegiatanByJenis($jenis)
    {
        return $this->where(['jenis' => $jenis]);
    }
    public function getLomba()
    {
        return $this->where(['jenis' => "lomba"]);
    }
    public function getKepanitiaan()
    {
        return $this->where(['jenis' => "kepanitiaan"]);
    }
    public function getSeminar()
    {
        return $this->where(['jenis' => "seminar"]);
    }
    public function getPkl()
    {
        return $this->where(['jenis' => "pkl"]);
    }
}
