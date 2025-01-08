<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'superadmin2025',
                'password' => password_hash('kursusmengemudi2025', PASSWORD_DEFAULT), // Hash password
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Masukkan data ke tabel users
        $this->db->table('users')->insertBatch($data);
    }
}
