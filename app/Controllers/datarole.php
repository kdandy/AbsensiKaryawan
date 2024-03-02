<?php

namespace App\Controllers;
use App\Models\RoleModel;

class DataRole extends BaseController
{
    public function index()
    {       
        if(is_null(session()->get('logged_in'))){
            return redirect()->to('/login');
        } else {
            $db = \Config\Database::connect();

            $roles = $db->query("SELECT * FROM roles")->getResult('array');

            $data = [
                'role' => $roles
            ];
            
            return view('pages/roles/index', $data);
        }
    }

    public function detail($id)
    {
        if(is_null(session()->get('logged_in'))){
            return redirect()->to('/login');
        } else {

            $db = \Config\Database::connect();

            $roles = $db->query("SELECT * roles")->getResult('array');

            $data = [
                'role' => $roles
            ];
            return view('pages/roles/detail', $data);
        
        }
    }

    public function delete($id)
    {
        $roles = new RoleModel();

        $roles->delete($id);

        session()->setFlashdata('success', 'Data deleted');
        return redirect()->to('/divisi');
    }
}
