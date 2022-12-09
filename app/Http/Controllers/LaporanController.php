<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Session;

class LaporanController extends Controller
{
    public function home()
    {
        $laporan = Laporan::orderBy('created_at', 'desc')->get();
        return view('admin.laporan.index', compact('laporan'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'keterangan' => 'required'
        ]);

        $laporan = new Laporan();
        $laporan->nama = $request->nama;
        $laporan->email = $request->email;
        $laporan->alamat = $request->alamat;
        $laporan->keterangan = $request->keterangan;
        $laporan->save();
        Session::flash('success', 'Berhasil ditambah');
        return redirect()->route('laporan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'keterangan' => 'required'
        ]);

        $laporan->nama = $request->nama;
        $laporan->email = $request->email;
        $laporan->alamat = $request->alamat;
        $laporan->keterangan = $request->keterangan;
        $laporan->save();
        Session::flash('edit', 'Berhasil diubah');
        return redirect()->route('laporan.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        $laporan->delete();
        Session::flash('delete', 'Berhasil dihapus');
        return redirect()->route('laporan.home');
    }
}
