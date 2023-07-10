<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_kematian extends Model
{
    protected $table = "skkematian";
    protected $primaryKey = "id_skkematian";
    protected $allowedFields = [
        "no_surat",
        "id_penduduk",
        "hari",
        "tanggal",
        "sebab",
        "tempat",
        "created_at",
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
