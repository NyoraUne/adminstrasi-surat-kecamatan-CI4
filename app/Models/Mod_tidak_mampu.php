<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_tidak_mampu extends Model
{
    protected $table = "sktidakmampu";
    protected $primaryKey = "id_sktidakmampu";
    protected $allowedFields = [
        "no_surat",
        "id_penduduk",
        "keperluan",
        "created_at",
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
