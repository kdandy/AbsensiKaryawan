<?php

namespace App\Controllers;
use App\Models\FingerModel;

class Masterfinger extends BaseController
{
    public function index()
    {
        if(is_null(session()->get('logged_in'))){
            return redirect()->to('/login');
        } else {
            $db = \Config\Database::connect();

            $fingerprint = $db->query("SELECT * from fingerprint")->getResult('array');

            $data = [
                'finger' => $fingerprint
            ];

            return view('pages/selectfinger/index',$data);
        }
    }

    public function edit($id)
    {
        if(is_null(session()->get('logged_in'))){
        return redirect()->to('/login');
        } else {
            $db = \Config\Database::connect();
        
            $fingerprint = $db->query("SELECT * FROM fingerprint")->getResult('array');
        
            $data = [
            'finger' => $fingerprint

            ];
    
            return view('pages/selectfinger/edit', $data);
        }
        
    }

    public function detail($id)
    {
        $db = \Config\Database::connect();

        $fingerprint = $db->query("SELECT * FROM fingerprint ")->getResult('array');

        $data = [
            'finger' => $fingerprint,
        ];

        return view('pages/selectfinger/detail', $data);
    }

    public function index2()
    {
        return view('pages/datafinger/index2');   
    }
    
}
