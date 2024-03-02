<?php

namespace App\Controllers;
use App\Models\UsersModel;

class DataKaryawan extends BaseController
{
    public function index()
    {
        if(is_null(session()->get('logged_in'))){
            return redirect()->to('/login');
        } else {
            $db = \Config\Database::connect();

            $users = $db->query("SELECT a.id_users, a.nik, 
            a.username, a.is_active, 
            b.nama_divisi FROM users a, 
            divisi b WHERE a.id_divisi 
            = b.id_divisi AND a.id_role != 1")->getResult('array');

            $data = [
                'user' => $users
            ];

            return view('pages/datakaryawan/index.php', $data);
        }
    }

    public function tambah()
    {
        if(is_null(session()->get('logged_in'))){
            return redirect()->to('/login');
        } else {
            $db = \Config\Database::connect();

            $divisi = $db->query("SELECT * FROM divisi")->getResult('array');

            $data = [
                'divisi' => $divisi
            ];

            return view('pages/datakaryawan/tambah', $data);
        }

    }

    public function prosesTambah()
    {
        // INISIAL MODEL USERS
        $users = new UsersModel();

        // GET FIELD NAME YANG DIKIRIM
        $nik = $this->request->getVar('nik');
        $name = $this->request->getVar('name');
        $phone = $this->request->getVar('phone');
        $agama = $this->request->getVar('agama');
        $status_tinggal = $this->request->getVar('status_tinggal');
        $gol_darah = $this->request->getVar('gol_darah');
        $warga = $this->request->getVar('warga');
        $ktp = $this->request->getVar('ktp');
        $npwp = $this->request->getVar('npwp');
        $divition = $this->request->getVar('divition');
        $address = $this->request->getVar('address');

        // VALIDASI
        $validator = $this->validate([
            'nik' => 'required|min_length[6]',
            'name' => 'required|min_length[3]',
            'phone' => 'required|min_length[10]',
            'divition' => 'required',
            'agama' => 'required',
            'status_tinggal' => 'required',
            'gol_darah' => 'required',
            'warga' => 'required',
            'ktp' => 'required',
            'npwp' => 'required',
            'address' => 'required|min_length[6]',
        ]);

        if(!$validator){
            $db = \Config\Database::connect();

            $divisi = $db->query("SELECT * FROM divisi")->getResult('array');

            return view('pages\datakaryawan\tambah', [
                'validation' => $this->validator,
                'divisi' => $divisi
            ]);
        } else {
            $users->save([
                'id_role' => 2,
                'id_divisi' => $divition,
                'nik' => $nik,
                'email' => strtolower($name.'@gmail.com'),
                'username' => ucwords($name),
                'alamat' => ucwords($address),
                'no_tlp' => $phone,
                'agama' => $agama,
                'status_tinggal' => $status_tinggal,
                'gol_darah' => $gol_darah,
                'warga' => $warga,
                'ktp' => $ktp,
                'npwp' => $npwp,
                'password' => md5($name.'123!'),
                'is_active' => true,
                'created_at' => date("Y-m-d H:i:s"),
            ]);
    
            session()->setFlashdata('success', 'Tambah karyawan berhasil');
            return redirect()->to('/karyawan');
        }

    }
    
    public function edit($id)
    {
        if(is_null(session()->get('logged_in'))){
            return redirect()->to('/login');
        } else {
            $db = \Config\Database::connect();

            $divisi = $db->query("SELECT * FROM divisi")->getResult('array');
            $users = $db->query("SELECT a.id_users, a.nik, a.username, b.id_divisi, b.nama_divisi, a.alamat, a.status_tinggal, a.gol_darah, a.no_tlp, a.warga, a.agama, a.ktp, a.npwp FROM users a, divisi b WHERE a.id_divisi = b.id_divisi AND a.id_users = '$id'")->getResult('array');

            $data = [
                'divisi' => $divisi,
                'user' => $users
            ];

            return view('pages/datakaryawan/edit', $data);
        }
    }

    public function prosesEdit($id)
    {
        // INISIAL MODEL USERS
        $users = new UsersModel();

        // GET FIELD NAME YANG DIKIRIM
        $nik = $this->request->getVar('nik');
        $name = $this->request->getVar('name');
        $phone = $this->request->getVar('phone');
        $agama = $this->request->getVar('agama');
        $status_tinggal = $this->request->getVar('status_tinggal');
        $gol_darah = $this->request->getVar('gol_darah');
        $warga = $this->request->getVar('warga');
        $ktp = $this->request->getVar('ktp');
        $npwp = $this->request->getVar('npwp');
        $divition = $this->request->getVar('divition');
        $address = $this->request->getVar('address');

        // VALIDASI
        $validator = $this->validate([
            'nik' => 'required|min_length[6]',
            'name' => 'required|min_length[3]',
            'phone' => 'required|min_length[10]',
            'divition' => 'required',
            'agama' => 'required',
            'status_tinggal' => 'required',
            'gol_darah' => 'required',
            'warga' => 'required',
            'ktp' => 'required',
            'npwp' => 'required',
            'address' => 'required|min_length[6]',
        ]);

        if(!$validator){
            $db = \Config\Database::connect();

            $divisi = $db->query("SELECT * FROM divisi")->getResult('array');
            $users = $db->query("SELECT a.id_users, a.nik, a.username, b.id_divisi, b.nama_divisi, a.alamat, a.status_tinggal, a.gol_darah, a.no_tlp, a.warga, a.agama, a.ktp, a.npwp FROM users a, divisi b WHERE a.id_divisi = b.id_divisi AND a.id_users = '$id'")->getResult('array');

            return view('pages\datakaryawan\edit', [
                'validation' => $this->validator,
                'divisi' => $divisi,
                'user' => $users
            ]);
        } else {
            $users->update($id,[
                'id_role' => 2,
                'id_divisi' => $divition,
                'nik' => $nik,
                'email' => strtolower($name.'@gmail.com'),
                'username' => ucwords($name),
                'alamat' => ucwords($address),
                'no_tlp' => $phone,
                'agama' => $agama,
                'status_tinggal' => $status_tinggal,
                'gol_darah' => $gol_darah,
                'warga' => $warga,
                'ktp' => $ktp,
                'npwp' => $npwp,
                'password' => md5($name.'123!'),
                'is_active' => true,
                'created_at' => date("Y-m-d H:i:s"),
            ]);
    
            session()->setFlashdata('success', 'Edit karyawan berhasil');
            return redirect()->to('/karyawan');
        }

    }

    public function detail($id)
    {
        $db = \Config\Database::connect();

        $users = $db->query("SELECT a.nik, a.username, b.nama_divisi, a.alamat, a.status_tinggal, a.gol_darah, a.no_tlp, a.warga, a.agama, a.ktp, a.npwp FROM users a, divisi b WHERE a.id_divisi = b.id_divisi AND a.id_users = '$id'")->getResult('array');

        $data = [
            'user' => $users,
        ];

        return view('pages/datakaryawan/detail', $data);
    }

    public function delete($id)
    {
        $users = new UsersModel();

        $users->delete($id);

        session()->setFlashdata('success', 'Data deleted');
        return redirect()->to('/karyawan');
    }
}
