@extends('layouts.app')

@section('title', 'Keterangan Kriteria')
@section('contents')
    <div class="card shadow mt-4">
        <div class="card-header">
            <h4 class="font-weight-bold text-primary">Data Keterangan Kriteria</h4>
        </div>
        <div class="card-body" style="margin-top: -25p">
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center" id="DataTable" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kriteria</th>
                            <th class="text-start">Jumlah Keterangan Kriteria</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kriteria as $subkrit)
                            <tr>
                                <td>{{ $subkrit->kode_kriteria }}</td>
                                <td>{{ $subkrit->nama_kriteria }}</td>
                                <td class="text-center">{{ $subkriteriaCounts[$subkrit->kode_kriteria] }}</td>
                                <td>
                                    <div class="d-flex gap-2 justify-content-center">
                                        @if (auth()->user()->role == 'admin')
                                            <a class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#createSubkriteria-{{ $subkrit->kode_kriteria }}"><i
                                                    class="bi bi-shield-plus" style="font-size: 16px"></i></a>
                                            @include('subkriteria.create')
                                        @endif

                                        <a href="{{ route('subkriteria.detail', $subkrit->kode_kriteria) }}"
                                            class="detail btn btn-warning"><i class="bi-eye" style="font-size: 16px"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
