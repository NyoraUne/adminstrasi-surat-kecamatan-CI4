<?php

namespace App\Controllers;

use App\Models\Mod_penduduk;
use App\Models\Mod_kk;
use App\Models\Mod_dekk;

class penduduk extends BaseController
{
    protected $session;
    protected $Mod_penduduk;
    protected $Mod_kk;
    protected $Mod_dekk;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_penduduk = new Mod_penduduk();
        $this->Mod_kk = new Mod_kk();
        $this->Mod_dekk = new Mod_dekk();
    }
    // -----------------------------------------------------------------------
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
        return view('user/penduduk/penduduk');
    }
    // -----------------------------------------------------------------------
    public function simpen()
    {
        $input = $this->request->getPost();
        $slug = url_title($input['nama'], '-', true);
        $nama = ucfirst($input['nama']);
        $ttl = ucfirst($input['ttl']);
        $slugs = $input['nik'] . '_' . $slug;

        // upload gambar
        $image = $this->request->getFile('foto');
        $FileName = $slugs . '.' . $image->getExtension();
        $image->move(ROOTPATH . 'public/src/profil', $FileName);

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



        return redirect()->to('/Penduduk/index');
    }
    // -----------------------------------------------------------------------
    public function tbl_penduduk()
    {
        $penduduk = $this->Mod_penduduk->findAll();

        $data = [
            'penduduk' => $penduduk
        ];

        return view('user/penduduk/tbl_penduduk', $data);
    }
    // -----------------------------------------------------------------------
    public function simup()
    {
        $input = $this->request->getPost();
        // dd($input);
        $slug = url_title($input['nama'], '-', true);
        $nama = ucfirst($input['nama']);
        $ttl = ucfirst($input['ttl']);
        $slugs = $input['nik'] . '_' . $slug;
        // upload gambar
        $image = $this->request->getFile('foto');
        $FileName = $slugs . '.' . $image->getExtension();
        $image->move(ROOTPATH . 'public/src/profil', $FileName);

        $data = [
            // 'id_penduduk' => $input['id'],
            'nik_penduduk' => $input['nik'],
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
        $id = $input['id'];
        // dd($id);
        $this->Mod_penduduk->update($id, $data);
        return redirect()->to('/Penduduk/tbl_penduduk');
    }
    // -----------------------------------------------------------------------
    public function delpen($id)
    {
        // dd($id);
        $this->Mod_penduduk->delete($id);
        return redirect()->to('/Penduduk/tbl_penduduk');
    }
    // -----------------------------------------------------------------------
    function detailpen($slug)
    {
        $output = $this->Mod_penduduk->where('slug', $slug)->findAll();
        // dd($output);
        $data = [
            'penduduk' => $output,
        ];
        return view('user/penduduk/detail_penduduk', $data);
    }
}
