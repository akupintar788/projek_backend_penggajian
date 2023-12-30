<?php

namespace App\Controllers;

use App\Models\hak_akses;
use CodeIgniter\RESTful\ResourceController;

class akses extends ResourceController
{
    protected $akses; // Ubah menjadi protected agar dapat diakses oleh child class

    function __construct()
    {
        $this->akses = new hak_akses();
    }

    public function index()
    {
        $data['hak_akses'] = $this->akses->findAll();
        return view('akses/index', $data);
    }

    public function show($id = null)
    {
        // Jika fungsi show tidak digunakan, biarkan kosong atau hapus fungsi ini
    }

    public function new()
    {
        return view('akses/new');
    }
    public function create()
    {
        try {
            $data = [
                'keterangan' => $this->request->getVar('keterangan'),
                'hak_akses' => $this->request->getVar('hak_akses'),
            ];
    
            $this->akses->save($data);
    
            return redirect()->to(site_url('akses'))->with('success', 'Data berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    
    

    public function edit($id = null)
    {
        $kehadiran = $this->akses->find($id); // Menggunakan find untuk mendapatkan data berdasarkan ID
        if (!empty($kehadiran)) {
            $data['hak_akses'] = $kehadiran;
            return view('akses/edit', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id = null)
    {
        $data = $this->request->getPost();
        $this->akses->update($id, $data);
        return redirect()->to(site_url('akses'))->with('success', 'Data berhasil diupdate');
    }

    public function delete($id = null)
    {
        $data = $this->akses->find($id);

        if ($data) {
            $this->akses->delete($id);

            return redirect()->to(site_url('akses'))->with('success', 'Data berhasil dihapus');
        } else {
            return view('akses/not_found');
        }
    }
}