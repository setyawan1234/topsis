<?php

namespace App\Http\Controllers;

use App\Models\alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alternatif = alternatif::all();
        return view('alternatif.index')->with('alternatif', $alternatif);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alternatif = alternatif::get();
        return view('alternai$alternatif.create')->with('alternai$alternatif', $alternatif);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'kode_alternatif' => $request->kode_alternatif,
            'nama_alternatif' => $request->nama_alternatif,
        ];

        $validasiId = alternatif::where('kode_alternatif', $request->kode_alternatif)->first();
        $validasiNama = alternatif::where('nama_alternatif', $request->nama_alternatif)->first();

        if ($validasiId) {
            return redirect()->route('alternatif')->with('error', 'Kode alternatif sudah ada');
        } elseif ($validasiNama) {
            return redirect()->route('alternatif')->with('error', 'Nama alternatif sudah ada');
        } else {
            alternatif::create($data);
            return redirect()->route('alternatif')->with('success', 'Data berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($kode_alternatif)
    {
        $alternatif = alternatif::find($kode_alternatif);
        return view('alternatif.detail')->with('alternatif', $alternatif);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kode_alternatif)
    {
        $alternatif = alternatif::find($kode_alternatif);
        return view('alternatif.edit')->with('alternatif', $alternatif);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $kode_alternatif)
    {
        $alternatif = alternatif::find($kode_alternatif);

        $data = [
            'kode_alternatif' => $request->kode_alternatif,
            'nama_alternatif' => $request->nama_alternatif,
        ];

        $validasiId = alternatif::where('kode_alternatif', $request->kode_alternatif)->where('kode_alternatif', '!=', $kode_alternatif)->first();
        $validasiNama = alternatif::where('nama_alternatif', $request->nama_alternatif)->where('kode_alternatif', '!=', $kode_alternatif)->first();

        if ($alternatif->kode_alternatif == $request->kode_alternatif && $alternatif->nama_alternatif == $request->nama_alternatif) {
            return redirect()->route('alternatif')->with('error', 'Tidak ada data yang diubah');
        } elseif ($validasiId) {
            return redirect()->route('alternatif')->with('error', 'Kode alternatif sudah ada');
        } elseif ($validasiNama) {
            return redirect()->route('alternatif')->with('error', 'Nama alternatif sudah ada');
        } else {
            $alternatif->update($data);
            return redirect()->route('alternatif')->with('success', 'Data berhasil diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kode_alternatif)
    {
        $alternatif = alternatif::find($kode_alternatif);
        $alternatif->delete();
        return redirect()->route('alternatif')->with('success', 'Data berhasil dihapus');
    }
}
