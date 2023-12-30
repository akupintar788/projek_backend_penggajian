<?php

namespace App\Models;

use CodeIgniter\Model;

class data_jabatan extends Model
{
    // Model untuk tabel 'buku'
    protected $table = 'data_jabatan';
    protected $allowedFields = ['nama_jabatan', 'gaji_pokok', 'tj_transport','uang_makan'];
    protected $primaryKey = 'id_jabatan';

}



