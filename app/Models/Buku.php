<?php

namespace App\Models;

class Buku 
{
    public $judul;
    public $penulis;
    public $tahun;

    public function __construct($data)
    {
        $this->judul = $data['judul'];
        $this->penulis = $data['penulis'];
        $this->tahun = $data['tahun'];
    }
}
