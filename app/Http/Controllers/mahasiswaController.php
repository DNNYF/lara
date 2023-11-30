<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mahasiswa.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nim',$request->nim);
        Session::flash('nama',$request->nama);
        Session::flash('kelas',$request->kelas);
        Session::flash('jurusan',$request->jurusan);

        $request->validate([
            'nim' => 'required|numeric|unique:mahasiswa,nim',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ],[
            'nim.required'=>"NIM Harus Diisi",
            'nim.numeric'=>"Hanya Angka yang diperbolehkan untuk NIM",
            'nim.unique'=>"NIM Sudah Terdaftar",
            'nama.required'=>"Nama Mahasiswa Harus Diisi",
            'kelas.required'=>"Kelas Harus Diisi",
            'jurusan.required'=>"Jurusan Harus Diisi",
        ]);
        
        $data = [
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'kelas'=>$request->kelas,
            'jurusan'=>$request->jurusan,
        ];
        Mahasiswa::create($data);
        return redirect()->to('mahasiswa') ->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
