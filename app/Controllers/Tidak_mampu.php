<?php

namespace App\Controllers;

use App\Models\Mod_penduduk;
use App\Models\Mod_tidak_mampu;


class Tidak_mampu extends BaseController
{
    protected $session;
    protected $Mod_penduduk;
    protected $Mod_tidak_mampu;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_penduduk = new Mod_penduduk();
        $this->Mod_tidak_mampu = new Mod_tidak_mampu();
    }

    public function index()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/Auth/login');
        }

        //cek role dari session
        if ($this->session->get('role') != 1) {
            return redirect()->to('/usera');
        }

        $penduduk = $this->Mod_penduduk->findAll();
        $tidak_mampu = $this->Mod_tidak_mampu
            ->join('penduduk', 'penduduk.id_penduduk = sktidakmampu.id_penduduk')
            ->findAll();

        $data = [
            'penduduk' => $penduduk,
            'tidak_mampu' => $tidak_mampu,
        ];


        return view('user/tidak_mampu/index', $data);
    }
    function simpan_data()
    {
        $input = $this->request->getPost();

        $data = [
            'no_surat' => $input['no_surat'],
            'id_penduduk' => $input['id_penduduk'],
            'keperluan' => $input['keperluan']
        ];

        $this->Mod_tidak_mampu->insert($data);

        return redirect()->back();
    }
    function detail_data($id)
    {

        $tidak_mampu = $this->Mod_tidak_mampu
            ->join('penduduk', 'penduduk.id_penduduk=sktidakmampu.id_penduduk')
            ->where('id_sktidakmampu', $id)
            ->first();
        $data = [
            'tidak_mampu' => $tidak_mampu,
        ];

        return view('user/tidak_mampu/detail', $data);
    }
    function simpan_update($id)
    {
        $input = $this->request->getPost();

        $data = [
            'no_surat' => $input['no_surat'],
            'id_penduduk' => $input['id_penduduk'],
            'keperluan' => $input['keperluan'],
        ];
        $this->Mod_tidak_mampu->update($id, $data);
        return redirect()->back();
    }
    function print_data($id)
    {
        $tidak_mampu = $this->Mod_tidak_mampu
            ->join('penduduk', 'penduduk.id_penduduk=sktidakmampu.id_penduduk')
            ->where('id_sktidakmampu', $id)
            ->first();
        $data = [
            'tidak_mampu' => $tidak_mampu,
        ];

        return view('user/tidak_mampu/print_surat', $data);
    }
    function hapus_data($id)
    {
        $this->Mod_tidak_mampu->where('id_sktidakmampu', $id)->delete();
        return redirect()->back();
    }
}
