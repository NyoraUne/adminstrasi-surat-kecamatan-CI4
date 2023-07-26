<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_user extends Model
{
    protected $table = "user";
    protected $primaryKey = "id_user";
    protected $allowedFields = [
        "id_user",
        "nama_user",
        "role",
        "foto_user",
        "username_user",
        "password_user",
        "id_penduduk",
        "salt"
    ];
    protected $useTimestamps = false;
}
