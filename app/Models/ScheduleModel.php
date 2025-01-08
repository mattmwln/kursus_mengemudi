<?php

// app/Models/ScheduleModel.php

namespace App\Models;

use CodeIgniter\Model;

class ScheduleModel extends Model
{
    protected $table = 'schedules';
    protected $primaryKey = 'id';
    protected $allowedFields = ['course_id', 'instructor_id', 'schedule_date', 'schedule_time'];
    protected $useTimestamps = true;

    public function getSchedulesWithCourseAndInstructor()
    {
        // Melakukan join dengan tabel courses dan instructors
        return $this->select('schedules.id, courses.name as course_name, instructors.name as instructor_name, schedules.schedule_date, schedules.schedule_time')
                    ->join('courses', 'courses.id = schedules.course_id')
                    ->join('instructors', 'instructors.id = schedules.instructor_id')
                    ->findAll();
    }
}
