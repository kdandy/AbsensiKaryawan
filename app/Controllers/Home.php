<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if(is_null(session()->get('logged_in'))){
            return redirect()->to('/login');
        } else {
            // JIKA MASUK DASHBOARD
            $data = [
                'title' => 'Dashboard'
            ];

            return view('pages/dashboard/dashboard', $data);
        }
    }
}
