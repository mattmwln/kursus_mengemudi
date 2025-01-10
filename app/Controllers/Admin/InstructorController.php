<?php

namespace App\Controllers\Admin;

use App\Models\InstructorModel;
use CodeIgniter\Controller;

class InstructorController extends Controller
{
    protected $instructorModel;

    public function __construct()
    {
        $this->instructorModel = new InstructorModel();
    }

    public function index()
    {
        $data['instructors'] = $this->instructorModel->findAll();
        return view('admin/instructors/index', $data);
    }

    public function create()
    {
        return view('admin/instructors/create');
    }

    public function store()
    {
        $imageFile = $this->request->getFile('image');
        $imageName = null;

        if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
            $imageName = uniqid('instructor_', true) . '.' . $imageFile->getExtension();
            $imageFile->move('uploads/instructor_picture', $imageName); // Perbaikan path
        }

        $this->instructorModel->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'expertise' => $this->request->getPost('expertise'),
            'image' => $imageName ? 'uploads/instructor_picture/' . $imageName : null, // Tangani jika tidak ada gambar
        ]);

        return redirect()->to('/admin/instructors');
    }


    public function edit($id)
    {
        $data['instructor'] = $this->instructorModel->find($id);
        return view('admin/instructors/edit', $data);
    }

    public function update($id)
    {
        $imageFile = $this->request->getFile('image');
        $imageName = null;

        $instructor = $this->instructorModel->find($id);

        if($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {

            if($instructor['image'] && file_exists($instructor['image'])) {
                unlink($instructor['image']);
            }

            $imageName = uniqid('instructor_', true) . '.' . $imageFile->getExtension();
            $imageFile->move('uploads/instructor_picture', $imageName);
        } else {
            $imageName = $instructor['image'];
        }

        $this->instructorModel->update($id, [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'expertise' => $this->request->getPost('expertise'),
            'image' => $imageName ? 'uploads/instructor_picture/' . $imageName : $instructor['image'], 
        ]);
        return redirect()->to('/admin/instructors');
    }

    public function delete($id)
    {
        $this->instructorModel->delete($id);
        return redirect()->to('/admin/instructors');
    }

    public function bulkDelete()
{
    // Mengambil array ID instruktur yang dipilih
    $selectedInstructors = $this->request->getPost('selected_instructors');

    if ($selectedInstructors && is_array($selectedInstructors)) {
        foreach ($selectedInstructors as $instructorId) {
            $this->instructorModel->delete($instructorId);
        }

        return redirect()->to('/admin/instructors')->with('success', 'Instruktur yang dipilih berhasil dihapus.');
    }

    return redirect()->to('/admin/instructors')->with('error', 'Tidak ada instruktur yang dipilih untuk dihapus.');
}

}