@extends('layouts.app')

@section('title', 'Nilai Alternatif')
@section('contents')
    <div class="card shadow mt-4">
        <div class="card-header">
            <h4 class="font-weight-bold text-primary">Data Nilai Alternatif</h4>
        </div>
        <div class="card-body" style="margin-top: -25p">
            {{-- tambah alternatif --}}
            @if (auth()->user()->role == 'admin')
                <a data-bs-toggle="modal" data-bs-target="#createNilaiAlternatif" class="btn btn-primary mb-3 ml-3">Tambah
                    Nilai
                    Alternatif</a>
            @endif

            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center" id="DataTable" width="100%">
                    <thead>
                        <tr>
                            <th>Kode Alternatif</th>
                            <th>Nama Alternatif</th>
                            @foreach ($kriteria as $krit)
                                <td>{{ $krit->kode_kriteria_as_string }}</td>
                            @endforeach
                            @if (auth()->user()->role == 'admin')
                                <th>Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alternatif as $item)
                            <tr>
                                <td>{{ $item->kode_alternatif_as_string }}</td>
                                <td>{{ $item->nama_alternatif }}</td>
                                @foreach ($kriteria as $k)
                                    <td>
                                        {{-- Menggunakan relasi di model untuk mendapatkan nilai --}}
                                        {{ $item->nilai_alt->where('kriteria_id', $k->kode_kriteria)->first()->subkriteria->nama_subkriteria ?? '-' }}
                                    </td>
                                @endforeach
                                @if (auth()->user()->role == 'admin')
                                    <td>
                                        <a class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#editNilaiAlternatif-{{ $item->kode_alternatif }}"><i
                                                class="bi bi-pencil"></i></a>
                                        @include('nilai_alternatif.edit')
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @include('nilai_alternatif.create')
    </div>
@endsection
