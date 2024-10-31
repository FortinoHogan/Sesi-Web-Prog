<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/mahasiswa', [MahasiswaController::class, 'index']);

Route::prefix('/admin')->group(function () {
    Route::get('/mahasiswa/{nilai}', [MahasiswaController::class, 'index'])->name('admin.mahasiswa');
    Route::get('/mhs/binus', [MahasiswaController::class, 'tampil']);
    Route::get('/mhs/post', [MahasiswaController::class, 'view'])->name('view.post.mhs');

    Route::get('/dosen/{nama}', function ($nama) {
        // $arrMahasiswa = ['Fortino Hogan','Risa Lestari', 'Rudy Hermawan', 'Bambang Sumo', 'Lisa Permata'];
        $arrMahasiswa = [
            [
                'nama' => 'Fortino Hogan',
                'jurusan' => 'Teknik Informatika'
            ],
            [
                'nama' => 'Risa Lestari',
                'jurusan' => 'Managemen'
            ],
            [
                'nama' => 'Rudy Hermawan',
                'jurusan' => 'Bisnis'
            ],
            [
                'nama' => 'Lisa Permata',
                'jurusan' => 'Tataboga'
            ]
        ];
        return view('universitas.dosen')
            ->with('daftarMahasiswa', $arrMahasiswa)
            ->with('nama', $nama);
        // ->with('jur', 'Teknik Informatika');
    })->name('admin.dosen');

    Route::get('/karyawan', function () {
        return view('universitas.karyawan');
    })->name('admin.karyawan');
});

//Cara mengirim parameter ke View: 2 Cara
//1. Argument kedua dari function View
// return view('universitas.mahasiswa', ['mhs'=>$arrMahasiswa, 'jurusan'=>$jurusan]);

//2. Method With()
// return view('universitas.dosen')->with('param1', 'param2');

// Cara bikin komponen
// 1. include
// 2. section extends