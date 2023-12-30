<?php

namespace App\Controllers;

use App\Models\KehadiranModel;
use CodeIgniter\RESTful\ResourceController;

class Contoh extends ResourceController
{
    protected $kehadiran; // Ubah menjadi protected agar dapat diakses oleh child class

    function __construct()
    {
        $this->kehadiran = new KehadiranModel();
    }

    public function index()
    {
        $data['data_kehadiran'] = $this->kehadiran->findAll();
        return view('contoh/index', $data);
    }

    public function show($id = null)
    {
        // Jika fungsi show tidak digunakan, biarkan kosong atau hapus fungsi ini
    }

    public function new()
    {
        return view('contoh/new');
    }
    public function create()
    {
        try {
            $data = [
                'bulan' => $this->request->getVar('bulan'),
                'nik' => $this->request->getVar('nik'),
                'nama_pegawai' => $this->request->getVar('nama_pegawai'),
                'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                'nama_jabatan' => $this->request->getVar('nama_jabatan'),
                'hadir' => $this->request->getVar('hadir'),
                'sakit' => $this->request->getVar('sakit'),
                'alpha' => $this->request->getVar('alpha'), // Ubah dari 'alpa' menjadi 'alpha'
            ];
    
            $this->kehadiran->save($data);
    
            return redirect()->to(site_url('Contoh'))->with('success', 'Data berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    
    

    public function edit($id = null)
    {
        $kehadiran = $this->kehadiran->find($id); // Menggunakan find untuk mendapatkan data berdasarkan ID
        if (!empty($kehadiran)) {
            $data['data_kehadiran'] = $kehadiran;
            return view('contoh/edit', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id = null)
    {
        $data = $this->request->getPost();
        $this->kehadiran->update($id, $data);
        return redirect()->to(site_url('Contoh'))->with('success', 'Data berhasil diupdate');
    }

    public function delete($id = null)
    {
        $data = $this->kehadiran->find($id);

        if ($data) {
            $this->kehadiran->delete($id);

            return redirect()->to(site_url('Contoh'))->with('success', 'Data berhasil dihapus');
        } else {
            return view('contoh/not_found');
        }
    }
}
