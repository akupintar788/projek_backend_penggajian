<?php

namespace App\Controllers;
use App\Models\potongan_gaji;
use CodeIgniter\RESTful\ResourceController;

class Potongan extends ResourceController

{
    protected $potongan; // Ubah menjadi protected agar dapat diakses oleh child class

    function __construct()
    {
        $this->potongan = new potongan_gaji();
    }

    public function index()
    {
        $data['potongan_gaji'] = $this->potongan->findAll();
        return view('potongan/index', $data);
    }

    public function show($id = null)
    {
        // Jika fungsi show tidak digunakan, biarkan kosong atau hapus fungsi ini
    }

    public function new()
    {
        return view('potongan/new');
    }
    public function create()
    {
        try {
            $data = [
                'potongan' => $this->request->getVar('potongan'),
                'jml_potongan' => $this->request->getVar('jml_potongan'),
            ];
    
            $this->potongan->save($data);
    
            return redirect()->to(site_url('potongan'))->with('success', 'Data berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    
    

    public function edit($id = null)
    {
        $potongan = $this->potongan->find($id); // Menggunakan find untuk mendapatkan data berdasarkan ID
        if (!empty($potongan)) {
            $data['potongan_gaji'] = $potongan;
            return view('potongan/edit', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id = null)
    {
        $data = $this->request->getPost();
        $this->potongan->update($id, $data);
        return redirect()->to(site_url('potongan'))->with('success', 'Data berhasil diupdate');
    }

    public function delete($id = null)
    {
        $data = $this->potongan->find($id);

        if ($data) {
            $this->potongan->delete($id);

            return redirect()->to(site_url('potongan'))->with('success', 'Data berhasil dihapus');
        } else {
            return view('potongan/not_found');
        }
    }


    
}