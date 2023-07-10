<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_dekk extends Model
{
    protected $table = "de_kk";
    protected $primaryKey = "id_de_kk";
    protected $allowedFields = [
        "id_kk",
        "id_penduduk",
        "created_at_de",
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at_de';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
