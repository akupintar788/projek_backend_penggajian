<?php

namespace App\Models;

use CodeIgniter\Model;

class Kehadiranmodel extends Model
{
    // Model untuk tabel 'buku'
    protected $table = 'data_kehadiran';
    protected $allowedFields = ['bulan', 'nik', 'nama_pegawai', 'jenis_kelamin','nama_jabatan','hadir','sakit','alpha',];
    protected $primaryKey = 'id_kehadiran';

}

