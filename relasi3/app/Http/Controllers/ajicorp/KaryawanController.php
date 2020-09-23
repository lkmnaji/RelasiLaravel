<?php

namespace App\Http\Controllers\ajicorp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Divisimodel;
use App\Statusmodel;
use App\Jabatanmodel;
use App\Karyawanmodel;
use App\hobi;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_karyawan = Karyawanmodel::all();
        return view ('ajicorp.content.folderkaryawan.indexkaryawan',compact('data_karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan_karyawan = Jabatanmodel::all();
        $nama_divisi = Divisimodel::all();
        $status_karyawan = Statusmodel::all();
        $daftar_hobi = hobi::all();
        return view('ajicorp.content.folderkaryawan.inputkaryawan',compact('jabatan_karyawan','nama_divisi','status_karyawan','daftar_hobi'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nomor_induk' => 'required',
            'nama_karyawan' => 'required',
            'alamat_karyawan' => 'required',
            'nomor_telepon' => 'required',
            'jabatan_id' => 'required',
            'divisi_id' => 'required',
            'status_id' => 'required'
        ]);

        $karyawan = Karyawanmodel::create($validasi);

        $karyawan->save();
        $karyawan->hobi()->attach($request->hobi);

        return redirect()->route('karyawan.index');

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
    public function edit(Karyawanmodel $karyawan)
    {
        $karyawan->find($karyawan->id)->all();
        $jabatan_karyawan = Jabatanmodel::all();
        $nama_divisi = Divisimodel::all();
        $status_karyawan = Statusmodel::all();
        $hobi = hobi::all();
        // $karyawan->jabatan = $karyawan->karyawan_jabatan->jabatan_id;
        // $karyawan->divisi = $karyawan->karyawan_divisi->_id;
        // $karyawan->jabatan = $karyawan->karyawan_jabatan->jabatan_id;
        return view('ajicorp.content.folderkaryawan.editkaryawan',compact('jabatan_karyawan','nama_divisi','status_karyawan','karyawan','hobi'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawanmodel $karyawan)
    {
        $validasi = $request->validate([
            'nomor_induk' => 'required',
            'nama_karyawan' => 'required',
            'alamat_karyawan' => 'required',
            'nomor_telepon' => 'required',
            'jabatan_id' => 'required',
            'divisi_id' => 'required',
            'status_id' => 'required'
        ]);

        $karyawan->update($validasi);
        $karyawan->hobi()->sync($request->hobi);
        // $karyawan->save();

        return redirect()->route('karyawan.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawanmodel $karyawan)
    {
        $karyawan->delete();

        return redirect()->route('karyawan.index');
    }
}
