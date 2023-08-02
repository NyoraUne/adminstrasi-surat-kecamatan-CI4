<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_reklame extends Model
{
    protected $table = "reklame";
    protected $primaryKey = "id_reklame";
    protected $allowedFields = [
        "id_penduduk",
        "no_surat",
        "nama_perusahaan",
        "alamat_perusahaan",
        "no_telp",
        "naskah",
        "jenis",
        "ukuran",
        "lokasi",
        "masa_berlaku",
        "lahan_milik",
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
