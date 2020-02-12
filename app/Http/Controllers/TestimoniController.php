<?php

namespace App\Http\Controllers;

use App\testimoni;
use Session;

use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimoni = testimoni::all();
        return view('admin.testimoni.index', compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimoni = new testimoni;
        $testimoni->nama = $request->nama;
        $testimoni->deskripsi = $request->deskripsi;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() . '/assets/img/testimoni';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $testimoni->foto = $filename;
        }
        $testimoni->save();
        //6.tampilkan berhasil
        return redirect()->route('testimoni.index')->with('success', 'Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimoni = testimoni::findOrFail($id);
        return view('admin.testimoni.show', compact('testimoni'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimoni = testimoni::findOrFail($id);
        return view('admin.testimoni.edit', compact('testimoni'));
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
        $testimoni = testimoni::findOrFail($id);
        $testimoni->nama = $request->nama;
        $testimoni->deskripsi = $request->deskripsi;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() . '/assets/img/testimoni';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $testimoni->foto = $filename;
        }
        $testimoni->save();
        return redirect()->route('testimoni.index')->with('edit', 'Berhasil diedit');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!testimoni::destroy($id)) return redirect()->back();
        return redirect()->route('testimoni.index');
    }
}
