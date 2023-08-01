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
use App\Models\Mod_ahliwaris;
use App\Models\Mod_izinusaha;
use App\Models\Mod_tidak_mampu;
use App\Models\Mod_feedback;
use App\Models\Mod_permintaan;
use App\Models\Mod_reklame;




class Laporan extends BaseController
{
    protected $session;
    protected $Mod_penduduk;
    protected $Mod_skktp;
    protected $Mod_reklame;
    protected $Mod_permintaan;
    protected $Mod_kk;
    protected $Mod_skk;
    protected $Mod_kelahiran;
    protected $Mod_kematian;
    protected $Mod_pindah;
    protected $Mod_datang;
    protected $Mod_ahliwaris;
    protected $Mod_izinusaha;
    protected $Mod_feedback;
    protected $Mod_tidak_mampu;


    public function __construct() //LINK - Function Core
    {
        $this->session = session();
        $this->Mod_penduduk = new Mod_penduduk();
        $this->Mod_skktp = new Mod_skktp();
        $this->Mod_permintaan = new Mod_permintaan();
        $this->Mod_reklame = new Mod_reklame();
        $this->Mod_kk = new Mod_kk();
        $this->Mod_skk = new Mod_skk();
        $this->Mod_kelahiran = new Mod_kelahiran();
        $this->Mod_kematian = new Mod_kematian();
        $this->Mod_pindah = new Mod_pindah();
        $this->Mod_datang = new Mod_datang();
        $this->Mod_feedback = new Mod_feedback();
        $this->Mod_ahliwaris = new Mod_ahliwaris();
        $this->Mod_izinusaha = new Mod_izinusaha();
        $this->Mod_tidak_mampu = new Mod_tidak_mampu();
    }
    // --------------------------------------------------------------------------------------------------------------
    public function index() //LINK - Function Index
    {
        // Cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        $laporan_pindah = $this->Mod_pindah->findAll();
        $laporan_datang = $this->Mod_datang->findAll();
        $laporan_tmampu = $this->Mod_tidak_mampu->findAll();
        $laporan_kematian = $this->Mod_kematian->findAll();
        $laporan_kelahiran = $this->Mod_kelahiran->findAll();

        // Inisialisasi array data untuk chart pertama
        $chart_data1 = [
            ['Bulan', 'Laporan Pindah', 'Laporan Datang'],
        ];
        $chart_data3 = [
            ['Bulan', 'Laporan Kelahiran', 'Laporan Kematian'],
        ];
        $chart_data2 = [
            ['Bulan', 'Laporan Tidak Mampu'],
        ];

        // Inisialisasi data default 0 untuk setiap bulan pada chart pertama
        for ($i = 1; $i <= 12; $i++) {
            $chart_data1[$i] = [date('M', mktime(0, 0, 0, $i, 1)), 0, 0];
            $chart_data2[$i] = [date('M', mktime(0, 0, 0, $i, 1)), 0];
            $chart_data3[$i] = [date('M', mktime(0, 0, 0, $i, 1)), 0, 0];
        }

        // Mengisi data dengan jumlah data yang sesuai pada chart pertama
        foreach ($laporan_pindah as $laporan) {
            $bulan = date('n', strtotime($laporan['created_at']));
            $chart_data1[$bulan][1] += 1;
        }

        foreach ($laporan_datang as $laporan) {
            $bulan = date('n', strtotime($laporan['created_at']));
            $chart_data1[$bulan][2] += 1;
        }

        foreach ($laporan_tmampu as $laporan) {
            $bulan = date('n', strtotime($laporan['created_at']));
            $chart_data2[$bulan][1] += 1;
        }

        foreach ($laporan_kematian as $laporan) {
            $bulan = date('n', strtotime($laporan['created_at']));
            $chart_data3[$bulan][2] += 1;
        }

        foreach ($laporan_kelahiran as $laporan) {
            $bulan = date('n', strtotime($laporan['created_at']));
            $chart_data3[$bulan][1] += 1;
        }

        // dd($chart_data1, $chart_data2, $chart_data3);
        // Kirim data ke tampilan
        return view('user/laporan/laporan', ['chart_data1' => $chart_data1, 'chart_data2' => $chart_data2, 'chart_data3' => $chart_data3]);
    }
    // --------------------------------------------------------------------------------------------------------------
    function filter() //LINK - Function Input Data
    {
        $input = $this->request->getPost();


        switch ($input['laporan']) {
            case 1:
                return $this->dpend($input);
            case 2:
                return $this->dktp($input);
            case 3:
                return $this->dkk($input);
            case 4:
                return $this->skk($input);
            case 5:
                return $this->skelahiran($input);
            case 6:
                return $this->skematian($input);
            case 7:
                return $this->skpindah($input);
            case 8:
                return $this->skdatang($input);
            case 9:
                return $this->skahliwaris($input);
            case 10:
                return $this->skizin_usaha($input);
            case 11:
                return $this->sktidak_mampu($input);
            case 12:
                return $this->skpermintaan($input);
            case 13:
                return $this->skreklame($input);
            case 14:
                return $this->skfeedback($input);
            default:
                // Kasus ketika nilai $input['laporan'] tidak cocok dengan kondisi di atas
                // Lakukan tindakan sesuai kebutuhan
                break;
        }

        // if ($input['laporan'] == 1) { //Data Penduudk
        //     return $this->dpend($input);
        // }
        // if ($input['laporan'] == 2) { //Surat Ktp
        //     return $this->dktp($input);
        // }
        // if ($input['laporan'] == 3) { //kk
        //     return $this->dkk($input);
        // }
        // if ($input['laporan'] == 4) { //Surat Ktp
        //     return $this->skk($input);
        // }
        // if ($input['laporan'] == 5) { //Surat Kelahiran
        //     return $this->skelahiran($input);
        // }
        // if ($input['laporan'] == 6) { //izin Kematian
        //     return $this->skematian($input);
        // }
        // if ($input['laporan'] == 7) { //surat pindah
        //     return $this->skpindah($input);
        // }
        // if ($input['laporan'] == 8) { //tidak datang
        //     return $this->skdatang($input);
        // }
        // if ($input['laporan'] == 9) { //tidak ahliwaris
        //     return $this->skahliwaris($input);
        // }
        // if ($input['laporan'] == 10) { //tidak izin usaha
        //     return $this->skizin_usaha($input);
        // }
    }
    // --------------------------------------------------------------------------------------------------------------
    function dpend($input) //LINK - Function Data Laporan Penduduk
    {
        $tgl1 = $input['tgl1'];
        $tgl2 = $input['tgl2'];
        // dd($tgl2);

        if (empty($tgl1) && empty($tgl2)) {
            $penduduk = $this->Mod_penduduk->orderBy('created_at_penduduk', 'desc')->findAll();
            $msg = 'Menampilkan Semua Data';
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
    function dktp($input) //LINK - Function Data Laporan Surat Keterangan KTP
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
    function dkk($input) //LINK - Function Data Laporan KK
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
    function skk($input) //LINK - Function Data Laporan Surat KK
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
        echo view('user/laporan/datasurkk', $data);
    }
    // --------------------------------------------------------------------------------------------------------------
    function skelahiran($input) //LINK - Function Data Laporan Surat Kelahiran
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
    function skematian($input) //LINK - Function Data Laporan Surat Kematian ,Deathnote woakakaka XD
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
    function skpindah($input) //LINK - Function Data Laporan Surat Pindah
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
    function skdatang($input) //LINK - Function Data Laporan Surat Datang
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
    function skahliwaris($input) //LINK - Function Data Laporan Surat Ahliwaris
    {
        $tgl1 = $input['tgl1'];
        $tgl2 = $input['tgl2'];
        // dd($tgl2, $tgl1);

        if (empty($tgl1) && empty($tgl2)) {
            $variable = $this->Mod_ahliwaris
                ->select('*')
                ->join('skkematian', 'skkematian.id_skkematian = skahliwaris.id_skkematian')
                ->join('penduduk', 'penduduk.id_penduduk = skkematian.id_penduduk')
                ->orderBy('skahliwaris.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data';
        } else if (empty($tgl1)) {
            $variable = $this->Mod_ahliwaris
                ->select('*')
                ->join('skkematian', 'skkematian.id_skkematian = skahliwaris.id_skkematian')
                ->jon('penduduk', 'penduduk.id_penduduk = skkematian.id_penduduk')
                ->where('skahliwaris.created_at <=', $tgl2)
                ->orderBy('skahliwaris.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Bawah Tanggal : ' . $tgl2;
        } else if (empty($tgl2)) {
            $variable = $this->Mod_ahliwaris
                ->select('*')
                ->join('skkematian', 'skkematian.id_skkematian = skahliwaris.id_skkematian')
                ->join('penduduk', 'penduduk.id_penduduk = skkematian.id_penduduk')
                ->where('skahliwaris.created_at >=', $tgl1)
                ->orderBy('skahliwaris.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Atas Tanggal : ' . $tgl1;
        } else {
            // Jika input tanggal tidak kosong, terapkan filter
            $variable = $this->Mod_ahliwaris
                ->select('*')
                ->join('skkematian', 'skkematian.id_skkematian = skahliwaris.id_skkematian')
                ->join('penduduk', 'penduduk.id_penduduk = skkematian.id_penduduk')
                ->where('skahliwaris.created_at >=', $tgl1)
                ->where('skahliwaris.created_at <=', $tgl2)
                ->orderBy('skahliwaris.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Antara Tanggal ' . $tgl1 . ' Sampai ' . $tgl2 . '.';
        }

        $data = [
            'variable' => $variable,
            'msg' => $msg,
        ];
        echo view('user/laporan/dataahliwaris', $data);
    }
    function skizin_usaha($input) //LINK - Function Data Laporan Surat Izin Usaha
    {
        $tgl1 = $input['tgl1'];
        $tgl2 = $input['tgl2'];
        // dd($tgl2, $tgl1);

        if (empty($tgl1) && empty($tgl2)) {
            $variable = $this->Mod_izinusaha
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skizin_usaha.id_penduduk')
                ->orderBy('skizin_usaha.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data';
        } else if (empty($tgl1)) {
            $variable = $this->Mod_izinusaha
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skizin_usaha.id_penduduk')
                ->where('skizin_usaha.created_at <=', $tgl2)
                ->orderBy('skizin_usaha.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Bawah Tanggal : ' . $tgl2;
        } else if (empty($tgl2)) {
            $variable = $this->Mod_izinusaha
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skizin_usaha.id_penduduk')
                ->where('skizin_usaha.created_at >=', $tgl1)
                ->orderBy('skizin_usaha.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Atas Tanggal : ' . $tgl1;
        } else {
            // Jika input tanggal tidak kosong, terapkan filter
            $variable = $this->Mod_izinusaha
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = skizin_usaha.id_penduduk')
                ->where('skizin_usaha.created_at >=', $tgl1)
                ->where('skizin_usaha.created_at <=', $tgl2)
                ->orderBy('skizin_usaha.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Antara Tanggal ' . $tgl1 . ' Sampai ' . $tgl2 . '.';
        }

        $data = [
            'variable' => $variable,
            'msg' => $msg,
        ];
        echo view('user/laporan/dataskizin_usaha', $data);
    }
    function sktidak_mampu($input) //LINK - Function Data Laporan Surat Tidak Mampu
    {
        $tgl1 = $input['tgl1'];
        $tgl2 = $input['tgl2'];
        // dd($tgl2, $tgl1);

        if (empty($tgl1) && empty($tgl2)) {
            $variable = $this->Mod_tidak_mampu
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = sktidakmampu.id_penduduk')
                ->orderBy('sktidakmampu.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data';
        } else if (empty($tgl1)) {
            $variable = $this->Mod_tidak_mampu
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = sktidakmampu.id_penduduk')
                ->where(
                    'sktidakmampu.created_at <=',
                    $tgl2
                )
                ->orderBy('sktidakmampu.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Bawah Tanggal : ' . $tgl2;
        } else if (empty($tgl2)) {
            $variable = $this->Mod_tidak_mampu
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = sktidakmampu.id_penduduk')
                ->where(
                    'sktidakmampu.created_at >=',
                    $tgl1
                )
                ->orderBy('sktidakmampu.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Atas Tanggal : ' . $tgl1;
        } else {
            // Jika input tanggal tidak kosong, terapkan filter
            $variable = $this->Mod_tidak_mampu
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = sktidakmampu.id_penduduk')
                ->where(
                    'sktidakmampu.created_at >=',
                    $tgl1
                )
                ->where(
                    'sktidakmampu.created_at <=',
                    $tgl2
                )
                ->orderBy('sktidakmampu.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Antara Tanggal ' . $tgl1 . ' Sampai ' . $tgl2 . '.';
        }

        $data = [
            'variable' => $variable,
            'msg' => $msg,
        ];
        echo view('user/laporan/datasktidakmampu', $data);
    }
    function skpermintaan($input) //LINK - Function Data Laporan Surat Pindah
    {
        $tgl1 = $input['tgl1'];
        $tgl2 = $input['tgl2'];
        // dd($tgl2, $tgl1);

        if (empty($tgl1) && empty($tgl2)) {
            $variable = $this->Mod_permintaan
                ->select('*')
                ->join('penduduk', 'permintaan.id_penduduk = penduduk.id_penduduk')
                ->orderBy('created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data';
        } else if (empty($tgl1)) {
            $variable = $this->Mod_permintaan
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = permintaan.id_penduduk')
                ->where('created_at <=', $tgl2)
                ->orderBy('created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Bawah Tanggal : ' . $tgl2;
        } else if (empty($tgl2)) {
            $variable = $this->Mod_permintaan
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = permintaan.id_penduduk')
                ->where('created_at >=', $tgl1)
                ->orderBy('created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Atas Tanggal : ' . $tgl1;
        } else {
            // Jika input tanggal tidak kosong, terapkan filter
            $variable = $this->Mod_permintaan
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = permintaan.id_penduduk')
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
        echo view('user/laporan/datapengajuan', $data);
    }
    function skfeedback($input) //LINK - Function Data feedback
    {
        $tgl1 = $input['tgl1'];
        $tgl2 = $input['tgl2'];
        // dd($tgl2, $tgl1);

        if (empty($tgl1) && empty($tgl2)) {
            $variable = $this->Mod_feedback
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = feedback.id_penduduk')
                ->orderBy('created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data';
        } else if (empty($tgl1)) {
            $variable = $this->Mod_feedback
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = feedback.id_penduduk')
                ->where('created_at <=', $tgl2)
                ->orderBy('created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Bawah Tanggal : ' . $tgl2;
        } else if (empty($tgl2)) {
            $variable = $this->Mod_feedback
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = feedback.id_penduduk')
                ->where('created_at >=', $tgl1)
                ->orderBy('created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Atas Tanggal : ' . $tgl1;
        } else {
            // Jika input tanggal tidak kosong, terapkan filter
            $variable = $this->Mod_feedback
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = feedback.id_penduduk')
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
        echo view('user/laporan/datafeedback', $data);
    }
    function skreklame($input) //LINK - Function Data feedback
    {
        $tgl1 = $input['tgl1'];
        $tgl2 = $input['tgl2'];
        // dd($tgl2, $tgl1);

        if (empty($tgl1) && empty($tgl2)) {
            $variable = $this->Mod_reklame
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = reklame.id_penduduk')
                ->orderBy('created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data';
        } else if (empty($tgl1)) {
            $variable = $this->Mod_reklame
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = reklame.id_penduduk')
                ->where('created_at <=', $tgl2)
                ->orderBy('created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Bawah Tanggal : ' . $tgl2;
        } else if (empty($tgl2)) {
            $variable = $this->Mod_reklame
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = reklame.id_penduduk')
                ->where('created_at >=', $tgl1)
                ->orderBy('created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Atas Tanggal : ' . $tgl1;
        } else {
            // Jika input tanggal tidak kosong, terapkan filter
            $variable = $this->Mod_reklame
                ->select('*')
                ->join('penduduk', 'penduduk.id_penduduk = reklame.id_penduduk')
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
        echo view('user/laporan/datareklame', $data);
    }
}
