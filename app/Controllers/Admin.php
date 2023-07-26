<?php

namespace App\Controllers;

use App\Models\Mod_penduduk;
use App\Models\Mod_permintaan;
use App\Models\Mod_datang;
use App\Models\Mod_ahliwaris;
use App\Models\Mod_izinusaha;
use App\Models\Mod_kematian;
use App\Models\Mod_kelahiran;
use App\Models\Mod_skk;
use App\Models\Mod_skktp;
use App\Models\Mod_pindah;
use App\Models\Mod_tidak_mampu;



class Admin extends BaseController
{
    protected $session;
    protected $Mod_pindah;
    protected $Mod_penduduk;
    protected $Mod_ahliwaris;
    protected $Mod_tidak_mampu;
    protected $Mod_skk;
    protected $Mod_skktp;
    protected $Mod_kematian;
    protected $Mod_kelahiran;
    protected $Mod_izinusaha;
    protected $Mod_permintaan;
    protected $Mod_datang;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_penduduk = new Mod_penduduk();
        $this->Mod_ahliwaris = new Mod_ahliwaris();
        $this->Mod_tidak_mampu = new Mod_tidak_mampu();
        $this->Mod_kematian = new Mod_kematian();
        $this->Mod_skk = new Mod_skk();
        $this->Mod_pindah = new Mod_pindah();
        $this->Mod_skktp = new Mod_skktp();
        $this->Mod_kelahiran = new Mod_kelahiran();
        $this->Mod_izinusaha = new Mod_izinusaha();
        $this->Mod_datang = new Mod_datang();
        $this->Mod_permintaan = new Mod_permintaan();
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

        $penduduk = $this->Mod_penduduk->countAllResults();
        $permintaan = $this->Mod_permintaan->countAllResults();
        $ahliwaris = $this->Mod_ahliwaris->countAllResults();
        $datang = $this->Mod_datang->countAllResults();
        $usaha = $this->Mod_izinusaha->countAllResults();
        $lahir = $this->Mod_kelahiran->countAllResults();
        $mati = $this->Mod_kematian->countAllResults();
        $kk = $this->Mod_skk->countAllResults();
        $pindah = $this->Mod_pindah->countAllResults();
        $ktp = $this->Mod_skktp->countAllResults();
        $miskin = $this->Mod_tidak_mampu->countAllResults();

        $data = [
            'penduduk' => $penduduk,
            'permintaan' => $permintaan,
            'ahliwaris' => $ahliwaris,
            'datang' => $datang,
            'miskin' => $miskin,
            'usaha' => $usaha,
            'pindah' => $pindah,
            'lahir' => $lahir,
            'mati' => $mati,
            'kk' => $kk,
            'ktp' => $ktp,
        ];

        return view('user/index', $data);
    }
}
