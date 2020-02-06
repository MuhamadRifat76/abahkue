<?php

namespace App\Http\Controllers;

use App\jeniskue;
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
        return view('admin.jeniskue.index', compact('jeniskue'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jeniskue.create');
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
        $jeniskue->jeniskue_kode = $request->jeniskue_kode;
        $jeniskue->jeniskue_nama = $request->jeniskue_nama;
        $jeniskue->save();
        //6.tampilkan berhasil
        return redirect()->route('admin.jeniskue.index')->with('success', 'Berhasil ditambah');;
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
