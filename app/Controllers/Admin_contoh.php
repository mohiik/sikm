<!-- INI CUMA SISAAN DARI PROJECT PEMWEB, BISA DIJADIIN CONTOH -->
<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\PenggunaModel;
use App\Models\LaporanModel;
use App\Models\PesananModel;
use mysqli;


class Admin extends BaseController
{
  public $adminModel;
  public $penggunaModel;
  public $laporanModel;
  public $pesananModel;
  public $dataIndex;

  public function __construct()
  {
    $this->adminModel = new AdminModel();
    $this->penggunaModel = new PenggunaModel();
    $this->laporanModel = new LaporanModel();
    $this->pesananModel = new PesananModel();
    $this->dataIndex = [
      'user' => $this->penggunaModel->countAll(),
      'order' => $this->pesananModel->countAll(),
      'admin' => $this->adminModel->countAll()
    ];
  }

  public function index()
  {
    if (isset($_SESSION['id_admin']) && isset($_SESSION['email'])) {
      $data = [
        'user' => $this->penggunaModel->countAll(),
        'order' => $this->pesananModel->countAll(),
        'admin' => $this->adminModel->countAll()
      ];
      // dd($data);
      return view('admin/index', $this->dataIndex);
    } else {
      return view('admin/signin');
    }
  }

  public function bulanan()
  {
    if (isset($_SESSION['id_admin']) && isset($_SESSION['email'])) {
      $data = [
        'temp' => 'baba',
        'laporan' => $this->laporanModel->getLaporan()
      ];
      return view('admin/bulanan', $data);
    } else {
      return view('admin/signin');
    }
  }

  public function notifications()
  {
    if (isset($_SESSION['id_admin']) && isset($_SESSION['email'])) {
      return view('admin/notifications');
    } else {
      return view('admin/signin');
    }
  }

  public function profile()
  {
    if (isset($_SESSION['id_admin']) && isset($_SESSION['email'])) {
      return view('admin/profile');
    } else {
      return view('admin/signin');
    }
  }

  public function statistik()
  {
    if (isset($_SESSION['id_admin']) && isset($_SESSION['email'])) {
      return view('admin/statistik');
    } else {
      return view('admin/signin');
    }
  }

  public function user()
  {
    if (isset($_SESSION['id_admin']) && isset($_SESSION['email'])) {
      $data = [
        'temp' => 'adssa',
        'pengguna' => $this->penggunaModel->getPengguna()
      ];
      // dd($data);
      return view('admin/user', $data);
    } else {

      return view('admin/signin');
    }
  }

  public function signin()
  {
    if (isset($_SESSION['id_admin']) && isset($_SESSION['email'])) {
      return view('admin/index');
    } else {
      return view('admin/signin');
    }
  }

  public function signup()
  {
    return view('admin/signup');
  }

  public function signout()
  {
    $this->session->destroy();
    echo view('admin/signin');
  }

