<?php

namespace App\Controllers;

use App\Models\ScheduleModel;

class Home extends BaseController
{
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

        return view('welcome_message', $data);
    }
}
