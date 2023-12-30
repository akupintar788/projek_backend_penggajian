<?php

namespace App\Models;

use CodeIgniter\Model;

class data_pegawai extends Model
{
    // Model untuk tabel 'data_pegawai'
    protected $table = 'data_pegawai';
    protected $allowedFields = ['nik', 'nama_pegawai', 'username', 'password', 'jenis_kelamin', 'jabatan', 'tanggal_masuk', 'status', 'photo', 'hak_akses'];
    protected $primaryKey = 'id_pegawai';
    
    protected $useSoftDeletes = false;

    // Add this property to specify the photo column as a BLOB
    // protected $returnType = 'array';
    // protected $useTimestamps = false;
    // protected $DBGroup = 'default';
    // protected $dateFormat = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';
    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}
