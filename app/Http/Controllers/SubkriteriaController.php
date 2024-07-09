<?php

namespace App\Http\Controllers;

use App\Models\subkriteria;
use App\Models\kriteria;
use Illuminate\Http\Request;

class SubkriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriteria = kriteria::with('subkriteria')->get();
        $subkriteriaCounts = [];

        foreach ($kriteria as $k) {
            $subkriteriaCounts[$k->kode_kriteria] = subkriteria::where('kode_kriteria', $k->kode_kriteria)->count();
        }

        return view('subkriteria.index', compact('subkriteriaCounts', 'kriteria'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subkriteria = subkriteria::get();
        $kriteria = kriteria::get();

        return view('subkriteria.create', compact(
            'subkriteria',
            'kriteria'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nama_subkriteria' => $request->nama_subkriteria,
            'bobot_subkriteria' => $request->bobot_subkriteria,
            'kode_kriteria' => $request->kode_kriteria,
        ];
        subkriteria::create($data);
        return redirect()->route('subkriteria')->with('success', 'Subkriteria berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($kode_kriteria)
    {
        $kriteria =  kriteria::find($kode_kriteria);
        $subkriteria = subkriteria::where('kode_kriteria', $kode_kriteria)->get();
        return view('subkriteria.detail', compact('kriteria', 'subkriteria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(subkriteria $id)
    {
        $subkriteria = subkriteria::find($id);
        return view('subkriteria.edit')->with('subkriteria', $subkriteria);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $subkriteria = subkriteria::find($id);
        $data = [
            'nama_subkriteria' => $request->nama_subkriteria,
            'bobot_subkriteria' => $request->bobot_subkriteria,
            'kode_kriteria' => $request->kode_kriteria,
        ];
        $subkriteria->update($data);

        $kode_kriteria = $subkriteria->kode_kriteria;
        return redirect()->route('subkriteria.detail', $kode_kriteria)->with('success', 'Subkriteria berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $subkriteria = subkriteria::find($id);
        $kode_kriteria = $subkriteria->kode_kriteria;
        $subkriteria->delete();
        return redirect()->route('subkriteria.detail', $kode_kriteria)->with('success', 'Data berhasil dihapus');
    }
}
