<?php

namespace App\Controllers\Auth;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
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
       $password = $this->request->getPost('password'); // Tidak perlu lagi di-hash di sini

       // Cek apakah user ada di database
       $model = new UserModel();
       $user = $model->where('username', $username)->first();

       // Jika user ditemukan dan password valid
       if ($user && password_verify($password, $user['password'])) {
           // Jika login berhasil, simpan session
           session()->set('logged_in', true);
           session()->set('user_id', $user['id']);
           session()->set('username', $user['username']);
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
