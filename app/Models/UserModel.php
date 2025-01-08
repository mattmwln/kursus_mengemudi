<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Sesuaikan dengan nama tabel di database Anda
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password']; // Nama kolom yang diizinkan
}
