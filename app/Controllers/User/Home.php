<?php

namespace App\Controllers\User;

class Home extends UserBaseController
{
    public function index()
    {
        $data['view'] = 'dashboard/user/index';
        $data['user_info'] = $this->user_name;
        return view('dashboard/layout', $data);
    }
    public function absen()
    {
        $data['view'] = 'dashboard/user/absen';
        return view('dashboard/layout', $data);
    }

    public function simpan()
    {
        $data = array(
            'no_telpon' => $this->request->getPost('no_telpon'),
            'jurusan_pilihan' => $this->request->getPost('jurusan_pilihan'),
            'nilai_skhu' => $this->request->getPost('nilai_skhu'),
            'merek_hp' => $this->request->getPost('merek_hp'),
            'bisa_online' => $this->request->getPost('bisa_online'),
            'alasan_tidak_bisa_online' => $this->request->getPost('alasan_tidak_bisa_online'),
        );
        $this->UserModel->save_profile($data, $this->user_id);
        $this->session->setFlashdata('tersimpan', 'Data berhasil disimpan');

        return redirect()->to(base_url('/user'));
    }
    //--------------------------------------------------------------------

}
