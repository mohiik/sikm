<?php

namespace App\Models;

use CodeIgniter\Model;

class InputModel extends Model
{
    // ...
    protected $table      = 'sertifikat';
    protected $primaryKey = 'id_sertifikat';
    protected $allowedFields = [
        'id_sertifikat', 'nim', 'nama_kegiatan', 'kategori', 'jabatan', 'tingkat', 'poin_skm', 'status_sertifikat', 'gambar', 'periode_mulai', 'periode_selesai'
    ];
}
