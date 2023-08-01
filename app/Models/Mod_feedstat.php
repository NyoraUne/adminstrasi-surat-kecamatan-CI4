<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_feedstat extends Model
{
    protected $table = "feedback_status";
    protected $primaryKey = "id_feedback_status";
    protected $allowedFields = [
        "id_feedback",
        "isi",
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
