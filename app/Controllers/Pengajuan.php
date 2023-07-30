<?php

namespace App\Controllers;

use App\Models\Mod_permintaan;
use App\Models\Mod_komen;
use App\Models\Mod_file;

class Pengajuan extends BaseController
{
    protected $session;
    protected $Mod_permintaan;
    protected $Mod_komen;
    protected $Mod_file;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_permintaan = new Mod_permintaan();
        $this->Mod_komen = new Mod_komen();
        $this->Mod_file = new Mod_file();
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

        $file = $this->Mod_file
            ->where('id_permintaan', $id)
            ->where('detail', false)
            ->findAll();

        $files = $this->Mod_file
            ->where('id_permintaan', $id)
            ->where('detail', true)
            ->findAll();

        $permintaan = $this->Mod_permintaan
            ->join('penduduk', 'penduduk.id_penduduk = permintaan.id_penduduk')
            ->where('id_permintaan', $id)->first();

        $komen = $this->Mod_komen
            ->join('user', 'user.id_user = komentar.id_user')
            ->where('id_permintaan', $id)
            ->findAll();

        $data = [
            'permintaan' => $permintaan,
            'file' => $file,
            'files' => $files,
            'komen' => $komen,
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
        $date = date("Ymd-h:i:sa");

        // upload gambar
        // dd($permintaan);
        $image = $this->request->getFile('file');
        $FileName = $date . '-' . $permintaan['nama_penduduk'] . '.' . $image->getExtension();
        $image->move(ROOTPATH . 'public/src/file', $FileName);

        $data = [
            'id_permintaan' => $id,
            'file' => $FileName,
            'data' => $input['data'],
            'detail' => true,
            'deskripsi' => $input['deskripsi'],
        ];

        $this->Mod_file->insert($data);
        return redirect()->back();
    }
}
