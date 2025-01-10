<?php

namespace App\Controllers\User;

use App\Models\CourseModel;
use App\Models\RegisterModel;
use App\Models\ScheduleModel;
use App\Models\InstructorModel;
use App\Controllers\BaseController;

class CheckoutController extends BaseController
{

    protected $registerModel;

    public function __construct()
    {
        $this->registerModel = new RegisterModel();
    }

    public function checkout()
    {
        // Menyimpan data ke database
        $data = [
            'name' => $this->request->getPost('name'),
            'address' => $this->request->getPost('address'),
            'gender' => $this->request->getPost('gender'),
            'no_hp' => $this->request->getPost('no_hp'),
            'schedule_id' => $this->request->getPost('schedule_id'),
        ];

        // Menyimpan data checkout ke dalam tabel register
        $this->registerModel->save($data);

        // Ambil ID register yang baru disimpan
        $registerId = $this->registerModel->insertID();

        // Redirect ke halaman checkout dengan ID register yang baru saja disimpan
        return redirect()->to('checkout-page/'.$registerId);
    }

    public function viewCheckout($registerId)
    {
        //deklarasi model
        $scheduleModel = new ScheduleModel();
        $courseModel = new CourseModel();
        $instructorModel = new InstructorModel();
       
        // Ambil data register berdasarkan ID yang diterima
        $registerData = $this->registerModel->find($registerId);

        $schedule = $scheduleModel->find($registerData['schedule_id']);
        
        $course = $courseModel->find($schedule['course_id']);
        $instructor = $instructorModel->find($schedule['instructor_id']);
        
        $data = [
            'register' => $registerData,
            'schedule' => $schedule,
            'course' => $course,
            'instructor' => $instructor,
        ];

        // Tampilkan halaman checkout dengan data yang diteruskan
        return view('pages/checkout', $data);
    }

    public function uploadPayment($registerId)
    {
        // Validasi jika ada file yang di-upload
        if ($this->request->getFile('payment_image')->isValid()) {
            // Ambil file yang di-upload
            $image = $this->request->getFile('payment_image');

            // Cek apakah file tersebut gambar
            if ($image->isValid() && in_array($image->getMimeType(), ['image/jpeg', 'image/png', 'image/jpg'])) {
                // Tentukan lokasi folder untuk menyimpan gambar
                $imagePath = FCPATH  . 'uploads/payment_images/';
                
                // Jika folder belum ada, buat foldernya=
                if (!is_dir($imagePath)) {
                    mkdir($imagePath, 0777, true);
                }

                // Generate nama file unik agar tidak terjadi duplikasi
                $newFileName = uniqid('payment_', true) . '.' . $image->getExtension();

                // Pindahkan file ke folder yang sudah ditentukan
                $image->move($imagePath, $newFileName);

                // Ambil model Register
                $registerModel = new RegisterModel();

                // Update field payment_image dengan path file yang telah di-upload
                $registerModel->update($registerId, [
                    'payment_image' => 'uploads/payment_images/' . $newFileName, // Simpan path relatif
                ]);

                // Redirect atau beri respon setelah berhasil upload
                return view('pages/success');
            } else {
                // Jika file bukan gambar, kirimkan error
                return redirect()->back()->with('error', 'Please upload a valid image (jpeg, jpg, or png)');
            }
        } else {
            // Jika tidak ada file yang di-upload
            return redirect()->back()->with('error', 'No file uploaded');
        }
    }

}
