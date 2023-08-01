<?php

namespace App\Controllers;

use App\Models\Mod_feedback;
use App\Models\Mod_feedstat;




class Feedback extends BaseController
{
    protected $session;
    protected $Mod_feedback;
    protected $Mod_feedstat;

    public function __construct()
    {
        $this->session = session();
        $this->Mod_feedback = new Mod_feedback();
        $this->Mod_feedstat = new Mod_feedstat();
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

        $feedback = $this->Mod_feedback
            ->join('penduduk', 'penduduk.id_penduduk = feedback.id_penduduk')
            ->findAll();

        $data = [
            'feedback' => $feedback,
        ];

        return view('user/feedback/index', $data);
    }
    function detail($id)
    {
        // dd($id);
        $feedback = $this->Mod_feedback
            ->join('penduduk', 'penduduk.id_penduduk = feedback.id_penduduk')
            ->where('id_feedback', $id)
            ->first();

        $status = $this->Mod_feedstat->findAll();

        $data = [
            'feedback' => $feedback,
            'status' => $status,
        ];

        return view('user/feedback/detail', $data);
    }
    function update($id)
    {
        $val = $this->request->getPost();
        $feedback = $this->Mod_feedback
            ->join('penduduk', 'penduduk.id_penduduk = feedback.id_penduduk')
            ->where('id_feedback', $id)
            ->first();


        $data = [
            'id_penduduk' => $feedback['id_penduduk'],
            'kategori' => $feedback['kategori'],
            'isi' => $feedback['isi'],
            'created_at' => $feedback['created_at'],
            'status' => $val['status'],
        ];
        // dd($data, $id);
        $this->Mod_feedback->update($id, $data);
        // dd($staatus);
        return redirect()->back();
    }
    function update_s($id)
    {
        $val = $this->request->getPost();
        $data = [
            'id_feedback' => $id,
            'isi' => $val['isi'],
        ];
        // dd($data);
        $this->Mod_feedstat->insert($data);
        return redirect()->back();
    }
}
