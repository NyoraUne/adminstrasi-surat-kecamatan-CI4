<?php

namespace App\Controllers;

use App\Models\Mod_penduduk;
use App\Models\Mod_kematian;
use App\Models\Mod_ahliwaris;
use App\Models\Mod_deahliwaris;


class Ahliwaris extends BaseController
{
    protected $session;
    protected $Mod_penduduk;
    protected $Mod_kematian;
    protected $Mod_ahliwaris;
    protected $Mod_deahliwaris;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_penduduk = new Mod_penduduk();
        $this->Mod_kematian = new Mod_kematian();
        $this->Mod_ahliwaris = new Mod_ahliwaris();
        $this->Mod_deahliwaris = new Mod_deahliwaris();
    }

    public function index()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        $ahliwaris = $this->Mod_ahliwaris
            ->select('*')
            ->join('skkematian', 'skkematian.id_skkematian = skahliwaris.id_skkematian')
            ->join('penduduk', 'penduduk.id_penduduk = skkematian.id_penduduk')
            ->orderBy('skahliwaris.created_at', 'desc')
            ->findAll();

        // dd($ahliwaris);

        $kematian = $this->Mod_kematian
            ->join('penduduk',  'penduduk.id_penduduk = skkematian.id_penduduk')
            ->findAll();



        $data = [
            'ahliwaris' => $ahliwaris,
            'kematian' => $kematian,
        ];
        return view('user/ahliwaris/index', $data);
    }
    function hapus_data($id)
    {
        $this->Mod_ahliwaris
            ->where('id_skahliwaris', $id)
            ->delete();

        return redirect()->back();
    }
    function buat_data()
    {
        $input = $this->request->getPost();

        $data = [
            'id_skkematian' => $input['id_skkematian'],
            'no_surat' => $input['no_surat'],
        ];

        $this->Mod_ahliwaris->insert($data);
        return redirect()->back();
    }
    function buat_surat($id)
    {
        $kematian = $this->Mod_ahliwaris
            ->select('*')
            ->join('skkematian', 'skkematian.id_skkematian = skahliwaris.id_skkematian')
            ->join('penduduk', 'penduduk.id_penduduk = skkematian.id_penduduk')
            ->where('id_skahliwaris', $id)
            ->orderBy('skahliwaris.created_at', 'desc')
            ->first();

        $penduduk = $this->Mod_penduduk->findAll();

        $deahliwaris = $this->Mod_deahliwaris
            ->select('*')
            ->join('penduduk', 'penduduk.id_penduduk=de_ahliwaris.id_penduduk')
            ->where('id_skahliwaris', $id)
            ->findAll();

        $data = [
            'kematian' => $kematian,
            'penduduk' => $penduduk,
            'ahliwaris' => $deahliwaris
        ];
        return view('user/ahliwaris/buat_surat', $data);
    }
    function simpan_ahliwaris($id)
    {
        $input = $this->request->getPost();

        $data = [
            'id_skahliwaris' => $id,
            'id_penduduk' => $input['id_penduduk'],
            'hubungan' => $input['hubungan'],
        ];

        $this->Mod_deahliwaris->insert($data);
        return redirect()->back();
    }
}
