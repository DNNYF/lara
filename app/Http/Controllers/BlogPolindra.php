<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Polindra;

class BlogPolindra extends Controller
{
    public function index()
    {
        $polindra = Polindra::all();

        return view('poli', [
            "polindra" => $polindra 
        ]);
    }
}

