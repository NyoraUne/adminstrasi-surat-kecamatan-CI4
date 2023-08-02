<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_penduduk extends Model
{
    protected $table = "penduduk";
    protected $primaryKey = "id_penduduk";
    protected $allowedFields = [
        "id_penduduk",
        "nik_penduduk",
        "nama_penduduk",
        "tempat_lahir_penduduk",
        "tgl_lahir_penduduk",
        "jenis_kelamin_penduduk",
        "agama_penduduk",
        "pekerjaan_penduduk",
        "alamat_penduduk",
        "status_perkawinan_penduduk",
        "email_penduduk",
        "no_telp_penduduk",
        "slug",
        "created_at_penduduk",
        "foto_penduduk"
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at_penduduk';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
