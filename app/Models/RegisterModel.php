<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'registers';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'schedule_id',
        'name',
        'address',
        'gender',
        'no_hp',
        'payment_image',
        'status'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
  
    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getSchedule($scheduleId)
    {
        return $this->db->table('schedules')
                        ->select('schedule_date')
                        ->where('id', $scheduleId)
                        ->get()
                        ->getRow();
    }

    public function getRegistersWithDetails()
    {
        return $this->db->table('registers')
                        ->select('registers.*, schedules.schedule_time,schedules.schedule_date, schedules.course_id, courses.name as course_name, instructors.name as instructors_name')
                        ->join('schedules', 'schedules.id = registers.schedule_id', 'left')
                        ->join('courses', 'courses.id = schedules.course_id', 'left')
                        ->join('instructors', 'instructors.id = schedules.instructor_id', 'left')
                        ->get()
                        ->getResultArray();
    }


}
