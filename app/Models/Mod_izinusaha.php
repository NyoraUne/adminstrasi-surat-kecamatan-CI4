<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_izinusaha extends Model
{
    protected $table = "skizin_usaha";
    protected $primaryKey = "id_skizin_usaha";
    protected $allowedFields = [
        "id_penduduk",
        "no_surat",
        "nama_usaha",
        "alamat_usaha",
        "jenis_usaha",
        "tanggal_ajuan",
        "kontak_usaha",
        "status_izin",
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
