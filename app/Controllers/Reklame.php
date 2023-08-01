<?php

namespace App\Controllers;

use App\Models\Mod_penduduk;
use App\Models\Mod_reklame;


class Reklame extends BaseController
{
    protected $session;
    protected $Mod_penduduk;
    protected $Mod_reklame;

    public function __construct()
    {
        $this->session = session();
        $this->Mod_penduduk = new Mod_penduduk();
        $this->Mod_reklame = new Mod_reklame();
    }

    public function index()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/Auth/login');
        }

        //cek role dari session
        if ($this->session->get('role') != 1) {
            return redirect()->to('User/index');
        }

        $penduduk = $this->Mod_penduduk->findAll();
        $reklame = $this->Mod_reklame
            ->join('penduduk', 'penduduk.id_penduduk = reklame.id_penduduk')
            ->findAll();

        $data = [
            'penduduk' => $penduduk,
            'reklame' => $reklame,
        ];

        return view('user/reklame/index', $data);
    }
    function simpan_data()
    {
        $inv = $this->request->getPost();
        $year = date("Y");
        $data = [
            'id_penduduk' => $inv['id_penduduk'],
            'no_surat' => 'SR/' . $inv['no_surat'] . '/Balangan/' . $year,
            'nama_perusahaan' => $inv['nama_perusahaan'],
            'alamat_perusahaan' => $inv['alamat_perusahaan'],
            'no_telp' => $inv['no_telp'],
            'naskah' => $inv['naskah'],
            'jenis' => $inv['jenis'],
            'ukuran' => $inv['ukuran'],
            'lokasi' => $inv['lokasi'],
            'masa_berlaku' => $inv['masa_berlaku'],
            'lahan_milik' => $inv['lahan_milik'],
        ];

        $this->Mod_reklame->insert($data);
        return redirect()->back();
    }
    function detail($id)
    {
        $var = $this->Mod_reklame
            ->join('penduduk', 'penduduk.id_penduduk = reklame.id_penduduk')
            ->where('id_reklame', $id)
            ->first();
        // dd($var);
        $data = [
            'izin' => $var
        ];

        return view('user/reklame/detail', $data);
    }
    function simpan_update($id)
    {
        $inv = $this->request->getPost();
        $data = [
            'id_penduduk' => $inv['id_penduduk'],
            'no_surat' => $inv['no_surat'],
            'nama_perusahaan' => $inv['nama_perusahaan'],
            'alamat_perusahaan' => $inv['alamat_perusahaan'],
            'no_telp' => $inv['no_telp'],
            'naskah' => $inv['naskah'],
            'jenis' => $inv['jenis'],
            'ukuran' => $inv['ukuran'],
            'lokasi' => $inv['lokasi'],
            'masa_berlaku' => $inv['masa_berlaku'],
            'lahan_milik' => $inv['lahan_milik'],
        ];
        $this->Mod_reklame->update($id, $data);
        return redirect()->back();
    }
    function print_surat($id)
    {
        $var = $this->Mod_reklame
            ->join('penduduk', 'penduduk.id_penduduk = reklame.id_penduduk')
            ->where('id_reklame', $id)
            ->first();

        $data = [
            'izin' => $var
        ];

        return view('user/reklame/print_surat', $data);
    }
}
