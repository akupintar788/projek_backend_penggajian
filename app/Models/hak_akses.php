<?php

namespace App\Models;

use CodeIgniter\Model;

class hak_akses extends Model
{
    // Model untuk tabel 'buku'
    protected $table = 'hak_akses';
    protected $allowedFields = ['keterangan', 'hak_akses', ];
    protected $primaryKey = 'id';

}



