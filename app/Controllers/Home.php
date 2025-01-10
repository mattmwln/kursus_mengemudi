<?php

namespace App\Controllers;

use App\Models\CourseModel;
use App\Models\ScheduleModel;
use App\Models\InstructorModel;

class Home extends BaseController
{
    public function index()
    {
        $scheduleModel = new ScheduleModel();
        $courseModel = new CourseModel();
        $instructorModel = new InstructorModel();
        
        $schedules = $scheduleModel->findAll();
        // Tambahkan relasi manual ke setiap jadwal
        foreach ($schedules as &$schedule) {
            $schedule['getCourse'] = $scheduleModel->getCourse($schedule['course_id']);
            $schedule['getInstructor'] = $scheduleModel->getInstructor($schedule['instructor_id']);
        }

        $courses = $courseModel->findAll();
        $instructors = $instructorModel->limit(4)->findAll();

        $data = [
            'schedules' => $schedules,
            'courses' => $courses,
            'instructors' => $instructors,
        ];

        
        return view('welcome_message', $data);
    }
}
