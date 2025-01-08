<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Mengakses session menggunakan dependency injection
        $session = \Config\Services::session();

        // Memeriksa apakah pengguna sudah login
        if (!$session->get('logged_in')) {
            return redirect()->to('/auth/login');
        }

        // Data yang akan dikirim ke view
        $data = [
            'title' => 'Admin Dashboard'
        ];

        return view('admin/layout', $data);
    }
}
