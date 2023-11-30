<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::all();
        $title = "Artikel";

        return view('artikel', [
            "title" => "Artikel",
            "artikels" => $artikels,
            compact('title')
        ]);
    }
}
