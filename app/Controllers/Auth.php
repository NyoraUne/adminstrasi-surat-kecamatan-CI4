<?php

namespace App\Controllers;

use App\Models\Mod_user;

class Auth extends BaseController
{
    protected $session;
    protected $Mod_user;
    protected $validation;
    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->Mod_user = new Mod_user();

        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();
    }

    public function login()
    {
        //menampilkan halaman login
        return view('auth/login');
    }

    public function register()
    {
        //menampilkan halaman register
        return view('auth/register');
    }

    public function valid_register()
    {
        //tangkap data dari form 
        $data = $this->request->getPost();

        // dd($data);
        //jalankan validasi
        $this->validation->run($data, 'register');

        //cek errornya
        $errors = $this->validation->getErrors();

        //jika ada error kembalikan ke halaman register
        if ($errors) {
            session()->setFlashdata('error', $errors);
            return redirect()->to('/auth/register');
        }

        //jika tdk ada error 

        //buat salt
        $salt = uniqid('', true);

        //hash password digabung dengan salt
        $password = md5($data['password']) . $salt;

        //masukan data ke database
        $this->Mod_user->insert([
            'nama_user' => $data['nama_user'],
            'username_user' => $data['username_user'],
            'password_user' => $password,
            'salt' => $salt,
            'role' => 1
        ]);

        //arahkan ke halaman login
        session()->setFlashdata('login', 'Anda berhasil mendaftar, silahkan login');
        return redirect()->to('/Auth/login');
    }

    public function valid_login()
    {
        //ambil data dari form
        $data = $this->request->getPost();
        // dd($data);

        //ambil data user di database yang usernamenya sama 
        $user = $this->Mod_user->where('username_user', $data['username'])->first();

        //cek apakah username ditemukan
        if ($user) {
            //cek password
            //jika salah arahkan lagi ke halaman login
            if ($user['password_user'] != md5($data['password']) . $user['salt']) {
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to('/auth/login');
            } else {
                //jika benar, arahkan user masuk ke aplikasi 
                $sessLogin = [
                    'isLogin' => true,
                    'username_user' => $user['username_user'],
                    'nama_user' => $user['nama_user'],
                    'role' => $user['role']
                ];
                // dd($sessLogin);
                $this->session->set($sessLogin);
                return redirect()->to('/user');
            }
        } else {
            //jika username tidak ditemukan, balikkan ke halaman login
            session()->setFlashdata('username', 'Username tidak ditemukan');
            return redirect()->to('/auth/login');
        }
    }

    public function logout()
    {
        //hancurkan session 
        //balikan ke halaman login
        $this->session->destroy();
        return redirect()->to('/auth/login');
    }
}
