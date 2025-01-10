<?php

namespace App\Controllers\Admin;

use App\Models\RegisterModel;
use App\Controllers\BaseController;

class RegisterController extends BaseController
{
    public function index()
    {
        $registerModel = new RegisterModel();
    
        // Ambil semua data register dengan detail relasi
        $registers = $registerModel->getRegistersWithDetails();
        
        $data = [
            'registers' => $registers,
        ];

        return view('admin/register/index', $data);
    }
    
    public function updateStatus($registerId)
    {
        // Ambil model dan proses update
        $registerModel = new RegisterModel();
    
        // Ambil status dari request POST
        $status = $this->request->getPost('status');
    
        // Pastikan status valid
        $validStatuses = ['PENDING', 'PROSES', 'SELESAI'];
        if (!in_array($status, $validStatuses)) {
            return redirect()->back()->with('error', 'Invalid status selected');
        }
    
        // Update status pada register
        $registerModel->update($registerId, [
            'status' => $status,
        ]);
    
        // Redirect ke halaman daftar register
        return redirect()->to('/admin/register');
    }
    

}
