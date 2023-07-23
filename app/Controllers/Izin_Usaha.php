<?php

namespace App\Controllers;

use App\Models\Mod_penduduk;
use App\Models\Mod_izinusaha;

class Izin_Usaha extends BaseController
{
    protected $session;
    protected $Mod_penduduk;
    protected $Mod_izinusaha;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_penduduk = new Mod_penduduk();
        $this->Mod_izinusaha = new Mod_izinusaha();
    }

    public function index()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/Auth/login');
        }

        //cek role dari session
        if ($this->session->get('role') != 1) {
            return redirect()->to('/user');
        }

        $penduduk = $this->Mod_penduduk->findAll();
        $izin = $this->Mod_izinusaha
            ->select('*')
            ->join('penduduk', 'penduduk.id_penduduk = skizin_usaha.id_penduduk')
            ->orderBy('skizin_usaha.created_at', 'desc')
            ->findAll();

        $data = [
            'penduduk' => $penduduk,
            'izin' => $izin
        ];

        // dd($data);

        return view('user/izin_usaha/index', $data);
    }
    function simpan_data()
    {
        $input = $this->request->getPost();

        $data = [
            'id_penduduk' => $input['id_penduduk'],
            'no_surat' => $input['no_surat'],
            'no_surat' => $input['no_surat'],
            'nama_usaha' => $input['nama_usaha'],
            'alamat_usaha' => $input['alamat_usaha'],
            'jenis_usaha' => $input['jenis_usaha'],
            'tanggal_ajuan' => $input['tanggal_ajuan'],
            'kontak_usaha' => $input['kontak_usaha'],
            'status_izin' => $input['status_izin'],
        ];
        // dd($data);
        $this->Mod_izinusaha->insert($data);

        return redirect()->back();
    }
    function detail_data($id)
    {
        $izin = $this->Mod_izinusaha
            ->join('penduduk', 'penduduk.id_penduduk = skizin_usaha.id_penduduk')
            ->where('id_skizin_usaha', $id)
            ->first();

        $data = [
            'izin' => $izin,
        ];

        return view('user/izin_usaha/detail', $data);
    }
    function simpan_update($id)
    {
        $input = $this->request->getPost();
        $data = [
            'id_penduduk' => $input['id_penduduk'],
            'no_surat' => $input['no_surat'],
            'no_surat' => $input['no_surat'],
            'nama_usaha' => $input['nama_usaha'],
            'alamat_usaha' => $input['alamat_usaha'],
            'jenis_usaha' => $input['jenis_usaha'],
            'tanggal_ajuan' => $input['tanggal_ajuan'],
            'kontak_usaha' => $input['kontak_usaha'],
            'status_izin' => $input['status_izin'],
        ];

        $this->Mod_izinusaha->update($id, $data);

        return redirect()->back();
    }
    function print_surat($id)
    {
        $izin = $this->Mod_izinusaha
            ->join('penduduk', 'penduduk.id_penduduk = skizin_usaha.id_penduduk')
            ->where('id_skizin_usaha', $id)
            ->first();
        $data = [
            'izin' => $izin,
        ];
        return view('user/izin_usaha/print_surat', $data);
    }
}
