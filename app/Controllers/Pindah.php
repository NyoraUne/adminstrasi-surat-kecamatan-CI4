<?php

namespace App\Controllers;

use App\Models\Mod_penduduk;
use App\Models\Mod_pindah;
use App\Models\Mod_datang;

class Pindah extends BaseController
{
    protected $session;
    protected $Mod_penduduk;
    protected $Mod_pindah;
    protected $Mod_datang;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_pindah = new Mod_pindah();
        $this->Mod_datang = new Mod_datang();
        $this->Mod_penduduk = new Mod_penduduk();
    }

    public function index()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }
        $penduduk = $this->Mod_penduduk->findAll();

        $var = $this->Mod_datang
            ->join('penduduk', 'skdatang.id_penduduk = penduduk.id_penduduk')
            ->findAll();

        $data = [
            'pindah' => $var,
            'penduduk' => $penduduk
        ];

        return view('user/pindah/index', $data);
    }
    // --------------------------------------------------------------------------------------------------------------
    function busur($slug) //busur->buatsurat ktp
    {
        $penduduk = $this->Mod_penduduk->where('slug', $slug)->first();
        $pindah = $this->Mod_pindah->where('id_penduduk', $penduduk['id_penduduk'])->orderBy('created_at', 'DESC')->findAll();
        // dd($pindah);

        $data = [
            'penduduk' => $penduduk,
            'pindah' => $pindah
        ];
        // dd($output);
        return view('user/pindah/buat_surat', $data);
    }
    // --------------------------------------------------------------------------------------------------------------
    function delsur($id) //delete surat
    {
        // dd($id);
        $this->Mod_pindah->where('id_skpindah', $id)->delete();
        return redirect()->back();
    }
    // --------------------------------------------------------------------------------------------------------------
    function tbsur($id)
    {
        $input = $this->request->getPost();
        // dd($input, $id);
        $data = [
            'id_penduduk' => $id,
            'no_surat' => $input['nos'],
            'keluarga_ikut' => $input['pen'],
            'alasan_pindah' => $input['alap'],
            'pindah_dari' => $input['alaa'],
            'alamat_baru' => $input['alat'],
        ];
        $this->Mod_pindah->insert($data);
        return redirect()->back();
    }
    function psr($id) //Print Srat
    {
        $pindah = $this->Mod_pindah
            ->select('*')
            ->where('id_skpindah', $id)
            ->join('penduduk', 'skpindah.id_penduduk = penduduk.id_penduduk')
            ->join('de_kk', 'penduduk.id_penduduk = de_kk.id_penduduk')
            ->join('kk', 'de_kk.id_kk = kk.id_kk')
            ->first();

        $data = [
            'pi' => $pindah,
        ];
        // dd($data);
        return view('user/pindah/print_surat', $data);
    }
    function datang()
    {
        $input = $this->request->getPost();
        $penduduk = $this->Mod_penduduk
            ->where('id_penduduk', $input['id_penduduk'])
            ->first();

        // upload gambar
        $ktp = $this->request->getFile('ktp');
        $data_ktp = 'KTP-' . $penduduk['slug'] . '.' . $ktp->getExtension();
        $ktp->move(ROOTPATH . 'public/src/data', $data_ktp);
        // dd($data_ktp);


        $pindah = $this->request->getFile('pindah');
        $data_pindah = 'Surat_Pindah-' . $penduduk['slug'] . '.' . $pindah->getExtension();
        $pindah->move(ROOTPATH . 'public/src/data', $data_pindah);

        $data = [
            'id_penduduk' => $input['id_penduduk'],
            'surat_datang' => $data_pindah,
            'ktp_datang' => $data_ktp,
            'no_surat' => $input['no_surat'],
            'alamat_asal' => $input['alamat_asal'],
            'alasan_pindah' => $input['alasan_pindah'],
        ];

        // dd($data);
        $this->Mod_datang->save($data);

        return redirect()->back();
    }
    public function showpdf($id)
    {
        $pdfPath = FCPATH . 'src/data/' . $id;
        // header('Content-Type: application/pdf');
        $this->response->setHeader('Content-Type', 'application/pdf');
        readfile($pdfPath);
    }

    function hapus_datang($id)
    {
        $this->Mod_datang->where('id_skdatang', $id)->delete();
        return redirect()->back();
    }
}
