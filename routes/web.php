<?php

use Illuminate\Support\Facades\Route;
use App\Models\Buku;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BlogPolindra;
use App\Http\Controllers\mahasiswaController;

Route::get('/', function () {
    return view('home', [
        "Title" => "About",
        "Nama" => "Denny Firmansyah",
        "Kelas" => "D3TI2C",
        "NIM" => "2203067"
    ]);
});



Route::get('/buku', function () {
    $bukus = [
        ['judul' => 'Judul 1', 'penulis' => 'Penulis 1', 'tahun' => 'Tahun 1'],
        ['judul' => 'Judul 2', 'penulis' => 'Penulis 2', 'tahun' => 'Tahun 2'],
        ['judul' => 'Judul 3', 'penulis' => 'Penulis 3', 'tahun' => 'Tahun 3'],
        ['judul' => 'Judul 4', 'penulis' => 'Penulis 4', 'tahun' => 'Tahun 4'],
        ['judul' => 'Judul 5', 'penulis' => 'Penulis 5', 'tahun' => 'Tahun 5'],
    ];

    $bukuu = [];

    foreach ($bukus as $data) {
        $bukuu[] = new Buku($data);
    }

    return view('buku', ['bukuu' => $bukuu]);
});


Route::get('artikel', [ArtikelController::class, 'index']);



Route::get('poli', [BlogPolindra::class, 'index']);


Route::resource('mahasiswa', mahasiswaController::class);
