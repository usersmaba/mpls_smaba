<?php


namespace App\Controllers;

use App\Models\Auth_model;

class Auth extends BaseController
{
    public function login()
    {
        $waktu_login = now('Asia/Makassar');
        //$waktu_login = date('yy-m-d H:i:s');   // Outputs: 20-01-20 17:04:00
        $model = new Auth_model();
        $data = array(
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
        );
        $result = $model->login_siswa($data);
        if ($result) {
            if ($result['is_active'] == 0) {
                $this->session->setFlashdata('login_warning', 'User tidak aktif.');
                return redirect()->to(base_url('/'));
            } else {
                $admin_data = array(
                    'id_peserta' => $result['id_peserta'],
                    'username' => $result['username'],
                    'is_siswa_login' => TRUE, //kedepan ini di ganti sesuai kebutuhan
                    'is_login' => true
                );
                $data = array(
                    'last_login' => $waktu_login,
                );
                $model->save_waktu($data, $result['id_peserta']);
                $this->session->set($admin_data);
                return redirect()->to(base_url('user'));
            }
        } else {
            $this->session->setFlashdata('login_error', 'User name atau password salah.');
            return redirect()->to(base_url('/'));
        }
    }

    public function login_admin()
    {
        $waktu_login = now('Asia/Makassar');
        //$waktu_login = date('yy-m-d H:i:s');   // Outputs: 20-01-20 17:04:00
        $model = new Auth_model();
        $data = array(
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
        );
        $result = $model->login_admin($data);
        if ($result) {
            $admin_data = array(
                'id_admin' => $result['id_admin'],
                'username' => $result['username'],
                'is_admin_login' => TRUE, //kedepan ini di ganti sesuai kebutuhan
                'is_login' => true
            );
            $data = array(
                'last_login' => $waktu_login,
            );
            $this->session->set($admin_data);
            return redirect()->to(base_url('admin'));
        } else {
            $this->session->setFlashdata('login_error', 'User name atau password salah.');
            return redirect()->to(base_url('/cp'));
        }
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url('/'));
    }
}
