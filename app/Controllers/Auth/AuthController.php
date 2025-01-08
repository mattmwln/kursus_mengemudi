<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        // Tampilkan halaman login
        return view('auth/login');
    }

    public function loginProcess()
    {
        // Ambil data login dari form
        $username = $this->request->getPost('username');
        $password = md5($this->request->getPost('password')); // Anda bisa mengganti enkripsi jika perlu

        // Cek apakah user ada di database
        $model = new UserModel();
        $user = $model->where('username', $username)
                      ->where('password', $password)
                      ->first();

        if ($user) {
            // Jika login berhasil, simpan session
            session()->set('logged_in', true);
            return redirect()->to('/admin');
        } else {    
            // Jika login gagal, kembali ke halaman login dengan pesan error
            return redirect()->to('/auth/login')->with('error', 'Invalid credentials');
        }
    }

    public function logout()
    {
        // Hapus session dan arahkan ke halaman login
        session()->destroy();
        return redirect()->to('/auth/login');
    }
}
