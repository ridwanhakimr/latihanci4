<?php

namespace App\Models;

use CodeIgniter\Model;

class MatkulModel extends Model
{
    protected $table = 'tb_matkul'; // Nama tabel di database
    protected $primaryKey = 'id_matkul'; // Primary key tabel
    protected $allowedFields = ['nama_matkul', 'keterangan', 'kategori', 'sks', 'gambar']; // Kolom yang diakses
}