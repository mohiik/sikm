<?php

namespace App\Controllers;

use App\Models\InputModel;
use App\Models\SertifikatModel;

class Riwayat extends BaseController
{
    protected $sertifikatModel;

    public function __construct()
    {
        $this->sertifikatModel = new SertifikatModel();
    }

    public function index()
    {
        $sertif = $this->sertifikatModel->findAll();
        $data = [
            'sertif' => $sertif
        ];

        return view('RiwayatView', $data);
    }
}
