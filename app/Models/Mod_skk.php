<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_skk extends Model
{
    protected $table = "skkk";
    protected $primaryKey = "id_skkk";
    protected $allowedFields = [
        "no_surat_skk",
        "id_penduduk",
        "keperluan_skk",
        "create_at_skk",
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at_skk';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
