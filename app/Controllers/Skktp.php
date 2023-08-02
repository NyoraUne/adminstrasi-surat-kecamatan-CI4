<?php

namespace App\Controllers;

use App\Models\Mod_penduduk;
use App\Models\Mod_skktp;

class Skktp extends BaseController
{
    protected $session;
    protected $Mod_penduduk;
    protected $Mod_skktp;
    public function __construct()
    {
        $this->Mod_penduduk = new Mod_penduduk();
        $this->Mod_skktp = new Mod_skktp();
        $this->session = session();
    }
    // -----------------------------------------------------------------------
    public function index()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        $penduduk = $this->Mod_penduduk->findAll();

        $data = [
            'penduduk' => $penduduk
        ];

        return view('user/skktp/skktp', $data);
    }
    // -----------------------------------------------------------------------
    function busur($slug) //busur->buatsurat ktp
    {
        $penduduk = $this->Mod_penduduk->where('slug', $slug)->findAll();
        $pdfi = $this->Mod_penduduk->where('slug', $slug)->first();
        $ktp = $this->Mod_skktp->where('id_penduduk', $pdfi['id_penduduk'])->orderBy('created_at_ktp', 'DESC')->findAll();
        // dd($ktp);

        $data = [
            'penduduk' => $penduduk,
            'ktp' => $ktp,
        ];
        // dd($output);
        return view('user/skktp/buat_surat', $data);
    }
    // -----------------------------------------------------------------------
    function tbsur($id) //tbsur->Tambah Surat ktp
    {
        $input = $this->request->getPost();
        $data = [
            'no_surat_ktp' => $input['nos'],
            'id_penduduk' => $id,
            'keperluan_ktp' => $input['kep'],
        ];
        // dd($data);
        $this->Mod_skktp->save($data);
        return redirect()->back();
    }
    // -----------------------------------------------------------------------
    function psr($id) //print surat ktp
    {
        $ktp = $this->Mod_skktp
            ->join('penduduk', 'penduduk.id_penduduk = skktp.id_penduduk')
            ->where('id_skktp', $id)->first();
        $data = [
            'ktp' => $ktp,
        ];
        // dd($ktp);
        return view('user/skktp/print_surat', $data);
    }
    // -----------------------------------------------------------------------
    function delsur($id) //delete surat ktp
    {
        // dd($id);
        $this->Mod_skktp->where('id_skktp', $id)->delete();
        return redirect()->back();
    }
}