  public function regis()
  {
    // Check If form submitted, insert form data into users table.


    if (
      isset($_POST['submit']) &&
      !empty($_POST['first_name']) &&
      !empty($_POST['password']) &&
      !empty($_POST['confirm_password']) &&
      !empty($_POST['email'])
    ) {
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $password = $_POST['password'];

      $cek = $this->adminModel->find($email);
      // include database connection file
      if (!empty($cek)) {
        echo view('admin/signup');
        echo "<br><br><p align='center'>email telah terdaftar</p>";
      } else {
        $this->adminModel->query("INSERT INTO admin(f_nama, l_nama, phone, username, email, password) VALUES('$first_name','$last_name','$phone',null,'$email','$password')");
        return view('admin/signin');
      }
    } else if (isset($_POST['submit'])) {
      echo view('admin/signup');
      echo "<br><br><p align='center'>data anda kurang lengkap</p>";
    }
  }
  public function auth()
  {
    // include "dbconfig.php";

    if (!empty($_POST['email']) && !empty($_POST['password'])) {

      function validate($data)
      {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $email = validate($_POST['email']);
      $password = validate($_POST['password']);

      if (isset($_POST['submit'])) {
        $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";

        $result = $this->adminModel->query($sql);
        $temp = $result->getNumRows();
        if ($temp == 1) {
          $row = $result->getRowArray();
          if ($row['email'] === $email && $row['password'] === $password) {
            $_SESSION['username'] = $row['f_nama'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['l_nama'] = $row['l_nama'];
            $_SESSION['f_nama'] = $row['f_nama'];
            $_SESSION['id_admin'] = $row['id_admin'];
            $_SESSION['password'] = $row['password'];
            // header("Location: index.php");

            return view(base_url('admin') . '/index', $this->dataIndex);
            exit();
          } else {
            // header("Location: signin.php?error=User dan Password tidak ditemukan");
            echo "<script> alert('User dan Password tidak ditemukan'); </script>";
            return view('admin/signin');
            exit();
          }
        } else {
          // header("Location: signin.php?error=User dan Password tidak ditemukan");
          echo "<script> alert('User dan Password tidak ditemukan'); </script>";
          return view('admin/signin');
          exit();
        }
      }
    } else {
      return view('admin/signin');
      exit();
    }
    return view('admin/signin');
  }
  public function hapus()
  {
    session();
    $this->penggunaModel->delete($this->request->getVar('id'));
    session()->setFlashdata('hapus', 'Hapus berhasil');
    return redirect()->back();
  }
  public function edit($id)
  {
    $data = [
      'temp' => 'baba',
      'pengguna' => $this->penggunaModel->getPenggunaId($id)
    ];
    return view('admin/editUser', $data);
  }
  public function update($id)
  {
    // $email = $this->pengguna['email'];
    if (!$this->validate([
      'email' => 'required|valid_email',
      'first-name' => 'required|alpha',
      'last-name' => 'permit_empty|alpha',
      'noHP' => 'required|decimal',
      'lahir' => 'required',
      'password' => 'required|min_length[3]|max_length[50]',
      'confirm_pass' => 'required|matches[password]|min_length[3]|max_length[50]'
    ])) {
      $validasi = \Config\Services::validation();
      return redirect()->back();
    }
    $pengguna = $this->penggunaModel->getPenggunaId($id);

    $this->penggunaModel->update($pengguna['id_pengguna'], [
      "email" => $this->request->getVar('email'),
      "nama_depan" => $this->request->getVar('first-name'),
      "nama_belakang" => $this->request->getVar('last-name'),
      "no_hp" => $this->request->getVar('noHP'),
      "tgl_lahir" => $this->request->getVar('lahir'),
      "password" => $this->request->getVar('password'),
    ]);
    session()->setFlashdata('update', 'Update sukses');

    return redirect()->to(base_url('admin') . '/user');
  }
  public function ubah()
  {
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['nama'])) {
      $pisah = explode(" ", $_POST['nama']);

      $l_nama = $pisah[1];
      $i = 2;
      while (!empty($pisah[$i])) {
        $l_nama = "$l_nama" . " " . "$pisah[$i]";
        $i++;
      }

      $this->adminModel->query("UPDATE admin SET email = '$_POST[email]', f_nama =
    '$pisah[0]', l_nama = '$l_nama', username = '$_POST[username]' WHERE id_admin = '$_SESSION[id_admin]'");

      $admin = $this->adminModel->query("SELECT * FROM admin WHERE id_admin = '$_SESSION[id_admin]'");

      $temp = $admin->getNumRows();

      if ($temp == 1) {
        $row = $admin->getRowArray();
        $_SESSION['email'] = $row['email'];
        $_SESSION['l_nama'] = $row['l_nama'];
        $_SESSION['f_nama'] = $row['f_nama'];
        $_SESSION['username'] = $row['username'];
      }
    }

    if (!empty($_POST['curr_pass']) && !empty($_POST['new_pass']) && !empty($_POST['new_pass2'])) {
      if ($_POST['curr_pass'] == $_SESSION['password']) {
        if ($_POST['new_pass'] == $_POST['new_pass2']) {
          $this->adminModel->query("UPDATE admin SET password = '$_POST[new_pass]' WHERE id_admin = '$_SESSION[id_admin]'");
          echo "<script> alert('password berhasil diubah'); </script>";
          $_SESSION['password'] = $_POST['new_pass'];
          return view('admin/profile');
        } else {
          echo "<script> alert('password tidak sama'); </script>";
          return view('admin/profile');
        }
      } else {
        echo "<script> alert('password salah'); </script>";
        return view('admin/profile');
      }
    }

    return view('admin/profile');
  }
  public function testing()
  {
    return view('admin/testing');
  }
}
