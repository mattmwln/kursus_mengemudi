<?php

namespace App\Controllers\Admin;

use App\Models\CourseModel;
use CodeIgniter\Controller;

class CourseController extends Controller
{
    protected $courseModel;

    public function __construct()
    {
        // Memuat model CourseModel
        $this->courseModel = new CourseModel();
    }

    public function index()
    {
        // Mengambil semua data kursus
        $data['courses'] = $this->courseModel->findAll();

        // Menampilkan daftar kursus di view
        return view('admin/courses/index', $data);
    }

    public function create()
    {
        // Menampilkan form untuk menambah kursus baru
        return view('admin/courses/create');
    }

    public function store()
    {
        // Mengambil input dari form dan mengonversi harga menjadi float
        $price = (float)$this->request->getPost('price');

        // Menyimpan data kursus ke database
        $this->courseModel->save([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $price, // Menyimpan harga kursus
        ]);

        // Setelah kursus disimpan, mengarahkan kembali ke halaman kursus
        return redirect()->to('/admin/courses');
    }

    public function edit($id)
    {
        // Mengambil data kursus berdasarkan ID
        $data['course'] = $this->courseModel->find($id);

        // Menampilkan form edit kursus
        return view('admin/courses/edit', $data);
    }

    public function update($id)
    {
        // Mengambil input form dan mengonversi harga menjadi float
        $price = (float)$this->request->getPost('price');

        // Memperbarui data kursus berdasarkan ID
        $this->courseModel->update($id, [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $price, // Memperbarui harga kursus
        ]);

        // Setelah kursus diperbarui, mengarahkan kembali ke daftar kursus
        return redirect()->to('/admin/courses');
    }

    public function delete($id)
    {
        // Menghapus kursus berdasarkan ID
        $this->courseModel->delete($id);

        // Setelah kursus dihapus, mengarahkan kembali ke daftar kursus
        return redirect()->to('/admin/courses');
    }
}
