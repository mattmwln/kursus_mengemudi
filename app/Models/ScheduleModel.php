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

    public function getCourse($scheduleId)
    {
        return $this->db->table('courses')
                        ->select('name')
                        ->where('id', $scheduleId)
                        ->get()
                        ->getRow();
    }

    public function getInstructor($instructorId)
    {
        return $this->db->table('instructors')
                        ->select('name')
                        ->where('id', $instructorId)
                        ->get()
                        ->getRow();
    }
}
