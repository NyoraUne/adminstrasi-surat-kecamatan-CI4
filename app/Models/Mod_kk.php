<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_kk extends Model
{
    protected $table = "kk";
    protected $primaryKey = "id_kk";
    protected $allowedFields = [
        "no_kk",
        "alamat_kk",
        "rtrw_kk",
        "desa_kk",
        "kecamatan_kk",
        "kabupaten_kk",
        "kdpos_kk",
        "provinsi_kk",
        "created_at_kk",
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at_kk';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
