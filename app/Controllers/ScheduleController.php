<?php

namespace App\Controllers;

use App\Models\ScheduleModel;
use App\Models\CourseModel;
use App\Models\InstructorModel;
use CodeIgniter\Controller;

class ScheduleController extends Controller
{
    protected $scheduleModel;
    protected $courseModel;
    protected $instructorModel;

    public function __construct()
    {
        $this->scheduleModel = new ScheduleModel();
        $this->courseModel = new CourseModel();
        $this->instructorModel = new InstructorModel();
    }

    public function index()
    {
        $scheduleModel = new ScheduleModel();
        
        $schedules = $scheduleModel->findAll();
        // Tambahkan relasi manual ke setiap jadwal
        foreach ($schedules as &$schedule) {
            $schedule['getCourse'] = $scheduleModel->getCourse($schedule['course_id']);
            $schedule['getInstructor'] = $scheduleModel->getInstructor($schedule['instructor_id']);
        }

        $data['schedules'] = $schedules;

        return view('admin/schedules/index', $data);
    }


    public function create()
    {
        $data['courses'] = $this->courseModel->findAll();
        $data['instructors'] = $this->instructorModel->findAll();
        return view('admin/schedules/create', $data);
    }

    public function store()
    {
        $this->scheduleModel->save([
            'course_id' => $this->request->getPost('course_id'),
            'instructor_id' => $this->request->getPost('instructor_id'),
            'schedule_date' => $this->request->getPost('schedule_date'),
            'schedule_time' => $this->request->getPost('schedule_time')
        ]);

        return redirect()->to('/admin/schedules');
    }

    public function edit($id)
    {
        $data['schedule'] = $this->scheduleModel->find($id);
        $data['courses'] = $this->courseModel->findAll();
        $data['instructors'] = $this->instructorModel->findAll();
        return view('admin/schedules/edit', $data);
    }

    public function update($id)
    {
        $this->scheduleModel->update($id, [
            'course_id' => $this->request->getPost('course_id'),
            'instructor_id' => $this->request->getPost('instructor_id'),
            'schedule_date' => $this->request->getPost('schedule_date'),
            'schedule_time' => $this->request->getPost('schedule_time')
        ]);

        return redirect()->to('/admin/schedules');
    }

    public function delete($id)
    {
        $this->scheduleModel->delete($id);
        return redirect()->to('/admin/schedules');
    }
}
