<?php

namespace App\Http\Controllers;

use App\galerikegiatan;
use Illuminate\Http\Request;
use App\testimoni;

class FrontController extends Controller
{
    public function index()
    {
        $testimoni = testimoni::get();
        return view('testimoni', compact('testimoni'));
    }

    public function galerikegiatan()
    {
        $galerikegiatan = galerikegiatan::all();
        return view('galerikegiatan', compact('galerikegiatan'));
    }
}
