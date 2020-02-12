<?php

namespace App\Http\Controllers;

use App\galerikegiatan;
use Session;
use Illuminate\Http\Request;

class galerikegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galerikegiatan = galerikegiatan::all();
        return view('admin.galerikegiatan.index', compact('galerikegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galerikegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $galerikegiatan = new galerikegiatan;
        $galerikegiatan->nama = $request->nama;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() . '/assets/img/galerikegiatan';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $galerikegiatan->foto = $filename;
        }
        $galerikegiatan->save();
        //6.tampilkan berhasil
        return redirect()->route('galerikegiatan.index')->with('success', 'Berhasil ditambah');;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $galerikegiatan = galerikegiatan::findOrFail($id);
        return view('admin.galerikegiatan.edit', compact('galerikegiatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $galerikegiatan = galerikegiatan::findOrFail($id);
        $galerikegiatan->nama = $request->nama;
        $galerikegiatan->save();
        return redirect()->route('galerikegiatan.index')->with('edit', 'Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!galerikegiatan::destroy($id)) return redirect()->back();
        return redirect()->route('galerikegiatan.index');
    }
}
