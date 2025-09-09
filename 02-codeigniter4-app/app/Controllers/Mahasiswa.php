<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function display()
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->findAll();
        return view('mhsw', $data);
    }

    public function detail($nim)
    {
        $model = new MahasiswaModel();
        $data['mhsw'] = $model->find($nim);

        if (!$data['mhsw']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Mahasiswa dengan NIM $nim tidak ditemukan.");
        }

        return view('mhsw_detail', $data);
    }

    public function create()
    {
        return view('form_mahasiswa');
    }

    public function store()
    {
        $model = new MahasiswaModel();

        $data = [
            'nim'  => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'umur' => $this->request->getPost('umur'),
        ];

        $model->insert($data);
        return redirect()->to('/mahasiswa');
    }
}
