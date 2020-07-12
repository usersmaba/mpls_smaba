<?php

namespace App\Controllers\Admin;

class Home extends AdminBaseController
{
    public function index()
    {
        $data['view'] = 'dashboard/admin/index';
        $data['user_info'] = ['nama' => 'admin'];
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
    public function import()
    {
        $data['view'] = 'dashboard/admin/import';
        $data['user_info'] = ['nama' => 'admin'];

        return view('dashboard/layout', $data);
    }
    public function proses_import()
    {
        $validation =  \Config\Services::validation();
        $file = $this->request->getFile('dapo_file');
        $data = array(
            'dapo_file'           => $file,
        );

        $extension = $file->getClientExtension();
        if ('xls' == $extension) {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }
        $spreadsheet = $reader->load($file);
        $data = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
        $data_siswa = array();

        $numrow = 1;
        foreach ($data as $row) {
            if ($numrow > 2) {
                array_push($data_siswa, array(
                    'id_peserta' => $row['A'],
                    'nomor_pendaftaran' => $row['B'],
                    'username' => $row['C'],
                    'nama' => $row['D'],
                    'tempat_lahir' => $row['E'],
                    'tanggal_lahir' => $row['F'],
                    'no_telpon' => $row['G'],
                    'merek_hp' => '-',
                    'bisa_online' => '-',
                    'alasan_tidak_bisa_online' => '-',
                    'jurusan_pilihan' => '-',
                    'nilai_skhu' => '-',
                    'absen_h1' => '-',
                    'respon_h1' => '-',
                    'absen_h2' => '-',
                    'respon_h2' => '-',
                    'absen_h3' => '-',
                    'respon_h3' => '-',
                    'pesan_kesan' => '-',
                    'link_tugas' => '-',
                    'password' => $row['C'],
                    'is_active' => '1',
                    'last_login' => '-',
                    'updated_at' => '0000-00-00 00:00:00',
                    'deleted_at' => '0000-00-00 00:00:00',
                ));
            }
            $numrow++;
        }
        $simpan = $this->UserModel->import_siswa($data_siswa);
        if ($simpan) {
            session()->setFlashdata('success', 'Imported Transaction successfully');
            return redirect()->to(base_url('admin/import'));
        }
    }

    //--------------------------------------------------------------------

}
