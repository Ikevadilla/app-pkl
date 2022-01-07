<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $dokter= dokter::all();
        return view('dokter.index', compact('dokter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         {
         $validated = $request->validate([
            'nama_dokter' => 'required',
            'spesialis' => 'required',
            'no_hp' => 'required',
            'gender' => 'required',
             ]);
        $dokter = new dokter;
        $dokter->nama_dokter = $request->nama_dokter;
        $dokter->spesialis = $request->spesialis;
        $dokter->no_hp = $request->no_hp;
        $dokter->gender = $request->gender;
        $dokter->save();
         return redirect()->route('dokter.index');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dokter = dokter::findOrFail($id);
        return view('dokter.show', compact('dokter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $dokter = dokter::findOrFail($id);
        return view('dokter.edit', compact('dokter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_dokter' => 'required',
            'spesialis' => 'required',
            'no_hp' => 'required',
            'gender' => 'required',
        ]);

        $dokter = dokter::findOrFail($id);
        $dokter->nama_dokter = $request->nama_dokter;
        $dokter->spesialis = $request->spesialis;
        $dokter->no_hp = $request->no_hp;
        $dokter->geder = $request->no_hp;
        $dokter->save();
        return redirect()->route('dokter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokter = dokter::findOrFail($id);
        $dokter->delete();
        return redirect()->route('dokter.index');
    }
}
