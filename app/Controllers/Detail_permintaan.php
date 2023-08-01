<?php

namespace App\Controllers;

use App\Models\Mod_penduduk;
use App\Models\Mod_file;
use App\Models\Mod_feedback;
use App\Models\Mod_komen;
use App\Models\Mod_user;
use App\Models\Mod_permintaan;

class Detail_permintaan extends BaseController
{
    protected $session;
    protected $Mod_penduduk;
    protected $validation;
    protected $Mod_feedback;
    protected $Mod_komen;
    protected $Mod_file;
    protected $Mod_user;
    protected $Mod_permintaan;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_penduduk = new Mod_penduduk();
        $this->Mod_permintaan = new Mod_permintaan();
        $this->validation = \Config\Services::validation();
        $this->Mod_komen = new Mod_komen();
        $this->Mod_file = new Mod_file();
        $this->Mod_feedback = new Mod_feedback();
        $this->Mod_user = new Mod_user();
    }

    public function index($id)
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }
        $allData = $this->session->get();
        $me = $this->Mod_user->where('id_user', $allData['id_user'])->first();
        // dd($me);
        if ($me['id_penduduk'] == null) {
            return view('penduduk/regis');
        } else {

            $me2 = $this->Mod_user
                ->join('penduduk', 'penduduk.id_penduduk = user.id_penduduk')
                ->where('id_user', $allData['id_user'])->first();

            $permintaan = $this->Mod_permintaan
                ->join('penduduk', 'penduduk.id_penduduk= permintaan.id_penduduk')
                ->where('permintaan.id_penduduk', $me2['id_penduduk'])
                ->first();

            $file = $this->Mod_file
                ->where('id_permintaan', $id)
                ->where('detail', false)
                ->findAll();
            $files = $this->Mod_file
                ->where('id_permintaan', $id)
                ->where('detail', true)
                ->findAll();

            $komen = $this->Mod_komen
                ->join('user', 'user.id_user = komentar.id_user')
                ->where('id_permintaan', $id)
                ->findAll();

            // dd($komen);


            $feedback = $this->Mod_feedback->where('id_penduduk', $me2['id_penduduk'])->findAll();
            $data = [
                'data_user' => $me2,
                'permintaan' => $permintaan,
                'feedback' => $feedback,
                'file' => $file,
                'files' => $files,
                'komen' => $komen,
            ];
            // dd($data);

            return view('penduduk/detail_permintaan', $data);
        }

        // return view('penduduk/index');
    }
    function simpan($id)
    {
        date_default_timezone_set("Asia/Jakarta");
        $file = $this->Mod_file
            ->join('permintaan', 'permintaan.id_permintaan = file.id_permintaan')
            ->where('file.id_permintaan', $id)
            ->findAll();


        $permintaan = $this->Mod_permintaan
            ->join('penduduk', 'penduduk.id_penduduk = permintaan.id_penduduk')
            ->where('permintaan.id_permintaan', $id)
            ->first();


        $input = $this->request->getPost();
        $date = date("Ymd-hisa");

        // upload gambar
        // dd($permintaan);
        $image = $this->request->getFile('file');

        // dd($image);
        // $FileName = $date . '-' . $permintaan['nama_penduduk'] . '.' . $image->getExtension();
        $FileName = $date . '-' . str_replace(' ', '_', $permintaan['nama_penduduk']) . '.' . $image->getExtension();
        // dd($FileName);
        $image->move(ROOTPATH . 'public/src/file/', $FileName);



        $data = [
            'id_permintaan' => $id,
            'file' => $FileName,
            'data' => $input['data'],
            'detail' => false,
            'deskripsi' => $input['deskripsi'],
        ];


        $this->Mod_file->insert($data);
        return redirect()->back();
    }
    function seepdf($id)
    {
        // Path ke file PDF yang akan ditampilkan
        $pdfFilePath = ROOTPATH . 'public/src/file/' . $id;

        // dd($pdfFilePath);
        // Cek apakah file PDF ada
        if (file_exists($pdfFilePath)) {
            // Baca isi file PDF
            $pdfContent = file_get_contents($pdfFilePath);

            // Tetapkan tipe respons sebagai 'application/pdf'
            $response = $this->response->setContentType('application/pdf');

            // Kirimkan isi file PDF sebagai respons ke browser
            $response->setBody($pdfContent);

            return $response;
        } else {
            // Tampilkan pesan error jika file tidak ditemukan
            return 'File PDF tidak ditemukan.';
        }
    }
    function hapus_file($id)
    {
        $this->Mod_file->delete($id);
        return redirect()->back();
    }
    function add_comment($id)
    {
        $inv = $this->request->getPost();

        $data = [
            'id_permintaan' => $id,
            'id_user' => $inv['id_user'],
            'koment' => $inv['koment']
        ];

        // dd($id, $inv, $data);
        $this->Mod_komen->insert($data);
        return redirect()->back();
    }
}
