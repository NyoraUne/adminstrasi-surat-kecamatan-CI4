<?php

namespace App\Controllers;

use App\Models\Mod_penduduk;
use App\Models\Mod_user;
use App\Models\Mod_permintaan;

class User extends BaseController
{
    protected $session;
    protected $Mod_penduduk;
    protected $Mod_user;
    protected $Mod_permintaan;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_penduduk = new Mod_penduduk();
        $this->Mod_permintaan = new Mod_permintaan();
        $this->Mod_user = new Mod_user();
    }

    public function index()
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
                ->where('id_penduduk', $me2['id_penduduk'])
                ->findAll();
            $data = [
                'data_user' => $me2,
                'permintaan' => $permintaan,
            ];
            // dd($data);

            return view('penduduk/index', $data);
        }

        // return view('penduduk/index');
    }

    function simpan($id)
    {
        $input = $this->request->getPost();
        $slug = url_title($input['nama'], '-', true);
        $nama = ucfirst($input['nama']);
        $ttl = ucfirst($input['ttl']);
        $slugs = $input['nik'] . '_' . $slug;

        // upload gambar
        if ($this->request->getFile('foto') == '') {
            $FileName = '';
        } else {
            $image = $this->request->getFile('foto');
            $FileName = $slugs . '.' . $image->getExtension();
            $image->move(ROOTPATH . 'public/src/profil', $FileName);
        }

        // dd($imageFile);

        // dd($input);
        $data = [
            'nik_penduduk'  => $input['nik'],
            'nama_penduduk' => $nama,
            'tempat_lahir_penduduk' => $ttl,
            'tgl_lahir_penduduk' => $input['tgll'],
            'jenis_kelamin_penduduk' => $input['jk'],
            'agama_penduduk' => $input['agama'],
            'pekerjaan_penduduk' => $input['pekerjaan'],
            'alamat_penduduk' => $input['alamat'],
            'status_perkawinan_penduduk' => $input['stkawin'],
            'email_penduduk' => $input['email'],
            'no_telp_penduduk' => $input['notelp'],
            'foto_penduduk' => $FileName,
            'slug' => $slugs,
        ];
        $this->Mod_penduduk->save($data);

        sleep(1);
        $primaryID = $this->Mod_penduduk->getInsertID();
        $allData = $this->session->get();

        if ($primaryID == '') {
            echo 'Gagal';
        } else {


            $ataup = [
                // 'id_user' => $allData['id_user'],
                'nama_user' => $allData['nama_user'],
                'role' => $allData['role'],
                'username_user' => $allData['username_user'],
                'password_user' => $allData['password_user'],
                'salt' => $allData['salt'],
                'id_penduduk' => $primaryID,
            ];
            // dd($ataup);
            $this->Mod_user->update($allData['id_user'], $ataup);
        }
        return redirect()->to('User/index');
    }
    function update()
    {
        return redirect()->to('User/index');
    }
    function proses($id)
    {
        $var = $this->request->getPost();

        $data = [
            'id_penduduk' => $id,
            'pelayanan' => $var['pelayanan'],
            'deskripsi' => $var['deskripsi'],
            'status' => 'Pengajuan',
        ];
        $this->Mod_permintaan->insert($data);
        return redirect()->back();
    }
}
