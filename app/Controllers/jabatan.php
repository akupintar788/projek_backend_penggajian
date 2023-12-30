<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use App\Models\data_jabatan;
class jabatan extends ResourceController
{
    protected $jabatan; // Ubah menjadi protected agar dapat diakses oleh child class

    function __construct()
    {
        $this->jabatan = new data_jabatan();
    }

    public function index()
    {
        $data['data_jabatan'] = $this->jabatan->findAll();
        return view('jabatan/index', $data);
    }

    public function show($id = null)
    {
        // Jika fungsi show tidak digunakan, biarkan kosong atau hapus fungsi ini
    }

    public function new()
    {
        return view('jabatan/new');
    }
    public function create()
    {
        try {
            $data = [
                'nama_jabatan' => $this->request->getVar('nama_jabatan'),
                'gaji_pokok' => $this->request->getVar('gaji_pokok'),
                'tj_transport' => $this->request->getVar('tj_transport'),
                'uang_makan' => $this->request->getVar('uang_makan'),
            ];
    
            $this->jabatan->save($data);
    
            return redirect()->to(site_url('jabatan'))->with('success', 'Data berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    
    

    public function edit($id = null)
    {
        $jabatan = $this->jabatan->find($id); // Menggunakan find untuk mendapatkan data berdasarkan ID
        if (!empty($jabatan)) {
            $data['data_jabatan'] = $jabatan;
            return view('jabatan/edit', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id = null)
    {
        $data = $this->request->getPost();
        $this->jabatan->update($id, $data);
        return redirect()->to(site_url('jabatan'))->with('success', 'Data berhasil diupdate');
    }

    public function delete($id = null)
    {
        $this->jabatan->delete($id);
        return redirect()->to(site_url('pegawai'))->with('success', 'Data berhasil dihapus');
    }
}
