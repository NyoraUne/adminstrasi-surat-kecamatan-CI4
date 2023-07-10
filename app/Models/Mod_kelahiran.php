<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_kelahiran extends Model
{
    protected $table = "skkelahiran";
    protected $primaryKey = "id_skkelahiran";
    protected $allowedFields = [
        "no_surat",
        "tanggal",
        "tempat",
        "nama_anak",
        "id_ayah",
        "id_ibu",
        "anak_ke",
        "alamat",
        "crated_at",
        "jenis_kelamin",
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
