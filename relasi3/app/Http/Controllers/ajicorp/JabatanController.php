<?php

namespace App\Http\Controllers\ajicorp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jabatanmodel;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_jabatan = Jabatanmodel::all();
        return view('ajicorp.content.folderjabatan.indexjabatan',compact('data_jabatan')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ajicorp.content.folderjabatan.inputjabatan');
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
            'jabatan_karyawan' => 'required',
            'gaji_jabatan' => 'required'
        ]);
        
        $jabatan_karyawan = new Jabatanmodel;
        $jabatan_karyawan->jabatan_karyawan = $validate['jabatan_karyawan'];
        $jabatan_karyawan->gaji_jabatan = $validate['gaji_jabatan'];
        $jabatan_karyawan->save();
        
        return redirect()->route('jabatan.index');
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
