<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSchedulesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'course_id' => [
                'type'       => 'INT',
                'unsigned'   => true, // Harus unsigned agar sesuai dengan kolom id di tabel course
            ],
            'instructor_id' => [
                'type'       => 'INT',
                'unsigned'   => true, // Harus unsigned agar sesuai dengan kolom id di tabel instructor
            ],
            'schedule_date' => [
                'type'       => 'DATE', // Gunakan DATE jika ini hanya tanggal
            ],
            'schedule_time' => [
                'type'       => 'TIME', // Gunakan TIME jika ini hanya waktu
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        
        // Tambahkan primary key
        $this->forge->addKey('id', true);
        
        // Tambahkan foreign key untuk course_id dan instructor_id
        $this->forge->addForeignKey('course_id', 'courses', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('instructor_id', 'instructors', 'id', 'CASCADE', 'CASCADE');
        
        // Buat tabel
        $this->forge->createTable('schedules');
        
    }

    public function down()
    {
        //
    }
}
