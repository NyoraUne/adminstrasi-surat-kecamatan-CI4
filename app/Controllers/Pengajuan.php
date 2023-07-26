<?php

namespace App\Controllers;

use App\Models\Mod_permintaan;

class Pengajuan extends BaseController
{
    protected $session;
    protected $Mod_permintaan;
    public function __construct()
    {
        $this->session = session();
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


        $pengajuan = $this->Mod_permintaan
            ->join('penduduk', 'penduduk.id_penduduk = permintaan.id_penduduk')
            ->findAll();
        $data = [
            'pengajuan' => $pengajuan,
        ];

        return view('user/pengajuan/index', $data);
    }
    function detail($id)
    {
        $permintaan = $this->Mod_permintaan
            ->join('penduduk', 'penduduk.id_penduduk = permintaan.id_penduduk')
            ->where('id_permintaan', $id)->first();
        $data = [
            'permintaan' => $permintaan,
        ];
        return view('user/pengajuan/detail', $data);
    }
    function proses($id)
    {
        $permintaan = $this->Mod_permintaan
            ->join('penduduk', 'penduduk.id_penduduk = permintaan.id_penduduk')
            ->where('id_permintaan', $id)->first();
        $imp = $this->request->getPost();

        $data = [
            'id_penduduk' => $permintaan['id_penduduk'],
            'pelayanan' => $permintaan['pelayanan'],
            'deskripsi' => $permintaan['deskripsi'],
            'status' => $imp['status'],
        ];

        $this->Mod_permintaan->update($id, $data);
        return redirect()->back();
    }
}
