<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Sesuaikan dengan nama tabel di database Anda
    protected $primaryKey = 'id';

    protected $autoIncrement =  true;
    protected $allowedFields = ['username', 'password']; // Nama kolom yang diizinkan

    protected $validationRules = [
        'username' => 'required|alpha_numeric|min_length[3]|is_unique[users.username]',
        'password' => 'required|min_length[8]',
    ];
    protected $validationMessages = [
        'username' => [
            'required' => 'Username wajib diisi.',
            'alpha_numeric' => 'Username hanya boleh berisi huruf dan angka.',
            'min_length' => 'Username harus terdiri dari minimal 3 karakter.',
            'is_unique' => 'Username sudah digunakan, pilih username lain.',
        ],
        'password' => [
            'required' => 'Password wajib diisi.',
            'min_length' => 'Password harus terdiri dari minimal 8 karakter.',
        ],
    ];
    protected $skipValidation = false; 
}
