<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_ahliwaris extends Model
{
    protected $table = "skahliwaris";
    protected $primaryKey = "id_skahliwaris";
    protected $allowedFields = [
        "id_skkematian",
        "no_surat",
        "created_at",
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
