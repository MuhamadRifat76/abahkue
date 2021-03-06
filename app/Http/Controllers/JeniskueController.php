<?php

namespace App\Http\Controllers;

use App\jeniskue;
use App\categori;
use Session;
use Illuminate\Http\Request;

class JeniskueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jeniskue = jeniskue::all();
        $categori = categori::all();
        return view('admin.jeniskue.index', compact('jeniskue', 'categori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categori = categori::all();
        return view('jeniskue.create', compact('categori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $jeniskue = new jeniskue;
        $jeniskue->nama = $request->nama;
        $jeniskue->categoris_id = $request->kategori;
        $jeniskue->harga = $request->harga;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() . '/assets/img/jeniskue';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $jeniskue->foto = $filename;
        }
        $jeniskue->save();
        //6.tampilkan berhasil
        return redirect()->route('jeniskue.index')->with('success', 'Berhasil ditambah');;
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
        $jeniskue = jeniskue::findOrFail($id);
        return view('admin.jeniskue.edit', compact('jeniskue'));
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
        $jeniskue = jeniskue::findOrFail($id);
        $jeniskue->jeniskue_kode = $request->jeniskue_kode;
        $jeniskue->jeniskue_nama = $request->jeniskue_nama;
        $jeniskue->save();
        return redirect()->route('admin.jeniskue.index')->with('edit', 'Berhasil diedit');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!jeniskue::destroy($id)) return redirect()->back();
        return redirect()->route('admin.jeniskue.index');
    }
}
