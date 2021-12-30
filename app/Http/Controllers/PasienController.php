<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pasien= pasien::all();
        return view('pasien.index', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
             'id_dokter' => 'required',
            'nama_pasien' => 'required',
            'gender' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
             ]);
        $pasien = new pasien;
        $pasien->id_dokter = $request->id_dokter;
        $pasien->nama_pasien = $request->nama_pasien;
        $pasien->gender = $request->gender;
        $pasien->tgl_lahir = $request->tgl_lahir;
        $pasien->alamat = $request->alamat;
        $pasien->no_hp = $request->no_hp;
        $pasien->save();
         return redirect()->route('pasien.index');
         }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $pasien = pasien::findOrFail($id);
        return view('pasien.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $pasien = pasien::findOrFail($id);
        return view('pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $validated = $request->validate([
            'id_dokter' => 'required',
            'nama_pasien' => 'required',
            'gender' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        $pasien = pasien::findOrFail($id);
        $pasien->id_dokter = $request->id_dokter;
        $pasien->nama_pasien = $request->nama_pasien;
        $pasien->gender = $request->gender;
        $pasien->tgl_lahir = $request->tgl_lahir;
        $pasien->alamat = $request->alamat;
        $pasien->no_hp = $request->no_hp;
        $pasien->save();
        return redirect()->route('pasien.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $pasien = pasien::findOrFail($id);
        $pasien->delete();
        return redirect()->route('pasien.index');
    }
}
