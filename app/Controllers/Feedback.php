<?php

namespace App\Controllers;

use App\Models\Mod_feedback;



class Feedback extends BaseController
{
    protected $session;
    protected $Mod_feedback;

    public function __construct()
    {
        $this->session = session();
        $this->Mod_feedback = new Mod_feedback();
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
}
