<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_file extends Model
{
    protected $table = "file";
    protected $primaryKey = "id_file";
    protected $allowedFields = [
        "id_permintaan",
        "data",
        "file",
        "deskripsi",
        "detail",
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
