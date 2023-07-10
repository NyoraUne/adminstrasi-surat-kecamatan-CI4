<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_datang extends Model
{
    protected $table = "skdatang";
    protected $primaryKey = "id_skdatang";
    protected $allowedFields = [
        "id_penduduk",
        "surat_datang",
        "ktp_datang",
        "created_at",
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
