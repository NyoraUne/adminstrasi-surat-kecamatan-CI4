<?php

namespace App\Controllers;

use App\Models\Mod_penduduk;
use App\Models\Mod_skktp;
use App\Models\Mod_kk;
use App\Models\Mod_skk;
use App\Models\Mod_kelahiran;
use App\Models\Mod_kematian;
use App\Models\Mod_pindah;
use App\Models\Mod_datang;


class Laporan extends BaseController
{
    protected $session;
    protected $Mod_penduduk;
    protected $Mod_skktp;
    protected $Mod_kk;
    protected $Mod_skk;
    protected $Mod_kelahiran;
    protected $Mod_kematian;
    protected $Mod_pindah;
    protected $Mod_datang;

    public function __construct()
    {
        $this->session = session();
        $this->Mod_penduduk = new Mod_penduduk();
        $this->Mod_skktp = new Mod_skktp();
        $this->Mod_kk = new Mod_kk();
        $this->Mod_skk = new Mod_skk();
        $this->Mod_kelahiran = new Mod_kelahiran();
        $this->Mod_kematian = new Mod_kematian();
        $this->Mod_pindah = new Mod_pindah();
        $this->Mod_datang = new Mod_datang();
    }
    // --------------------------------------------------------------------------------------------------------------
    public function index()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        $penduduk = $this->Mod_penduduk->findAll();
        $data = [
            'penduduk' => $penduduk,
        ];

