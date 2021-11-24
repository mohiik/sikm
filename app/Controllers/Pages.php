<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SertifikatModel;
use App\Models\MahasiswaModel;
use App\Models\KegiatanModel;
use App\Models\PesananModel;
use mysqli;


class Pages extends BaseController
{
    public $sertifikatModel;
    public $kegiatanModel;
    public $mahasiswaModel;
    public $dataIndex;

    public function __construct()
    {
        $this->sertifikatModel = new SertifikatModel();
        $this->mahasiswaModel = new MahasiswaModel();
        $this->kegiatanModel = new KegiatanModel();
        $this->dataIndex = [
            'kepanitiaan' => $this->kegiatanModel->getKegiatanByJenis('kepanitiaan'),
            'lomba' => $this->kegiatanModel->getKegiatanByJenis('lomba'),
            'seminar' => $this->kegiatanModel->getKegiatanByJenis('seminar')
        ];
    }

    public function index()
    {
        return view('index', $this->dataIndex);
    }
    public function pkl()
    {
        $data = ['pkl' => $this->kegiatanModel->getKegiatanByJenis('pkl'), 'dummy' => ""];
        return view('pkl', $data);
    }
    public function skmku()
    {
        $nim = $_SESSION['nim'] = 19515040;
        $sertifMhs = $this->sertifikatModel->getSertifikatByNim($nim);
        $hasil = 0;
        foreach ($sertifMhs as $sertif) {
            $hasil += $sertif['poin_skm'];
        }
        $data = [
            'poin_skm' => $hasil,
            'dummy' => ""
        ];
        return view('skmku', $data);
    }

    public function info()
    {
        return view('info');
    }

    public function panitia_lebih()
    {
        return view('panitia_lebih');
    }

    public function lomba_lebih()
    {
        return view('lomba_lebih');
    }

    public function seminar_lebih()
    {
        return view('seminar_lebih');
    }
    public function input_sertifikat()
    {
        return view('InputView');
    }
    public function logout()
    {
        session_destroy();
        return view(base_url('Auth'));
    }
}
