<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInstructorsTable extends Migration
{
    public function up()
    {
         // Definisikan tabel
         $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255'
                
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255'
                
            ],
            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => '255'
                
            ],
            'expertise' => [
                'type'       => 'VARCHAR',
                'constraint' => '255'
                
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

        // Buat tabel
        $this->forge->createTable('instructors');
    }

    public function down()
    {
        $this->forge->dropTable('instructors');
    }
}
