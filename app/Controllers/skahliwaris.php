<?php

namespace App\Controllers;

use App\Models\Mod_kk;
use App\Models\Mod_dekk;
use App\Models\Mod_penduduk;
use App\Models\Mod_skk;

class Kk extends BaseController
{
    protected $session;
    protected $Mod_dekk;
    protected $Mod_kk;
    protected $Mod_skk;
    protected $Mod_penduduk;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_dekk = new Mod_dekk();
        $this->Mod_kk = new Mod_kk();
        $this->Mod_skk = new Mod_skk();
        $this->Mod_penduduk = new Mod_penduduk();
    }
    // --------------------------------------------------------------------------------------------------------------
    public function index()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        $variable = $this->Mod_kk
            ->orderBy('created_at_kk', 'asc')
            ->findAll();
        $data = [
            'kartukk' => $variable,
        ];

        return view('user/kk/kk', $data);
    }
    // --------------------------------------------------------------------------------------------------------------
    function simkk() //simpan data KK
    {
        $input = $this->request->getPost();
        // dd($input);
        $data = [
            'no_kk' => $input['kk'],
            'alamat_kk' => $input['alamat'],
            'rtrw_kk' => $input['rt'],
            'desa_kk' => $input['desa'],
            'kecamatan_kk' => $input['kec'],
            'kabupaten_kk' => $input['kota'],
            'kdpos_kk' => $input['pos'],
            'provinsi_kk' => $input['pro'],
        ];

        $this->Mod_kk->insert($data);
        return redirect()->back();
    }
    // --------------------------------------------------------------------------------------------------------------
    function dekk($id) //Detail KK
    {
        $variable = $this->Mod_kk
            ->where('no_kk', $id)
            ->first();




        $variable2 = $this->Mod_dekk
            ->select('*')
            ->join('penduduk', 'penduduk.id_penduduk = de_kk.id_penduduk')
            ->where('id_kk', $variable['id_kk'])
            ->findAll();

        // dd($variable2);

        // $penduduk = $this->Mod_penduduk->findAll();
        $penduduk = $this->Mod_penduduk->whereNotIn('id_penduduk', function ($builder) {
            $builder->select('id_penduduk')->from('de_kk');
        })->findAll();



        $data = [
            'id' => $id,
            'var' => $variable,
            'penduduk' => $penduduk,
            'kk' => $variable2
        ];
        // dd($data);
        return view('user/kk/dekk', $data);
    }
    // --------------------------------------------------------------------------------------------------------------
    function tbhpkk($id) //Tambah penduduk KK
    {
        $request = service('request');
        $idpenduduk = $request->getGet('idpenduduk');
        $idkk = $request->getGet('idkk');

        $data = [
            'id_penduduk' => $idpenduduk,
            'id_kk' => $idkk,
        ];
        // dd($id, $idpenduduk, $idkk);
        $this->Mod_dekk->insert($data);
        return redirect()->back();
    }
    // --------------------------------------------------------------------------------------------------------------
    function happenkk($id) //Hapus Penduduk Dari KK
    {
        $this->Mod_dekk->where('id_de_kk', $id)->delete();
        return redirect()->back();
    }
    // -------------------------------------------------------------------------------------------------------------- 
    function surkk()
    {

        $penduduk = $this->Mod_penduduk->findAll();

        $data = [
            'penduduk' => $penduduk
        ];

        return view('user/kk/pengantarkk', $data);
    }
    // --------------------------------------------------------------------------------------------------------------
    function busur($slug) //buat surat
    {
        $penduduk = $this->Mod_penduduk->where('slug', $slug)->findAll();
        $pdfi = $this->Mod_penduduk->where('slug', $slug)->first();
        $ktp = $this->Mod_skk
            ->where('id_penduduk', $pdfi['id_penduduk'])
            ->orderBy('created_at_skk', 'DESC')
            ->findAll();
        // dd($ktp);

        $data = [
            'penduduk' => $penduduk,
            'ktp' => $ktp,
        ];
        // dd($output);
        return view('user/kk/buat_surat', $data);
    }
    // --------------------------------------------------------------------------------------------------------------
    function tbsur($id) //tbsur->Tambah Surat kk
    {
        $input = $this->request->getPost();
        $data = [
            'no_surat_skk' => $input['nos'],
            'id_penduduk' => $id,
            'keperluan_skk' => $input['kep'],
        ];
        // dd($data);
        $this->Mod_skk->save($data);
        return redirect()->back();
    }
    function psr($id) //print surat ktp
    {
        $skk = $this->Mod_skk
            ->join('penduduk', 'penduduk.id_penduduk = skkk.id_penduduk')
            ->where('id_skkk', $id)->first();
        $data = [
            'ktp' => $skk,
        ];
        // dd($ktp);
        return view('user/kk/print_surat', $data);
    }
    function delsur($id) //delete surat ktp
    {
        // dd($id);
        $this->Mod_skk->where('id_skkk', $id)->delete();
        return redirect()->back();
    }
    function delkk($id) //delete kk
    {
        $this->Mod_kk->where('id_kk', $id)->delete();
        return redirect()->back();
    }
}
