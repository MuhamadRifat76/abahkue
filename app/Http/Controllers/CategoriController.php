<?php

namespace App\Http\Controllers;

use session;
use App\categori;
use Illuminate\Http\Request;

class CategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categori = categori::all();
        return view('admin.categori.index', compact('categori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categori = new categori;
        $categori->nama = $request->nama;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() . '/assets/img/categori';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $categori->foto = $filename;
        }
        $categori->save();
        //6.tampilkan berhasil
        return redirect()->route('categori.index')->with('success', 'Berhasil ditambah');;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
