<?php

namespace App\Http\Controllers;

use App\Models\alternatif;
use App\Models\kriteria;
use App\Models\nilaiAlt;
use App\Models\subkriteria;
use Illuminate\Http\Request;

class NilaiAltController extends Controller
{
    public function index()
    {
        $alternatif = alternatif::with('nilai_alt')->get();
        $kriteria = kriteria::get();
        $nilai_alt = nilaiAlt::all();
        $subkriteria = subkriteria::get();

        foreach ($nilai_alt as $nilai) {
            $subkriteria = subkriteria::find($nilai->value);
            if ($subkriteria) {
                $nilai->value = $subkriteria->nama_subkriteria;
            }
        }

        return view('nilai_alternatif.index', compact(
            'nilai_alt',
            'alternatif',
            'kriteria',
            'subkriteria'
        ));
    }

    public function create()
    {
        $nilai_alt = nilaiAlt::get();
        $alternatif = alternatif::get();
        $kriteria = kriteria::get();
        $subkriteria = subkriteria::get();

        return view('nilai_alternatif.create', compact(
            'nilai_alt',
            'alternatif',
            'kriteria',
            'subkriteria'
        ));
    }

    public function store(Request $request)
    {

        $kriteria = kriteria::get();

        // dd($request->all());

        foreach ($kriteria as $k) {
            $nilaiAlt = new nilaiAlt;
            $nilaiAlt->alternatif_id = $request->get('alternatif_id');
            $nilaiAlt->kriteria_id = $request->get('kriteria_id' . $k->kode_kriteria);
            $nilaiAlt->subkriteria_id = $request->get('value' . $k->kode_kriteria);
            $subkriteria = subkriteria::find($request->get('value' . $k->kode_kriteria));
            $nilaiAlt->value = $subkriteria->bobot_subkriteria;


            $nilaiAlt->save();
        }

        return redirect()->route('nilaialternatif')->with('success', 'Data berhasil disimpan');
    }

    public function edit($alternatif_id)
    {
        $nilai_alt = nilaiAlt::where('alternatif_id', $alternatif_id)->first();
        $nilai = nilaiAlt::all();

        if (!$nilai_alt) {
            return redirect()->route('nilaialternatif')->with('warning', 'Data tidak ditemukan');
        }

        $alternatif = alternatif::get();
        $kriteria = kriteria::get();
        $subkriteria = subkriteria::get();

        // return view('nilai_alternatif.edit', compact(
        //     'nilai_alt',
        //     'alternatif',
        //     'kriteria',
        //     'subkriteria',
        //     'nilai'
        // ));
    }

    public function update(Request $request, $alternatif_id)
    {
        $kriteria = kriteria::all();
        foreach ($kriteria as $krit) {
            $nilai_alt = nilaiAlt::where('alternatif_id', $alternatif_id)->where('kriteria_id', $krit->kode_kriteria)->first();
            $subkrieria = subkriteria::find($request->get('value' . $krit->kode_kriteria));
            if (!$nilai_alt) {
                return redirect()->route('alternatif_id')->with('error', 'Nilai Alternatif tidak ditemukan');
            }
            $nilai_alt->update([
                'subkriteria_id' => $request->get('value' . $krit->kode_kriteria),
                'value' => $subkrieria->bobot_subkriteria
            ]);
        }

        return redirect()->route('nilaialternatif')->with('success', 'Berhasil Mengupdate Nilai Alternatif');
    }
}