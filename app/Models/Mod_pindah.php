<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_pindah extends Model
{
    protected $table = "skpindah";
    protected $primaryKey = "id_skpindah";
    protected $allowedFields = [
        "no_surat",
        "id_penduduk",
        "pindah_dari",
        "alasan_pindah",
        "alamat_baru",
        "keluarga_ikut",
        "created_at",
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
