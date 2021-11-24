<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SertifikatModel;
use App\Models\MahasiswaModel;
use App\Models\KegiatanModel;
use App\Models\LoginModel;
use App\Models\modelLogin;
use App\Models\PesananModel;
use mysqli;


class Auth extends BaseController
{
    protected $modelLogin;
    public function __construct()
    {
        $this->modelLogin = new LoginModel();
    }

    public function index()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];

        return view('LoginView', $data);
    }

    public function loginProcess()
    {
        if (!$this->validate([
            'nim' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nim tidak boleh kosong!',
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password tidak boleh kosong!',
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/Auth')->withInput()->with('validation', $validation);
            return redirect()->to('/Auth')->withInput();
        } else {
            $nim = $this->request->getVar('nim');
            $password = $this->request->getVar('password');

            $db = \Config\Database::connect();
            $mahasiswa = $db->table('mahasiswa')->getWhere(['nim' => $nim])->getRowArray();
            // dd($mahasiswa['password']);

            if ($mahasiswa) {
                //user ada
                if ($password == $mahasiswa['password_']) {

                    $_SESSION['nim'] = $nim;
                    $_SESSION['nama'] = $mahasiswa['nama'];
                    return redirect()->to('/Pages');
                } else {
                    session()->setFlashData('pesan', 'Password salah!');
                    return redirect()->to('/Auth');
                }
            } else {
                session()->setFlashData('pesan', 'Nim salah!');
                return redirect()->to('/Auth');
            }
        }
    }
}
