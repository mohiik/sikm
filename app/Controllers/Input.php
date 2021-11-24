<?php

namespace App\Controllers;

use App\Models\InputModel;


class Input extends BaseController
{
    protected $InputModel;
    protected $kategorii, $tingkat, $jabatan;
    public function __construct()
    {
        $this->InputModel = new InputModel();
    }

    public function index()
    {

        return view('InputView');
    }

    public function inputData($angka)
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        $_SESSION['kategori'] = $angka;
        return view('FormInputView', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong!'
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
            // $validation = \Config\Services::validation();
            // return redirect()->to('/Input/inputData' . $_SESSION['kategori'])->withInput()->with('validation', $validation);
            return redirect()->to('/Input/inputData/' . $_SESSION['kategori'])->withInput();
        }
        switch ($_SESSION['kategori']) {
            case 1:
                $kategorii = 'keorganisasian-lembaga';
                break;
            case 2:
                $kategorii = 'keorganisasian-lembaga';
                break;
            case 3:
                $kategorii = 'keorganisasian-lembaga';
                break;
            case 4:
                $kategorii = 'keorganisasian-lembaga';
                break;
            case 5:
                $kategorii = 'keorganisasian-lembaga';
                break;
            case 6:
                $kategorii = 'keorganisasian-lembaga';
                break;
            case 7:
                $kategorii = 'keorganisasian-lembaga';
                break;
            case 8:
                $kategorii = 'keorganisasian-lembaga';
                break;
            case 9:
                $kategorii = 'keorganisasian-lembaga';
                break;
            case 10:
                $kategorii = 'Kepanitiaan-lembaga';
                break;
            case 11:
                $kategorii = 'Kepanitiaan-lembaga';
                break;
            case 12:
                $kategorii = 'prestasi/kejuaraan-lembaga';
                break;
            case 13:
                $kategorii = 'prestasi/kejuaraan-lembaga';
                break;
            case 14:
                $kategorii = 'prestasi/kejuaraan-lembaga';
                break;
            case 15:
                $kategorii = 'prestasi/kejuaraan-lembaga';
                break;
            case 16:
                $kategorii = 'kepesertaan-lembaga';
                break;
            case 17:
                $kategorii = 'kepesertaan-lembaga';
                break;
            case 18:
                $kategorii = 'kepesertaan-lembaga';
                break;
            case 19:
                $kategorii = 'kepesertaan-lembaga';
                break;
            case 20:
                $kategorii = 'rekognisi-lembaga';
                break;
            case 21:
                $kategorii = 'rekognisi-lembaga';
                break;
            case 22:
                $kategorii = 'rekognisi-lembaga';
                break;
            case 23:
                $kategorii = 'rekognisi-lembaga';
                break;
            case 24:
                $kategorii = 'rekognisi-lembaga';
                break;
            case 25:
                $kategorii = 'rekognisi-lembaga';
                break;
            case 26:
                $kategorii = 'kewirausahaan-lembaga';
                break;
            case 27:
                $kategorii = 'kewirausahaan-lembaga';
                break;
            case 28:
                $kategorii = 'kewirausahaan-lembaga';
                break;
        }
        $value = $this->request->getVar('value');
        switch ($value) {
            case 1:
                $tingkat = 'Internasional';
                break;
            case 2:
                $tingkat = 'Nasional';
                break;
            case 3:
                $tingkat = 'Nasional Dikti';
                break;
            case 4:
                $tingkat = 'Nasional Non Dikti';
                break;
            case 5:
                $tingkat = 'Regional';
                break;
            case 6:
                $tingkat = 'Universitas';
                break;
            case 7:
                $tingkat = 'Fakultas';
                break;
            case 8:
                $tingkat = 'Jurusan/Program Studi';
                break;
            case 9:
                $tingkat = 'Komunitas Studi';
                break;
        }
        $value1 = $this->request->getVar('value1');
        switch ($value1) {
            case 1:
                $jabatan = 'Ketua';
                break;
            case 2:
                $jabatan = 'Pembicara';
                break;
            case 3:
                $jabatan = 'Peserta';
                break;
            case 4:
                $jabatan = 'Perorangan';
                break;
        }
        //ambil gambar
        $fileSertif = $this->request->getFile('gambar');
        //pindah file ke folder img
        $fileSertif->move('img');
        // ambil nama file
        $namaSertif = $fileSertif->getName();

        // mengambil nim
        $nimActive = $_SESSION['nim'];
        $this->InputModel->save([
            'nim' => $nimActive,
            'kategori' => $kategorii,
            'tingkat' => $tingkat,
            'jabatan' => $jabatan,
            'gambar' => $namaSertif,
            'periode_mulai' => $this->request->getVar('periode1'),
            'periode_selesai' => $this->request->getVar('periode2'),
            'nama_kegiatan' => $this->request->getVar('nama'),
            'status_sertifikat' => 'Diproses',
            'poin_skm' => 0
        ]);

        return redirect()->to('/Input/inputData/' . $_SESSION['kategori'])->withInput();
    }
}
