<?php

namespace App\Http\Controllers\ajicorp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Divisimodel;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_divisi = Divisimodel::all();
        return view('ajicorp.content.folderdivisi.indexdivisi',compact('data_divisi')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ajicorp.content.folderdivisi.inputdivisi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_divisi' => 'required',
            'lokasi_divisi' => 'required'
        ]);
        
        $nama_divisi = new Divisimodel;
        $nama_divisi->nama_divisi = $validate['nama_divisi'];
        $nama_divisi->lokasi_divisi = $validate['lokasi_divisi'];
        $nama_divisi->save();
        
        return redirect()->route('divisi.index');
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
    public function edit(Divisimodel $nama_divisi)
    {
        $nama_divisi = Divisimodel::all();
        return view('ajicorp.content.folderdivisi.Editdivisi', compact('nama_divisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Divisimodel $nama_divisi)
    {
        
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
