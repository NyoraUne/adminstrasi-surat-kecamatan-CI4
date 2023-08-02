<?php

namespace App\Controllers;

use App\Models\Mod_penduduk;
use App\Models\Mod_kematian;

class Kematian extends BaseController
{
    protected $session;
    protected $Mod_penduduk;
    protected $Mod_kematian;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_penduduk = new Mod_penduduk();
        $this->Mod_kematian = new Mod_kematian();
    }

    public function index()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        $var = $this->Mod_penduduk->findAll();
        $kematian = $this->Mod_kematian
            ->select('*')
            ->select('skkematian.*, skkematian.created_at AS kematian_created_at')
            ->join('penduduk', 'penduduk.id_penduduk = skkematian.id_penduduk')
            ->orderBy('kematian_created_at', 'desc')
            ->findAll();

        // dd($kematian);
        $data = [
            'penduduk' => $var,
            'kematian' => $kematian,
        ];

        return view('user/kematian/index', $data);
    }
    function simkem() //simpan data kematian
    {
        $input = $this->request->getPost();
        // dd($input);
        $data = [
            'no_surat' => $input['no_surat'],
            'id_penduduk' => $input['id_penduduk'],
            'hari' => $input['hari'],
            'tanggal' => $input['tanggal'],
            'sebab' => $input['sebab'],
            'tempat' => $input['tempat'],
        ];

        $this->Mod_kematian->insert($data);
        return redirect()->back();
    }
    function hapkem($id) //hapus data kematian
    {
        // dd($id);
        $this->Mod_kematian->where('id_skkematian', $id)->delete();

        return redirect()->back();
    }

    function print($id) //print data kematian
    {
        $var = $this->Mod_kematian
            ->select('*')
            ->join('penduduk', 'penduduk.id_penduduk = skkematian.id_penduduk')
            ->where('id_skkematian', $id)
            ->first();
        $data = [
            'detail' => $var,
        ];
        return view('user/kematian/print_surat', $data);
    }
}
