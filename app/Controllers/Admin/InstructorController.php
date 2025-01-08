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
        $this->instructorModel->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'expertise' => $this->request->getPost('expertise')
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
        $this->instructorModel->update($id, [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'expertise' => $this->request->getPost('expertise')
        ]);
        return redirect()->to('/admin/instructors');
    }

    public function delete($id)
    {
        $this->instructorModel->delete($id);
        return redirect()->to('/admin/instructors');
    }
}
