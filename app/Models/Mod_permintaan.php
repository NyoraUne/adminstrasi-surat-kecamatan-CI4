<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_permintaan extends Model
{
    protected $table = "permintaan";
    protected $primaryKey = "id_permintaan";
    protected $allowedFields = [
        "id_penduduk",
        "pelayanan",
        "deskripsi",
        "status",
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
