<?php

namespace App\Controllers;

use App\Models\Mod_kelahiran;
use App\Models\Mod_penduduk;

class Kelahiran extends BaseController
{
    protected $session;
    protected $Mod_kelahiran;
    protected $Mod_penduduk;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_kelahiran = new Mod_kelahiran();
        $this->Mod_penduduk = new Mod_penduduk();
    }

    public function index()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        $suratk = $this->Mod_kelahiran
            ->orderBy('created_at', 'desc')
            ->findAll();

        $data = [
            'suratlahir' => $suratk,
        ];

        return view('user/kelahiran/index', $data);
    }
    function tbhkel()
    {
        $input = $this->request->getPost();
        // dd($input);
        $data = [
            'no_surat' => $input['surat'],
            'tanggal' => $input['date'],
        ];
        $this->Mod_kelahiran->insert($data);

        sleep(2);

        $id = $this->Mod_kelahiran
            ->where('no_surat', $input['surat'])
            ->first();
        // dd($id);
        // return view('user/kelahiran/detail_kelahiran', $data);
        return redirect()->to('/kelahiran/detailk/' . $id['id_skkelahiran']);
    }
    function detailk($id)
    {
        // dd($id);
        // $detail = $this->Mod_kelahiran
        //     ->select('skkelahiran.*, COALESCE(ayah.nama_penduduk, "Null") as nama_ayah, COALESCE(ibu.nama_penduduk, "Null") as nama_ibu')
        //     ->join('penduduk as ayah', 'ayah.id_penduduk = skkelahiran.id_ayah', 'left')
        //     ->join('penduduk as ibu', 'ibu.id_penduduk = skkelahiran.id_ibu', 'left')
        //     ->where('skkelahiran.id_skkelahiran', $id)
        //     ->first();
        $detail = $this->Mod_kelahiran
            ->where('skkelahiran.id_skkelahiran', $id)
            ->first();

        $ayah = $this->Mod_penduduk
            ->where('jenis_kelamin_penduduk ', 'Laki-Laki')
            ->findAll();
        $ibu = $this->Mod_penduduk
            ->where('jenis_kelamin_penduduk ', 'Perempuan')
            ->findAll();
        $ib = $this->Mod_penduduk
            ->where('id_penduduk', $detail['id_ibu'])
            ->first();
        $ay = $this->Mod_penduduk
            ->where('id_penduduk', $detail['id_ayah'])
            ->first();

        if ($ib == '') {
            $ibuh = 'Silahkan Pilih Nama Ibu';
        } else {
            $ibuh = $ib['nama_penduduk'];
        }

        if ($ay == '') {
            $ayahh = 'Silahkan Pilih Nama Ayah';
        } else {
            $ayahh = $ay['nama_penduduk'];
        }


        // dd($detail, $ib, $ay);
        $data = [
            'detail' => $detail,
            'id' => $id,
            'ayah' => $ayah,
            'ibu' => $ibu,
            'ibuh' => $ibuh,
            'ayahh' => $ayahh,
        ];

        // dd($data);
        return view('user/kelahiran/detail_kelahiran', $data);
    }
    function hapla($id) // hapus data kelahiran
    {
        // dd($id);
        $this->Mod_kelahiran->where('id_skkelahiran', $id)->delete();
        return redirect()->back();
    }
    function simkel($id) //simpan kelahiran
    {
        $input = $this->request->getPost();
        // dd($input, $id);
        $data = [
            'nama_anak' => $input['nama_anak'],
            'tempat' => $input['tempat'],
            'jenis_kelamin' => $input['jenis_kelamin'],
            'id_ayah' => $input['id_ayah'],
            'id_ibu' => $input['id_ibu'],
            'anak_ke' => $input['anak_ke'],
            'alamat' => $input['alamat'],
        ];
        $this->Mod_kelahiran->update($id, $data);
        return redirect()->back();
    }
    function print($id)
    {
        $var = $this->Mod_kelahiran->where('id_skkelahiran', $id)->first();
        $ayah = $this->Mod_penduduk->where('id_penduduk', $var['id_ayah'])->first();
        $ibu = $this->Mod_penduduk->where('id_penduduk', $var['id_ibu'])->first();
        $data = [
            'detail' => $var,
            'ayah' => $ayah,
            'ibu' => $ibu,
        ];
        return view('user/kelahiran/print_surat', $data);
    }
}
