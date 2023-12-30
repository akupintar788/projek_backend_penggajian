<?php

namespace App\Controllers;

use App\Models\data_pegawai;
use CodeIgniter\RESTful\ResourceController;

class Pegawai extends ResourceController
{
    protected $pegawai;

    public function __construct()
    {
        $this->pegawai = new data_pegawai();
    }

    public function show($id = null)
    {
        $pegawai = $this->pegawai->find($id);

        if (!empty($pegawai)) {
            $data['data_pegawai'] = $pegawai;
            return view('pegawai/show', $data); // Adjust the view name as needed
        } else {
            return redirect()->to(site_url('pegawai'))->with('error', 'Data tidak ditemukan');
        }
    }

    public function index()
    {
        $data['data_pegawai'] = $this->pegawai->findAll();
        return view('pegawai/index', $data);
    }

    public function new()
    {
        return view('pegawai/new');
    }

    public function create()
    {
        try {
            $photo = $this->request->getFile('photo');
            $photoName = $this->handleFileUpload($photo);

            $data = [
                'nik' => $this->request->getVar('nik'),
                'nama_pegawai' => $this->request->getVar('nama_pegawai'),
                'username' => $this->request->getVar('username'),
                'nama_jabatan' => $this->request->getVar('nama_jabatan'),
                'password' => $this->request->getVar('password'),
                'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                'jabatan' => $this->request->getVar('jabatan'),
                'tanggal_masuk' => $this->request->getVar('tanggal_masuk'),
                'status' => $this->request->getVar('status'),
                'photo' => $photoName,
                'hak_akses' => $this->request->getVar('hak_akses'),
            ];

            $this->pegawai->save($data);

            return redirect()->to(site_url('pegawai'))->with('success', 'Data berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function edit($id = null)
    {
        $pegawai = $this->pegawai->find($id);
        if (empty($pegawai)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data['data_pegawai'] = $pegawai;
        return view('pegawai/edit', $data);
    }

    public function update($id = null)
    {
        $data = $this->request->getPost();
        $this->pegawai->update($id, $data);
        return redirect()->to(site_url('pegawai/index'))->with('success', 'Data berhasil diupdate');
    }

    public function delete($id = null)
    {
        $this->pegawai->delete($id);
        return redirect()->to(site_url('pegawai'))->with('success', 'Data berhasil dihapus');
    }

    // Pegawai Controller
    // public function delete($id = null)
    // {
    //     try {
    //         $data = $this->pegawai->find($id);

    //         if ($data) {
    //             $this->pegawai->delete($id);
    //             return redirect()->to(site_url('pegawai'))->with('success', 'Data berhasil dihapus');
    //         } else {
    //             return redirect()->to(site_url('pegawai'))->with('error', 'Data tidak ditemukan');
    //         }
    //     } catch (\Exception $e) {
    //         return redirect()->to(site_url('pegawai'))->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    //     }
    // }




    /**
     * Handle file upload and return the filename.
     *
     * @param \CodeIgniter\HTTP\Files\UploadedFile|null $file
     * @param string|null $oldFilename
     * @return string|null
     */
    private function handleFileUpload($file, $oldFilename = null)
    {
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $filename = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $filename);

            // Delete the old file if it exists
            if ($oldFilename) {
                $oldFilePath = WRITEPATH . 'uploads' . DIRECTORY_SEPARATOR . $oldFilename;
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            return $filename;
        }

        return $oldFilename;
    }
}
