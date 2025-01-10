<?php

namespace App\Controllers;

use App\Models\CourseModel;
use App\Models\ScheduleModel;

class Home extends BaseController
{
    public function index()
    {
        $scheduleModel = new ScheduleModel();
        $courseModel = new CourseModel();
        
        $schedules = $scheduleModel->findAll();
        // Tambahkan relasi manual ke setiap jadwal
        foreach ($schedules as &$schedule) {
            $schedule['getCourse'] = $scheduleModel->getCourse($schedule['course_id']);
            $schedule['getInstructor'] = $scheduleModel->getInstructor($schedule['instructor_id']);
        }

        $courses = $courseModel->findAll();

        $data = [
            'schedules' => $schedules,
            'courses' => $courses,
        ];

        
        return view('welcome_message', $data);
    }
}