        return view('user/laporan/laporan', $data);
    }
    // --------------------------------------------------------------------------------------------------------------
    function filter()
    {
        $input = $this->request->getPost();


        if ($input['laporan'] == 1) { //Data Penduudk
            return $this->dpend($input);
        }
        if ($input['laporan'] == 2) { //Surat Ktp
            return $this->dktp($input);
        }
        if ($input['laporan'] == 3) { //kk
            return $this->dkk($input);
        }
        if ($input['laporan'] == 4) { //Surat Ktp
            return $this->skk($input);
        }
        if ($input['laporan'] == 5) { //Surat Kelahiran
            return $this->skelahiran($input);
        }
        if ($input['laporan'] == 6) { //izin Kematian
            return $this->skematian($input);
        }
        if ($input['laporan'] == 7) { //surat pindah
            return $this->skpindah($input);
        }
        if ($input['laporan'] == 8) { //tidak mampu
            return $this->skdatang($input);
        }
    }
    // --------------------------------------------------------------------------------------------------------------
    function dpend($input)
    {
        $tgl1 = $input['tgl1'];
        $tgl2 = $input['tgl2'];
        // dd($tgl2);

        if (empty($tgl1) && empty($tgl2)) {
            $penduduk = $this->Mod_penduduk->orderBy('created_at_penduduk', 'desc')->findAll();
            $msg = '';
        } else if (empty($tgl1)) {
            $penduduk = $this->Mod_penduduk
                ->where('created_at_penduduk <=', $tgl2)
                ->orderBy('created_at_penduduk', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Bawah Tanggal : ' . $tgl2;
        } else if (empty($tgl2)) {
            $penduduk = $this->Mod_penduduk
                ->where('created_at_penduduk >=', $tgl1)
                ->orderBy('created_at_penduduk', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Atas Tanggal : ' . $tgl1;
        } else {
            // Jika input tanggal tidak kosong, terapkan filter
            $penduduk = $this->Mod_penduduk
                ->where('created_at_penduduk >=', $tgl1)
                ->where('created_at_penduduk <=', $tgl2)
                ->orderBy('created_at_penduduk', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Antara Tanggal ' . $tgl1 . ' Sampai ' . $tgl2 . '.';
        }

        $data = [
            'penduduk' => $penduduk,
            'msg' => $msg,
        ];
        // dd($data);

        echo view('user/laporan/datapenduduk', $data);
    }
    // --------------------------------------------------------------------------------------------------------------
    function dktp($input)
    {
        $tgl1 = $input['tgl1'];
        $tgl2 = $input['tgl2'];
        // dd($tgl2);

        if (empty($tgl1) && empty($tgl2)) {
            $variable = $this->Mod_skktp
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skktp.id_penduduk')
                ->orderBy('created_at_ktp', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data';
        } else if (empty($tgl1)) {
            $variable = $this->Mod_skktp
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skktp.id_penduduk')
                ->where('created_at_ktp <=', $tgl2)
                ->orderBy('created_at_ktp', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Bawah Tanggal : ' . $tgl2;
        } else if (empty($tgl2)) {
            $variable = $this->Mod_skktp
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skktp.id_penduduk')
                ->where('created_at_ktp >=', $tgl1)
                ->orderBy('created_at_ktp', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Atas Tanggal : ' . $tgl1;
        } else {
            // Jika input tanggal tidak kosong, terapkan filter
            $variable = $this->Mod_skktp
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skktp.id_penduduk')
                ->where('created_at_ktp >=', $tgl1)
                ->where('created_at_ktp <=', $tgl2)
                ->orderBy('created_at_ktp', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Antara Tanggal ' . $tgl1 . ' Sampai ' . $tgl2 . '.';
        }

        $data = [
            'variable' => $variable,
            'msg' => $msg,
        ];
        // dd($data);

        echo view('user/laporan/dataktp', $data);
    }
    // --------------------------------------------------------------------------------------------------------------
    function dkk($input)
    {
        $tgl1 = $input['tgl1'];
        $tgl2 = $input['tgl2'];
        // dd($tgl2, $tgl1);

        if (empty($tgl1) && empty($tgl2)) {
            $variable = $this->Mod_kk
                ->select('*')
                ->orderBy('created_at_kk', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data';
        } else if (empty($tgl1)) {
            $variable = $this->Mod_kk
                ->select('*')
                ->where('created_at_kk <=', $tgl2)
                ->orderBy('created_at_kk', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Bawah Tanggal : ' . $tgl2;
        } else if (empty($tgl2)) {
            $variable = $this->Mod_kk
                ->select('*')
                ->where('created_at_kk >=', $tgl1)
                ->orderBy('created_at_kk', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Atas Tanggal : ' . $tgl1;
        } else {
            // Jika input tanggal tidak kosong, terapkan filter
            $variable = $this->Mod_kk
                ->select('*')
                ->where('created_at_kk >=', $tgl1)
                ->where('created_at_kk <=', $tgl2)
                ->orderBy('created_at_kk', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Antara Tanggal ' . $tgl1 . ' Sampai ' . $tgl2 . '.';
        }

        $data = [
            'variable' => $variable,
            'msg' => $msg,
        ];
        echo view('user/laporan/datakk', $data);
    }
    // --------------------------------------------------------------------------------------------------------------
    function skk($input)
    {
        $tgl1 = $input['tgl1'];
        $tgl2 = $input['tgl2'];
        // dd($tgl2, $tgl1);

        if (empty($tgl1) && empty($tgl2)) {
            $variable = $this->Mod_skk
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skkk.id_penduduk')
                ->orderBy('created_at_skk', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data';
        } else if (empty($tgl1)) {
            $variable = $this->Mod_skk
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skkk.id_penduduk')
                ->where('created_at_skk <=', $tgl2)
                ->orderBy('created_at_skk', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Bawah Tanggal : ' . $tgl2;
        } else if (empty($tgl2)) {
            $variable = $this->Mod_skk
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skkk.id_penduduk')
                ->where('created_at_skk >=', $tgl1)
                ->orderBy('created_at_skk', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Atas Tanggal : ' . $tgl1;
        } else {
            // Jika input tanggal tidak kosong, terapkan filter
            $variable = $this->Mod_skk
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skkk.id_penduduk')
                ->where('created_at_skk >=', $tgl1)
                ->where('created_at_skk <=', $tgl2)
                ->orderBy('created_at_skk', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Antara Tanggal ' . $tgl1 . ' Sampai ' . $tgl2 . '.';
        }

        $data = [
            'variable' => $variable,
            'msg' => $msg,
        ];
        echo view('user/laporan/suratkk', $data);
    }
    // --------------------------------------------------------------------------------------------------------------
    function skelahiran($input)
    {
        $tgl1 = $input['tgl1'];
        $tgl2 = $input['tgl2'];
        // dd($tgl2, $tgl1);

        if (empty($tgl1) && empty($tgl2)) {
            $variable = $this->Mod_kelahiran
                ->select('*')
                ->select('a.nama_penduduk AS nama_ayah, b.nama_penduduk AS nama_ibu')
                ->join('penduduk a', 'a.id_penduduk = skkelahiran.id_ayah')
                ->join('penduduk b', 'b.id_penduduk = skkelahiran.id_ibu')
                ->findAll();
            // dd($variable);
            $msg = 'Menampilkan Semua Data';
        } else if (empty($tgl1)) {
            $variable = $this->Mod_kelahiran
                ->select('*')
                ->select('a.nama_penduduk AS nama_ayah, b.nama_penduduk AS nama_ibu')
                ->join('penduduk a', 'a.id_penduduk = skkelahiran.id_ayah')
                ->join('penduduk b', 'b.id_penduduk = skkelahiran.id_ibu')
                ->where('created_at <=', $tgl2)
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Bawah Tanggal : ' . $tgl2;
        } else if (empty($tgl2)) {
            $variable = $this->Mod_kelahiran
                ->select('*')
                ->select('skkelahiran.created_at')
                ->select('a.nama_penduduk AS nama_ayah, b.nama_penduduk AS nama_ibu')
                ->join('penduduk a', 'a.id_penduduk = skkelahiran.id_ayah')
                ->join('penduduk b', 'b.id_penduduk = skkelahiran.id_ibu')
                ->where('created_at >=', $tgl1)
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Atas Tanggal : ' . $tgl1;
        } else {
            // Jika input tanggal tidak kosong, terapkan filter
            $variable = $this->Mod_kelahiran
                ->select('*')
                ->select('skkelahiran.created_at')
                ->select('a.nama_penduduk AS nama_ayah, b.nama_penduduk AS nama_ibu')
                ->join('penduduk a', 'a.id_penduduk = skkelahiran.id_ayah')
                ->join('penduduk b', 'b.id_penduduk = skkelahiran.id_ibu')
                ->where('created_at >=', $tgl1)
                ->where('created_at <=', $tgl2)
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Antara Tanggal ' . $tgl1 . ' Sampai ' . $tgl2 . '.';
        }

        $data = [
            'variable' => $variable,
            'msg' => $msg,
        ];
        echo view('user/laporan/datakelahiran', $data);
    }
    // --------------------------------------------------------------------------------------------------------------
    function skematian($input)
    {
        $tgl1 = $input['tgl1'];
        $tgl2 = $input['tgl2'];
        // dd($tgl2, $tgl1);

        if (empty($tgl1) && empty($tgl2)) {
            $variable = $this->Mod_kematian
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skkematian.id_penduduk')
                ->orderBy('created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data';
        } else if (empty($tgl1)) {
            $variable = $this->Mod_kematian
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skkematian.id_penduduk')
                ->where('created_at <=', $tgl2)
                ->orderBy('created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Bawah Tanggal : ' . $tgl2;
        } else if (empty($tgl2)) {
            $variable = $this->Mod_kematian
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skkematian.id_penduduk')
                ->where('created_at >=', $tgl1)
                ->orderBy('created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Atas Tanggal : ' . $tgl1;
        } else {
            // Jika input tanggal tidak kosong, terapkan filter
            $variable = $this->Mod_kematian
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skkematian.id_penduduk')
                ->where('created_at >=', $tgl1)
                ->where('created_at <=', $tgl2)
                ->orderBy('created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Antara Tanggal ' . $tgl1 . ' Sampai ' . $tgl2 . '.';
        }

        $data = [
            'variable' => $variable,
            'msg' => $msg,
        ];
        echo view('user/laporan/datakematian', $data);
    }
    // --------------------------------------------------------------------------------------------------------------
    function skpindah($input)
    {
        $tgl1 = $input['tgl1'];
        $tgl2 = $input['tgl2'];
        // dd($tgl2, $tgl1);

        if (empty($tgl1) && empty($tgl2)) {
            $variable = $this->Mod_pindah
                ->select('*')
                ->join('penduduk', 'skpindah.id_penduduk = penduduk.id_penduduk')
                ->orderBy('created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data';
        } else if (empty($tgl1)) {
            $variable = $this->Mod_pindah
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skpindah.id_penduduk')
                ->where('created_at <=', $tgl2)
                ->orderBy('created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Bawah Tanggal : ' . $tgl2;
        } else if (empty($tgl2)) {
            $variable = $this->Mod_pindah
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skpindah.id_penduduk')
                ->where('created_at >=', $tgl1)
                ->orderBy('created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Atas Tanggal : ' . $tgl1;
        } else {
            // Jika input tanggal tidak kosong, terapkan filter
            $variable = $this->Mod_pindah
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skpindah.id_penduduk')
                ->where('created_at >=', $tgl1)
                ->where('created_at <=', $tgl2)
                ->orderBy('created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Antara Tanggal ' . $tgl1 . ' Sampai ' . $tgl2 . '.';
        }

        $data = [
            'variable' => $variable,
            'msg' => $msg,
        ];
        echo view('user/laporan/datapindah', $data);
    }
    function skdatang($input)
    {
        $tgl1 = $input['tgl1'];
        $tgl2 = $input['tgl2'];
        // dd($tgl2, $tgl1);

        if (empty($tgl1) && empty($tgl2)) {
            $variable = $this->Mod_datang
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skdatang.id_penduduk')
                ->orderBy('skdatang.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data';
        } else if (empty($tgl1)) {
            $variable = $this->Mod_datang
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skdatang.id_penduduk')
                ->where('skdatang.created_at <=', $tgl2)
                ->orderBy('skdatang.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Bawah Tanggal : ' . $tgl2;
        } else if (empty($tgl2)) {
            $variable = $this->Mod_datang
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skdatang.id_penduduk')
                ->where('skdatang.created_at >=', $tgl1)
                ->orderBy('skdatang.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Atas Tanggal : ' . $tgl1;
        } else {
            // Jika input tanggal tidak kosong, terapkan filter
            $variable = $this->Mod_datang
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skdatang.id_penduduk')
                ->where('skdatang.created_at >=', $tgl1)
                ->where('skdatang.created_at <=', $tgl2)
                ->orderBy('skdatang.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Antara Tanggal ' . $tgl1 . ' Sampai ' . $tgl2 . '.';
        }

        $data = [
            'variable' => $variable,
            'msg' => $msg,
        ];
        echo view('user/laporan/datadatang', $data);
    }
}
