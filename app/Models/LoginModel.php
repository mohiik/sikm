<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $allowedFields = [
        'nim', 'nama', 'password_', 'poin_skm'
    ];
}
