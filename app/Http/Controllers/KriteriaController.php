<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriteria = kriteria::all();
        return view('kriteria.index')->with('kriteria', $kriteria);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kriteria = kriteria::get();
        return view('kriteria.create')->with('kriteria', $kriteria);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nama_kriteria' => $request->nama_kriteria,
            'bobot_kriteria' => $request->bobot_kriteria,
            'attribute' => $request->attribute,
        ];
        $validasiNama = kriteria::where('nama_kriteria', $request->nama_kriteria)->first();

        if ($validasiNama) {
            return redirect()->route('kriteria')->with('error', 'Tidak bisa tambah data kriteria, karena nama kriteria sudah ada');
        } else {
            kriteria::create($data);
            Alert::toast('Data kriteria berhasil ditambahkan','success');
            return redirect()->route('kriteria');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($kode_kriteria)
    {
        $kriteria = kriteria::find($kode_kriteria);
        return view('kriteria.detail')->with('kriteria', $kriteria);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kode_kriteria)
    {
        $kriteria = kriteria::find($kode_kriteria);
        return view('kriteria.edit')->with('kriteria', $kriteria);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $kode_kriteria)
    {
        $kriteria = kriteria::find($kode_kriteria);

        $data = [
            'nama_kriteria' => $request->nama_kriteria,
            'bobot_kriteria' => $request->bobot_kriteria,
            'attribute' => $request->attribute,
        ];

        $validasiNama = kriteria::where('nama_kriteria', $request->nama_kriteria)->where('kode_kriteria', '!=', $kode_kriteria)->first();

        if ($kriteria->kode_kriteria == $request->kode_kriteria && $kriteria->nama_kriteria == $request->nama_kriteria && $kriteria->bobot_kriteria == $request->bobot_kriteria && $kriteria->attribute == $request->attribute) {
            return redirect()->route('kriteria')->with('error', 'Tidak ada data yang diubah');
        } elseif ($validasiNama) {
            return redirect()->route('kriteria')->with('error', 'Nama Kriteria sudah ada');
        } else {
            $kriteria->update($data);
            return redirect()->route('kriteria')->with('success', 'Data berhasil diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kode_kriteria)
    {
        $kriteria = kriteria::find($kode_kriteria);

        // Delete related records in the `subkriterias` table
        $kriteria->subkriteria()->delete();

        $kriteria->delete();
        return redirect()->route('kriteria')->with('success', 'Data berhasil dihapus');
    }
}
