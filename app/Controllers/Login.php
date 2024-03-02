<?php

namespace App\Controllers;
// PANGGIL MODEL USERS
use App\Models\UsersModel;

class Login extends BaseController
{
    public function index()
	{
        if(session()->get('logged_in')){
            return redirect()->back();
        } else {
            return view('pages\auth\login');
        }
	}

    public function submit()
	{
        // INISIAL MODEL USERS
        $users = new UsersModel();

        // GET FIELD NAME YANG DIKIRIM
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        // VALIDASI
        $validator = $this->validate([
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]',
        ]);

        if(!$validator){
            return view('pages\auth\login', [
                'validation' => $this->validator
            ]);
        } else {
            // CEK DATABASE
            $dataUser = $users->where([
                'email' => $email,
                'password' => md5($password)
            ])->first();
            // JIKA ADA DATA
            if ($dataUser) {
                session()->set([
                    'id_users' => $dataUser['id_users'],
                    'id_role' => $dataUser['id_role'],
                    'id_divisi' => $dataUser['id_divisi'],
                    'id_divisi' => $dataUser['id_divisi'],
                    'nik' => $dataUser['nik'],
                    'email' => $dataUser['email'],
                    'username' => $dataUser['username'],
                    'logged_in' => TRUE
                ]);
                session()->setFlashdata('success', 'Anda berhasil login');
                return redirect()->to('/');
            } else {
                session()->setFlashdata('error', 'Username & Password Tidak Valid');
                return redirect()->back();
            }
        }

	}

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
