<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRegisterTable extends Migration
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
            'schedule_id' => [
                'type'       => 'INT',
                'unsigned'   => true, // Harus unsigned agar sesuai dengan kolom id di tabel course
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'address' => [
                'type' => 'TEXT',
            ],
            'gender' => [
                'type' => "ENUM('Laki-laki', 'Perempuan')",
                'null' => false,
            ],
            'no_hp' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'payment_image' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'status' => [
                'type' => "ENUM('PENDING', 'PROSES','SELESAI')",
                'null' => false,
                'default' => 'PENDING'
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
        $this->forge->addForeignKey('schedule_id', 'schedules', 'id', 'CASCADE', 'CASCADE');
        
        // Buat tabel
        $this->forge->createTable('registers');
    }

    public function down()
    {
        $this->forge->dropTable('registers');
    }
}
