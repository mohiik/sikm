<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SertifikatModel;
use App\Models\MahasiswaModel;
use App\Models\KegiatanModel;
use mysqli;


class Admin extends BaseController
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
        return view('admin/index', $this->dataIndex);
    }
    public function input_poin()
    {
        $data = [
            'sertifikat' => $this->sertifikatModel->getSertifikat(),
            'dummy' => ""
        ];
        return view('admin/input_poin', $data);
    }
    public function detail_sertifikat($id)
    {
        $sertifikat = $this->sertifikatModel->getSertifikat($id);
        $mhs = $this->mahasiswaModel->getMahasiswa($sertifikat['nim']);
        $data = [
            'sertifikat' => $this->sertifikatModel->getSertifikat($id),
            'mhs' => $mhs,
            'validasi' => \Config\Services::validation(),
            'dummy' => ""
        ];
        return view('admin/detail_sertifikat', $data);
    }
    public function update_sertifikat($id)
    {
        if (!$this->validate([
            'status' => 'required|alpha',
            'poin_skm' => [
                'rules' => 'required|integer|max_length[4]',
                'errors' => [
                    'required' => 'Masukkan poin terlebih dahulu',
                    'integer' => 'Hanya menerima angka',
                    'max_length[4]' => 'Maksimal 1000 poin'
                ]
            ],

        ])) {
            $validasi = \Config\Services::validation();
            return redirect()->to(base_url('admin') . '/detail_sertifikat' . '/' . $id)->withInput()->with('validasi', $validasi);
        }
        if ($this->request->getVar('status') == 'Ditolak' || $this->request->getVar('status') == 'Diproses') {
            $this->sertifikatModel->update($id, [
                "status_sertifikat" => $this->request->getVar('status'),
                "poin_skm" => 0
            ]);
        } else {
            $this->sertifikatModel->update($id, [
                "status_sertifikat" => $this->request->getVar('status'),
                "poin_skm" => $this->request->getVar('poin_skm')
            ]);
        }

        session()->setFlashdata('update', 'Update sukses');
        return redirect()->to(base_url('admin') . '/input_poin');
    }
    public function posting()
    {
        $data = [
            'validasi' => \Config\Services::validation(),
            'dummy' => ""
        ];
        return view('admin/posting', $data);
    }
    public function upload_kegiatan()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Masukkan judul terlebih dahulu'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Masukkan deskripsi terlebih dahulu'
                ]
            ],
            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Masukkan gambar terlebih dahulu!',
                    'max_size' => 'Ukuran gambar terlalu besar!',
                    'is_image' => 'Yang anda pilih bukan gambar!',
                    'mime_in' => 'Yang anda pilih bukan gambar!'
                ]
            ]
        ])) {
            $validasi = \Config\Services::validation();
            return redirect()->to(base_url('admin') . '/posting')->withInput()->with('validasi', $validasi);
        }
        //ambil gambar
        $fileSertif = $this->request->getFile('gambar');
        //pindah file ke folder img
        $fileSertif->move('images');
        // ambil nama file
        $locKegiatan = $fileSertif->getName();
        // dd($fileSertif);
        $this->kegiatanModel->save([
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'jenis' => $this->request->getVar('jenis'),
            'gambar' => $locKegiatan
        ]);
        session()->setFlashdata('posting', 'Posting kegiatan berhasil');
        return redirect()->to(base_url('admin'));
    }
}
