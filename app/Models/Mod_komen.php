<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_komen extends Model
{
    protected $table = "komentar";
    protected $primaryKey = "id_komentar";
    protected $allowedFields = [
        "id_permintaan",
        "id_user",
        "koment",
        "created_at",
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
