<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_skktp extends Model
{
    protected $table = "skktp";
    protected $primaryKey = "id_skktp";
    protected $allowedFields = [
        "no_surat_ktp",
        "id_penduduk",
        "keperluan_ktp",
        "create_at_ktp",
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at_ktp';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
