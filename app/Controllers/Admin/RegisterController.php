<?php

namespace App\Controllers\Admin;

use Dompdf\Dompdf;
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
    
    public function exportToPdf()
    {
         // Ambil data dari database
         $registerModel = new RegisterModel();
         $registers = $registerModel->getRegistersWithDetails();
 
         // Siapkan data untuk view
         $data['registers'] = $registers;
 
         // Render HTML ke string
         $html = view('admin/register/pdf', $data);
 
         // Inisialisasi Dompdf
         $dompdf = new Dompdf();
         $dompdf->loadHtml($html);
 
         // Atur orientasi kertas dan ukuran
         $dompdf->setPaper('A4', 'landscape');
 
         // Render PDF
         $dompdf->render();
 
         // Unduh file PDF
         $dompdf->stream("registers.pdf", ["Attachment" => 1]); 
    }

}
