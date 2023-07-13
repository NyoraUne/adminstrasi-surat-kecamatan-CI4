<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_deahliwaris extends Model
{
    protected $table = "de_ahliwaris";
    protected $primaryKey = "id_de_ahliwaris";
    protected $allowedFields = [
        "id_skahliwaris",
        "id_penduduk",
        "hubungan",
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
