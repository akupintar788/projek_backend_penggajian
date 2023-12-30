<?php

namespace App\Models;

use CodeIgniter\Model;

class potongan_gaji extends Model
{
    // Model untuk tabel 'buku'
    protected $table = 'potongan_gaji';
    protected $allowedFields = ['potongan', 'jml_potongan',];
    protected $primaryKey = 'id';

}
