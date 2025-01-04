<?php

namespace App\Controllers;

use App\Models\MatkulModel; // Import model

class Dashboard extends BaseController
{
    public function index()
    {
        $model = new MatkulModel(); // Inisialisasi model
        $data['matakuliah'] = $model->findAll(); // Ambil semua data dari tabel 'tb_matkul'

        return view('dashboard', $data); // Kirim data ke file view 'dashboard.php'
    }
}